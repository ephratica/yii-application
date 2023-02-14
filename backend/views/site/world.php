<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = '数据地图';
$this->params['breadcrumbs'][] = $this->title;
?>

<script src="/js/d3.v4.js"></script>
<script src="/js/d3-scale-chromatic.v1.min.js"></script>
<script src="/js/d3-geo-projection.v2.min.js"></script>
<link rel="stylesheet" href="/css/world-map.css">

<div class="site-world-map">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="d-flex align-items-center flex-column">
        <div class="card m-3">
            <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" id="map-refugee" href="#">难民地图</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="map-sanction" href="#">制裁地图</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="map-aid" href="#">援助地图</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="map-cost" href="#">花销地图</a>
            </li>
            </ul>
        </div>
        <svg id="my_dataviz" width="800" height="450"></svg>
    </div>
</div>

<script>
const svg = d3.select("svg"),
width = svg.attr("width"),
height = svg.attr("height"),
worldData = [
    <?php foreach ($countries as $country): ?>
        {'code': "<?= Html::encode("{$country->code}") ?>",
         'number_of_refugees': <?= Html::encode("{$country->number_of_refugees}") ?>,
         'cost': <?= Html::encode("{$country->total_cost_in_billion_euros}") ?>,
         'aid': <?= Html::encode("{$country->aid}") ?>,
         'sanction': <?= Html::encode("{$country->sanction}") ?>,
        },
    <?php endforeach; ?>
];

// style of geographic projection and scaling
const projection = d3.geoRobinson()
    .scale(130)
    .translate([width / 2, height / 2]);

// Define color scale
let colorScale;

// add tooltip
const tooltip = d3.select("body").append("div")
    .attr("class", "tooltip")
    .style("opacity", 0);
let centered, world;
const path = d3.geoPath();
let data = d3.map();
let legendText = "";
let mode = 0;

function refugeeWorldMap() {
    svg.selectAll("*").remove();
    data = d3.map();
    legendText = "难民数量";
    mode = 0;
    for (const d of worldData) {
        data.set(d['code'], d['number_of_refugees']);
    }
    colorScale = d3.scaleThreshold()
                   .domain([1000, 10000, 50000, 100000, 500000, 1000000, 2000000, 3000000])
                   .range(d3.schemeOrRd[9]);
    // Load external data and boot
    d3.queue()
	    .defer(d3.json, "/world.geojson")
	    .await(ready);

    // Add clickable background
    svg.append("rect")
        .attr("class", "background")
	    .attr("width", width)
	    .attr("height", height)
	    .on("click", click);
}

function costWorldMap() {
    svg.selectAll("*").remove();
    data = d3.map();
    legendText = "花销 （百万欧元）";
    mode = 0;
    for (const d of worldData) {
        data.set(d['code'], d['cost']);
    }
    colorScale = d3.scaleThreshold()
                   .domain([0.1, 0.2, 0.3, 0.5, 0.6, 0.7, 1, 5, 8])
                   .range(d3.schemeGreens[9]);
    // Load external data and boot
    d3.queue()
	    .defer(d3.json, "/world.geojson")
	    .await(ready);

    // Add clickable background
    svg.append("rect")
        .attr("class", "background")
	    .attr("width", width)
	    .attr("height", height)
	    .on("click", click);
}

function aidWorldMap() {
    svg.selectAll("*").remove();
    data = d3.map();
    legendText = "援助";
    mode = 1;
    for (const d of worldData) {
        data.set(d['code'], d['aid']);
    }
    colorScale = d3.scaleThreshold()
                   .domain([0.5, 1])
                   .range(["#fde0dd", "#fa9fb5"]);
    // Load external data and boot
    d3.queue()
	    .defer(d3.json, "/world.geojson")
	    .await(ready);

    // Add clickable background
    svg.append("rect")
        .attr("class", "background")
	    .attr("width", width)
	    .attr("height", height)
	    .on("click", click);
}

function sanctionWorldMap() {
    svg.selectAll("*").remove();
    data = d3.map();
    legendText = "制裁";
    mode = 1;
    for (const d of worldData) {
        data.set(d['code'], d['sanction']);
    }
    colorScale = d3.scaleThreshold()
                   .domain([0.5, 1])
                   .range(["#e0ecf4", "#8856a7"]);
    // Load external data and boot
    d3.queue()
	    .defer(d3.json, "/world.geojson")
	    .await(ready);

    // Add clickable background
    svg.append("rect")
        .attr("class", "background")
	    .attr("width", width)
	    .attr("height", height)
	    .on("click", click);
}

refugeeWorldMap();
document.getElementById("map-refugee").className = "nav-link active";

function resetMapNavStyles() {
    document.getElementById("map-refugee").className = "nav-link";
    document.getElementById("map-cost").className = "nav-link";
    document.getElementById("map-aid").className = "nav-link";
    document.getElementById("map-sanction").className = "nav-link";
}

document.getElementById("map-refugee").addEventListener("click", () => {
    refugeeWorldMap();
    resetMapNavStyles();
    document.getElementById("map-refugee").className = "nav-link active";
});

document.getElementById("map-cost").addEventListener("click", () => {
    costWorldMap();
    resetMapNavStyles();
    document.getElementById("map-cost").className = "nav-link active";
});

document.getElementById("map-aid").addEventListener("click", () => {
    aidWorldMap();
    resetMapNavStyles();
    document.getElementById("map-aid").className = "nav-link active";
});

document.getElementById("map-sanction").addEventListener("click", () => {
    sanctionWorldMap();
    resetMapNavStyles();
    document.getElementById("map-sanction").className = "nav-link active";
});


// ----------------------------
//Start of Choropleth drawing
// ----------------------------

function ready(error, topo) {
	// topo is the data received from the d3.queue function (the world.geojson)

	let mouseOver = function(d) {
		d3.selectAll(".Country")
			.transition()
			.duration(200)
			.style("opacity", .5)
			.style("stroke", "transparent");
		d3.select(this)
			.transition()
			.duration(200)
			.style("opacity", 1)
			.style("stroke", "black");
		tooltip.style("left", (d3.event.pageX + 15) + "px")
			.style("top", (d3.event.pageY - 28) + "px")
			.transition().duration(400)
			.style("opacity", 1)
			.text(d.properties.name + ': ' + (mode == 0 ? d.total : (d.total > 0 ? "是" : "否")));
	}

	let mouseLeave = function() {
		d3.selectAll(".Country")
			.transition()
			.duration(200)
			.style("opacity", 1)
			.style("stroke", "transparent");
		tooltip.transition().duration(300)
			.style("opacity", 0);
	}

	// Draw the map
	world = svg.append("g")
    .attr("class", "world");
	world.selectAll("path")
		.data(topo.features)
		.enter()
		.append("path")
		// draw each country
		// d3.geoPath() is a built-in function of d3 v4 and takes care of showing the map from a properly formatted geojson file, if necessary filtering it through a predefined geographic projection
		.attr("d", d3.geoPath().projection(projection))

		//retrieve the name of the country from data
		.attr("data-name", function(d) {
			return d.properties.name
		})

		// set the color of each country
		.attr("fill", function(d) {
			d.total = data.get(d.id) || 0;
			return colorScale(d.total);
		})

		// add a class, styling and mouseover/mouseleave and click functions
		.style("stroke", "transparent")
		.attr("class", function(d) {
			return "Country"
		})
		.attr("id", function(d) {
			return d.id
		})
		.style("opacity", 1)
		.on("mouseover", mouseOver)
		.on("mouseleave", mouseLeave)
		.on("click", click);
  
	// Legend
	const x = d3.scaleLinear()
		.domain([2.6, 75.1])
		.rangeRound([600, 860]);

	const legend = svg.append("g")
		.attr("id", "legend");

	const legend_entry = legend.selectAll("g.legend")
		.data(colorScale.range().map(function(d) {
			d = colorScale.invertExtent(d);
			if (d[0] == null) d[0] = x.domain()[0];
			if (d[1] == null) d[1] = x.domain()[1];
			return d;
		}))
		.enter().append("g")
		.attr("class", "legend_entry");

	const ls_w = 20,
		ls_h = 20;

	legend_entry.append("rect")
		.attr("x", 20)
		.attr("y", function(d, i) {
			return height - (i * ls_h) - 2 * ls_h;
		})
		.attr("width", ls_w)
		.attr("height", ls_h)
		.style("fill", function(d, i) {
            if (i === 0)
                return colorScale(0);
			return colorScale(d[0]);
		})
		.style("opacity", 0.8);

	legend_entry.append("text")
		.attr("x", 50)
		.attr("y", function(d, i) {
			return height - (i * ls_h) - ls_h - 6;
		})
		.text(function(d, i) {
			if (mode == 0) {
                if (i === 0) return "< " + d[1];
			    if (d[1] < d[0]) return d[0];
			    return d[0] + " - " + d[1];
            } else {
                if (i === 0) return "否";
                return "是";
            }
		});

	legend.append("text").attr("x", 15).attr("y", mode == 0 ? 240 : 380).text(legendText);
}
// Zoom functionality
function click(d) {
  var x, y, k;

  if (d && centered !== d) {
    var centroid = path.centroid(d);
    x = -(centroid[0] * 6);
    y = (centroid[1] * 6);
    k = 3;
    centered = d;
  } else {
    x = 0;
    y = 0;
    k = 1;
    centered = null;
  }

  world.selectAll("path")
      .classed("active", centered && function(d) { return d === centered; });

  world.transition()
      .duration(750)
      .attr("transform", "translate(" + x + "," + y + ") scale(" + k + ")" );
  
}
</script>
