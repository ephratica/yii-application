/*
 Navicat Premium Data Transfer

 Source Server         : Roslin
 Source Server Type    : MySQL
 Source Server Version : 80019
 Source Host           : localhost:3306
 Source Schema         : russia_ukraine_war

 Target Server Type    : MySQL
 Target Server Version : 80019
 File Encoding         : 65001

 Date: 10/02/2023 11:15:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for aid
-- ----------------------------
DROP TABLE IF EXISTS `aid`;
CREATE TABLE `aid`  (
  `id` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `country` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NULL DEFAULT NULL,
  `type` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `value` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `country`(`country` ASC) USING BTREE,
  CONSTRAINT `country1` FOREIGN KEY (`country`) REFERENCES `all_countries` (`country`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of aid
-- ----------------------------
INSERT INTO `aid` VALUES ('ATF1', 'Austria', '2022-03-01', 'Financial', 10000000);
INSERT INTO `aid` VALUES ('ATH1', 'Austria', '2022-02-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ATH2', 'Austria', '2022-06-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ATH3', 'Austria', '2022-05-01', 'Humanitarian', 36900000);
INSERT INTO `aid` VALUES ('ATH4', 'Austria', '2022-09-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ATH5', 'Austria', '2022-09-01', 'Humanitarian', 500000000);
INSERT INTO `aid` VALUES ('ATH6', 'Austria', '2022-11-01', 'Humanitarian', 4922621);
INSERT INTO `aid` VALUES ('ATH7', 'Austria', '2022-11-01', 'Humanitarian', 5000000);
INSERT INTO `aid` VALUES ('ATH8', 'Austria', '2022-11-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ATM1', 'Austria', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('AUH1', 'Australia', '2022-03-01', 'Humanitarian', 35000000);
INSERT INTO `aid` VALUES ('AUH2', 'Australia', '2022-03-01', 'Humanitarian', 32600000);
INSERT INTO `aid` VALUES ('AUH3', 'Australia', '2022-03-01', 'Humanitarian', 12000000);
INSERT INTO `aid` VALUES ('AUM1', 'Australia', '2022-03-01', 'Military', 70000000);
INSERT INTO `aid` VALUES ('AUM10', 'Australia', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('AUM2', 'Australia', '2022-03-01', 'Military', 21000000);
INSERT INTO `aid` VALUES ('AUM3', 'Australia', '2022-03-01', 'Military', 25000000);
INSERT INTO `aid` VALUES ('AUM4', 'Australia', '2022-04-01', 'Military', 49000000);
INSERT INTO `aid` VALUES ('AUM5', 'Australia', '2022-04-01', 'Military', 26500000);
INSERT INTO `aid` VALUES ('AUM6', 'Australia', '2022-04-01', 'Military', 26700000);
INSERT INTO `aid` VALUES ('AUM7', 'Australia', '2022-05-01', 'Military', 60900000);
INSERT INTO `aid` VALUES ('AUM8', 'Australia', '2022-07-01', 'Military', 79500000);
INSERT INTO `aid` VALUES ('AUM9', 'Australia', '2022-07-01', 'Military', 8700000);
INSERT INTO `aid` VALUES ('BEF1', 'Belgium', '2022-11-01', 'Financial', 4960000);
INSERT INTO `aid` VALUES ('BEH1', 'Belgium', '2022-03-01', 'Humanitarian', 3400000);
INSERT INTO `aid` VALUES ('BEH2', 'Belgium', '2022-03-01', 'Humanitarian', 230000);
INSERT INTO `aid` VALUES ('BEH3', 'Belgium', '2022-04-01', 'Humanitarian', 83000000);
INSERT INTO `aid` VALUES ('BEH4', 'Belgium', '2022-05-01', 'Humanitarian', 29770000);
INSERT INTO `aid` VALUES ('BEH5', 'Belgium', '2022-07-01', 'Humanitarian', 800000);
INSERT INTO `aid` VALUES ('BEM1', 'Belgium', '2022-02-01', 'Military', 76000000);
INSERT INTO `aid` VALUES ('BEM2', 'Belgium', '2022-08-01', 'Military', 8000000);
INSERT INTO `aid` VALUES ('BEM3', 'Belgium', '2022-09-01', 'Military', 12000000);
INSERT INTO `aid` VALUES ('BGH1', 'Bulgaria', '2022-02-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('BGH2', 'Bulgaria', '2022-04-01', 'Humanitarian', 706000);
INSERT INTO `aid` VALUES ('BGH3', 'Bulgaria', '2022-05-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('BGM1', 'Bulgaria', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('BGM2', 'Bulgaria', '2022-05-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CAF1', 'Canada', '2022-02-01', 'Financial', 500000000);
INSERT INTO `aid` VALUES ('CAF2', 'Canada', '2022-04-01', 'Financial', 1000000000);
INSERT INTO `aid` VALUES ('CAF3', 'Canada', '2022-05-01', 'Financial', 250000000);
INSERT INTO `aid` VALUES ('CAF4', 'Canada', '2022-06-01', 'Financial', 200000000);
INSERT INTO `aid` VALUES ('CAF5', 'Canada', '2022-07-01', 'Financial', 450000000);
INSERT INTO `aid` VALUES ('CAF6', 'Canada', '2022-08-01', 'Financial', 3850000);
INSERT INTO `aid` VALUES ('CAF7', 'Canada', '2022-10-01', 'Financial', 500000000);
INSERT INTO `aid` VALUES ('CAH1', 'Canada', '2022-01-01', 'Humanitarian', 50000000);
INSERT INTO `aid` VALUES ('CAH2', 'Canada', '2022-03-01', 'Humanitarian', 50000000);
INSERT INTO `aid` VALUES ('CAH3', 'Canada', '2022-04-01', 'Humanitarian', 100000000);
INSERT INTO `aid` VALUES ('CAH4', 'Canada', '2022-05-01', 'Humanitarian', 2000000);
INSERT INTO `aid` VALUES ('CAH5', 'Canada', '2022-06-01', 'Humanitarian', 75000000);
INSERT INTO `aid` VALUES ('CAH6', 'Canada', '2022-06-01', 'Humanitarian', 52000000);
INSERT INTO `aid` VALUES ('CAH7', 'Canada', '2022-06-01', 'Humanitarian', 9700000);
INSERT INTO `aid` VALUES ('CAH8', 'Canada', '2022-09-01', 'Humanitarian', 52000000);
INSERT INTO `aid` VALUES ('CAM1', 'Canada', '2022-01-01', 'Military', 340000000);
INSERT INTO `aid` VALUES ('CAM10', 'Canada', '2022-05-01', 'Military', 50000000);
INSERT INTO `aid` VALUES ('CAM11', 'Canada', '2022-06-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CAM12', 'Canada', '2022-10-01', 'Military', 47000000);
INSERT INTO `aid` VALUES ('CAM13', 'Canada', '2022-11-01', 'Military', 500000000);
INSERT INTO `aid` VALUES ('CAM14', 'Canada', '2022-11-01', 'Military', 33000000);
INSERT INTO `aid` VALUES ('CAM2', 'Canada', '2022-02-01', 'Military', 7000000);
INSERT INTO `aid` VALUES ('CAM3', 'Canada', '2022-02-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CAM4', 'Canada', '2022-02-01', 'Military', 25000000);
INSERT INTO `aid` VALUES ('CAM5', 'Canada', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CAM6', 'Canada', '2022-03-01', 'Military', 1000000);
INSERT INTO `aid` VALUES ('CAM7', 'Canada', '2022-03-01', 'Military', 50000000);
INSERT INTO `aid` VALUES ('CAM8', 'Canada', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CAM9', 'Canada', '2022-04-01', 'Military', 500000000);
INSERT INTO `aid` VALUES ('CHH1', 'Switzerland', '2022-03-01', 'Humanitarian', 60000000);
INSERT INTO `aid` VALUES ('CHH2', 'Switzerland', '2022-08-01', 'Humanitarian', 40000000);
INSERT INTO `aid` VALUES ('CHH3', 'Switzerland', '2022-11-01', 'Humanitarian', 100000000);
INSERT INTO `aid` VALUES ('CNH1', 'China', '2022-03-01', 'Humanitarian', 5000000);
INSERT INTO `aid` VALUES ('CNH2', 'China', '2022-03-01', 'Humanitarian', 10000000);
INSERT INTO `aid` VALUES ('CYH1', 'Cyprus', '2022-03-01', 'Humanitarian', 2000000);
INSERT INTO `aid` VALUES ('CYH2', 'Cyprus', '2022-06-01', 'Humanitarian', 500000);
INSERT INTO `aid` VALUES ('CZH1', 'Czech Republic', '2022-02-01', 'Humanitarian', 300000000);
INSERT INTO `aid` VALUES ('CZH2', 'Czech Republic', '2022-03-01', 'Humanitarian', 108000000);
INSERT INTO `aid` VALUES ('CZH3', 'Czech Republic', '2022-03-01', 'Humanitarian', 10000000);
INSERT INTO `aid` VALUES ('CZH4', 'Czech Republic', '2022-03-01', 'Humanitarian', 25000000);
INSERT INTO `aid` VALUES ('CZH5', 'Czech Republic', '2022-04-01', 'Humanitarian', 14000000);
INSERT INTO `aid` VALUES ('CZH6', 'Czech Republic', '2022-05-01', 'Humanitarian', 433000000);
INSERT INTO `aid` VALUES ('CZH7', 'Czech Republic', '2022-06-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('CZH8', 'Czech Republic', '2022-06-01', 'Humanitarian', 100000000);
INSERT INTO `aid` VALUES ('CZM1', 'Czech Republic', '2022-02-01', 'Military', 36600000);
INSERT INTO `aid` VALUES ('CZM10', 'Czech Republic', '2022-03-01', 'Military', 4500000);
INSERT INTO `aid` VALUES ('CZM11', 'Czech Republic', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CZM12', 'Czech Republic', '2022-03-01', 'Military', 857000);
INSERT INTO `aid` VALUES ('CZM13', 'Czech Republic', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CZM14', 'Czech Republic', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CZM15', 'Czech Republic', '2022-04-01', 'Military', 133000000);
INSERT INTO `aid` VALUES ('CZM16', 'Czech Republic', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CZM17', 'Czech Republic', '2022-05-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CZM18', 'Czech Republic', '2022-05-01', 'Military', 30000000);
INSERT INTO `aid` VALUES ('CZM19', 'Czech Republic', '2022-10-01', 'Military', 1801621450);
INSERT INTO `aid` VALUES ('CZM2', 'Czech Republic', '2022-02-01', 'Military', 188106550);
INSERT INTO `aid` VALUES ('CZM20', 'Czech Republic', '2022-10-01', 'Military', 7500000);
INSERT INTO `aid` VALUES ('CZM21', 'Czech Republic', '2022-10-01', 'Military', 413193);
INSERT INTO `aid` VALUES ('CZM22', 'Czech Republic', '2022-11-01', 'Military', 45000000);
INSERT INTO `aid` VALUES ('CZM23', 'Czech Republic', '2022-11-01', 'Military', 41600000);
INSERT INTO `aid` VALUES ('CZM3', 'Czech Republic', '2022-02-01', 'Military', 400000000);
INSERT INTO `aid` VALUES ('CZM4', 'Czech Republic', '2022-03-01', 'Military', 17000000);
INSERT INTO `aid` VALUES ('CZM5', 'Czech Republic', '2022-03-01', 'Military', 31500000);
INSERT INTO `aid` VALUES ('CZM6', 'Czech Republic', '2022-03-01', 'Military', 24000000);
INSERT INTO `aid` VALUES ('CZM7', 'Czech Republic', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('CZM8', 'Czech Republic', NULL, 'Military', 53260000);
INSERT INTO `aid` VALUES ('CZM9', 'Czech Republic', '2022-03-01', 'Military', 30000000);
INSERT INTO `aid` VALUES ('DEF1', 'Germany', '2022-05-01', 'Financial', 150000000);
INSERT INTO `aid` VALUES ('DEF2', 'Germany', '2022-05-01', 'Financial', 1000000000);
INSERT INTO `aid` VALUES ('DEH1', 'Germany', '2022-05-01', 'Humanitarian', 185000000);
INSERT INTO `aid` VALUES ('DEH2', 'Germany', '2022-04-01', 'Humanitarian', 370000000);
INSERT INTO `aid` VALUES ('DEH3', 'Germany', '2022-04-01', 'Humanitarian', 70000000);
INSERT INTO `aid` VALUES ('DEH4', 'Germany', '2022-05-01', 'Humanitarian', 125000000);
INSERT INTO `aid` VALUES ('DEH5', 'Germany', '2022-09-01', 'Humanitarian', 200000000);
INSERT INTO `aid` VALUES ('DEH6', 'Germany', '2022-11-01', 'Humanitarian', 1000000000);
INSERT INTO `aid` VALUES ('DEM1', 'Germany', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('DEM2', 'Germany', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('DKF1', 'Denmark', '2022-03-01', 'Financial', 20000000);
INSERT INTO `aid` VALUES ('DKF2', 'Denmark', '2022-09-01', 'Financial', 37500000);
INSERT INTO `aid` VALUES ('DKH1', 'Denmark', '2022-03-01', 'Humanitarian', 8000000);
INSERT INTO `aid` VALUES ('DKH2', 'Denmark', '2022-03-01', 'Humanitarian', 20000000);
INSERT INTO `aid` VALUES ('DKH3', 'Denmark', '2022-03-01', 'Humanitarian', 10000000);
INSERT INTO `aid` VALUES ('DKH4', 'Denmark', '2022-03-01', 'Humanitarian', 50000000);
INSERT INTO `aid` VALUES ('DKH5', 'Denmark', '2022-03-01', 'Humanitarian', 50000000);
INSERT INTO `aid` VALUES ('DKH6', 'Denmark', '2022-05-01', 'Humanitarian', 155000000);
INSERT INTO `aid` VALUES ('DKH7', 'Denmark', '2022-08-01', 'Humanitarian', 16000000);
INSERT INTO `aid` VALUES ('DKH8', 'Denmark', '2022-10-01', 'Humanitarian', 18200000);
INSERT INTO `aid` VALUES ('DKM1', 'Denmark', '2022-04-01', 'Military', 1000000000);
INSERT INTO `aid` VALUES ('DKM2', 'Denmark', '2022-05-01', 'Military', 1000000000);
INSERT INTO `aid` VALUES ('DKM3', 'Denmark', '2022-08-01', 'Military', 820000000);
INSERT INTO `aid` VALUES ('DKM4', 'Denmark', '2022-09-01', 'Military', 974000000);
INSERT INTO `aid` VALUES ('EEH1', 'Estonia', '2022-07-01', 'Humanitarian', 2070228);
INSERT INTO `aid` VALUES ('EEH2', 'Estonia', '2022-05-01', 'Humanitarian', 2900000);
INSERT INTO `aid` VALUES ('EEM1', 'Estonia', '2022-06-01', 'Military', 240000000);
INSERT INTO `aid` VALUES ('EEM2', 'Estonia', '2022-04-01', 'Military', 5000000);
INSERT INTO `aid` VALUES ('EEM3', 'Estonia', '2022-02-01', 'Military', 5300000);
INSERT INTO `aid` VALUES ('EEM4', 'Estonia', '2022-08-01', 'Military', 7820000);
INSERT INTO `aid` VALUES ('EEM5', 'Estonia', '2022-08-01', 'Military', 10000000);
INSERT INTO `aid` VALUES ('EEM6', 'Estonia', '2022-10-01', 'Military', 61880000);
INSERT INTO `aid` VALUES ('EIF1', 'European Investment Bank', '2022-03-01', 'Financial', 2000000000);
INSERT INTO `aid` VALUES ('EIF2', 'European Investment Bank', '2022-03-01', 'Financial', 2500000);
INSERT INTO `aid` VALUES ('ELH1', 'Greece', '2022-02-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ELH2', 'Greece', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ELH3', 'Greece', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ELH4', 'Greece', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ELM1', 'Greece', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ELM2', 'Greece', '2022-05-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ELM3', 'Greece', '2022-09-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ESF1', 'Spain', '2022-06-01', 'Financial', 100000000);
INSERT INTO `aid` VALUES ('ESF2', 'Spain', '2022-06-01', 'Financial', 100000000);
INSERT INTO `aid` VALUES ('ESH1', 'Spain', '2022-02-01', 'Humanitarian', 150000);
INSERT INTO `aid` VALUES ('ESH2', 'Spain', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ESH3', 'Spain', '2022-03-01', 'Humanitarian', 23000000);
INSERT INTO `aid` VALUES ('ESH4', 'Spain', '2022-04-01', 'Humanitarian', 1161542);
INSERT INTO `aid` VALUES ('ESH5', 'Spain', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ESH6', 'Spain', '2022-06-01', 'Humanitarian', 50000000);
INSERT INTO `aid` VALUES ('ESM1', 'Spain', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ESM10', 'Spain', '2022-11-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ESM2', 'Spain', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ESM3', 'Spain', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ESM4', 'Spain', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ESM5', 'Spain', '2022-06-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ESM6', 'Spain', '2022-07-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ESM7', 'Spain', '2022-08-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ESM8', 'Spain', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ESM9', 'Spain', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('EUF1', 'EU (Commission and Council)', '2022-02-01', 'Financial', 1200000000);
INSERT INTO `aid` VALUES ('EUF2', 'EU (Commission and Council)', '2022-04-01', 'Financial', 120000000);
INSERT INTO `aid` VALUES ('EUF3', 'EU (Commission and Council)', '2022-05-01', 'Financial', 9000000000);
INSERT INTO `aid` VALUES ('EUF4', 'EU (Commission and Council)', '2022-05-01', 'Financial', 18000000000);
INSERT INTO `aid` VALUES ('EUH1', 'EU (Commission and Council)', NULL, 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('EUH2', 'EU (Commission and Council)', '2022-03-01', 'Humanitarian', 415000000);
INSERT INTO `aid` VALUES ('EUH3', 'EU (Commission and Council)', '2022-04-01', 'Humanitarian', 600000000);
INSERT INTO `aid` VALUES ('EUH4', 'EU (Commission and Council)', '2022-05-01', 'Humanitarian', 200000000);
INSERT INTO `aid` VALUES ('EUH5', 'EU (Commission and Council)', '2022-06-01', 'Humanitarian', 205000000);
INSERT INTO `aid` VALUES ('EUH6', 'EU (Commission and Council)', '2022-10-01', 'Humanitarian', 150000000);
INSERT INTO `aid` VALUES ('EUM1', 'European Peace Facility', '2022-02-01', 'Military', 500000000);
INSERT INTO `aid` VALUES ('EUM2', 'European Peace Facility', '2022-03-01', 'Military', 500000000);
INSERT INTO `aid` VALUES ('EUM3', 'European Peace Facility', '2022-04-01', 'Military', 500000000);
INSERT INTO `aid` VALUES ('EUM4', 'European Peace Facility', '2022-05-01', 'Military', 500000000);
INSERT INTO `aid` VALUES ('EUM5', 'European Peace Facility', '2022-07-01', 'Military', 500000000);
INSERT INTO `aid` VALUES ('EUM6', 'European Peace Facility', '2022-10-01', 'Military', 600000000);
INSERT INTO `aid` VALUES ('FIF1', 'Finland', '2022-04-01', 'Financial', 46500000);
INSERT INTO `aid` VALUES ('FIF2', 'Finland', '2022-09-01', 'Financial', 35000000);
INSERT INTO `aid` VALUES ('FIH1', 'Finland', '2022-02-01', 'Humanitarian', 2000000);
INSERT INTO `aid` VALUES ('FIH10', 'Finland', '2022-03-01', 'Humanitarian', 711595);
INSERT INTO `aid` VALUES ('FIH11', 'Finland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FIH12', 'Finland', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FIH13', 'Finland', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FIH14', 'Finland', '2022-07-01', 'Humanitarian', 711595);
INSERT INTO `aid` VALUES ('FIH15', 'Finland', '2022-08-01', 'Humanitarian', 711595);
INSERT INTO `aid` VALUES ('FIH16', 'Finland', '2022-09-01', 'Humanitarian', 35000000);
INSERT INTO `aid` VALUES ('FIH17', 'Finland', '2022-10-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FIH2', 'Finland', '2022-03-01', 'Humanitarian', 711595);
INSERT INTO `aid` VALUES ('FIH3', 'Finland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FIH4', 'Finland', '2022-03-01', 'Humanitarian', 711595);
INSERT INTO `aid` VALUES ('FIH5', 'Finland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FIH6', 'Finland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FIH7', 'Finland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FIH8', 'Finland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FIH9', 'Finland', '2022-03-01', 'Humanitarian', 711595);
INSERT INTO `aid` VALUES ('FIM1', 'Finland', '2022-02-01', 'Military', 29300000);
INSERT INTO `aid` VALUES ('FIM2', 'Finland', '2022-05-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('FIM3', 'Finland', '2022-06-01', 'Military', 54750000);
INSERT INTO `aid` VALUES ('FIM4', 'Finland', '2022-09-01', 'Military', 8250000);
INSERT INTO `aid` VALUES ('FIM5', 'Finland', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('FIM6', 'Finland', '2022-10-01', 'Military', 30000000);
INSERT INTO `aid` VALUES ('FIM7', 'Finland', '2022-11-01', 'Military', 55600000);
INSERT INTO `aid` VALUES ('FRF1', 'France', '2022-02-01', 'Financial', 200000000);
INSERT INTO `aid` VALUES ('FRF2', 'France', '2022-02-01', 'Financial', 300000000);
INSERT INTO `aid` VALUES ('FRF3', 'France', '2022-05-01', 'Financial', 300000000);
INSERT INTO `aid` VALUES ('FRH1', 'France', '2022-03-01', 'Humanitarian', 100000000);
INSERT INTO `aid` VALUES ('FRH10', 'France', '2022-06-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRH11', 'France', '2022-06-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRH12', 'France', '2022-07-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRH13', 'France', '2022-09-01', 'Humanitarian', 9000000);
INSERT INTO `aid` VALUES ('FRH14', 'France', '2022-11-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRH2', 'France', '2022-03-01', 'Humanitarian', 1600000);
INSERT INTO `aid` VALUES ('FRH3', 'France', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRH4', 'France', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRH5', 'France', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRH6', 'France', '2022-05-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRH7', 'France', '2022-05-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRH8', 'France', '2022-05-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRH9', 'France', '2022-06-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('FRM1', 'France', '2022-04-01', 'Military', 100000000);
INSERT INTO `aid` VALUES ('FRM2', 'France', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('FRM3', 'France', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('FRM4', 'France', '2022-05-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('FRM5', 'France', '2022-06-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('FRM6', 'France', '2022-10-01', 'Military', 100000000);
INSERT INTO `aid` VALUES ('FRM7', 'France', '2022-11-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('HRH1', 'Croatia', '2022-02-01', 'Humanitarian', 9100000);
INSERT INTO `aid` VALUES ('HRH2', 'Croatia', '2022-04-01', 'Humanitarian', 1516800);
INSERT INTO `aid` VALUES ('HRH3', 'Croatia', '2022-05-01', 'Humanitarian', 5000000);
INSERT INTO `aid` VALUES ('HRH4', 'Croatia', '2022-06-01', 'Humanitarian', 33000);
INSERT INTO `aid` VALUES ('HRM1', 'Croatia', '2022-02-01', 'Military', 124000000);
INSERT INTO `aid` VALUES ('HUH1', 'Hungary', '2022-02-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('HUH2', 'Hungary', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('HUH3', 'Hungary', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('HUH4', 'Hungary', '2022-03-01', 'Humanitarian', 66000000);
INSERT INTO `aid` VALUES ('HUH5', 'Hungary', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('HUH6', 'Hungary', '2022-05-01', 'Humanitarian', 262000000);
INSERT INTO `aid` VALUES ('HUH7', 'Hungary', '2022-05-01', 'Humanitarian', 37000000);
INSERT INTO `aid` VALUES ('IEH1', 'Ireland', '2022-02-01', 'Humanitarian', 10000000);
INSERT INTO `aid` VALUES ('IEH2', 'Ireland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('IEH3', 'Ireland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('IEH4', 'Ireland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('IEH5', 'Ireland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('IEH6', 'Ireland', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('IEH7', 'Ireland', '2022-04-01', 'Humanitarian', 53000000);
INSERT INTO `aid` VALUES ('IEH8', 'Ireland', '2022-05-01', 'Humanitarian', 500000);
INSERT INTO `aid` VALUES ('IEH9', 'Ireland', '2022-06-01', 'Humanitarian', 2197000);
INSERT INTO `aid` VALUES ('INH1', 'India', '2022-05-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('INH2', 'India', '2022-09-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ITF1', 'Italy', '2022-02-01', 'Financial', 110000000);
INSERT INTO `aid` VALUES ('ITF3', 'Italy', '2022-08-01', 'Financial', 200000000);
INSERT INTO `aid` VALUES ('ITH1', 'Italy', '2022-02-01', 'Humanitarian', 1000000);
INSERT INTO `aid` VALUES ('ITH2', 'Italy', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ITH3', 'Italy', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ITH4', 'Italy', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ITH5', 'Italy', '2022-04-01', 'Humanitarian', 16000000);
INSERT INTO `aid` VALUES ('ITM1', 'Italy', '2022-02-01', 'Military', 150000000);
INSERT INTO `aid` VALUES ('ITM2', 'Italy', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ITM3', 'Italy', '2022-05-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ITM4', 'Italy', '2022-07-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ITM5', 'Italy', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ITM6', 'Italy', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('JPF1', 'Japan', '2022-03-01', 'Financial', 100000000);
INSERT INTO `aid` VALUES ('JPF2', 'Japan', '2022-04-01', 'Financial', 200000000);
INSERT INTO `aid` VALUES ('JPF3', 'Japan', '2022-05-01', 'Financial', 300000000);
INSERT INTO `aid` VALUES ('JPH1', 'Japan', '2022-04-01', 'Humanitarian', 2300000);
INSERT INTO `aid` VALUES ('JPH2', 'Japan', '2022-05-01', 'Humanitarian', 1660000);
INSERT INTO `aid` VALUES ('JPH3', 'Japan', '2022-09-01', 'Humanitarian', 1660000);
INSERT INTO `aid` VALUES ('JPM1', 'Japan', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('JPM2', 'Japan', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('JPM3', 'Japan', '2022-08-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('KOH1', 'South Korea', '2022-02-01', 'Humanitarian', 10000000);
INSERT INTO `aid` VALUES ('KOH2', 'South Korea', '2022-04-01', 'Humanitarian', 30000000);
INSERT INTO `aid` VALUES ('KOH3', 'South Korea', '2022-06-01', 'Humanitarian', 1200000);
INSERT INTO `aid` VALUES ('KOH4', 'South Korea', '2022-06-01', 'Humanitarian', 50000000);
INSERT INTO `aid` VALUES ('KOM1', 'South Korea', '2022-03-01', 'Military', 800000);
INSERT INTO `aid` VALUES ('KOM2', 'South Korea', '2022-04-01', 'Military', 1600000);
INSERT INTO `aid` VALUES ('KOM3', 'South Korea', '2022-05-01', 'Military', 1180000);
INSERT INTO `aid` VALUES ('LTF1', 'Lithuania', '2022-03-01', 'Financial', 5000000);
INSERT INTO `aid` VALUES ('LTH1', 'Lithuania', '2022-02-01', 'Humanitarian', 1800000);
INSERT INTO `aid` VALUES ('LTH2', 'Lithuania', '2022-02-01', 'Humanitarian', 4000000);
INSERT INTO `aid` VALUES ('LTH3', 'Lithuania', '2022-04-01', 'Humanitarian', 34200000);
INSERT INTO `aid` VALUES ('LTH4', 'Lithuania', '2022-05-01', 'Humanitarian', 2000000);
INSERT INTO `aid` VALUES ('LTH5', 'Lithuania', '2022-07-01', 'Humanitarian', 10000000);
INSERT INTO `aid` VALUES ('LTH6', 'Lithuania', '2022-11-01', 'Humanitarian', 5000000);
INSERT INTO `aid` VALUES ('LTM1', 'Lithuania', '2022-03-01', 'Military', 29000000);
INSERT INTO `aid` VALUES ('LTM10', 'Lithuania', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('LTM11', 'Lithuania', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('LTM12', 'Lithuania', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('LTM2', 'Lithuania', '2022-03-01', 'Military', 10000000);
INSERT INTO `aid` VALUES ('LTM3', 'Lithuania', '2022-04-01', 'Military', 61000000);
INSERT INTO `aid` VALUES ('LTM4', 'Lithuania', '2022-05-01', 'Military', 15500000);
INSERT INTO `aid` VALUES ('LTM5', 'Lithuania', '2022-07-01', 'Military', 2000000);
INSERT INTO `aid` VALUES ('LTM6', 'Lithuania', '2022-07-01', 'Military', 25755232);
INSERT INTO `aid` VALUES ('LTM7', 'Lithuania', '2022-07-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('LTM8', 'Lithuania', '2022-09-01', 'Military', 25755232);
INSERT INTO `aid` VALUES ('LTM9', 'Lithuania', '2022-09-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('LUH1', 'Luxembourg', '2022-05-01', 'Humanitarian', 3000000);
INSERT INTO `aid` VALUES ('LUH2', 'Luxembourg', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('LUH3', 'Luxembourg', '2022-05-01', 'Humanitarian', 1000000);
INSERT INTO `aid` VALUES ('LUM1', 'Luxembourg', '2022-02-01', 'Military', 50000000);
INSERT INTO `aid` VALUES ('LUM2', 'Luxembourg', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('LUM3', 'Luxembourg', '2022-04-01', 'Military', 21800698);
INSERT INTO `aid` VALUES ('LVF1', 'Latvia', '2022-03-01', 'Financial', 5000000);
INSERT INTO `aid` VALUES ('LVF2', 'Latvia', '2022-05-01', 'Financial', 10000000);
INSERT INTO `aid` VALUES ('LVH1', 'Latvia', '2022-03-01', 'Humanitarian', 1200000);
INSERT INTO `aid` VALUES ('LVH2', 'Latvia', '2022-03-01', 'Humanitarian', 167417);
INSERT INTO `aid` VALUES ('LVM1', 'Latvia', '2022-04-01', 'Military', 218800000);
INSERT INTO `aid` VALUES ('LVM2', 'Latvia', '2022-07-01', 'Military', 30000000);
INSERT INTO `aid` VALUES ('LVM3', 'Latvia', '2022-08-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('LVM4', 'Latvia', '2022-08-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('MTH1', 'Malta', '2022-03-01', 'Humanitarian', 1150000);
INSERT INTO `aid` VALUES ('NLF1', 'Netherlands', '2022-03-01', 'Financial', 80000000);
INSERT INTO `aid` VALUES ('NLF2', 'Netherlands', '2022-05-01', 'Financial', 200000000);
INSERT INTO `aid` VALUES ('NLF3', 'Netherlands', '2022-08-01', 'Financial', 68500000);
INSERT INTO `aid` VALUES ('NLH1', 'Netherlands', '2022-03-01', 'Humanitarian', 15000000);
INSERT INTO `aid` VALUES ('NLH2', 'Netherlands', '2022-03-01', 'Humanitarian', 1500000);
INSERT INTO `aid` VALUES ('NLH3', 'Netherlands', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('NLH4', 'Netherlands', '2022-05-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('NLH5', 'Netherlands', '2022-05-01', 'Humanitarian', 5000000);
INSERT INTO `aid` VALUES ('NLH6', 'Netherlands', '2022-10-01', 'Humanitarian', 180000000);
INSERT INTO `aid` VALUES ('NLM1', 'Netherlands', '2022-02-01', 'Military', 50000000);
INSERT INTO `aid` VALUES ('NLM2', 'Netherlands', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NLM3', 'Netherlands', '2022-06-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NLM4', 'Netherlands', '2022-06-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NLM5', 'Netherlands', '2022-08-01', 'Military', 10000000);
INSERT INTO `aid` VALUES ('NLM6', 'Netherlands', '2022-11-01', 'Military', 120000000);
INSERT INTO `aid` VALUES ('NOF1', 'Norway', '2022-05-01', 'Financial', 300000000);
INSERT INTO `aid` VALUES ('NOF2', 'Norway', '2022-05-01', 'Financial', 50000000);
INSERT INTO `aid` VALUES ('NOF3', 'Norway', '2022-05-01', 'Financial', 2000000000);
INSERT INTO `aid` VALUES ('NOF4', 'Norway', '2022-05-01', 'Financial', 1000000000);
INSERT INTO `aid` VALUES ('NOH1', 'Norway', '2022-04-01', 'Humanitarian', 265000000);
INSERT INTO `aid` VALUES ('NOH2', 'Norway', '2022-04-01', 'Humanitarian', 100000000);
INSERT INTO `aid` VALUES ('NOH3', 'Norway', '2022-06-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('NOH4', 'Norway', '2022-11-01', 'Humanitarian', 1000000000);
INSERT INTO `aid` VALUES ('NOH5', 'Norway', '2022-11-01', 'Humanitarian', 2000000000);
INSERT INTO `aid` VALUES ('NOM1', 'Norway', '2022-02-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NOM10', 'Norway', '2022-09-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NOM11', 'Norway', '2022-10-01', 'Military', 30666666);
INSERT INTO `aid` VALUES ('NOM12', 'Norway', '2022-09-01', 'Military', 3000000000);
INSERT INTO `aid` VALUES ('NOM2', 'Norway', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NOM3', 'Norway', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NOM4', 'Norway', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NOM5', 'Norway', '2022-04-01', 'Military', 400000000);
INSERT INTO `aid` VALUES ('NOM6', 'Norway', '2022-06-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NOM7', 'Norway', '2022-06-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NOM8', 'Norway', '2022-07-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NOM9', 'Norway', '2022-08-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NZH1', 'New Zealand', '2022-02-01', 'Humanitarian', 2000000);
INSERT INTO `aid` VALUES ('NZH2', 'New Zealand', '2022-02-01', 'Humanitarian', 2000000);
INSERT INTO `aid` VALUES ('NZM1', 'New Zealand', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NZM2', 'New Zealand', '2022-03-01', 'Military', 5000000);
INSERT INTO `aid` VALUES ('NZM4', 'New Zealand', '2022-04-01', 'Military', 4100000);
INSERT INTO `aid` VALUES ('NZM5', 'New Zealand', '2022-04-01', 'Military', 7500000);
INSERT INTO `aid` VALUES ('NZM6', 'New Zealand', '2022-05-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NZM7', 'New Zealand', '2022-06-01', 'Military', 4500000);
INSERT INTO `aid` VALUES ('NZM8', 'New Zealand', '2022-07-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('NZM9', 'New Zealand', '2022-11-01', 'Military', 1850000);
INSERT INTO `aid` VALUES ('PLF1', 'Poland', '2022-02-01', 'Financial', 1000000000);
INSERT INTO `aid` VALUES ('PLF2', 'Poland', '2022-03-01', 'Financial', 30000000);
INSERT INTO `aid` VALUES ('PLH1', 'Poland', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('PLH2', 'Poland', '2022-05-01', 'Humanitarian', 100000000);
INSERT INTO `aid` VALUES ('PLH3', 'Poland', '2022-08-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('PLH4', 'Poland', '2022-04-01', 'Humanitarian', 62105000);
INSERT INTO `aid` VALUES ('PLH5', 'Poland', '2022-11-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('PLM1', 'Poland', '2022-02-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('PLM2', 'Poland', '2022-04-01', 'Military', 1800000000);
INSERT INTO `aid` VALUES ('PLM3', 'Poland', '2022-07-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('PLM4', 'Poland', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('PTF1', 'Portugal', '2022-05-01', 'Financial', 250000000);
INSERT INTO `aid` VALUES ('PTH1', 'Portugal', '2022-03-01', 'Humanitarian', 100000);
INSERT INTO `aid` VALUES ('PTH2', 'Portugal', '2022-05-01', 'Humanitarian', 1100000);
INSERT INTO `aid` VALUES ('PTM1', 'Portugal', '2022-02-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('PTM2', 'Portugal', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('PTM3', 'Portugal', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('PTM4', 'Portugal', '2022-05-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('PTM5', 'Portugal', '2022-05-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('ROH1', 'Romania', '2022-02-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ROH2', 'Romania', '2022-03-01', 'Humanitarian', 5000000);
INSERT INTO `aid` VALUES ('ROH3', 'Romania', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('ROH4', 'Romania', '2022-05-01', 'Humanitarian', 3200000);
INSERT INTO `aid` VALUES ('ROM1', 'Romania', '2022-02-01', 'Military', 3000000);
INSERT INTO `aid` VALUES ('ROM2', 'Romania', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('SEF1', 'Sweden', '2022-03-01', 'Financial', 50000000);
INSERT INTO `aid` VALUES ('SEF2', 'Sweden', '2022-04-01', 'Financial', 44000000);
INSERT INTO `aid` VALUES ('SEF3', 'Sweden', '2022-08-01', 'Financial', 500000000);
INSERT INTO `aid` VALUES ('SEF4', 'Sweden', '2022-11-01', 'Financial', 140000000);
INSERT INTO `aid` VALUES ('SEH1', 'Sweden', '2022-04-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('SEH2', 'Sweden', '2022-05-01', 'Humanitarian', 570000000);
INSERT INTO `aid` VALUES ('SEH3', 'Sweden', '2022-05-01', 'Humanitarian', 230000000);
INSERT INTO `aid` VALUES ('SEH4', 'Sweden', '2022-06-01', 'Humanitarian', 100000000);
INSERT INTO `aid` VALUES ('SEH5', 'Sweden', '2022-09-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('SEH6', 'Sweden', '2022-11-01', 'Humanitarian', 170000000);
INSERT INTO `aid` VALUES ('SEM1', 'Sweden', '2022-02-01', 'Military', 400000000);
INSERT INTO `aid` VALUES ('SEM2', 'Sweden', '2022-02-01', 'Military', 500000000);
INSERT INTO `aid` VALUES ('SEM3', 'Sweden', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('SEM4', 'Sweden', '2022-06-01', 'Military', 262000000);
INSERT INTO `aid` VALUES ('SEM5', 'Sweden', '2022-06-01', 'Military', 578000000);
INSERT INTO `aid` VALUES ('SEM6', 'Sweden', '2022-06-01', 'Military', 60000000);
INSERT INTO `aid` VALUES ('SEM7', 'Sweden', '2022-07-01', 'Military', 577700000);
INSERT INTO `aid` VALUES ('SEM8', 'Sweden', '2022-08-01', 'Military', 500000000);
INSERT INTO `aid` VALUES ('SEM9', 'Sweden', '2022-11-01', 'Military', 3000000000);
INSERT INTO `aid` VALUES ('SIH1', 'Slovenia', '2022-02-01', 'Humanitarian', 163000);
INSERT INTO `aid` VALUES ('SIH2', 'Slovenia', '2022-02-01', 'Humanitarian', 100000);
INSERT INTO `aid` VALUES ('SIH3', 'Slovenia', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('SIH4', 'Slovenia', '2022-04-01', 'Humanitarian', 1640000);
INSERT INTO `aid` VALUES ('SIH5', 'Slovenia', '2022-04-01', 'Humanitarian', 180000);
INSERT INTO `aid` VALUES ('SIM1', 'Slovenia', '2022-06-01', 'Military', 7000000);
INSERT INTO `aid` VALUES ('SIM2', 'Slovenia', '2022-06-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('SIM3', 'Slovenia', '2022-07-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('SIM4', 'Slovenia', '2022-09-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('SKH1', 'Slovakia', '2022-04-01', 'Humanitarian', 5000000);
INSERT INTO `aid` VALUES ('SKM1', 'Slovakia', '2022-02-01', 'Military', 1700000);
INSERT INTO `aid` VALUES ('SKM2', 'Slovakia', '2022-02-01', 'Military', 4500000);
INSERT INTO `aid` VALUES ('SKM3', 'Slovakia', '2022-03-01', 'Military', 32200000);
INSERT INTO `aid` VALUES ('SKM4', 'Slovakia', '2022-02-01', 'Military', 11000000);
INSERT INTO `aid` VALUES ('SKM5', 'Slovakia', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('SKM6', 'Slovakia', '2022-04-01', 'Military', 68000000);
INSERT INTO `aid` VALUES ('SKM7', 'Slovakia', '2022-06-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('SKM8', 'Slovakia', '2022-08-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('TRH1', 'Turkey', '2022-02-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('TRH2', 'Turkey', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('TRH3', 'Turkey', '2022-03-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('TRM1', 'Turkey', '2022-02-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('TRM2', 'Turkey', '2022-08-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('TWH1', 'Taiwan(China)', '2022-04-01', 'Humanitarian', 3000000);
INSERT INTO `aid` VALUES ('TWH10', 'Taiwan(China)', '2022-10-01', 'Humanitarian', 56000000);
INSERT INTO `aid` VALUES ('TWH2', 'Taiwan(China)', '2022-04-01', 'Humanitarian', 5000000);
INSERT INTO `aid` VALUES ('TWH3', 'Taiwan(China)', '2022-06-01', 'Humanitarian', 2000000);
INSERT INTO `aid` VALUES ('TWH4', 'Taiwan(China)', '2022-06-01', 'Humanitarian', 500000);
INSERT INTO `aid` VALUES ('TWH5', 'Taiwan(China)', '2022-06-01', 'Humanitarian', 500000);
INSERT INTO `aid` VALUES ('TWH6', 'Taiwan(China)', '2022-06-01', 'Humanitarian', 500000);
INSERT INTO `aid` VALUES ('TWH7', 'Taiwan(China)', '2022-06-01', 'Humanitarian', 500000);
INSERT INTO `aid` VALUES ('TWH9', 'Taiwan(China)', '2022-06-01', 'Humanitarian', 500000);
INSERT INTO `aid` VALUES ('UKF1', 'United Kingdom', '2022-02-01', 'Financial', 88000000);
INSERT INTO `aid` VALUES ('UKF2', 'United Kingdom', '2022-02-01', 'Financial', 500000000);
INSERT INTO `aid` VALUES ('UKF3', 'United Kingdom', '2022-03-01', 'Financial', 74000000);
INSERT INTO `aid` VALUES ('UKF4', 'United Kingdom', '2022-03-01', 'Financial', 29100000);
INSERT INTO `aid` VALUES ('UKF5', 'United Kingdom', '2022-04-01', 'Financial', 730000000);
INSERT INTO `aid` VALUES ('UKF6', 'United Kingdom', '2022-04-01', 'Financial', 320000000);
INSERT INTO `aid` VALUES ('UKF7', 'United Kingdom', '2022-05-01', 'Financial', 50000000);
INSERT INTO `aid` VALUES ('UKF8', 'United Kingdom', '2022-09-01', 'Financial', 500000000);
INSERT INTO `aid` VALUES ('UKH1', 'United Kingdom', '2022-02-01', 'Humanitarian', 40000000);
INSERT INTO `aid` VALUES ('UKH2', 'United Kingdom', '2022-03-01', 'Humanitarian', 40000000);
INSERT INTO `aid` VALUES ('UKH3', 'United Kingdom', '2022-03-01', 'Humanitarian', 230000000);
INSERT INTO `aid` VALUES ('UKH4', 'United Kingdom', '2022-03-01', 'Humanitarian', 7000000);
INSERT INTO `aid` VALUES ('UKH5', 'United Kingdom', '2022-04-01', 'Humanitarian', 10000000);
INSERT INTO `aid` VALUES ('UKH6', 'United Kingdom', '2022-07-01', 'Humanitarian', 5000000);
INSERT INTO `aid` VALUES ('UKH7', 'United Kingdom', '2022-10-01', 'Humanitarian', NULL);
INSERT INTO `aid` VALUES ('UKH8', 'United Kingdom', '2022-11-01', 'Humanitarian', 10000000);
INSERT INTO `aid` VALUES ('UKM1', 'United Kingdom', '2022-02-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('UKM10', 'United Kingdom', '2022-06-01', 'Military', 1000000000);
INSERT INTO `aid` VALUES ('UKM11', 'United Kingdom', '2022-08-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('UKM12', 'United Kingdom', '2022-10-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('UKM13', 'United Kingdom', '2022-10-01', 'Military', 10000000);
INSERT INTO `aid` VALUES ('UKM14', 'United Kingdom', '2022-11-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('UKM15', 'United Kingdom', '2022-11-01', 'Military', 50000000);
INSERT INTO `aid` VALUES ('UKM2', 'United Kingdom', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('UKM3', 'United Kingdom', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('UKM4', 'United Kingdom', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('UKM5', 'United Kingdom', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('UKM6', 'United Kingdom', '2022-04-01', 'Military', 100000000);
INSERT INTO `aid` VALUES ('UKM7', 'United Kingdom', '2022-04-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('UKM8', 'United Kingdom', '2022-05-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('UKM9', 'United Kingdom', '2022-05-01', 'Military', 1300000000);
INSERT INTO `aid` VALUES ('USF1', 'United States of America', '2022-02-01', 'Financial', 1000000000);
INSERT INTO `aid` VALUES ('USF2', 'United States of America', '2022-03-01', 'Financial', 500000000);
INSERT INTO `aid` VALUES ('USF3', 'United States of America', '2022-04-01', 'Financial', 500000000);
INSERT INTO `aid` VALUES ('USF4', 'United States of America', '2022-05-01', 'Financial', 8006000000);
INSERT INTO `aid` VALUES ('USF5', 'United States of America', '2022-05-01', 'Financial', 500000000);
INSERT INTO `aid` VALUES ('USF6', 'United States of America', '2022-05-01', 'Financial', 100000000);
INSERT INTO `aid` VALUES ('USF7', 'United States of America', '2022-09-01', 'Financial', 4500000000);
INSERT INTO `aid` VALUES ('USH1', 'United States of America', '2022-02-01', 'Humanitarian', 54000000);
INSERT INTO `aid` VALUES ('USH10', 'United States of America', '2022-05-01', 'Humanitarian', 2000000);
INSERT INTO `aid` VALUES ('USH11', 'United States of America', '2022-05-01', 'Humanitarian', 150000000);
INSERT INTO `aid` VALUES ('USH2', 'United States of America', '2022-03-01', 'Humanitarian', 53000000);
INSERT INTO `aid` VALUES ('USH3', 'United States of America', '2022-03-01', 'Humanitarian', 3446000000);
INSERT INTO `aid` VALUES ('USH4', 'United States of America', '2022-03-01', 'Humanitarian', 6100000);
INSERT INTO `aid` VALUES ('USH5', 'United States of America', '2022-03-01', 'Humanitarian', 320000000);
INSERT INTO `aid` VALUES ('USH6', 'United States of America', '2022-03-01', 'Humanitarian', 1000000000);
INSERT INTO `aid` VALUES ('USH7', 'United States of America', '2022-03-01', 'Humanitarian', 100000000);
INSERT INTO `aid` VALUES ('USH8', 'United States of America', '2022-09-01', 'Humanitarian', 457500000);
INSERT INTO `aid` VALUES ('USH9', 'United States of America', '2022-05-01', 'Humanitarian', 4350000000);
INSERT INTO `aid` VALUES ('USM1', 'United States of America', '2022-03-01', 'Military', NULL);
INSERT INTO `aid` VALUES ('USM10', 'United States of America', '2022-09-01', 'Military', 3000000000);
INSERT INTO `aid` VALUES ('USM2', 'United States of America', '2022-05-01', 'Military', 150000000);
INSERT INTO `aid` VALUES ('USM3', 'United States of America', '2022-04-01', 'Military', 322000000);
INSERT INTO `aid` VALUES ('USM4', 'United States of America', '2022-04-01', 'Military', 300000000);
INSERT INTO `aid` VALUES ('USM5', 'United States of America', '2022-05-01', 'Military', 650000000);
INSERT INTO `aid` VALUES ('USM6', 'United States of America', '2022-05-01', 'Military', 600000000);
INSERT INTO `aid` VALUES ('USM9', 'United States of America', '2022-09-01', 'Military', 3700000000);

-- ----------------------------
-- Table structure for all_countries
-- ----------------------------
DROP TABLE IF EXISTS `all_countries`;
CREATE TABLE `all_countries`  (
  `country` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `gdp` double NULL DEFAULT NULL,
  `sanction` tinyint(1) NOT NULL,
  `aid` tinyint(1) NOT NULL,
  `total_cost_in_billion_euros` double NULL DEFAULT NULL,
  `number_of_refugees` bigint NULL DEFAULT NULL,
  `code` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`country`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of all_countries
-- ----------------------------
INSERT INTO `all_countries` VALUES ('Afghanistan', NULL, 0, 0, 0, 0, 'AFG');
INSERT INTO `all_countries` VALUES ('Albania', NULL, 0, 0, 0, 2342, 'ALB');
INSERT INTO `all_countries` VALUES ('Algeria', NULL, 0, 0, 0, 0, 'DZA');
INSERT INTO `all_countries` VALUES ('Andorra', NULL, 0, 0, 0, 0, 'AND');
INSERT INTO `all_countries` VALUES ('Angola', NULL, 0, 0, 0, 0, 'AGO');
INSERT INTO `all_countries` VALUES ('Antigua and Barbuda', NULL, 0, 0, 0, 0, 'ATG');
INSERT INTO `all_countries` VALUES ('Argentina', NULL, 0, 0, 0, 0, 'ARG');
INSERT INTO `all_countries` VALUES ('Armenia', NULL, 0, 0, 0, 486, 'ARM');
INSERT INTO `all_countries` VALUES ('Australia', 0.3204, 1, 0, 0, 0, 'AUS');
INSERT INTO `all_countries` VALUES ('Austria', 0.5801, 1, 1, 0.35, 91631, 'AUT');
INSERT INTO `all_countries` VALUES ('Azerbaijan', NULL, 0, 0, 0, 3944, 'AZE');
INSERT INTO `all_countries` VALUES ('Bahrain', NULL, 0, 0, 0, 0, 'BHR');
INSERT INTO `all_countries` VALUES ('Bangladesh', NULL, 0, 0, 0, 0, 'BGD');
INSERT INTO `all_countries` VALUES ('Barbados', NULL, 0, 0, 0, 0, 'BRB');
INSERT INTO `all_countries` VALUES ('Belarus', NULL, 0, 0, 0, 19329, 'BLR');
INSERT INTO `all_countries` VALUES ('Belgium', 0.2182, 1, 0, 0.25, 66416, 'BEL');
INSERT INTO `all_countries` VALUES ('Belize', NULL, 0, 1, 0, 0, 'BLZ');
INSERT INTO `all_countries` VALUES ('Benin', NULL, 0, 0, 0, 0, 'BEN');
INSERT INTO `all_countries` VALUES ('Bhutan', NULL, 0, 0, 0, 0, 'BTN');
INSERT INTO `all_countries` VALUES ('Bolivia', NULL, 0, 0, 0, 0, 'BOL');
INSERT INTO `all_countries` VALUES ('Bosnia and Herzegovina', NULL, 0, 0, 0, 149, 'BIH');
INSERT INTO `all_countries` VALUES ('Botswana', NULL, 0, 0, 0, 0, 'BWA');
INSERT INTO `all_countries` VALUES ('Brazil', NULL, 0, 0, 0, 0, 'BRA');
INSERT INTO `all_countries` VALUES ('Brunei', NULL, 0, 0, 0, 0, 'BRN');
INSERT INTO `all_countries` VALUES ('Bulgaria', 0.0045, 1, 0, 0.59, 50325, 'BGR');
INSERT INTO `all_countries` VALUES ('Burkina Faso', NULL, 0, 0, 0, 0, 'BFA');
INSERT INTO `all_countries` VALUES ('Burundi', NULL, 0, 0, 0, 0, 'BDI');
INSERT INTO `all_countries` VALUES ('Cambodia', NULL, 0, 0, 0, 0, 'KHM');
INSERT INTO `all_countries` VALUES ('Cameroon', NULL, 0, 0, 0, 0, 'CMR');
INSERT INTO `all_countries` VALUES ('Canada', 3.7836, 1, 0, 0, 0, 'CAN');
INSERT INTO `all_countries` VALUES ('Cape Verde', NULL, 0, 1, 0, 0, 'CPV');
INSERT INTO `all_countries` VALUES ('Central African Republic', NULL, 0, 0, 0, 0, 'CAF');
INSERT INTO `all_countries` VALUES ('Chad', NULL, 0, 0, 0, 0, 'TCD');
INSERT INTO `all_countries` VALUES ('Chile', NULL, 0, 0, 0, 0, 'CHL');
INSERT INTO `all_countries` VALUES ('China', 0.0021, 0, 0, 0, 0, 'CHN');
INSERT INTO `all_countries` VALUES ('Colombia', NULL, 0, 0, 0, 0, 'COL');
INSERT INTO `all_countries` VALUES ('Comoros', NULL, 0, 0, 0, 0, 'COM');
INSERT INTO `all_countries` VALUES ('Congo', NULL, 0, 0, 0, 0, 'COG');
INSERT INTO `all_countries` VALUES ('Costa Rica', NULL, 0, 0, 0, 0, 'CRI');
INSERT INTO `all_countries` VALUES ('Côte d\'Ivoire', NULL, 0, 0, 0, 0, 'CIV');
INSERT INTO `all_countries` VALUES ('Croatia', 0.2229, 1, 0, 0.08, 20164, 'HRV');
INSERT INTO `all_countries` VALUES ('Cuba', NULL, 0, 1, 0, 0, 'CUB');
INSERT INTO `all_countries` VALUES ('Cyprus', 0.0025, 1, 0, 0.07, 15158, 'CYP');
INSERT INTO `all_countries` VALUES ('Czech Republic', 0.5867, 1, 0, 1.86, 482049, 'CZE');
INSERT INTO `all_countries` VALUES ('Democratic Republic of Congo', NULL, 0, 1, 0, 0, 'COD');
INSERT INTO `all_countries` VALUES ('Denmark', 0.6411, 1, 0, 0.14, 39395, 'DNK');
INSERT INTO `all_countries` VALUES ('Djibouti', NULL, 0, 0, 0, 0, 'DJI');
INSERT INTO `all_countries` VALUES ('Dominica', NULL, 0, 1, 0, 0, 'DMA');
INSERT INTO `all_countries` VALUES ('Dominican Republic', NULL, 0, 0, 0, 0, 'DOM');
INSERT INTO `all_countries` VALUES ('Ecuador', NULL, 0, 0, 0, 0, 'ECU');
INSERT INTO `all_countries` VALUES ('Egypt', NULL, 0, 0, 0, 0, 'EGY');
INSERT INTO `all_countries` VALUES ('El Salvador', NULL, 0, 0, 0, 0, 'SLV');
INSERT INTO `all_countries` VALUES ('Equatorial Guinea', NULL, 0, 0, 0, 0, 'GNQ');
INSERT INTO `all_countries` VALUES ('Eritrea', NULL, 0, 0, 0, 0, 'ERI');
INSERT INTO `all_countries` VALUES ('Estonia', 0.335, 1, 0, 0.15, 66074, 'EST');
INSERT INTO `all_countries` VALUES ('Ethiopia', NULL, 0, 0, 0, 0, 'ETH');
INSERT INTO `all_countries` VALUES ('EU (Commission and Council)', NULL, 1, 1, 0, 0, 'UNK1');
INSERT INTO `all_countries` VALUES ('European Investment Bank', NULL, 1, 1, 0, 0, 'UNK2');
INSERT INTO `all_countries` VALUES ('European Peace Facility', NULL, 1, 1, 0, 0, 'UNK3');
INSERT INTO `all_countries` VALUES ('Fiji', NULL, 0, 0, 0, 0, 'FJI');
INSERT INTO `all_countries` VALUES ('Finland', 0.3056, 1, 0, 0.18, 47067, 'FIN');
INSERT INTO `all_countries` VALUES ('France', 1.4142, 1, 0, 0.48, 118994, 'FRA');
INSERT INTO `all_countries` VALUES ('Gabon', NULL, 0, 1, 0, 0, 'GAB');
INSERT INTO `all_countries` VALUES ('Georgia', NULL, 1, 1, 0, 25101, 'GEO');
INSERT INTO `all_countries` VALUES ('Germany', 5.4449, 1, 0, 4.09, 1021667, 'DEU');
INSERT INTO `all_countries` VALUES ('Ghana', NULL, 0, 0, 0, 0, 'GHA');
INSERT INTO `all_countries` VALUES ('Greece', 0.1912, 1, 1, 0.08, 20955, 'GRC');
INSERT INTO `all_countries` VALUES ('Greenland (Den.)', NULL, 1, 0, 0, 0, 'GRL');
INSERT INTO `all_countries` VALUES ('Grenada', NULL, 0, 1, 0, 0, 'GRD');
INSERT INTO `all_countries` VALUES ('Guatemala', NULL, 0, 0, 0, 0, 'GTM');
INSERT INTO `all_countries` VALUES ('Guinea', NULL, 0, 0, 0, 0, 'GIN');
INSERT INTO `all_countries` VALUES ('Guinea-Bissau', NULL, 0, 0, 0, 0, 'GNB');
INSERT INTO `all_countries` VALUES ('Guyana', NULL, 0, 0, 0, 0, 'GUY');
INSERT INTO `all_countries` VALUES ('Haiti', NULL, 0, 0, 0, 0, 'HTI');
INSERT INTO `all_countries` VALUES ('Honduras', NULL, 0, 0, 0, 0, 'HND');
INSERT INTO `all_countries` VALUES ('Hong Kong(China)', NULL, 0, 0, 0, 0, 'HKG');
INSERT INTO `all_countries` VALUES ('Hungary', 0.0467, 1, 0, 0.13, 33603, 'HUN');
INSERT INTO `all_countries` VALUES ('Iceland', NULL, 1, 0, 0, 2239, 'ISL');
INSERT INTO `all_countries` VALUES ('India', 0.0019, 0, 0, 0, 0, 'IND');
INSERT INTO `all_countries` VALUES ('Indonesia', NULL, 0, 0, 0, 0, 'IDN');
INSERT INTO `all_countries` VALUES ('Iran', NULL, 0, 0, 0, 0, 'IRN');
INSERT INTO `all_countries` VALUES ('Iraq', NULL, 0, 0, 0, 0, 'IRQ');
INSERT INTO `all_countries` VALUES ('Ireland', 0.0687, 1, 0, 0.26, 71597, 'IRL');
INSERT INTO `all_countries` VALUES ('Israel', NULL, 0, 0, 0, 0, 'ISR');
INSERT INTO `all_countries` VALUES ('Italy', 0.6725, 1, 0, 0.66, 167925, 'ITA');
INSERT INTO `all_countries` VALUES ('Jamaica', NULL, 0, 0, 0, 0, 'JAM');
INSERT INTO `all_countries` VALUES ('Japan', 0.606, 1, 1, 0, 0, 'JPN');
INSERT INTO `all_countries` VALUES ('Jordan', NULL, 0, 0, 0, 0, 'JOR');
INSERT INTO `all_countries` VALUES ('Kazakhstan', NULL, 0, 0, 0, 0, 'KAZ');
INSERT INTO `all_countries` VALUES ('Kenya', NULL, 0, 0, 0, 0, 'KEN');
INSERT INTO `all_countries` VALUES ('Kiribati', NULL, 0, 0, 0, 0, 'KIR');
INSERT INTO `all_countries` VALUES ('Kosovo', NULL, 0, 0, 0, 0, 'XXK');
INSERT INTO `all_countries` VALUES ('Kuwait', NULL, 0, 0, 0, 0, 'KWT');
INSERT INTO `all_countries` VALUES ('Kyrgyzstan', NULL, 0, 0, 0, 0, 'KGZ');
INSERT INTO `all_countries` VALUES ('Laos', NULL, 0, 0, 0, 0, 'LAO');
INSERT INTO `all_countries` VALUES ('Latvia', 0.3135, 1, 0, 0.17, 35212, 'LVA');
INSERT INTO `all_countries` VALUES ('Lebanon', NULL, 0, 0, 0, 0, 'LBN');
INSERT INTO `all_countries` VALUES ('Lesotho', NULL, 0, 1, 0, 0, 'LSO');
INSERT INTO `all_countries` VALUES ('Liberia', NULL, 0, 0, 0, 0, 'LBR');
INSERT INTO `all_countries` VALUES ('Libya', NULL, 0, 0, 0, 0, 'LBY');
INSERT INTO `all_countries` VALUES ('Liechtenstein', NULL, 1, 0, 0, 405, 'LIE');
INSERT INTO `all_countries` VALUES ('Lithuania', 0.2607, 1, 0, 0.28, 73040, 'LTU');
INSERT INTO `all_countries` VALUES ('Luxembourg', 0.076, 1, 0, 0.03, 6756, 'LUX');
INSERT INTO `all_countries` VALUES ('Macau(China)', NULL, 0, 1, 0, 0, 'MAC');
INSERT INTO `all_countries` VALUES ('Madagascar', NULL, 0, 1, 0, 0, 'MDG');
INSERT INTO `all_countries` VALUES ('Malawi', NULL, 0, 0, 0, 0, 'MWI');
INSERT INTO `all_countries` VALUES ('Malaysia', NULL, 0, 0, 0, 0, 'MYS');
INSERT INTO `all_countries` VALUES ('Maldives', NULL, 0, 0, 0, 0, 'MDv');
INSERT INTO `all_countries` VALUES ('Mali', NULL, 0, 0, 0, 0, 'MLI');
INSERT INTO `all_countries` VALUES ('Malta', 0.0012, 1, 0, 0.01, 1603, 'MLT');
INSERT INTO `all_countries` VALUES ('Marshall Islands', NULL, 0, 0, 0, 0, 'MHL');
INSERT INTO `all_countries` VALUES ('Mauritania', NULL, 0, 0, 0, 0, 'MRT');
INSERT INTO `all_countries` VALUES ('Mauritius', NULL, 0, 0, 0, 0, 'MUS');
INSERT INTO `all_countries` VALUES ('Mexico', NULL, 0, 0, 0, 0, 'MEX');
INSERT INTO `all_countries` VALUES ('Micronesia', NULL, 0, 0, 0, 0, 'FSM');
INSERT INTO `all_countries` VALUES ('Moldova', NULL, 0, 0, 0, 102283, 'MDA');
INSERT INTO `all_countries` VALUES ('Monaco', NULL, 1, 0, 0, 0, 'MCO');
INSERT INTO `all_countries` VALUES ('Mongolia', NULL, 0, 0, 0, 0, 'MNG');
INSERT INTO `all_countries` VALUES ('Montenegro', NULL, 1, 0, 0, 32880, 'MNE');
INSERT INTO `all_countries` VALUES ('Morocco', NULL, 0, 0, 0, 0, 'MAR');
INSERT INTO `all_countries` VALUES ('Mozambique', NULL, 0, 0, 0, 0, 'MOZ');
INSERT INTO `all_countries` VALUES ('Myanmar', NULL, 0, 0, 0, 0, 'MMR');
INSERT INTO `all_countries` VALUES ('Namibia', NULL, 0, 0, 0, 0, 'NAM');
INSERT INTO `all_countries` VALUES ('Nauru', NULL, 0, 0, 0, 0, 'NRU');
INSERT INTO `all_countries` VALUES ('Nepal', NULL, 0, 0, 0, 0, 'NPL');
INSERT INTO `all_countries` VALUES ('Netherlands', 0.8472, 1, 0, 0.32, 85210, 'NLD');
INSERT INTO `all_countries` VALUES ('New Zealand', 0.017, 1, 1, 0, 0, 'NZL');
INSERT INTO `all_countries` VALUES ('Nicaragua', NULL, 0, 0, 0, 0, 'NIC');
INSERT INTO `all_countries` VALUES ('Niger', NULL, 0, 0, 0, 0, 'NER');
INSERT INTO `all_countries` VALUES ('Nigeria', NULL, 0, 0, 0, 0, 'NGA');
INSERT INTO `all_countries` VALUES ('North Korea', NULL, 0, 0, 0, 0, 'PRK');
INSERT INTO `all_countries` VALUES ('North Macedonia', NULL, 1, 1, 0, 6404, 'MKD');
INSERT INTO `all_countries` VALUES ('Norway', 1.2099, 1, 1, 0.13, 37394, 'NOR');
INSERT INTO `all_countries` VALUES ('Oman', NULL, 0, 0, 0, 0, 'OMN');
INSERT INTO `all_countries` VALUES ('Pakistan', NULL, 0, 0, 0, 0, 'PAK');
INSERT INTO `all_countries` VALUES ('Palau', NULL, 0, 0, 0, 0, 'PLW');
INSERT INTO `all_countries` VALUES ('Panama', NULL, 0, 0, 0, 0, 'PAN');
INSERT INTO `all_countries` VALUES ('Papua New Guinea', NULL, 0, 0, 0, 0, 'PNG');
INSERT INTO `all_countries` VALUES ('Paraguay', NULL, 0, 0, 0, 0, 'PRY');
INSERT INTO `all_countries` VALUES ('Peru', NULL, 0, 0, 0, 0, 'PER');
INSERT INTO `all_countries` VALUES ('Philippines', NULL, 0, 0, 0, 0, 'PHL');
INSERT INTO `all_countries` VALUES ('Poland', 3.0006, 1, 1, 6.08, 1563386, 'POL');
INSERT INTO `all_countries` VALUES ('Portugal', 0.3348, 1, 1, 0.21, 57109, 'PRT');
INSERT INTO `all_countries` VALUES ('Qatar', NULL, 0, 0, 0, 0, 'QAT');
INSERT INTO `all_countries` VALUES ('Romania', 0.0108, 1, 0, 0.36, 106644, 'ROU');
INSERT INTO `all_countries` VALUES ('Russia', NULL, 0, 0, 0, 2852395, 'RUS');
INSERT INTO `all_countries` VALUES ('Rwanda', NULL, 0, 0, 0, 0, 'RWA');
INSERT INTO `all_countries` VALUES ('Saint Kitts and Nevis', NULL, 0, 1, 0, 0, 'KNA');
INSERT INTO `all_countries` VALUES ('Saint Lucia', NULL, 0, 0, 0, 0, 'LCA');
INSERT INTO `all_countries` VALUES ('Saint Vincent and the Grenadines', NULL, 0, 0, 0, 0, 'VCT');
INSERT INTO `all_countries` VALUES ('Samoa', NULL, 0, 0, 0, 0, 'ASM');
INSERT INTO `all_countries` VALUES ('San Marino', NULL, 0, 0, 0, 0, 'SMR');
INSERT INTO `all_countries` VALUES ('São Tomé and Príncipe', NULL, 0, 0, 0, 0, 'STP');
INSERT INTO `all_countries` VALUES ('Saudi Arabia', NULL, 0, 0, 0, 0, 'SAU');
INSERT INTO `all_countries` VALUES ('Senegal', NULL, 0, 0, 0, 0, 'SEN');
INSERT INTO `all_countries` VALUES ('Serbia', NULL, 0, 0, 0, 2790, 'SRB');
INSERT INTO `all_countries` VALUES ('Seychelles', NULL, 0, 0, 0, 0, 'SYC');
INSERT INTO `all_countries` VALUES ('Sierra Leone', NULL, 0, 0, 0, 0, 'SLE');
INSERT INTO `all_countries` VALUES ('Singapore', NULL, 1, 0, 0, 0, 'SGP');
INSERT INTO `all_countries` VALUES ('Slovakia', 0.2152, 1, 0, 0.41, 107476, 'SVK');
INSERT INTO `all_countries` VALUES ('Slovenia', 0.0609, 1, 0, 0.03, 9081, 'SVN');
INSERT INTO `all_countries` VALUES ('Solomon Islands', NULL, 0, 0, 0, 0, 'SLB');
INSERT INTO `all_countries` VALUES ('Somalia', NULL, 0, 1, 0, 0, 'SOM');
INSERT INTO `all_countries` VALUES ('South Africa', NULL, 0, 1, 0, 0, 'ZAF');
INSERT INTO `all_countries` VALUES ('South Korea', 0.0944, 1, 0, 0, 0, 'KOR');
INSERT INTO `all_countries` VALUES ('South Sudan', NULL, 0, 0, 0, 0, 'SSD');
INSERT INTO `all_countries` VALUES ('Spain', 0.3821, 1, 0, 0.62, 161012, 'ESP');
INSERT INTO `all_countries` VALUES ('Sri Lanka', NULL, 0, 0, 0, 0, 'LKA');
INSERT INTO `all_countries` VALUES ('Sudan', NULL, 0, 1, 0, 0, 'SDN');
INSERT INTO `all_countries` VALUES ('Suriname', NULL, 0, 0, 0, 0, 'SUR');
INSERT INTO `all_countries` VALUES ('Sweden', 0.8065, 1, 0, 0.19, 50795, 'SWE');
INSERT INTO `all_countries` VALUES ('Switzerland', 0.2028, 1, 0, 0.28, 77450, 'CHE');
INSERT INTO `all_countries` VALUES ('Syria', NULL, 0, 1, 0, 0, 'SYR');
INSERT INTO `all_countries` VALUES ('Taiwan(China)', 0.0683, 1, 0, 0, 0, 'TWN');
INSERT INTO `all_countries` VALUES ('Tajikistan', NULL, 0, 0, 0, 0, 'TJK');
INSERT INTO `all_countries` VALUES ('Tanzania', NULL, 0, 0, 0, 0, 'TZA');
INSERT INTO `all_countries` VALUES ('Thailand', NULL, 0, 0, 0, 0, 'THA');
INSERT INTO `all_countries` VALUES ('The Bahamas', NULL, 0, 0, 0, 0, 'BHS');
INSERT INTO `all_countries` VALUES ('The Gambia', NULL, 0, 0, 0, 0, 'GMB');
INSERT INTO `all_countries` VALUES ('Timor-Leste', NULL, 0, 0, 0, 0, 'TLS');
INSERT INTO `all_countries` VALUES ('Togo', NULL, 0, 0, 0, 0, 'TGO');
INSERT INTO `all_countries` VALUES ('Tonga', NULL, 0, 0, 0, 0, 'TON');
INSERT INTO `all_countries` VALUES ('Trinidad and Tobago', NULL, 0, 0, 0, 0, 'TTO');
INSERT INTO `all_countries` VALUES ('Tunisia', NULL, 0, 0, 0, 0, 'TUN');
INSERT INTO `all_countries` VALUES ('Turkey', 0.0644, 0, 0, 0.58, 86545, 'TUR');
INSERT INTO `all_countries` VALUES ('Turkmenistan', NULL, 0, 0, 0, 0, 'TKM');
INSERT INTO `all_countries` VALUES ('Tuvalu', NULL, 0, 1, 0, 0, 'TUV');
INSERT INTO `all_countries` VALUES ('Uganda', NULL, 0, 0, 0, 0, 'UGA');
INSERT INTO `all_countries` VALUES ('Ukraine', NULL, 1, 0, 0, 0, 'UKR');
INSERT INTO `all_countries` VALUES ('United Arab Emirates', NULL, 0, 0, 0, 0, 'ARE');
INSERT INTO `all_countries` VALUES ('United Kingdom', 7.0818, 1, 1, 0.58, 155500, 'GBR');
INSERT INTO `all_countries` VALUES ('United States of America', 47.8192, 1, 0, 0, 0, 'USA');
INSERT INTO `all_countries` VALUES ('Uruguay', NULL, 0, 1, 0, 0, 'URY');
INSERT INTO `all_countries` VALUES ('Uzbekistan', NULL, 0, 1, 0, 0, 'UZB');
INSERT INTO `all_countries` VALUES ('Vanuatu', NULL, 0, 0, 0, 0, 'VUT');
INSERT INTO `all_countries` VALUES ('Venezuela', NULL, 0, 0, 0, 0, 'VEN');
INSERT INTO `all_countries` VALUES ('Vietnam', NULL, 0, 0, 0, 0, 'VNM');
INSERT INTO `all_countries` VALUES ('West Bank and Gaza', NULL, 0, 0, 0, 0, 'UNK4');
INSERT INTO `all_countries` VALUES ('Western Sahara', NULL, 0, 0, 0, 0, 'ESH');
INSERT INTO `all_countries` VALUES ('Yemen', NULL, 0, 0, 0, 0, 'YEM');
INSERT INTO `all_countries` VALUES ('Zambia', NULL, 0, 0, 0, 0, 'ZMB');
INSERT INTO `all_countries` VALUES ('Zimbabwe', NULL, 0, 0, 0, 0, 'ZWE');

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles`  (
  `date` date NOT NULL,
  `articleid` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  `img_url` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `summary` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`articleid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('2022-02-24', 1, '俄乌冲突爆发', '2月24日，普京宣布一项“以乌克兰非军事化和去纳粹化”为目标后的几分钟后，乌克兰基辅、哈尔科夫、敖德萨和顿巴斯传出炮火声。乌克兰官员说，俄罗斯在乌克兰敖德萨登陆部队，并向乌克兰基辅、哈尔科夫和第聂伯罗的机场和军事基地发射巡航导弹和弹道导弹。由于事态发展，乌克兰东部空域禁止民用航空使用，欧洲飞航安全局将整个地区划为活跃冲突区。根据乌克兰国务部长安东·格拉先科发言，在乌克兰当地时间6时30分之后，俄罗斯军队朝对乌克兰哈尔科夫进行袭击，并在乌克兰马里乌波尔和敖德萨进行了大规模的两栖登陆。乌克兰边防部队亦报告来自乌克兰卢甘斯克、苏梅、哈尔科夫、切尔尼戈夫和日托米尔以及克里米亚的袭击。乌克兰内政部表示，俄罗斯军队占领了卢甘斯克的两个村庄。乌克兰战略通信和战略安全中心表示，乌克兰军队在乌克兰夏斯季耶附近击退了俄军的一次进攻，并夺回了该地的控制权，反击使得俄罗斯方面出现近50人的伤亡。乌克兰国防部表示该国在乌克兰卢甘斯克击落了俄罗斯五架飞机和一架直升机。俄方否认这一说法。乌克兰紧急情况部称，乌克兰国民卫队司令部被摧毁。', '/articlepages/1.jpg', '莫斯科时间清晨6时整（乌克兰时间清晨5时整），俄罗斯总统普京宣布了一项“以乌克兰非军事化和去纳粹化”为目标，以及阻止乌克兰政府对本国人民实施种族灭绝的“特殊军事行动”');
INSERT INTO `articles` VALUES ('2022-03-20', 2, '俄乌双方持续交战', '2022年3月20日，据俄新社报道，俄罗斯国防部发言人科纳申科夫少将说，俄军于19日晚间和20日上午用远程精准导弹对乌克兰进行空袭。乌克兰 港口城市马里乌波尔的围城战愈演愈烈，俄乌双方爆发激烈巷战。“自黑海海域发射的海基口径巡航导弹摧毁了涅任维修厂的装甲军备维修车间”。据法新社消息，俄罗斯方面称其再次向乌克兰境内发射高超音速导弹。俄罗斯国防部表示：“搭载高超音速弹道导弹的‘匕首’防空导弹系统，摧毁了乌克兰武装部队位于尼古拉耶夫地区康斯坦丁诺夫卡定居点附近的一个大型燃料和润滑油储存点。”俄罗斯联邦国防控制中心主任米津采夫发布声明说，俄军从莫斯科时间3月21日10时起开放从马里乌波尔到东西双向的人道主义通道，并将允许乌克兰民族主义分子在莫斯科时间3月21日10时至12时离开马里乌波尔，但不得携带任何武器。夜间，乌克兰基辅市长克利奇科通过社交媒体表示，基辅波多尔区发生多起爆炸事件，引发一处购物中心起火。基辅波多尔区发生多起爆炸事件，引发一处购物中心起火。消防和医务人员正在开展救援工作，截至目前已有1人死亡。乌克兰港口城市马里乌波尔的围城战愈演愈烈，俄乌双方爆发激烈巷战。当地时间3月20日，俄军苏霍伊苏-35战机参加对乌克兰的军事行动。俄罗斯航空航天部队进行空中拦截，摧毁乌克兰军队的防空系统。', '/articlepages/2.jpg', '乌克兰总统泽伦斯基表示已准备与俄罗斯总统普京展开谈判，并警告如果谈判失败将可能开启第三次世界大战。');
INSERT INTO `articles` VALUES ('2022-04-03', 3, '布查地区发生惨案', '3月底，俄罗斯军队从布查撤军后，有证据表明，俄罗斯军队在占领该地区期间犯下了诸多暴行。据《泰晤士报》和《华盛顿邮报》报导，他们在一个地下室里发现了18具被谋杀的男人、女人和儿童的残缺不全尸体。尸体显示其生前饱受酷刑的证据；耳朵被剪，牙齿则被拔掉。其他被杀平民的尸体弃置路上，据称其中一些是俄罗斯士兵在撤退前用炸弹诱杀。大街上到处都是死去的平民，他们显然一直在过著自己的日常生活。居民和市长证实他们已被俄罗斯军队杀害。许多人似乎在进行日常工作，比如捡木材生火、遛狗或提著购物袋。尸体外观完整，表明他们是被枪杀的，而不是被炸药炸死的。影片显示平民死亡时双手被绑。乌克兰声称在俄罗斯人离开后发现了一个埋有300人的乱葬岗。布查市长阿纳托利·费多鲁克也证实，该市至少有280名遇难者必须就地埋葬在乱葬岗中。当地居民不得不将另外57具尸体埋在另一座乱葬岗里。布查的幸存平民表示，许多幸存者一直躲在地下室躲避俄罗斯人，不敢出来。他们其中的一些人数周没有灯火，也没有电力，只能用蜡烛来烧水和做饭。直到俄罗斯人明确离开后，他们才走出藏身之处，欢迎乌克兰军队的到来。与其他城镇不同，俄罗斯军队占领期间布查市长继续留任，没有被俄罗斯士兵绑架或处决。', '/articlepages/3.jpg', '有记者报道称至少有20名乌克兰平民因布查事件死亡。');
INSERT INTO `articles` VALUES ('2022-05-16', 4, '麦当劳宣布停止在俄营业', '俄乌战争仍未平息，麦当劳16日发布声明，宣布在俄罗斯结束30多年的经营; 由于公司在当地有800多家餐厅与6.2万名员工，麦当劳承诺会确保这些员工在交易完成前能继续获得报酬。麦当劳表示，多年来，麦当劳在俄罗斯投资了数十亿美元，不过俄罗斯因发动战争造成人道主义危机，以及战争所造成的经营环境的不可预测，麦当劳认为，继续在俄罗斯拥有业务已不再具有可行性，也不符合麦当劳的价值观。麦当劳指出，公司在当地有800多家餐厅与6.2万名员工，麦当劳承诺会确保这些员工在交易完成前能继续获得报酬，且在新东家的入主后能保住工作。', '/articlepages/4.jpg', '全球最大的速食连锁店——麦当劳宣布结束在俄罗斯30多年的经营。');
INSERT INTO `articles` VALUES ('2022-06-03', 5, '俄乌冲突百日', '俄乌战争即将满百日，俄罗斯总统普京近日发表电视讲话，声称期待乌克兰政权的更迭。 美国有线电视新闻《CNN》记者内森霍奇 （Nathan Hodge ） 分析，乌克兰战胜的因素是谁有的是时间。霍奇指出，俄军3月下旬陆续从基辅撤出，并声称转移部队至乌克兰东部的顿巴斯地区。 他认为俄罗斯历经3个月后，没有能力实现，也没有打算通过短时间来战胜乌克兰。 乌克兰军队以惊人速度对抗俄罗斯，面对如此顽强抵御，霍奇表示，这迫使俄罗斯当局重组作战指挥部。乌克兰东部的北顿内茨克（Sievierodonetsk）是目前俄罗斯的头号攻击目标，泽连斯基5月30日拍摄影片证实俄军正持续集结，并坦言顿巴斯地区局势相当困难。总部位于美国的一个战争研究所分析..基辅原本可以投入更多的储备和资源，为北顿涅茨克防御，但是未能做到这一点。 虽然避免投入过多资源是合理的，不过再怎么痛苦，乌克兰必须利用其有限的资源，专注于重新获得关键地形，而不是保卫无法控制局势的土地，导致战争重回爆发初期那样的严重。', '/articlepages/5.jepg', '俄罗斯入侵乌克兰第一百日，俄罗斯总统普京发表电视讲话，声称期待乌克兰政权的更迭。');
INSERT INTO `articles` VALUES ('2022-08-20', 6, '杜金娜被刺杀身亡', '俄罗斯联邦的俄罗斯政治哲学家亚历山大·杜金的女儿达莉娅·杜金娜遇刺，杜金娜于当地时间2022年8月20日大约晚上9:00（根据其他消息来源，大约晚上9:30或晚上10:00），在莫斯科大维亚焦梅莫日斯科高速公路的汽车爆炸中死亡，享年29岁。杜金娜参加一年一度的家庭文学和音乐节日“传统节”后乘丰田陆地巡洋舰普拉多回家。杜金娜的父亲亚历山大·杜金本来应该和她同车，但由于某种原因，杜金在最后一刻乘坐另一辆车。据《生意人报》报导，爆炸发生后，车辆失去控制，停下并著火。报导指，后来在车箱内发现了一具严重烧伤的尸体。杜金的朋友称爆炸的汽车属于杜金，杜金娜通常开另一辆车。然而《共青团真理报》报导指爆炸的汽车属于杜金娜。关于杜金娜之死，莫斯科牧首基里尔和俄罗斯总统弗拉基米尔·普京向杜金娜家人表示哀悼，普京称杜金娜为“一个聪明、才华横溢的人，有著一颗真正的俄罗斯之心”。俄罗斯调查委员会根据“以一般危险的方式实施谋杀”刑事条款立案调查。该部门在一份声明中表示：“正在调查所有可能的犯罪原因”。其中一个暗杀原因说法是对亚历山大·杜金的一次暗杀。莫斯科地区检察官办公室接手了此案。随后，俄罗斯联邦侦查委员会主席亚历山大·巴斯特里金指示将杜金娜谋杀案移交俄罗斯联邦侦查委员会中央办公室。调查认为，凶手是受命执行暗杀，在司机一侧的车底下安装了爆炸装置。爆炸装置的容量为400克TNT。部分炸弹残骸被送往相关部门检验。', '/articlepages/6.png', '俄罗斯“国师”女儿杜金娜遇刺身亡。');
INSERT INTO `articles` VALUES ('2022-09-23', 7, '乌东地区四地举行公投', '2022年9月23日至27日，俄罗斯在其于乌克兰的军事占领区就吞并乌克兰被占领土举行了公投，该公投被评论员广泛描述为虚假的公投，并受到世界各国的谴责。目前，只有朝鲜民主主义人民共和国接受了公投结果的有效性，其他主权国家均不接受。公投在乌克兰的四个地区进行——俄罗斯占领的顿涅茨克州和卢甘斯克州上的傀儡政权顿涅茨克人民共和国和卢甘斯克人民共和国，以及俄罗斯占领下的赫尔松州和扎波罗热州。公投时，四个地区均未被俄罗斯完全控制，军事敌对行动仍在进行，且自2022年俄罗斯入侵乌克兰开始以来，四地的大部分人口已经逃离。公投违反国际法，并被联合国谴责为违反《联合国宪章》。2022年9月30日，俄罗斯总统弗拉基米尔·普京在俄罗斯议会两院发表讲话，宣布吞并乌克兰的顿涅茨克州、赫尔松州、卢甘斯克州和扎波罗热州。联合国、乌克兰和许多其他国家都谴责了这一吞并行为。', '/articlepages/7.jpg', '俄罗斯在其于乌克兰的占领区举行的有关加入俄罗斯联邦的公投。');
INSERT INTO `articles` VALUES ('2022-12-25', 8, '教皇方济各呼吁停战', '法新社报导，86岁的教宗方济各（Pope Francis）今天对圣伯多禄广场数以千计的信众演说，接着发表《致全城与全球》（Urbi et Orbi）文告。 广场上有些人举着乌克兰国旗。俄罗斯2月入侵乌克兰后，教宗已多次呼吁和平、谴责战争，同时也试图小心维持与莫斯科的对话。他今天在圣伯多禄大教堂大殿中央阳台演说时表示，想起我们的乌克兰弟兄姊妹们，他们在黑暗与寒冷中、远离家园度过这个圣诞。教宗说愿天主启发我们具体展现团结，去协助那些受苦的人。 愿祂开导能使武器雷鸣平息的掌权者的心灵，立即结束这场无谓战争！教宗表示：悲惨的是，我们偏好听从其他建言、受尘世思维所支配。他带着悲伤想起凛冽的战争之风持续冲击人类。他还说在其他区域和这场第3次世界大战其他战区，我们的时代也在经历一场（缺乏）和平的严重饥荒。教宗提到这个圣诞节因为冲突或其他危机而处境艰难的多个国家，包括阿富汗、也门、叙利亚、缅甸、以色列和巴勒斯坦的冲突、黎巴嫩与海地。他也首度呼吁伊朗和解，过去3个月来，女性为首的抗议活动持续撼动伊朗。教宗也呼吁庆祝圣诞节的人们，谨记那些在每天有大量食物被丢弃、资源投入武器之际还挨饿的人。', '/articlepages/8.jpg', '教皇方济各在圣伯多禄大教堂发表圣诞文告，呼吁结束在乌克兰的“无谓”战争。');
INSERT INTO `articles` VALUES ('2023-01-23', 9, '欧盟追加援助', '据法新社布鲁塞尔1月23日报道，欧盟当天同意追加5亿欧元资金用于为乌克兰提供武装，并拨款4500万欧元用于在欧盟培训乌克兰军队。在布鲁塞尔开会的欧盟外长们在与乌克兰外长德米特里·库列巴举行视频会议后，同意发放这两笔由欧洲和平融资机制供资的拨款。报道称，这使得由欧洲和平融资机制供资的对乌克兰军事财政援助总额达到36亿欧元，此外还有成员国的双边资助。并非所有成员国都报告了供资情况。一位与会者解释说：“我们没有讨论主战坦克，因为我们没有资格这么做。”报道称，德国当局面临着交付自己的坦克并允许在部队中拥有“豹”式主战坦克的国家将坦克运往乌克兰的压力。德国外交部长安娜莱娜·贝尔伯克说：“申请应由各国提出，德国政府的决定是开放的。”', '/articlepages/9.jpg', '欧盟同意追加5亿欧元资金用于为乌克兰提供武装，并拨款4500万欧元用于在欧盟培训乌克兰军队。');

-- ----------------------------
-- Table structure for files
-- ----------------------------
DROP TABLE IF EXISTS `files`;
CREATE TABLE `files`  (
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `download_times` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of files
-- ----------------------------
INSERT INTO `files` VALUES ('FreshSalt_ZH-CN12818759319_1920x1080.jpg', 1);

-- ----------------------------
-- Table structure for military_compare_total
-- ----------------------------
DROP TABLE IF EXISTS `military_compare_total`;
CREATE TABLE `military_compare_total`  (
  `type` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `active_military_personnel` int NULL DEFAULT NULL,
  `aircraft` int NULL DEFAULT NULL,
  `armored_vehicles` int NULL DEFAULT NULL,
  `naval_fleet` int NULL DEFAULT NULL,
  `nuclear_warheads` int NULL DEFAULT NULL,
  PRIMARY KEY (`type`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of military_compare_total
-- ----------------------------
INSERT INTO `military_compare_total` VALUES ('NATO', 3317000, 20738, 115855, 2049, 6065);
INSERT INTO `military_compare_total` VALUES ('Russia', 850000, 4173, 30122, 605, 6255);
INSERT INTO `military_compare_total` VALUES ('Ukraine', 200000, 318, 12303, 38, 0);

-- ----------------------------
-- Table structure for r_u_military_comparison
-- ----------------------------
DROP TABLE IF EXISTS `r_u_military_comparison`;
CREATE TABLE `r_u_military_comparison`  (
  `indicator` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `russia` int NULL DEFAULT NULL,
  `ukraine` int NULL DEFAULT NULL,
  PRIMARY KEY (`indicator`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of r_u_military_comparison
-- ----------------------------
INSERT INTO `r_u_military_comparison` VALUES ('Active soldiers', 850000, 200000);
INSERT INTO `r_u_military_comparison` VALUES ('Air force', NULL, NULL);
INSERT INTO `r_u_military_comparison` VALUES ('Aircraft carriers', 1, 0);
INSERT INTO `r_u_military_comparison` VALUES ('Attack helicopters', 544, 34);
INSERT INTO `r_u_military_comparison` VALUES ('Corvettes', 86, 1);
INSERT INTO `r_u_military_comparison` VALUES ('Destroyers', 15, 0);
INSERT INTO `r_u_military_comparison` VALUES ('Fighters / interceptors', 772, 69);
INSERT INTO `r_u_military_comparison` VALUES ('Frigates', 11, 1);
INSERT INTO `r_u_military_comparison` VALUES ('Ground attack aircraft', 739, 29);
INSERT INTO `r_u_military_comparison` VALUES ('Minesweepers', 49, 1);
INSERT INTO `r_u_military_comparison` VALUES ('Mobile rocket projectors', 3391, 490);
INSERT INTO `r_u_military_comparison` VALUES ('Naval forces', NULL, NULL);
INSERT INTO `r_u_military_comparison` VALUES ('Nuclear warheads*', 6255, 0);
INSERT INTO `r_u_military_comparison` VALUES ('Nuclear weapons', NULL, NULL);
INSERT INTO `r_u_military_comparison` VALUES ('Paramilitary units', 250000, 50000);
INSERT INTO `r_u_military_comparison` VALUES ('Patrol boats', 59, 13);
INSERT INTO `r_u_military_comparison` VALUES ('Reserve forces', 250000, 250000);
INSERT INTO `r_u_military_comparison` VALUES ('Self-propelled artillery', 6574, 1067);
INSERT INTO `r_u_military_comparison` VALUES ('Submarines', 70, 0);
INSERT INTO `r_u_military_comparison` VALUES ('Total aircraft', 4173, 318);
INSERT INTO `r_u_military_comparison` VALUES ('Total helicopters', 1543, 112);
INSERT INTO `r_u_military_comparison` VALUES ('Total military personnel', 1350000, 500000);
INSERT INTO `r_u_military_comparison` VALUES ('Total military ships', 605, 38);
INSERT INTO `r_u_military_comparison` VALUES ('Trainers', 522, 71);
INSERT INTO `r_u_military_comparison` VALUES ('Transport aircraft', 445, 32);

-- ----------------------------
-- Table structure for russia_loss
-- ----------------------------
DROP TABLE IF EXISTS `russia_loss`;
CREATE TABLE `russia_loss`  (
  `date` date NOT NULL,
  `tank` int NULL DEFAULT NULL,
  `bbm` int NULL DEFAULT NULL,
  `artillery` int NULL DEFAULT NULL,
  `multi_barrel_rocket_launcher` int NULL DEFAULT NULL,
  `air_defense_system` int NULL DEFAULT NULL,
  `fixed_wing_aircraft` int NULL DEFAULT NULL,
  `helicopter` int NULL DEFAULT NULL,
  `uav` int NULL DEFAULT NULL,
  `cruise_missile` int NULL DEFAULT NULL,
  `ships` int NULL DEFAULT NULL,
  `automobile_and_oil_tanker` int NULL DEFAULT NULL,
  `special_equipment` int NULL DEFAULT NULL,
  `personnel_total` int NULL DEFAULT NULL,
  `personnel_increase` int NULL DEFAULT NULL,
  PRIMARY KEY (`date`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of russia_loss
-- ----------------------------
INSERT INTO `russia_loss` VALUES ('2023-01-01', 3031, 6084, 2021, 423, 213, 283, 269, 1792, 723, 16, 4720, 181, 106720, 760);
INSERT INTO `russia_loss` VALUES ('2023-01-02', 3031, 6093, 2027, 423, 213, 283, 269, 1836, 723, 16, 4725, 181, 107440, 720);
INSERT INTO `russia_loss` VALUES ('2023-01-03', 3036, 6100, 2033, 424, 214, 283, 270, 1839, 723, 16, 4735, 181, 108190, 750);
INSERT INTO `russia_loss` VALUES ('2023-01-04', 3038, 6106, 2039, 424, 215, 283, 270, 1842, 723, 16, 4745, 181, 108910, 720);
INSERT INTO `russia_loss` VALUES ('2023-01-05', 3041, 6108, 2051, 426, 215, 284, 271, 1844, 723, 16, 4759, 182, 109720, 810);
INSERT INTO `russia_loss` VALUES ('2023-01-06', 3064, 6124, 2059, 431, 215, 285, 272, 1844, 723, 16, 4797, 182, 110250, 530);
INSERT INTO `russia_loss` VALUES ('2023-01-07', 3066, 6125, 2062, 431, 217, 285, 272, 1844, 723, 16, 4798, 182, 110740, 490);
INSERT INTO `russia_loss` VALUES ('2023-01-08', 3069, 6130, 2065, 431, 217, 285, 272, 1849, 723, 16, 4801, 183, 111170, 430);
INSERT INTO `russia_loss` VALUES ('2023-01-09', 3080, 6147, 2069, 434, 217, 285, 275, 1856, 723, 16, 4809, 183, 111760, 590);
INSERT INTO `russia_loss` VALUES ('2023-01-10', 3084, 6154, 2073, 434, 217, 285, 275, 1860, 723, 17, 4817, 183, 112470, 710);
INSERT INTO `russia_loss` VALUES ('2023-01-11', 3094, 6159, 2078, 437, 217, 285, 275, 1862, 723, 17, 4826, 184, 112960, 490);
INSERT INTO `russia_loss` VALUES ('2023-01-12', 3094, 6159, 2082, 437, 218, 285, 276, 1865, 723, 17, 4826, 184, 113390, 430);
INSERT INTO `russia_loss` VALUES ('2023-01-13', 3098, 6167, 2086, 437, 218, 286, 276, 1865, 723, 17, 4833, 184, 114130, 740);
INSERT INTO `russia_loss` VALUES ('2023-01-14', 3104, 6173, 2090, 437, 219, 286, 276, 1867, 723, 17, 4846, 186, 114660, 530);
INSERT INTO `russia_loss` VALUES ('2023-01-15', 3106, 6183, 2094, 437, 219, 286, 276, 1872, 749, 17, 4846, 187, 115290, 630);
INSERT INTO `russia_loss` VALUES ('2023-01-16', 3118, 6204, 2099, 438, 220, 286, 276, 1872, 749, 17, 4870, 190, 116080, 790);
INSERT INTO `russia_loss` VALUES ('2023-01-17', 3121, 6215, 2104, 441, 220, 286, 276, 1872, 749, 17, 4877, 190, 116950, 870);
INSERT INTO `russia_loss` VALUES ('2023-01-18', 3130, 6225, 2108, 442, 220, 287, 276, 1876, 749, 17, 4889, 190, 117770, 820);
INSERT INTO `russia_loss` VALUES ('2023-01-19', 3136, 6235, 2122, 442, 220, 287, 277, 1882, 749, 17, 4896, 190, 118530, 760);
INSERT INTO `russia_loss` VALUES ('2023-01-20', 3139, 6241, 2129, 442, 220, 287, 277, 1886, 749, 17, 4903, 190, 119300, 770);
INSERT INTO `russia_loss` VALUES ('2023-01-21', 3140, 6256, 2135, 443, 220, 287, 277, 1891, 749, 17, 4918, 193, 120160, 860);
INSERT INTO `russia_loss` VALUES ('2023-01-22', 3145, 6268, 2144, 445, 220, 287, 277, 1892, 749, 17, 4932, 193, 120760, 600);
INSERT INTO `russia_loss` VALUES ('2023-01-23', 3150, 6276, 2146, 447, 220, 287, 277, 1894, 749, 18, 4936, 193, 121480, 720);
INSERT INTO `russia_loss` VALUES ('2023-01-24', 3152, 6284, 2148, 448, 220, 289, 281, 1897, 749, 18, 4944, 194, 122170, 690);
INSERT INTO `russia_loss` VALUES ('2023-01-25', 3161, 6307, 2154, 450, 220, 290, 281, 1902, 749, 18, 4967, 194, 123080, 910);
INSERT INTO `russia_loss` VALUES ('2023-01-26', 3175, 6334, 2169, 452, 220, 292, 282, 1908, 749, 18, 4986, 195, 123860, 780);

-- ----------------------------
-- Table structure for sanction_country
-- ----------------------------
DROP TABLE IF EXISTS `sanction_country`;
CREATE TABLE `sanction_country`  (
  `country` varchar(50) CHARACTER SET utf8 NOT NULL,
  `since_2014` int NOT NULL,
  `since_202202` int NOT NULL,
  PRIMARY KEY (`country`) USING BTREE,
  CONSTRAINT `country2` FOREIGN KEY (`country`) REFERENCES `all_countries` (`country`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sanction_country
-- ----------------------------
INSERT INTO `sanction_country` VALUES ('Australia', 1156, 936);
INSERT INTO `sanction_country` VALUES ('Canada', 1982, 1528);
INSERT INTO `sanction_country` VALUES ('EU (Commission and Council)', 1636, 1389);
INSERT INTO `sanction_country` VALUES ('France', 1571, 1323);
INSERT INTO `sanction_country` VALUES ('Japan', 962, 880);
INSERT INTO `sanction_country` VALUES ('Switzerland', 1865, 1609);
INSERT INTO `sanction_country` VALUES ('United Kingdom', 1650, 1414);
INSERT INTO `sanction_country` VALUES ('United States of America', 2773, 1822);

-- ----------------------------
-- Table structure for sanction_date
-- ----------------------------
DROP TABLE IF EXISTS `sanction_date`;
CREATE TABLE `sanction_date`  (
  `date` date NOT NULL,
  `value` int NOT NULL,
  PRIMARY KEY (`date`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sanction_date
-- ----------------------------
INSERT INTO `sanction_date` VALUES ('2022-02-21', 2613);
INSERT INTO `sanction_date` VALUES ('2022-02-22', 2687);
INSERT INTO `sanction_date` VALUES ('2022-02-24', 3596);
INSERT INTO `sanction_date` VALUES ('2022-02-25', 4777);
INSERT INTO `sanction_date` VALUES ('2022-02-26', 4794);
INSERT INTO `sanction_date` VALUES ('2022-02-27', 4891);
INSERT INTO `sanction_date` VALUES ('2022-02-28', 4906);
INSERT INTO `sanction_date` VALUES ('2022-03-01', 4987);
INSERT INTO `sanction_date` VALUES ('2022-03-02', 5018);
INSERT INTO `sanction_date` VALUES ('2022-03-03', 5116);
INSERT INTO `sanction_date` VALUES ('2022-03-04', 5334);
INSERT INTO `sanction_date` VALUES ('2022-03-07', 5371);
INSERT INTO `sanction_date` VALUES ('2022-03-10', 5538);
INSERT INTO `sanction_date` VALUES ('2022-03-11', 6155);
INSERT INTO `sanction_date` VALUES ('2022-03-13', 6189);
INSERT INTO `sanction_date` VALUES ('2022-03-14', 6190);
INSERT INTO `sanction_date` VALUES ('2022-03-15', 6602);
INSERT INTO `sanction_date` VALUES ('2022-03-16', 6832);
INSERT INTO `sanction_date` VALUES ('2022-03-17', 6847);
INSERT INTO `sanction_date` VALUES ('2022-03-18', 6850);
INSERT INTO `sanction_date` VALUES ('2022-03-24', 7510);
INSERT INTO `sanction_date` VALUES ('2022-03-25', 7604);
INSERT INTO `sanction_date` VALUES ('2022-03-31', 7654);
INSERT INTO `sanction_date` VALUES ('2022-04-05', 7664);
INSERT INTO `sanction_date` VALUES ('2022-04-06', 7749);
INSERT INTO `sanction_date` VALUES ('2022-04-07', 7852);
INSERT INTO `sanction_date` VALUES ('2022-04-08', 7855);
INSERT INTO `sanction_date` VALUES ('2022-04-11', 8127);
INSERT INTO `sanction_date` VALUES ('2022-04-12', 8359);
INSERT INTO `sanction_date` VALUES ('2022-04-13', 8813);
INSERT INTO `sanction_date` VALUES ('2022-04-14', 8815);
INSERT INTO `sanction_date` VALUES ('2022-04-19', 8831);
INSERT INTO `sanction_date` VALUES ('2022-04-20', 8900);
INSERT INTO `sanction_date` VALUES ('2022-04-21', 9074);
INSERT INTO `sanction_date` VALUES ('2022-04-25', 9083);
INSERT INTO `sanction_date` VALUES ('2022-04-27', 9287);
INSERT INTO `sanction_date` VALUES ('2022-05-03', 9397);
INSERT INTO `sanction_date` VALUES ('2022-05-04', 9399);
INSERT INTO `sanction_date` VALUES ('2022-05-08', 9584);
INSERT INTO `sanction_date` VALUES ('2022-05-17', 9614);
INSERT INTO `sanction_date` VALUES ('2022-05-20', 9628);
INSERT INTO `sanction_date` VALUES ('2022-05-31', 9651);
INSERT INTO `sanction_date` VALUES ('2022-06-02', 9694);
INSERT INTO `sanction_date` VALUES ('2022-06-04', 9777);
INSERT INTO `sanction_date` VALUES ('2022-06-05', 9860);
INSERT INTO `sanction_date` VALUES ('2022-06-09', 9865);
INSERT INTO `sanction_date` VALUES ('2022-06-10', 10043);
INSERT INTO `sanction_date` VALUES ('2022-06-27', 10114);
INSERT INTO `sanction_date` VALUES ('2022-06-28', 10284);
INSERT INTO `sanction_date` VALUES ('2022-06-30', 10300);
INSERT INTO `sanction_date` VALUES ('2022-07-05', 10309);
INSERT INTO `sanction_date` VALUES ('2022-07-08', 10468);
INSERT INTO `sanction_date` VALUES ('2022-07-22', 10475);
INSERT INTO `sanction_date` VALUES ('2022-07-23', 10531);
INSERT INTO `sanction_date` VALUES ('2022-07-24', 10588);
INSERT INTO `sanction_date` VALUES ('2022-07-25', 10595);
INSERT INTO `sanction_date` VALUES ('2022-07-26', 10637);
INSERT INTO `sanction_date` VALUES ('2022-07-28', 10657);
INSERT INTO `sanction_date` VALUES ('2022-07-29', 10730);
INSERT INTO `sanction_date` VALUES ('2022-08-02', 10843);
INSERT INTO `sanction_date` VALUES ('2022-08-03', 10844);
INSERT INTO `sanction_date` VALUES ('2022-08-04', 10858);
INSERT INTO `sanction_date` VALUES ('2022-08-05', 10862);
INSERT INTO `sanction_date` VALUES ('2022-08-08', 10863);
INSERT INTO `sanction_date` VALUES ('2022-08-17', 10865);
INSERT INTO `sanction_date` VALUES ('2022-08-23', 10942);
INSERT INTO `sanction_date` VALUES ('2022-09-05', 10945);
INSERT INTO `sanction_date` VALUES ('2022-09-06', 10948);
INSERT INTO `sanction_date` VALUES ('2022-09-08', 10949);
INSERT INTO `sanction_date` VALUES ('2022-09-09', 10952);
INSERT INTO `sanction_date` VALUES ('2022-09-15', 11027);
INSERT INTO `sanction_date` VALUES ('2022-09-16', 11028);
INSERT INTO `sanction_date` VALUES ('2022-09-26', 11120);
INSERT INTO `sanction_date` VALUES ('2022-09-30', 11495);
INSERT INTO `sanction_date` VALUES ('2022-10-01', 11523);
INSERT INTO `sanction_date` VALUES ('2022-10-04', 11524);
INSERT INTO `sanction_date` VALUES ('2022-10-07', 11561);
INSERT INTO `sanction_date` VALUES ('2022-10-08', 11597);
INSERT INTO `sanction_date` VALUES ('2022-10-12', 11634);
INSERT INTO `sanction_date` VALUES ('2022-10-19', 11637);
INSERT INTO `sanction_date` VALUES ('2022-10-20', 11641);
INSERT INTO `sanction_date` VALUES ('2022-10-24', 11649);
INSERT INTO `sanction_date` VALUES ('2022-10-26', 11669);
INSERT INTO `sanction_date` VALUES ('2022-10-28', 11711);
INSERT INTO `sanction_date` VALUES ('2022-11-01', 11715);
INSERT INTO `sanction_date` VALUES ('2022-11-02', 11719);
INSERT INTO `sanction_date` VALUES ('2022-11-14', 11840);
INSERT INTO `sanction_date` VALUES ('2022-11-15', 11847);
INSERT INTO `sanction_date` VALUES ('2022-11-18', 11851);
INSERT INTO `sanction_date` VALUES ('2022-11-23', 11852);
INSERT INTO `sanction_date` VALUES ('2022-11-30', 11874);
INSERT INTO `sanction_date` VALUES ('2022-12-08', 11878);
INSERT INTO `sanction_date` VALUES ('2022-12-09', 11945);
INSERT INTO `sanction_date` VALUES ('2022-12-13', 11978);
INSERT INTO `sanction_date` VALUES ('2022-12-15', 12044);
INSERT INTO `sanction_date` VALUES ('2022-12-19', 12077);
INSERT INTO `sanction_date` VALUES ('2022-12-21', 12478);
INSERT INTO `sanction_date` VALUES ('2022-12-22', 12634);

-- ----------------------------
-- Table structure for sanction_type
-- ----------------------------
DROP TABLE IF EXISTS `sanction_type`;
CREATE TABLE `sanction_type`  (
  `type` varchar(10) CHARACTER SET utf8 NOT NULL,
  `value` int NOT NULL,
  PRIMARY KEY (`type`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sanction_type
-- ----------------------------
INSERT INTO `sanction_type` VALUES ('Aircraft', 14);
INSERT INTO `sanction_type` VALUES ('Entity', 1811);
INSERT INTO `sanction_type` VALUES ('Individual', 8984);
INSERT INTO `sanction_type` VALUES ('Vessel', 92);

-- ----------------------------
-- Table structure for se_status
-- ----------------------------
DROP TABLE IF EXISTS `se_status`;
CREATE TABLE `se_status`  (
  `date` date NOT NULL,
  `natural_gas` double NULL DEFAULT NULL,
  `gold` double NULL DEFAULT NULL,
  `wti_crude` double NULL DEFAULT NULL,
  `brent_crude` double NULL DEFAULT NULL,
  `soybeans` double NULL DEFAULT NULL,
  `corn` double NULL DEFAULT NULL,
  `copper` double NULL DEFAULT NULL,
  `silver` double NULL DEFAULT NULL,
  `low_sulphur_gas_oil` double NULL DEFAULT NULL,
  `live_cattle` double NULL DEFAULT NULL,
  `soybean_oil` double NULL DEFAULT NULL,
  `aluminium` double NULL DEFAULT NULL,
  `soybean_meal` double NULL DEFAULT NULL,
  `zinc` double NULL DEFAULT NULL,
  `uls_diesel` double NULL DEFAULT NULL,
  `nickel` double NULL DEFAULT NULL,
  `wheat` double NULL DEFAULT NULL,
  `sugar` double NULL DEFAULT NULL,
  `gasoline` double NULL DEFAULT NULL,
  `coffee` double NULL DEFAULT NULL,
  `lean_hogs` double NULL DEFAULT NULL,
  `hrw_wheat` double NULL DEFAULT NULL,
  `cotton` double NULL DEFAULT NULL,
  PRIMARY KEY (`date`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of se_status
-- ----------------------------
INSERT INTO `se_status` VALUES ('2022-01-03', 3.815, 1800.1, 76.08, 78.98, 1344, 589.25, 4.4215, 22.81, 676, 138.925, 56.21, 2803, 423.9, 3580, 235.74, 20873.5, 758, 18.74, 225.65, 223.3, 81.125, 791.5, 113.23);
INSERT INTO `se_status` VALUES ('2022-01-04', 3.717, 1814.6, 76.99, 80, 1378.75, 609.5, 4.475, 23.056, 685.75, 137.825, 58.14, 2833.75, 427.6, 3647.75, 240.95, 21250, 770, 18.75, 227.63, 231.75, 80.15, 804, 116.39);
INSERT INTO `se_status` VALUES ('2022-01-05', 3.882, 1825.1, 77.85, 80.8, 1384.25, 602.25, 4.4135, 23.17, 702, 137.25, 59.32, 2915.75, 424.1, 3623, 244.61, 20750, 760.75, 18.34, 229.21, 231.75, 82.275, 787, 116.28);
INSERT INTO `se_status` VALUES ('2022-01-06', 3.812, 1789.2, 79.46, 81.99, 1377.25, 603.75, 4.3545, 22.19, 712.5, 137.35, 58.78, 2913.78, 420.4, 3578, 247.77, 20494, 746, 18.19, 230.43, 231.7, 82.95, 768.5, 114.72);
INSERT INTO `se_status` VALUES ('2022-01-07', 3.916, 1797.4, 78.9, 81.75, 1401.5, 606.75, 4.41, 22.409, 712.5, 137.325, 58.63, 2907.5, 433.5, 3560.75, 248.18, 20856, 758.5, 18.05, 229.89, 238.45, 79.65, 775, 115.12);
INSERT INTO `se_status` VALUES ('2022-01-10', 4.079, 1798.8, 78.23, 80.87, 1374.75, 599.75, 4.352, 22.462, 711, 136.25, 57.89, 2922.74, 427.6, 3502, 248.76, 20919, 762, 17.83, 227.54, 234.9, 78.375, 778.25, 115.22);
INSERT INTO `se_status` VALUES ('2022-01-11', 4.249, 1818.5, 81.22, 83.72, 1376.75, 601, 4.429, 22.812, 726, 137.675, 58.89, 2961.25, 427.3, 3578.5, 256.36, 21966, 770.25, 18.11, 235.74, 237.05, 77.85, 791.75, 116.02);
INSERT INTO `se_status` VALUES ('2022-01-12', 4.857, 1827.3, 82.64, 84.67, 1391.25, 599, 4.5765, 23.207, 726, 136.575, 59.28, 2972.51, 431, 3571.5, 259.42, 22218, 757.75, 18.34, 239.08, 240.85, 78.85, 778, 117.64);
INSERT INTO `se_status` VALUES ('2022-01-13', 4.27, 1821.4, 82.12, 84.47, 1365.25, 587.5, 4.546, 23.162, 737.5, 137, 58.18, 2940.26, 423.7, 3582.5, 260.85, 22415, 746.75, 18.09, 238.41, 237, 77.85, 759.75, 116.84);
INSERT INTO `se_status` VALUES ('2022-01-14', 4.262, 1816.5, 83.82, 86.06, 1356.75, 596.25, 4.4205, 22.918, 749.25, 137.975, 58.15, 2976.25, 445, 3536.5, 263.43, 22558.5, 741.5, 18.31, 241.9, 239.65, 80.9, 745, 119.7);
INSERT INTO `se_status` VALUES ('2022-01-17', 4.262, 1816.5, 83.82, 86.48, 1356.75, 596.25, 4.4205, 22.918, 762.25, 137.975, 58.15, 3004.75, 445, 3519.5, 263.43, 22558, 741.5, 18.31, 241.9, 239.65, 80.9, 745, 119.7);
INSERT INTO `se_status` VALUES ('2022-01-18', 4.283, 1812.4, 85.43, 87.51, 1361.25, 599.5, 4.3825, 23.492, 765.25, 137.675, 59.08, 3034.5, 390.1, 3584, 267.4, 22193, 769, 18.66, 243.18, 239.6, 81.6, 772.75, 121.08);
INSERT INTO `se_status` VALUES ('2022-01-19', 4.031, 1843.2, 86.96, 88.44, 1391.25, 610.5, 4.47, 24.231, 776, 138.55, 60.76, 3065, 398.3, 3600, 269.23, 23309, 796.5, 19.07, 245.7, 244.45, 82.3, 800, 123.95);
INSERT INTO `se_status` VALUES ('2022-01-20', 3.802, 1842.6, 86.9, 88.38, 1425.75, 611, 4.5825, 24.716, 773.25, 138.325, 62.88, 3132, 400.8, 3674, 267.18, 23951, 790.25, 18.93, 246.22, 243.65, 84.925, 796.5, 122.87);
INSERT INTO `se_status` VALUES ('2022-01-21', 3.999, 1831.8, 85.14, 87.89, 1414.25, 616.25, 4.524, 24.32, 769.25, 137.925, 63, 3052.77, 392.7, 3672.5, 269.12, 24220, 780, 18.9, 244.24, 237.9, 86.2, 793.25, 120.75);
INSERT INTO `se_status` VALUES ('2022-01-24', 4.027, 1841.7, 83.31, 86.27, 1403, 621, 4.4125, 23.8, 753.25, 136.325, 61.97, 3045, 393.9, 3628.5, 262.74, 22597, 800.5, 18.81, 239.8, 232.95, 86.325, 818, 120.38);
INSERT INTO `se_status` VALUES ('2022-01-25', 4.053, 1852.5, 85.6, 88.2, 1407.25, 620, 4.45, 23.896, 761.5, 137.1, 62.51, 3106.5, 392, 3598.5, 266.91, 22554, 818, 18.78, 245.95, 237.9, 87.45, 834.5, 120.92);
INSERT INTO `se_status` VALUES ('2022-01-26', 4.277, 1829.7, 87.35, 89.96, 1440, 627, 4.515, 23.807, 787.5, 138.05, 63.93, 3108, 400.5, 3631.25, 274.4, 23016, 795, 18.49, 252.29, 238.9, 88.025, 815.75, 122.33);
INSERT INTO `se_status` VALUES ('2022-01-27', 6.265, 1793.1, 86.61, 89.34, 1448.25, 625.25, 4.4235, 22.676, 789.75, 137.825, 64.34, 3115.25, 404.7, 3655.5, 279.45, 22763, 777, 18.41, 252.1, 232.05, 87.025, 793.5, 121.63);
INSERT INTO `se_status` VALUES ('2022-01-28', 4.639, 1784.9, 86.82, 90.03, 1470, 636, 4.31, 22.301, 802, 138.7, 65.27, 3103.5, 411.2, 3636.5, 278.55, 22714, 786.25, 18.2, 254.23, 235.9, 87.925, 802.25, 123.76);
INSERT INTO `se_status` VALUES ('2022-01-31', 4.874, 1795, 88.15, 91.21, 1490.5, 626, 4.3245, 22.393, 796.25, 139.575, 64.82, 3047, 418.9, 3608, 275.92, 22788, 761.25, 18.22, 255.43, 235.1, 88.475, 781.25, 127.57);
INSERT INTO `se_status` VALUES ('2022-02-01', 4.751, 1800.3, 88.2, 89.16, 1528.5, 634.75, 4.434, 22.595, 802, 140.3, 65.83, 3051.76, 436, 3623.5, 274.12, 23299, 769, 18.48, 257.52, 236.7, 88.15, 786.25, 127.33);
INSERT INTO `se_status` VALUES ('2022-02-02', 5.501, 1809.2, 88.26, 89.47, 1545.25, 622.5, 4.496, 22.707, 800.5, 141.125, 65.98, 3007.1, 435.1, 3620.5, 276.89, 23291, 755, 17.93, 260.7, 238.8, 87.35, 769.5, 126.33);
INSERT INTO `se_status` VALUES ('2022-02-03', 4.888, 1803, 90.27, 91.11, 1544.25, 616.75, 4.471, 22.375, 818.75, 141.6, 65.75, 3073.25, 437.1, 3605.75, 283.95, 23181, 751.75, 17.99, 264.27, 243.9, 86.45, 769, 127.62);
INSERT INTO `se_status` VALUES ('2022-02-04', 4.572, 1806.6, 92.31, 93.27, 1553.5, 620.5, 4.4875, 22.475, 851.5, 142.05, 65.36, 3097.5, 443.9, 3621, 287.51, 23361, 763.25, 18.23, 267.85, 241.85, 87.025, 785.75, 126.74);
INSERT INTO `se_status` VALUES ('2022-02-07', 4.232, 1820.6, 91.32, 92.69, 1581.75, 635.25, 4.4625, 23.076, 852.5, 141.825, 65.34, 3164.5, 452.8, 3629.5, 285.54, 23779, 768.75, 18.05, 268.53, 241.65, 87.7, 791.75, 125.57);
INSERT INTO `se_status` VALUES ('2022-02-08', 4.248, 1826.6, 89.36, 90.78, 1569, 632.25, 4.461, 23.2, 812.5, 141.975, 63.35, 3210.5, 454.1, 3597.25, 279.26, 23003, 778.75, 18.08, 262.51, 248.95, 90.325, 801.25, 127.15);
INSERT INTO `se_status` VALUES ('2022-02-09', 4.009, 1835.2, 89.66, 91.55, 1594.75, 646.75, 4.6025, 23.341, 829.75, 142.9, 64.1, 3284.75, 461.9, 3646.5, 282.49, 23556, 785, 18.48, 265.34, 258.35, 90.225, 815, 126.43);
INSERT INTO `se_status` VALUES ('2022-02-10', 3.959, 1836.2, 89.88, 91.41, 1574.25, 641.75, 4.6595, 23.522, 829.75, 142.35, 64.51, 3266, 454, 3707.75, 282.72, 23876, 771.5, 18.3, 266.54, 255.2, 90.175, 801, 125.66);
INSERT INTO `se_status` VALUES ('2022-02-11', 3.941, 1840.8, 93.1, 94.44, 1583, 651, 4.506, 23.369, 827.25, 141.875, 65.72, 3146.5, 456.6, 3621.5, 291.09, 23371, 797.75, 18.26, 273.86, 251.65, 90.5, 824.25, 125.28);
INSERT INTO `se_status` VALUES ('2022-02-14', 4.195, 1868, 95.46, 96.48, 1570, 655.75, 4.5075, 23.848, 839.75, 142.425, 65.81, 3265.75, 448.4, 3573, 296.18, 23530, 799.25, 18.12, 277.94, 247.55, 91.625, 828.5, 122.93);
INSERT INTO `se_status` VALUES ('2022-02-15', 4.306, 1854.8, 92.07, 93.28, 1551.25, 638, 4.5315, 23.342, 818.25, 142.9, 65.63, 3217.5, 438.8, 3584, 285.95, 23507, 779.75, 18.07, 266.91, 251.85, 104.15, 806, 123.04);
INSERT INTO `se_status` VALUES ('2022-02-16', 4.717, 1870.2, 93.66, 94.81, 1587.5, 647, 4.5365, 23.605, 837.5, 143.125, 66.97, 3265, 449.4, 3592, 285.75, 23635, 780.5, 18.07, 267.71, 252.25, 105.4, 808, 121.91);
INSERT INTO `se_status` VALUES ('2022-02-17', 4.486, 1900.7, 91.76, 92.97, 1592, 650, 4.523, 23.875, 809.5, 143.4, 66.81, 3281.6, 449.2, 3619.5, 278.62, 24169, 798, 18.28, 264.86, 251.5, 107.575, 823, 121.93);
INSERT INTO `se_status` VALUES ('2022-02-18', 4.431, 1898.6, 91.07, 93.54, 1601.5, 654.25, 4.5195, 23.992, 811.5, 143.25, 67.57, 3275, 447.9, 3588.25, 278.15, 24464, 797, 18.2, 266.96, 246.85, 109.4, 835.25, 122.99);
INSERT INTO `se_status` VALUES ('2022-02-21', 4.431, 1898.6, 91.07, 95.39, 1601.5, 654.25, 4.5195, 23.992, 823, 143.25, 67.57, 3295.75, 447.9, 3571.5, 278.15, 24721, 797, 18.2, 266.96, 246.85, 109.4, 835.25, 122.99);
INSERT INTO `se_status` VALUES ('2022-02-22', 4.498, 1906.1, 92.35, 96.84, 1635, 674.75, 4.5105, 24.311, 834.25, 143.75, 70.15, 3316.5, 453.7, 3618, 281.88, 25013, 844.25, 18.48, 271.08, 248.45, 112.075, 881.75, 121.11);
INSERT INTO `se_status` VALUES ('2022-02-23', 4.623, 1909.2, 92.1, 96.84, 1675, 683.75, 4.484, 24.553, 831, 143.05, 70.72, 3299, 471.1, 3575.75, 282.92, 24787, 876, 18.53, 272.53, 248.6, 108.025, 913.5, 122.4);
INSERT INTO `se_status` VALUES ('2022-02-24', 4.568, 1925.1, 92.81, 99.08, 1661.5, 695, 4.456, 24.687, 891.25, 140.525, 72, 3412, 464.9, 3653.25, 289.69, 25131, 926, 18.32, 277.1, 239.35, 105.525, 963, 122.59);
INSERT INTO `se_status` VALUES ('2022-02-25', 4.47, 1887.6, 91.59, 97.93, 1590.25, 659.5, 4.472, 23.997, 836.5, 139.275, 68.75, 3366.5, 448.3, 3634.25, 284.95, 24758, 843, 17.99, 272.73, 240.05, 103.675, 886.75, 122.12);
INSERT INTO `se_status` VALUES ('2022-02-28', 4.402, 1900.7, 95.72, 100.99, 1644.25, 697.5, 4.4445, 24.361, 881.25, 140.5, 72.89, 3374, 454.9, 3680.75, 301.34, 24601, 928, 18, 279.7, 234.25, 103.5, 954.25, 122.57);
INSERT INTO `se_status` VALUES ('2022-03-01', 4.573, 1943.8, 103.41, 104.97, 1705.5, 739.75, 4.5865, 25.534, 962, 140.525, 76.8, 3487, 463.7, 3763.5, 315.11, 25497, 1001.75, 18.34, 308.87, 237.25, 106.2, 1012, 126.35);
INSERT INTO `se_status` VALUES ('2022-03-02', 4.762, 1922.3, 110.6, 112.93, 1677.5, 739, 4.6555, 25.183, 1044, 140.1, 79.54, 3582, 457.7, 3875.25, 349.47, 26339, 1058.5, 18.64, 330.83, 230.45, 106.3, 1073.5, 122.04);
INSERT INTO `se_status` VALUES ('2022-03-03', 4.722, 1935.9, 107.67, 110.46, 1680.25, 751.25, 4.7715, 25.205, 1095.5, 138.35, 78.3, 3733.5, 461.4, 3930.25, 350.34, 27412, 1289, 18.93, 328.44, 224.15, 105.2, 1140.25, 123.55);
INSERT INTO `se_status` VALUES ('2022-03-04', 5.016, 1966.6, 115.68, 118.11, 1676.25, 756.5, 4.929, 25.782, 1184.25, 135.775, 76.8, 3875.5, 468.9, 4070, 377.63, 29494, 1348, 19.35, 354.4, 224.15, 100.45, 1200.75, 120.2);
INSERT INTO `se_status` VALUES ('2022-03-07', 4.833, 1995.9, 119.4, 123.21, 1674.25, 749.25, 4.722, 25.713, 1297.75, 137.9, 78.15, 3733, 467.9, 4132, 392.15, 48211, 1425.25, 19.27, 357.21, 225.5, 100.275, 1237.75, 120.66);
INSERT INTO `se_status` VALUES ('2022-03-08', 4.527, 2043.3, 123.7, 127.98, 1704.5, 754.5, 4.7005, 26.888, 1492.75, 139.05, 79.68, 3474.25, 489.9, 4115.5, 443.73, 48211, 1273, 19.43, 368.26, 234.05, 102.925, 1186, 122.17);
INSERT INTO `se_status` VALUES ('2022-03-09', 4.526, 1988.2, 108.7, 111.14, 1686.5, 735, 4.564, 25.757, 1522.5, 137.575, 80.07, 3321, 495, 3919.5, 346.43, 48211, 1199.5, 18.94, 329.38, 230.45, 101.15, 1106.25, 121.67);
INSERT INTO `se_status` VALUES ('2022-03-10', 4.631, 2000.4, 106.02, 109.33, 1700, 757.75, 4.6435, 26.202, 1522.5, 135.9, 80.85, 3408.5, 506.8, 3844, 329.62, 48211, 1073.75, 19.1, 315.67, 225.2, 100.1, 1052.25, 116.86);
INSERT INTO `se_status` VALUES ('2022-03-11', 4.725, 1985, 109.33, 112.67, 1690.75, 764.5, 4.616, 26.106, 1012, 137.3, 82.18, 3459.5, 493.1, 3797, 341.76, 48211, 1090, 19.24, 331.21, 222.95, 102.725, 1075.75, 121.03);
INSERT INTO `se_status` VALUES ('2022-03-14', 4.658, 1960.8, 103.01, 106.9, 1687.25, 728.25, 4.5125, 25.244, 964, 140.325, 78.73, 3283.75, 521.9, 3788.5, 327.63, 48211, 1090, 19.13, 316.89, 219.65, 102.2, 1079.25, 118.77);
INSERT INTO `se_status` VALUES ('2022-03-15', 4.568, 1929.7, 96.44, 99.91, 1658.75, 758, 4.5015, 25.123, 904, 140.85, 73.68, 3266, 484, 3793, 302.97, 48211, 1154.25, 18.73, 299.81, 212.3, 102.4, 1157.5, 118.6);
INSERT INTO `se_status` VALUES ('2022-03-16', 4.748, 1909.2, 95.04, 98.02, 1649.25, 730, 4.588, 24.67, 919.5, 139.35, 73.55, 3248.75, 478, 3807.5, 310.01, 45735, 1069.25, 18.56, 298.75, 218.6, 102.375, 1072.5, 119.8);
INSERT INTO `se_status` VALUES ('2022-03-17', 4.99, 1943.2, 102.98, 106.64, 1668.5, 754.5, 4.6905, 25.584, 1056.5, 139.475, 74.63, 3379.97, 474.1, 3832, 348.74, 42090, 1098, 18.69, 321.66, 217.3, 100.35, 1092.25, 121.86);
INSERT INTO `se_status` VALUES ('2022-03-18', 4.863, 1929.3, 104.7, 107.93, 1668, 741.75, 4.7305, 25.055, 1064.75, 140.5, 72.29, 3375.5, 477, 3829.25, 359.81, 37060, 1063.75, 18.93, 323.88, 220.3, 99.4, 1070.5, 126.86);
INSERT INTO `se_status` VALUES ('2022-03-21', 4.9, 1929.5, 112.12, 115.62, 1691, 756.25, 4.7015, 25.282, 1157.75, 140.05, 73.71, 3522.5, 481.3, 3947.5, 380.09, 31525, 1119.25, 19.28, 337.16, 225.85, 100.625, 1113.25, 130.01);
INSERT INTO `se_status` VALUES ('2022-03-22', 5.187, 1921.5, 111.76, 115.48, 1696.5, 753, 4.689, 24.885, 1171.25, 139.425, 74.54, 3504.5, 476.8, 3900.5, 386.42, 28127, 1118.25, 19.15, 333.07, 225.05, 100.25, 1116.5, 130.04);
INSERT INTO `se_status` VALUES ('2022-03-23', 5.232, 1937.3, 114.93, 121.6, 1718.75, 757.75, 4.7625, 25.17, 1235.75, 139.425, 75.97, 3657.25, 485.1, 4137, 411.48, 32345, 1105.75, 19.24, 343.87, 225.3, 102.55, 1111.5, 130.03);
INSERT INTO `se_status` VALUES ('2022-03-24', 5.401, 1962.2, 112.34, 119.03, 1700.75, 748.25, 4.729, 25.9, 1233.75, 139.675, 74.29, 3622.25, 485.9, 4052, 415.34, 37200, 1085.75, 19.26, 338.97, 221.85, 102.775, 1095, 130.9);
INSERT INTO `se_status` VALUES ('2022-03-25', 5.571, 1954.2, 113.9, 120.65, 1710.25, 754, 4.686, 25.595, 1195.75, 140.475, 74.75, 3604.25, 487.9, 4077.5, 411.46, 35487, 1102.25, 19.61, 347, 221.85, 107.475, 1110.75, 135.9);
INSERT INTO `se_status` VALUES ('2022-03-28', 5.508, 1939.8, 105.96, 112.48, 1664.25, 748.5, 4.714, 25.176, 1130.75, 140.3, 72.45, 3605.75, 478.9, 4093.5, 378.34, 32716, 1057, 19.59, 321.88, 214.55, 107.575, 1070.5, 139.07);
INSERT INTO `se_status` VALUES ('2022-03-29', 5.336, 1912.2, 104.24, 110.23, 1643, 726.25, 4.7165, 24.716, 1063, 140.9, 71.66, 3428.75, 466, 4030, 371.61, 31777, 1014.25, 19.11, 320.33, 215.7, 106.05, 1024.5, 136.81);
INSERT INTO `se_status` VALUES ('2022-03-30', 5.605, 1933.5, 107.82, 113.45, 1664, 738, 4.7505, 25.113, 1087.5, 140.175, 72.22, 3545, 473.1, 4167, 380.85, 32939, 1027.25, 19.47, 332.5, 221.85, 104.525, 1044.5, 139.84);
INSERT INTO `se_status` VALUES ('2022-03-31', 5.642, 1949.2, 100.28, 107.91, 1618.25, 748.75, 4.751, 25.133, 1060.75, 139.375, 69.94, 3483.61, 467.5, 4212.5, 369.12, 32115, 1006, 19.49, 318.96, 226.4, 101.75, 1029.75, 135.69);
INSERT INTO `se_status` VALUES ('2022-04-01', 5.72, 1919.1, 99.27, 104.39, 1582.75, 735, 4.6885, 24.654, 1091, 138.65, 71.2, 3439.75, 450, 4388, 342.4, 33236, 984.5, 19.37, 315.35, 228.4, 101.3, 1013, 134.55);
INSERT INTO `se_status` VALUES ('2022-04-04', 5.712, 1929.2, 103.28, 107.53, 1602.25, 750.5, 4.7815, 24.59, 1138.25, 138, 72.34, 3433.6, 455.1, 4414.75, 354.61, 33245.75, 1010.25, 19.61, 319.81, 230.6, 99.45, 1037.75, 137.94);
INSERT INTO `se_status` VALUES ('2022-04-05', 6.032, 1922.9, 101.96, 106.64, 1631, 759.75, 4.795, 24.534, 1080.25, 136.8, 72.41, 3448.5, 465.9, 4329.5, 346.82, 33318, 1045.25, 19.65, 316.49, 231.3, 97.675, 1082.75, 137.53);
INSERT INTO `se_status` VALUES ('2022-04-06', 6.029, 1918.4, 96.23, 101.07, 1619.5, 756.5, 4.738, 24.458, 1054.25, 137.7, 71.83, 3422.51, 461.8, 4295.25, 334.52, 33485, 1038.25, 19.59, 304.62, 227.6, 98.75, 1085, 135.69);
INSERT INTO `se_status` VALUES ('2022-04-07', 6.359, 1933.8, 96.03, 100.58, 1645.5, 757.75, 4.6995, 24.735, 982.5, 138, 73.02, 3366.75, 460.2, 4201.75, 326.78, 33703, 1020, 19.84, 303.98, 226.15, 99.05, 1070.75, 133.2);
INSERT INTO `se_status` VALUES ('2022-04-08', 6.278, 1941.6, 98.26, 102.78, 1689, 768.75, 4.725, 24.823, 1015.5, 137.825, 75.12, 3356.25, 468.2, 4293, 331.76, 33867, 1051.5, 20.41, 313.16, 231.65, 99.025, 1106.75, 132.41);
INSERT INTO `se_status` VALUES ('2022-04-11', 6.643, 1944.3, 94.29, 98.48, 1655.25, 764.5, 4.634, 24.987, 1040.25, 138.525, 74.3, 3223.25, 459.1, 4319, 326.77, 32467, 1081.25, 20.31, 300.31, 236.6, 98.425, 1141.5, 135.29);
INSERT INTO `se_status` VALUES ('2022-04-12', 6.68, 1972.1, 100.6, 104.64, 1670.25, 776.25, 4.7095, 25.735, 1040.25, 139.95, 75.43, 3239.63, 460.9, 4406.75, 346.44, 32453, 1103.75, 20.22, 315.38, 233.6, 99.625, 1162.25, 138.51);
INSERT INTO `se_status` VALUES ('2022-04-13', 6.997, 1981, 104.25, 108.78, 1676, 783.5, 4.712, 26.03, 1056.25, 140.625, 78.11, 3211.5, 458.2, 4519.5, 371.84, 32947, 1113.5, 20.1, 329.13, 225.05, 99.9, 1174, 142.77);
INSERT INTO `se_status` VALUES ('2022-04-14', 7.3, 1970.9, 106.95, 111.7, 1682.25, 790.25, 4.7235, 25.7, 1119.75, 140.675, 78.91, 3271.5, 461.4, 4475, 385.48, 33144, 1096.5, 20.06, 338.14, 223.6, 99.875, 1154, 141.98);
INSERT INTO `se_status` VALUES ('2022-04-18', 7.82, 1982.9, 108.21, 113.16, 1714.75, 813.25, 4.802, 26.15, 1171.75, 140.475, 79.99, 3271.5, 466, 4475, 389.08, 33144, 1120.5, 20.26, 337.81, 223.5, 116.525, 1185, 144.74);
INSERT INTO `se_status` VALUES ('2022-04-19', 7.176, 1955.7, 102.56, 107.25, 1716.5, 804, 4.718, 25.391, 1103.5, 141.35, 80.21, 3247, 464.4, 4523.05, 386.19, 33735, 1099, 19.74, 324.74, 221.3, 114.7, 1171.5, 139.68);
INSERT INTO `se_status` VALUES ('2022-04-20', 6.937, 1952.3, 102.75, 106.8, 1746.75, 815.75, 4.652, 25.271, 1128.5, 143.075, 80.81, 3250.75, 471.4, 4437, 397.31, 33479, 1088, 19.62, 328.48, 218.8, 112.475, 1163.25, 140.39);
INSERT INTO `se_status` VALUES ('2022-04-21', 6.957, 1944.9, 103.79, 108.33, 1748.25, 799.25, 4.704, 24.621, 1112.25, 144.1, 81.5, 3284.5, 468.9, 4479, 390.08, 33885, 1068, 19.87, 333.86, 228.15, 110.85, 1137.75, 138.59);
INSERT INTO `se_status` VALUES ('2022-04-22', 6.534, 1931, 102.07, 106.65, 1716, 793, 4.5815, 24.259, 1118.75, 142.45, 83.26, 3230, 458.8, 4471.24, 393.86, 33079, 1065.5, 19.24, 330.5, 227.3, 111.85, 1142.75, 139.46);
INSERT INTO `se_status` VALUES ('2022-04-25', 6.669, 1893.2, 98.54, 102.32, 1703.5, 800.25, 4.449, 23.67, 1065.5, 139.1, 82.74, 3071.5, 452.4, 4197.75, 409.09, 32617, 1062, 18.95, 323.98, 220.8, 107.8, 1145.25, 141.41);
INSERT INTO `se_status` VALUES ('2022-04-26', 6.85, 1901.4, 101.7, 104.99, 1705.25, 803.25, 4.441, 23.544, 1129.25, 140, 85.29, 3046.6, 444.8, 4217.5, 446.79, 33072, 1083.25, 18.99, 333.88, 221.4, 105.2, 1157.75, 142.53);
INSERT INTO `se_status` VALUES ('2022-04-27', 7.267, 1885.9, 102.02, 105.32, 1726.5, 815.5, 4.4565, 23.46, 1169.25, 138.5, 87.8, 3078, 451, 4258, 467.43, 33297, 1080, 19.02, 345.6, 215.95, 104.175, 1148.25, 146.08);
INSERT INTO `se_status` VALUES ('2022-04-28', 6.888, 1891.3, 105.36, 107.59, 1706.5, 816, 4.4135, 23.129, 1190.75, 138.5, 90.6, 3014.5, 440.2, 4176.5, 513.54, 32955, 1074, 19.42, 350.34, 217.9, 103.975, 1136.25, 153.08);
INSERT INTO `se_status` VALUES ('2022-04-29', 7.244, 1911.7, 104.69, 109.34, 1708.25, 818.25, 4.395, 23.04, 1227.25, 141.9, 89.17, 3035.5, 440.5, 4141.25, 478.17, 31747, 1043.75, 19.35, 347.21, 222.55, 100.9, 1094.25, 152.33);
INSERT INTO `se_status` VALUES ('2022-05-02', 7.475, 1863.6, 105.17, 107.58, 1674, 813, 4.2555, 22.544, 1247.75, 135.2, 82.7, 3035.5, 442.9, 4141.25, 420.49, 31747, 1043.5, 18.85, 351.01, 216.4, 99.875, 1086.75, 157.16);
INSERT INTO `se_status` VALUES ('2022-05-03', 7.954, 1870.6, 102.41, 104.97, 1659, 800.75, 4.271, 22.621, 1196.5, 135.325, 84.3, 2884.25, 436.4, 3983.75, 408.27, 30919, 1033.75, 18.62, 350.12, 218.2, 99.775, 1081.75, 153.33);
INSERT INTO `se_status` VALUES ('2022-05-04', 8.415, 1868.8, 107.81, 110.14, 1669.75, 798.5, 4.3285, 22.362, 1193, 134.825, 87.08, 2926.25, 428.3, 3983.25, 419.7, 30554, 1066, 18.62, 365.23, 221.2, 102.6, 1112.5, 158.02);
INSERT INTO `se_status` VALUES ('2022-05-05', 8.783, 1875.7, 108.26, 110.9, 1678.5, 803.75, 4.285, 22.4, 1189.5, 133.775, 86.5, 2887.75, 426.9, 3922.5, 404.13, 30040, 1096, 18.78, 365.87, 218.4, 102.8, 1165.75, 152.02);
INSERT INTO `se_status` VALUES ('2022-05-06', 8.043, 1882.8, 109.77, 112.39, 1655.5, 792.25, 4.2615, 22.325, 1139, 132.75, 88.4, 2813.99, 423.4, 3786.25, 395.43, 29995.01, 1097, 19.16, 375.9, 211.6, 102.2, 1159.25, 146.87);
INSERT INTO `se_status` VALUES ('2022-05-09', 7.026, 1858.6, 103.09, 105.94, 1621, 784.5, 4.193, 21.782, 1083.25, 133.55, 87.18, 2723, 411.1, 3623.5, 383.49, 28091, 1083.25, 18.66, 364.19, 206.3, 100.875, 1153.25, 142.93);
INSERT INTO `se_status` VALUES ('2022-05-10', 7.385, 1841, 99.76, 102.46, 1630, 786.5, 4.1545, 21.39, 1126, 132.4, 87.96, 2723.45, 407.9, 3608.51, 393.22, 28319, 1083.25, 18.54, 354.15, 204, 101.075, 1168.25, 142.94);
INSERT INTO `se_status` VALUES ('2022-05-11', 7.64, 1853.7, 105.71, 107.51, 1650.25, 802.25, 4.2125, 21.55, 1138.75, 133.575, 89.45, 2747.75, 400.6, 3684.26, 395.12, 27721, 1108.75, 18.55, 368.55, 220.1, 100.925, 1186.25, 143.6);
INSERT INTO `se_status` VALUES ('2022-05-12', 7.739, 1824.6, 106.13, 107.45, 1660.25, 813.5, 4.105, 20.757, 1138.75, 131.65, 88.52, 2711.75, 399.4, 3539.5, 391.61, 27724.5, 1174.5, 18.64, 379.17, 215, 100.1, 1254, 145.53);
INSERT INTO `se_status` VALUES ('2022-05-13', 7.663, 1808.2, 110.49, 111.55, 1723.25, 794.5, 4.1805, 20.984, 1107, 132.075, 88.34, 2760.75, 406.4, 3493.5, 392.12, 27172.5, 1167.25, 19.17, 395.78, 212.9, 100, 1252.75, 145.2);
INSERT INTO `se_status` VALUES ('2022-05-16', 7.956, 1814, 114.2, 114.24, 1656.5, 809.5, 4.1965, 21.535, 1094, 133.175, 82.99, 2802.75, 413.6, 3564.5, 390.75, 26449.5, 1247.5, 19.68, 402.29, 225.8, 103.825, 1352, 150.65);
INSERT INTO `se_status` VALUES ('2022-05-17', 8.304, 1818.9, 112.4, 111.93, 1678, 800.75, 4.2395, 21.737, 1090.5, 133, 83.49, 2877, 411.8, 3670.25, 379.93, 26352, 1277.5, 20, 394.17, 228.2, 105.15, 1367.75, 148.46);
INSERT INTO `se_status` VALUES ('2022-05-18', 8.368, 1815.9, 109.59, 109.11, 1662.75, 781.5, 4.182, 21.533, 1047.75, 131.5, 80.55, 2847.01, 414, 3631.5, 366.81, 26122, 1230.75, 19.83, 372.06, 218.6, 106.1, 1324.5, 144.47);
INSERT INTO `se_status` VALUES ('2022-05-19', 8.308, 1841.2, 112.21, 112.04, 1690.5, 783.25, 4.285, 21.898, 1045, 131.5, 79.53, 2901.54, 425.3, 3731.07, 379.2, 28209, 1200.5, 19.77, 383.17, 218.7, 105.3, 1295.25, 147.7);
INSERT INTO `se_status` VALUES ('2022-05-20', 8.083, 1842.1, 113.23, 112.55, 1705.25, 778.75, 4.281, 21.669, 1068, 131.575, 80.93, 2940.51, 429.9, 3724, 373.91, 27951, 1168.75, 19.95, 383.7, 215.85, 108.875, 1252.75, 142.27);
INSERT INTO `se_status` VALUES ('2022-05-23', 8.744, 1847.8, 110.29, 113.42, 1687, 786.25, 4.3475, 21.723, 1071, 132.775, 80.47, 2940.25, 422.5, 3802.5, 376.88, 27702, 1190, 19.77, 379.77, 215.75, 110.375, 1276.5, 142.75);
INSERT INTO `se_status` VALUES ('2022-05-24', 8.796, 1865.4, 109.77, 113.56, 1693, 771.75, 4.3255, 22.063, 1093.25, 132.725, 80.12, 2882.9, 427.1, 3801.75, 378.18, 26514, 1154.75, 19.75, 381.1, 213.65, 109.025, 1237.75, 141.54);
INSERT INTO `se_status` VALUES ('2022-05-25', 8.971, 1846.3, 110.33, 114.03, 1681, 772.25, 4.277, 21.86, 1110, 132.3, 78.92, 2856, 424.2, 3758.5, 386.64, 26749, 1148.25, 19.68, 383.17, 217.05, 109.05, 1233.25, 145.16);
INSERT INTO `se_status` VALUES ('2022-05-26', 8.908, 1847.6, 114.09, 117.4, 1726.5, 765, 4.255, 21.941, 1159.5, 132.4, 80.52, 2846.5, 428.2, 3743, 396.8, 27167, 1143.25, 19.54, 387.74, 226.6, 111.1, 1228.5, 140.61);
INSERT INTO `se_status` VALUES ('2022-05-27', 8.727, 1851.3, 115.07, 119.43, 1732.25, 777.25, 4.3065, 22.096, 1168.75, 132.175, 79.57, 2853, 432.3, 3862, 400.29, 28247, 1157.5, 19.61, 401.58, 229.45, 110.4, 1235.25, 139.42);
INSERT INTO `se_status` VALUES ('2022-05-30', 8.727, 1851.3, 115.07, 121.67, 1732.25, 777.25, 4.3065, 22.096, 1196, 132.175, 79.57, 2867.68, 432.3, 3914.75, 400.29, 29241, 1157.5, 19.61, 401.58, 229.45, 110.4, 1235.25, 139.42);
INSERT INTO `se_status` VALUES ('2022-05-31', 8.145, 1842.7, 114.67, 122.84, 1683.25, 753.5, 4.296, 21.688, 1244.25, 130.525, 77.92, 2763.75, 414.8, 3929, 409.09, 28348, 1087.5, 19.4, 408.04, 231.25, 107.975, 1165.5, 138.98);
INSERT INTO `se_status` VALUES ('2022-06-01', 8.696, 1843.3, 115.26, 116.29, 1690.25, 731.25, 4.3285, 21.915, 1270, 132.8, 78.11, 2703, 412.7, 3877.5, 414.33, 28071.5, 1041.25, 19.44, 407.16, 239.45, 109.8, 1128.25, 136.06);
INSERT INTO `se_status` VALUES ('2022-06-02', 8.485, 1866.5, 116.87, 117.61, 1729.25, 730.25, 4.5525, 22.275, 1258.5, 133.625, 81.44, 2703, 414.9, 3877.5, 420.84, 28071.5, 1058.25, 19.35, 419.09, 238.25, 110.05, 1143.5, 139.11);
INSERT INTO `se_status` VALUES ('2022-06-03', 8.523, 1845.4, 118.87, 119.72, 1697.75, 727, 4.472, 21.908, 1318.5, 133.6, 81.85, 2703, 407.9, 3877.5, 428.03, 28071.5, 1040, 19.29, 425.22, 232.4, 110.2, 1121, 138.18);
INSERT INTO `se_status` VALUES ('2022-06-06', 9.322, 1839.2, 118.5, 119.51, 1699.25, 742.5, 4.435, 22.092, 1353, 132.825, 81.19, 2755.61, 407.1, 3872.5, 436.01, 29638, 1093, 19.56, 419.3, 237.55, 109.225, 1170, 137.74);
INSERT INTO `se_status` VALUES ('2022-06-07', 9.293, 1847.5, 119.41, 120.57, 1728.25, 757, 4.4355, 22.178, 1336.5, 133.725, 81.44, 2749, 417.4, 3801, 432.06, 29412.5, 1071.75, 18.97, 415.77, 232.15, 108.425, 1149.25, 136.95);
INSERT INTO `se_status` VALUES ('2022-06-08', 8.699, 1851.9, 122.11, 123.58, 1740, 764.5, 4.4545, 22.094, 1339.75, 136.825, 82.94, 2790.5, 415.6, 3829.5, 431.43, 28784.5, 1074.75, 18.98, 422.19, 231.85, 107.85, 1155, 140.62);
INSERT INTO `se_status` VALUES ('2022-06-09', 8.963, 1848.8, 121.51, 123.07, 1769, 773, 4.381, 21.817, 1389.5, 137.05, 82.63, 2733.5, 427.5, 3769.75, 440.37, 27949, 1071.25, 19.29, 427.62, 234.65, 106.975, 1153.75, 146.51);
INSERT INTO `se_status` VALUES ('2022-06-10', 8.85, 1871.5, 120.67, 122.01, 1745.5, 773.25, 4.2945, 21.931, 1389.5, 136.2, 80.81, 2661.25, 429.1, 3703.75, 436.67, 27190, 1070.75, 18.87, 417.22, 228.9, 107.8, 1162.5, 145.06);
INSERT INTO `se_status` VALUES ('2022-06-13', 8.609, 1828, 120.93, 122.27, 1707.5, 769.25, 4.2115, 21.255, 1267.75, 134, 79.51, 2602.5, 415.1, 3627.8, 428.34, 25838, 1071, 18.71, 403.53, 223.35, 108, 1161.75, 145.66);
INSERT INTO `se_status` VALUES ('2022-06-14', 7.189, 1809.5, 118.93, 121.17, 1698.5, 768.25, 4.1565, 20.954, 1297.75, 135.2, 78.28, 2553.75, 411, 3604.75, 439.4, 25197, 1050.25, 18.7, 399.38, 226.95, 108.45, 1142.25, 143.48);
INSERT INTO `se_status` VALUES ('2022-06-15', 7.42, 1815.3, 115.31, 118.51, 1693.75, 774, 4.1635, 21.42, 1332.25, 137.55, 77.67, 2578.5, 417.5, 3653.5, 454.7, 25797, 1050, 18.46, 389.42, 228.5, 108.275, 1133.25, 143.18);
INSERT INTO `se_status` VALUES ('2022-06-16', 7.464, 1845.7, 117.59, 119.81, 1709.5, 788.25, 4.108, 21.885, 1300.25, 137.75, 76.34, 2489.01, 429.7, 3586.5, 457.13, 25204, 1078.25, 18.58, 395.58, 231.95, 109.575, 1148.5, 143.53);
INSERT INTO `se_status` VALUES ('2022-06-17', 6.944, 1835.6, 109.56, 113.12, 1702, 784.5, 4.0135, 21.587, 1294, 138.025, 73.79, 2483.25, 438.1, 3532.5, 433.98, 25611, 1034.25, 18.6, 379.3, 227.65, 111, 1105, 143.45);
INSERT INTO `se_status` VALUES ('2022-06-20', 6.944, 1835.6, 109.56, 114.13, 1702, 784.5, 4.0135, 21.587, 1317, 138.025, 73.79, 2514.75, 438.1, 3533.75, 433.98, 25685, 1034.25, 18.6, 379.3, 227.65, 111, 1105, 143.45);
INSERT INTO `se_status` VALUES ('2022-06-21', 6.808, 1834.6, 110.65, 114.65, 1681, 760.75, 4.039, 21.768, 1320.25, 137.825, 73.37, 2524.25, 431.3, 3618, 435.84, 25901, 975.25, 18.66, 379.45, 233.1, 112.725, 1041.25, 143.51);
INSERT INTO `se_status` VALUES ('2022-06-22', 6.858, 1834.3, 106.19, 111.74, 1652.75, 768, 3.944, 21.421, 1284.25, 136.125, 70.66, 2468.65, 432.4, 3571.5, 440.46, 24399, 976.5, 18.45, 383.41, 238.6, 111.85, 1039.25, 143.32);
INSERT INTO `se_status` VALUES ('2022-06-23', 6.239, 1825.7, 104.27, 110.05, 1593.25, 746.75, 3.739, 21.042, 1290.5, 135.25, 67.71, 2469.5, 426.7, 3539.5, 433.79, 23996, 937.25, 18.38, 376.56, 232.45, 108.55, 1005, 136.32);
INSERT INTO `se_status` VALUES ('2022-06-24', 6.22, 1826.5, 107.62, 113.12, 1610.75, 750.25, 3.7405, 21.125, 1302, 135.35, 69.75, 2445.26, 432.6, 3400, 436.29, 22360, 923.75, 18.37, 388.48, 226.6, 110.925, 992.5, 103.76);
INSERT INTO `se_status` VALUES ('2022-06-27', 6.501, 1820.9, 109.57, 115.09, 1630.5, 744.25, 3.7625, 21.168, 1262.5, 136.25, 70.82, 2479.75, 442.7, 3349.01, 423.02, 22846, 904, 18.3, 383.72, 226, 110.175, 972.75, 100.35);
INSERT INTO `se_status` VALUES ('2022-06-28', 6.551, 1817.5, 111.76, 117.98, 1663.75, 759.5, 3.774, 20.806, 1218.75, 136.3, 72.09, 2475.75, 455.1, 3368, 419.94, 23119, 921.25, 18.53, 393.51, 221.9, 109.925, 983.75, 100.12);
INSERT INTO `se_status` VALUES ('2022-06-29', 6.498, 1817.5, 109.78, 116.26, 1674.25, 770.25, 3.779, 20.668, 1219.75, 136.8, 72.6, 2457.5, 463.2, 3385.3, 403.67, 23746, 915.5, 18.55, 382.7, 232.65, 109.4, 985.25, 104.28);
INSERT INTO `se_status` VALUES ('2022-06-30', 5.424, 1807.3, 105.76, 114.81, 1675, 743.75, 3.7145, 20.282, 1160, 138, 69.93, 2432.5, 469.9, 3181.75, 389.82, 22651, 868.75, 18.83, 364.98, 233.6, 109.125, 948.75, 103.94);
INSERT INTO `se_status` VALUES ('2022-07-01', 5.73, 1801.5, 108.43, 111.63, 1626, 754.5, 3.619, 19.597, 1226.5, 134.6, 65.68, 2435.51, 459.7, 3069.25, 393.89, 21767, 831.25, 18.07, 368.78, 228.45, 109.6, 911, 103.68);
INSERT INTO `se_status` VALUES ('2022-07-04', 5.73, 1801.5, 108.43, 113.5, 1626, 754.5, 3.619, 19.597, 1238.75, 134.6, 65.68, 2458.25, 459.7, 3166, 393.89, 22448, 831.25, 18.07, 368.78, 228.45, 109.6, 911, 103.68);
INSERT INTO `se_status` VALUES ('2022-07-05', 5.523, 1763.9, 99.5, 102.77, 1575.25, 736, 3.425, 19.052, 1153.75, 132.925, 60.52, 2380.5, 452.8, 3035.6, 360.16, 22586, 793.75, 17.8, 332.9, 224.65, 112.15, 860.25, 99.68);
INSERT INTO `se_status` VALUES ('2022-07-06', 5.51, 1736.5, 98.53, 100.69, 1580.25, 744.25, 3.418, 19.085, 1082.75, 134.5, 60.22, 2399.5, 462.6, 3044, 341.06, 21782, 792.25, 17.99, 323.66, 222.5, 113.15, 849.25, 94.69);
INSERT INTO `se_status` VALUES ('2022-07-07', 6.297, 1739.7, 102.73, 104.65, 1591.25, 747, 3.582, 19.122, 1129.25, 134.55, 63.17, 2435.5, 470, 3180, 367.39, 21470.5, 824.5, 18.52, 342.04, 222.2, 113.25, 891, 98.12);
INSERT INTO `se_status` VALUES ('2022-07-08', 6.034, 1742.3, 104.79, 107.02, 1630.25, 778.25, 3.532, 19.167, 1133.5, 133.95, 64.07, 2426.5, 478.4, 3161.5, 367.29, 21513.5, 879.25, 19.02, 344.71, 222.9, 112.85, 950.75, 102.61);
INSERT INTO `se_status` VALUES ('2022-07-11', 6.426, 1731.7, 104.09, 107.1, 1641, 781.25, 3.4375, 19.067, 1192.5, 136.15, 65.21, 2368.5, 482.9, 3125, 376.81, 21784, 843.75, 18.86, 346.22, 216.9, 113.15, 920.25, 102.44);
INSERT INTO `se_status` VALUES ('2022-07-12', 6.163, 1724.8, 95.84, 99.49, 1592.75, 732.75, 3.2965, 18.899, 1192.5, 136.675, 61.41, 2350.25, 478.7, 3108.5, 366.26, 21311, 801.5, 18.69, 326.46, 209.25, 113.6, 872.75, 98.44);
INSERT INTO `se_status` VALUES ('2022-07-13', 6.689, 1735.5, 96.3, 99.57, 1588.25, 740, 3.3255, 19.138, 1095.5, 136.875, 60.21, 2345, 491.5, 3036, 366.59, 21087.5, 798.25, 19.14, 323.37, 211.25, 114.5, 867.25, 95.41);
INSERT INTO `se_status` VALUES ('2022-07-14', 6.6, 1705.8, 95.78, 99.1, 1610, 695, 3.2105, 18.169, 1067.25, 135.4, 59.8, 2324, 497.3, 2949.5, 364.94, 19342, 794.25, 18.97, 318.68, 199.2, 114.925, 867.25, 91.41);
INSERT INTO `se_status` VALUES ('2022-07-15', 7.016, 1703.6, 97.59, 101.16, 1466, 604.25, 3.2345, 18.548, 1112.5, 134.925, 60.08, 2326.5, 431, 2978, 369.9, 19330, 776.75, 19.25, 321.32, 203.7, 114.9, 837.5, 96.41);
INSERT INTO `se_status` VALUES ('2022-07-18', 7.479, 1710.2, 102.6, 106.27, 1497.25, 612.25, 3.348, 18.791, 1115.25, 135.625, 63.2, 2410.19, 434.5, 3091.5, 365.55, 20604.5, 812.75, 19.41, 326.43, 219.1, 112.125, 874, 100.42);
INSERT INTO `se_status` VALUES ('2022-07-19', 7.264, 1710.7, 104.22, 107.35, 1477.25, 596.75, 3.2915, 18.67, 1068.25, 135.725, 61.89, 2381.25, 435, 3001.5, 362.68, 20566.5, 812.25, 18.84, 330.75, 220.4, 112.825, 869.25, 100.2);
INSERT INTO `se_status` VALUES ('2022-07-20', 8.007, 1700.2, 102.26, 106.92, 1449, 592.25, 3.3295, 18.639, 1071.75, 135.75, 60.03, 2431.75, 436.5, 3069, 360.43, 21154.25, 819.5, 18.67, 327.54, 218.15, 114.875, 870.5, 100.38);
INSERT INTO `se_status` VALUES ('2022-07-21', 7.932, 1713.4, 96.35, 103.86, 1418.5, 575.75, 3.302, 18.687, 1026.5, 135.725, 58.6, 2421.25, 434.4, 2992.25, 359.03, 21455, 806.25, 18.35, 314.95, 215.85, 116.3, 861.25, 99.6);
INSERT INTO `se_status` VALUES ('2022-07-22', 8.299, 1727.4, 94.7, 103.2, 1434.5, 564.25, 3.3485, 18.585, 1067.5, 137.375, 60.32, 2481.75, 431.5, 3048.5, 345.56, 22100, 759, 17.89, 322.28, 206.7, 118.7, 820.25, 99.43);
INSERT INTO `se_status` VALUES ('2022-07-25', 8.727, 1719.1, 96.7, 105.15, 1473, 580, 3.351, 18.294, 1055.75, 137.75, 60.01, 2412.5, 447.5, 3044.5, 351.66, 22190.5, 770, 17.47, 338.2, 210.05, 117.225, 839.75, 97.52);
INSERT INTO `se_status` VALUES ('2022-07-26', 8.993, 1717.7, 94.98, 104.4, 1532.75, 597, 3.3825, 18.487, 1069.5, 136.875, 60.42, 2428.25, 472.4, 3108, 358.39, 21529, 803.75, 17.47, 335.5, 213.2, 116.975, 877, 99.69);
INSERT INTO `se_status` VALUES ('2022-07-27', 8.687, 1719.1, 97.26, 106.62, 1578.75, 600.25, 3.4295, 18.553, 1101.5, 136.8, 61.18, 2428.25, 488.9, 3120, 371.73, 21770, 790.25, 17.4, 342.88, 219.1, 118.6, 861.75, 99.83);
INSERT INTO `se_status` VALUES ('2022-07-28', 8.134, 1750.3, 96.42, 107.14, 1609.25, 615, 3.4745, 19.868, 1103.75, 136.175, 65.84, 2463.5, 489.7, 3237, 368.63, 21894, 817, 17.72, 346.46, 218.4, 119.125, 889.75, 102.37);
INSERT INTO `se_status` VALUES ('2022-07-29', 8.229, 1762.9, 98.62, 110.01, 1637, 616.25, 3.5735, 20.197, 1106.5, 136.45, 68.6, 2501.24, 495.3, 3388.26, 362.47, 23589, 807.75, 17.54, 348.81, 217.2, 120.65, 874.5, 103.13);
INSERT INTO `se_status` VALUES ('2022-08-01', 8.283, 1769, 93.89, 100.03, 1594.25, 607, 3.5425, 20.362, 1028.5, 136.775, 66.23, 2443.21, 487, 3416, 344, 23539, 800.25, 17.6, 299.81, 213.2, 120.45, 866.5, 100.29);
INSERT INTO `se_status` VALUES ('2022-08-02', 7.706, 1771.1, 94.42, 100.54, 1569.25, 591.25, 3.5185, 20.139, 1014.5, 136.575, 65.2, 2421.75, 489.2, 3392, 338.04, 22453, 774.75, 17.69, 305.67, 209.9, 119.85, 842.25, 100.87);
INSERT INTO `se_status` VALUES ('2022-08-03', 8.266, 1758, 90.66, 96.78, 1558, 591.5, 3.467, 19.894, 1035, 137.9, 65.08, 2383.6, 481.7, 3366.5, 341.48, 22290.75, 763.75, 17.77, 291.22, 214.65, 121, 835.5, 100.36);
INSERT INTO `se_status` VALUES ('2022-08-04', 8.122, 1788.5, 88.54, 94.12, 1615, 602.25, 3.4815, 20.122, 1009, 137.7, 66.04, 2410.76, 513.7, 3558.5, 333.72, 22150, 782.5, 17.55, 279.35, 219.3, 120.65, 860.25, 100.12);
INSERT INTO `se_status` VALUES ('2022-08-05', 8.064, 1772.9, 89.01, 94.92, 1614.75, 610.25, 3.552, 19.842, 990, 137.875, 68.59, 2426.75, 499.1, 3587.5, 321.59, 22166, 775.75, 17.94, 285.56, 209.45, 120.825, 848.25, 101.68);
INSERT INTO `se_status` VALUES ('2022-08-08', 7.589, 1786.8, 90.76, 96.65, 1619.5, 608.5, 3.5865, 20.614, 953.75, 138.35, 69.2, 2457.5, 498.7, 3551.5, 317.91, 21624, 779.75, 17.96, 288.62, 211.85, 121.8, 847.75, 101.58);
INSERT INTO `se_status` VALUES ('2022-08-09', 7.833, 1794, 90.5, 96.31, 1693.25, 615.5, 3.5855, 20.482, 997.75, 137.975, 69.69, 2501.75, 513.6, 3664, 333.38, 21495, 781.5, 17.98, 296.02, 212.75, 122.2, 851.75, 104.54);
INSERT INTO `se_status` VALUES ('2022-08-10', 8.202, 1795.6, 91.93, 97.4, 1688.75, 621.25, 3.6495, 20.742, 992, 139.2, 70.56, 2497.26, 515.6, 3706.75, 341.03, 22426, 799.75, 18.28, 307.03, 220.45, 122.25, 872.75, 106.75);
INSERT INTO `se_status` VALUES ('2022-08-11', 8.874, 1789.7, 94.34, 99.6, 1709.5, 629.25, 3.7065, 20.349, 992, 140.6, 71.97, 2525.2, 520.2, 3783.25, 348.4, 23579.5, 810.75, 18.49, 307.15, 223.95, 122.4, 889.25, 110.44);
INSERT INTO `se_status` VALUES ('2022-08-12', 8.768, 1798.6, 92.09, 98.15, 1669.25, 639.75, 3.6685, 20.698, 1045.25, 140.225, 71.97, 2438.15, 520.2, 3688.25, 351.78, 22960.5, 806, 18.6, 304.6, 226.6, 121.725, 889.25, 114.44);
INSERT INTO `se_status` VALUES ('2022-08-15', 8.728, 1781.4, 89.41, 95.1, 1494, 626.75, 3.6175, 20.272, 1022, 139.75, 68.94, 2390.5, 452.2, 3643.5, 344.03, 21937.75, 800.75, 18.54, 295.17, 225.5, 100.575, 882.75, 119.44);
INSERT INTO `se_status` VALUES ('2022-08-16', 9.329, 1773.2, 86.53, 92.34, 1454.25, 611, 3.6245, 20.085, 1018, 141.3, 67.84, 2391.75, 435.9, 3741, 348.02, 22179.75, 786, 18.27, 290.07, 219.35, 96.575, 871.75, 122.25);
INSERT INTO `se_status` VALUES ('2022-08-17', 9.244, 1760.3, 88.11, 93.65, 1475.25, 615, 3.5835, 19.731, 1041.5, 141.75, 67.41, 2412.25, 440.6, 3569.5, 361.74, 21830, 763.25, 18.24, 293.45, 217.45, 98.05, 851, 118.32);
INSERT INTO `se_status` VALUES ('2022-08-18', 9.188, 1755.3, 90.5, 96.59, 1495.5, 619.75, 3.6315, 19.464, 1074.25, 141.275, 66.26, 2405.5, 449.4, 3532, 364.97, 21724, 731.5, 17.77, 302.61, 214.7, 93.3, 812.5, 117.12);
INSERT INTO `se_status` VALUES ('2022-08-19', 9.336, 1747.6, 90.77, 96.72, 1488.75, 626, 3.6645, 19.069, 1087.25, 141.6, 67.9, 2392.25, 448.7, 3547.5, 370.05, 22197, 753.25, 18.09, 301.75, 215.95, 93.125, 844.75, 119.75);
INSERT INTO `se_status` VALUES ('2022-08-22', 9.68, 1734, 90.23, 96.48, 1527, 633.5, 3.6515, 18.878, 1096.75, 141.225, 68.77, 2398.75, 460.5, 3558.77, 377.62, 22279, 770.5, 17.94, 289.12, 224.3, 93.975, 865.25, 117.89);
INSERT INTO `se_status` VALUES ('2022-08-23', 9.193, 1746.8, 93.74, 100.22, 1566.75, 660, 3.6955, 19.026, 1119, 141.625, 69.59, 2434.5, 468.5, 3545.5, 384.19, 21680, 782.75, 17.89, 293.3, 230.65, 92.9, 882.5, 116.26);
INSERT INTO `se_status` VALUES ('2022-08-24', 9.33, 1747.8, 94.89, 101.22, 1560.75, 665.75, 3.644, 18.907, 1167.75, 141.325, 68.77, 2437.99, 467.7, 3577.5, 401.32, 21288.5, 795, 18.04, 280.07, 242.95, 90.375, 896.25, 117.57);
INSERT INTO `se_status` VALUES ('2022-08-25', 9.375, 1757.7, 92.52, 99.34, 1552.5, 657.5, 3.699, 19.12, 1174, 141.1, 69.09, 2440.75, 458, 3616, 394.91, 21602, 769.75, 17.9, 281.21, 243.4, 91.1, 869, 117.18);
INSERT INTO `se_status` VALUES ('2022-08-26', 9.296, 1741, 92.26, 99.44, 1599.25, 668.75, 3.6915, 18.71, 1180.25, 141.25, 70.86, 2440.75, 475.7, 3616, 399.25, 21602, 784.25, 18.47, 276.06, 242, 90.625, 884, 122.18);
INSERT INTO `se_status` VALUES ('2022-08-29', 9.353, 1736.6, 97.01, 105.09, 1534.75, 683.75, 3.612, 18.557, 1186.25, 141.55, 70.98, 2440.75, 478.4, 3616, 390.99, 21602, 820, 18.44, 287.76, 240.5, 92.25, 912.5, 122.02);
INSERT INTO `se_status` VALUES ('2022-08-30', 9.042, 1726.9, 91.64, 99.31, 1513, 679.75, 3.545, 18.159, 1122, 142.5, 70.79, 2395, 462.4, 3557.5, 381.71, 21289, 798.25, 18.1, 269.44, 239.15, 93.6, 908.75, 117.47);
INSERT INTO `se_status` VALUES ('2022-08-31', 9.127, 1716.9, 89.55, 96.49, 1507.5, 673.75, 3.5185, 17.762, 1098.5, 141.55, 72.74, 2364.75, 458.9, 3528.5, 371.54, 21337, 809, 17.89, 260.59, 239.1, 91.525, 924.25, 118.29);
INSERT INTO `se_status` VALUES ('2022-09-01', 9.262, 1699.6, 86.61, 92.36, 1472.75, 658.25, 3.4145, 17.551, 1050.5, 142.8, 68.52, 2299, 452, 3317.25, 356.12, 20244.5, 775.5, 17.99, 238.53, 236.35, 91.95, 863.5, 113.29);
INSERT INTO `se_status` VALUES ('2022-09-02', 8.738, 1717.5, 88.23, 94.15, 1507.75, 668.5, 3.4555, 18, 1088.5, 144.25, 70.55, 2299, 450, 3317.25, 359.29, 20244.5, 775.5, 18.22, 247.69, 237.55, 90.9, 883.25, 112.2);
INSERT INTO `se_status` VALUES ('2022-09-05', 8.738, 1717.5, 88.23, 95.74, 1507.75, 668.5, 3.4555, 18, 1142, 144.25, 70.55, 2287.25, 450, 3242.5, 359.29, 21408.01, 775.5, 18.22, 247.69, 237.55, 90.9, 883.25, 112.2);
INSERT INTO `se_status` VALUES ('2022-09-06', 8.145, 1703.4, 86.88, 92.83, 1490, 680.75, 3.469, 17.795, 1079.25, 145.05, 68.96, 2254.75, 433.5, 3205.5, 357.38, 21527, 800, 17.98, 241.59, 233.9, 91.1, 879, 108.29);
INSERT INTO `se_status` VALUES ('2022-09-07', 7.842, 1718.2, 81.94, 88, 1466.75, 676.75, 3.438, 18.137, 1099.5, 144.25, 67.73, 2227, 436.1, 3153, 358.6, 21522, 826.5, 18.05, 230.77, 226.9, 91.075, 901.5, 106.1);
INSERT INTO `se_status` VALUES ('2022-09-08', 7.915, 1710.6, 83.54, 89.15, 1470.5, 674.5, 3.536, 18.33, 1075, 144.375, 68.86, 2259.01, 427.8, 3150.5, 354.01, 21696, 810.5, 17.93, 234.61, 225.85, 92.125, 893, 108.32);
INSERT INTO `se_status` VALUES ('2022-09-09', 7.957, 1715.8, 86.18, 91.85, 1470.5, 686.75, 3.56, 18.42, 1083, 145.475, 68.86, 2259.01, 431.9, 3150.5, 359.07, 21696, 810, 18.16, 240.47, 229.7, 93.1, 893, 108.32);
INSERT INTO `se_status` VALUES ('2022-09-12', 8.249, 1730.8, 87.78, 94, 1549.75, 712.25, 3.6255, 19.755, 1085, 145.75, 71.92, 2271.25, 472.9, 3210.5, 360.31, 24532.5, 841.25, 18.35, 244.48, 227.75, 91.875, 937.25, 110.21);
INSERT INTO `se_status` VALUES ('2022-09-13', 8.284, 1707.1, 87.31, 93.17, 1534.25, 709, 3.581, 19.39, 1057.5, 144.8, 71.96, 2301.25, 462.1, 3250.5, 354.13, 24252, 842.75, 18.38, 248.04, 223.95, 95.75, 944, 106.32);
INSERT INTO `se_status` VALUES ('2022-09-14', 9.114, 1698.2, 88.48, 94.1, 1503.75, 709, 3.5455, 19.471, 991.5, 144.35, 68.51, 2259.5, 461.3, 3255.5, 337.89, 24182, 853.75, 18.27, 252.45, 217.6, 94.7, 961.5, 107.09);
INSERT INTO `se_status` VALUES ('2022-09-15', 8.324, 1666.8, 85.1, 90.84, 1451.5, 677.5, 3.5235, 19.175, 923.25, 145.625, 66.79, 2299.5, 434.5, 3215.25, 320.52, 23096.25, 845, 18.18, 242.87, 219.15, 96.05, 926.25, 105.24);
INSERT INTO `se_status` VALUES ('2022-09-16', 8.029, 1675.5, 86.39, 92.41, 1441.5, 671.75, 3.558, 19.325, 946.75, 145.275, 67.6, 2299.5, 427.5, 3215.25, 320.66, 23096.25, 836.25, 17.94, 243.84, 216.15, 96.25, 914.5, 102.45);
INSERT INTO `se_status` VALUES ('2022-09-19', 7.752, 1667.6, 85.73, 92, 1461.25, 678.25, 3.5575, 19.273, 963, 145.725, 68, 2238, 438.2, 3165.75, 331.08, 24556, 830.5, 17.69, 246.41, 224.05, 96.475, 909.75, 97.54);
INSERT INTO `se_status` VALUES ('2022-09-20', 7.717, 1661, 84.45, 90.62, 1478.75, 692, 3.548, 19.102, 976.25, 146.3, 68.59, 2238.75, 450.8, 3146.25, 337.22, 24918, 893.75, 18.19, 244.78, 228.1, 95.975, 963, 93.54);
INSERT INTO `se_status` VALUES ('2022-09-21', 7.779, 1665.8, 82.94, 89.83, 1461.25, 685.5, 3.512, 19.411, 967.25, 145.875, 67.83, 2192, 454.7, 3114.5, 333.38, 24894, 903.75, 18.22, 248.65, 221.3, 94.425, 967, 97.25);
INSERT INTO `se_status` VALUES ('2022-09-22', 7.089, 1671.4, 83.49, 90.46, 1457, 688.25, 3.4985, 19.548, 1006.25, 144.85, 69.43, 2225.85, 445.9, 3123.75, 341.15, 24502, 910.75, 18.49, 251.57, 223.55, 94.125, 979.5, 96.83);
INSERT INTO `se_status` VALUES ('2022-09-23', 6.821, 1641.8, 78.91, 86.26, 1428.75, 674.75, 3.365, 19.51, 961.75, 144.4, 67.27, 2225.85, 442.3, 3123.75, 326.41, 24502, 884.75, 18.2, 237.7, 219.65, 93.35, 954.75, 96.83);
INSERT INTO `se_status` VALUES ('2022-09-26', 6.903, 1623.6, 76.71, 84.06, 1411.25, 666.25, 3.3135, 18.406, 934.25, 143.475, 66.11, 2131.75, 432.6, 2940, 312.91, 22064, 858, 18.35, 238.42, 223.8, 90.375, 929.5, 90.32);
INSERT INTO `se_status` VALUES ('2022-09-27', 6.651, 1626.5, 78.5, 86.27, 1408, 667.5, 3.323, 18.257, 967.25, 143.575, 65.66, 2106.5, 426.1, 2880, 325.99, 21728, 871.5, 18.19, 249.31, 224.35, 88.7, 943.25, 90.04);
INSERT INTO `se_status` VALUES ('2022-09-28', 6.868, 1660.3, 82.15, 89.32, 1408.75, 670.5, 3.382, 18.796, 1008.75, 143.05, 65.52, 2116.75, 421.8, 2874, 344.94, 21696, 903.25, 18.29, 257.79, 228.7, 89.375, 976, 90.44);
INSERT INTO `se_status` VALUES ('2022-09-29', 6.874, 1658.5, 81.23, 88.49, 1410.75, 669.5, 3.418, 18.712, 1011.75, 144.125, 67.48, 2195.25, 409.1, 2960.75, 341.46, 22250, 896.25, 18.44, 250.76, 225.7, 89.45, 966.75, 87.11);
INSERT INTO `se_status` VALUES ('2022-09-30', 6.766, 1662.4, 79.49, 87.96, 1364.75, 677.5, 3.4125, 19.039, 993.25, 143.275, 65.35, 2164.25, 403.2, 3018, 336.9, 21012, 921.5, 18.42, 247.26, 221.55, 89.225, 991.5, 93.22);
INSERT INTO `se_status` VALUES ('2022-10-03', 6.47, 1692.9, 83.63, 88.86, 1374, 680.75, 3.41, 20.589, 1031.25, 144.325, 66.88, 2220, 405.6, 3001.25, 336.91, 21136.5, 912, 17.42, 251.29, 215.75, 88.775, 988.75, 92.14);
INSERT INTO `se_status` VALUES ('2022-10-04', 6.837, 1721.1, 86.52, 91.8, 1383.5, 683, 3.49, 21.099, 1103.25, 144.2, 68.63, 2348.4, 403, 3081.51, 353.58, 21934, 903, 17.91, 268.3, 219.3, 87, 988.75, 96.14);
INSERT INTO `se_status` VALUES ('2022-10-05', 6.93, 1711.4, 87.76, 93.37, 1369.75, 684, 3.5005, 20.544, 1182.25, 144.675, 69.02, 2349.75, 402.5, 3087, 368.69, 22468.5, 902, 17.95, 266.85, 224.65, 90.8, 990.25, 91.23);
INSERT INTO `se_status` VALUES ('2022-10-06', 6.972, 1711.7, 88.45, 94.42, 1358, 675.5, 3.446, 20.66, 1185.75, 145.325, 69.67, 2342.5, 397.4, 3146.25, 386.49, 22671.5, 879, 18.46, 268.14, 217.7, 92.375, 965, 90.9);
INSERT INTO `se_status` VALUES ('2022-10-07', 6.748, 1700.5, 92.64, 97.92, 1367, 683.25, 3.3865, 20.255, 1257.75, 145.325, 70.08, 2297, 404.9, 3015, 401.87, 22366, 880.25, 18.68, 273.46, 218.1, 92.95, 968.75, 92.23);
INSERT INTO `se_status` VALUES ('2022-10-10', 6.435, 1667.3, 91.13, 96.19, 1374, 698.25, 3.4305, 19.615, 1281.5, 144.7, 69.54, 2257.8, 410.7, 2982.5, 391.47, 22282, 938, 18.61, 262.28, 217.45, 93.75, 1024.25, 88.23);
INSERT INTO `se_status` VALUES ('2022-10-11', 6.596, 1678.7, 89.35, 94.29, 1376.25, 693, 3.462, 19.487, 1192, 145.8, 68.98, 2234, 410.4, 2949.5, 393.08, 21915, 901, 18.74, 262.73, 217.85, 93.025, 990.75, 88.86);
INSERT INTO `se_status` VALUES ('2022-10-12', 6.435, 1670.3, 87.27, 92.45, 1396, 693, 3.425, 18.938, 1192, 146.175, 69.17, 2313.5, 421.8, 2939.75, 393.28, 22142, 882.25, 18.68, 263.03, 209.75, 93.1, 970, 84.92);
INSERT INTO `se_status` VALUES ('2022-10-13', 6.741, 1670, 89.11, 94.57, 1395.75, 697.75, 3.4405, 18.918, 1115.75, 146.45, 70.01, 2356.15, 418.5, 2951.25, 409.48, 22299, 892.25, 18.81, 270.34, 202.15, 93.425, 982.25, 84.79);
INSERT INTO `se_status` VALUES ('2022-10-14', 6.453, 1641.7, 85.61, 91.63, 1383.75, 689.75, 3.4235, 18.071, 1085.75, 146.95, 69.57, 2304.5, 418.5, 2980, 398.02, 21661, 859.75, 18.84, 263.09, 196.7, 93.375, 952.25, 83.15);
INSERT INTO `se_status` VALUES ('2022-10-17', 5.999, 1657, 85.46, 91.62, 1385.25, 683.5, 3.4155, 18.719, 1112.25, 147.875, 66.84, 2228.06, 411, 2889, 408.52, 21411, 861, 18.77, 259.31, 195.55, 84.95, 952, 83.09);
INSERT INTO `se_status` VALUES ('2022-10-18', 5.745, 1649, 82.82, 90.03, 1372, 681, 3.362, 18.6, 1105, 148.475, 68.74, 2178.01, 401.8, 2885.25, 399.35, 21769, 849.5, 18.67, 255.06, 195.1, 86.475, 944.5, 82.29);
INSERT INTO `se_status` VALUES ('2022-10-19', 5.462, 1627.5, 85.55, 92.41, 1372.5, 678.25, 3.318, 18.359, 1075.25, 149.35, 70.64, 2156.25, 401.7, 2924.26, 390.43, 21848, 841.25, 18.65, 265.22, 192.3, 87.375, 941.75, 78.29);
INSERT INTO `se_status` VALUES ('2022-10-20', 5.358, 1630.8, 85.98, 92.38, 1391.5, 684, 3.4105, 18.689, 1073.25, 149.775, 70.42, 2198.75, 413.3, 2999, 375.68, 22105, 849.25, 18.39, 264.78, 191.05, 87.025, 949.75, 77.4);
INSERT INTO `se_status` VALUES ('2022-10-21', 4.951, 1634.1, 84.45, 92.66, 1393.75, 685.75, 3.429, 18.78, 1054, 149.85, 71.22, 2198.75, 415.7, 2999, 368.01, 22105, 846.75, 18.45, 265.43, 192.15, 88.175, 945.75, 77.65);
INSERT INTO `se_status` VALUES ('2022-10-24', 5.199, 1648.7, 84.58, 93.26, 1372, 681.5, 3.4305, 19.189, 1082.25, 151.6, 71.87, 2163.76, 408.7, 2999.25, 392.01, 22151, 838.75, 18.13, 273.02, 190.4, 87.925, 938, 76.13);
INSERT INTO `se_status` VALUES ('2022-10-25', 5.613, 1652.8, 85.32, 93.52, 1382, 686.25, 3.397, 19.349, 1072.25, 151.675, 72.28, 2213.3, 415.6, 2938.5, 396.72, 22215.5, 834.75, 18.11, 291.6, 185.8, 88.45, 934.5, 78.47);
INSERT INTO `se_status` VALUES ('2022-10-26', 5.606, 1664, 87.91, 95.69, 1381.75, 685, 3.545, 19.486, 1105.25, 151.45, 73.42, 2336.25, 408.7, 2986.5, 412.01, 22569, 840.5, 17.86, 289.94, 179.75, 88.5, 940.75, 77.82);
INSERT INTO `se_status` VALUES ('2022-10-27', 5.186, 1660.7, 89.08, 96.96, 1382.25, 682.25, 3.5195, 19.494, 1110.5, 151.4, 72.3, 2283.52, 415.4, 2978, 433.39, 22279, 838.5, 17.71, 301.16, 178.85, 85.125, 932.25, 75.11);
INSERT INTO `se_status` VALUES ('2022-10-28', 5.684, 1644.8, 87.9, 95.77, 1387.75, 680.75, 3.429, 19.147, 1133.5, 150.375, 71.79, 2205.25, 425.4, 2854.9, 454.98, 22035, 829.25, 17.58, 290.66, 169.8, 86.1, 925, 72.11);
INSERT INTO `se_status` VALUES ('2022-10-31', 6.355, 1640.7, 86.53, 94.83, 1407, 691.5, 3.375, 19.119, 1100.25, 146.775, 73.21, 2220, 428.1, 2725.5, 419.09, 21717, 882.25, 17.97, 281.07, 177.7, 84.925, 978.75, 72);
INSERT INTO `se_status` VALUES ('2022-11-01', 5.714, 1649.7, 88.37, 94.65, 1435.75, 697.75, 3.4725, 19.667, 1047.5, 151.95, 73.37, 2237.25, 424.8, 2767.5, 362.11, 23522, 902.5, 18.43, 259.45, 174.6, 85.2, 990, 75);
INSERT INTO `se_status` VALUES ('2022-11-02', 6.268, 1650, 90, 96.16, 1440, 687.5, 3.4685, 19.594, 1054.25, 151.4, 75.61, 2243.95, 424.5, 2765, 367.74, 24066, 846, 18.47, 269.72, 182.15, 83.3, 940.25, 79);
INSERT INTO `se_status` VALUES ('2022-11-03', 5.975, 1630.9, 88.17, 94.67, 1426.75, 679.25, 3.427, 19.43, 1107.25, 151.95, 75.29, 2254.75, 414.3, 2738.25, 386.53, 22706, 840.5, 18.47, 269.39, 172.2, 83.375, 941.25, 83);
INSERT INTO `se_status` VALUES ('2022-11-04', 6.13, 1675.2, 91.29, 97.44, 1450.5, 681, 3.6785, 20.71, 1107.5, 151.9, 77.06, 2254.75, 419.9, 2738.25, 389.01, 22706, 847.5, 18.66, 272.9, 176.8, 83.45, 951, 87.31);
INSERT INTO `se_status` VALUES ('2022-11-07', 6.944, 1680.5, 91.79, 97.92, 1440, 675.75, 3.6035, 20.919, 1096.5, 153.05, 76.33, 2326.09, 419, 2907.5, 378.11, 23292, 845.75, 18.68, 265.31, 170.55, 87.05, 957.25, 87.49);
INSERT INTO `se_status` VALUES ('2022-11-08', 6.138, 1716, 88.91, 95.36, 1444, 667.5, 3.6825, 21.502, 1067.25, 153.05, 75.03, 2360.01, 419.3, 2947.5, 377.07, 23906.5, 827.75, 19, 263.67, 166.45, 85.575, 945.75, 87.68);
INSERT INTO `se_status` VALUES ('2022-11-09', 5.865, 1713.7, 85.83, 92.65, 1459.75, 664.5, 3.7, 21.327, 1028.5, 151.575, 75.54, 2304.99, 417.6, 2868.5, 365.63, 24596, 806.5, 19.38, 254.46, 165.15, 85.275, 930, 86.5);
INSERT INTO `se_status` VALUES ('2022-11-10', 6.239, 1753.7, 86.47, 93.67, 1430.5, 653.25, 3.758, 21.702, 1028.5, 153.075, 76.09, 2310.25, 404.1, 2900.5, 356.94, 25853, 803.5, 19.41, 256.63, 171, 84.875, 925.25, 86.38);
INSERT INTO `se_status` VALUES ('2022-11-11', 6.223, 1766.4, 89.08, 96.02, 1461.5, 657.75, 3.89, 21.56, 989.5, 152.475, 77.46, 2310.25, 409.5, 2900.5, 360.78, 25853, 812.5, 19.6, 260.17, 171.65, 84.1, 937, 88.44);
INSERT INTO `se_status` VALUES ('2022-11-14', 5.933, 1776.9, 85.87, 93.14, 1441.75, 657.25, 3.8335, 22.113, 991.75, 151.575, 76.28, 2427.5, 406, 3154, 354.4, 28767, 818.5, 19.83, 252.85, 166.2, 84.875, 956.25, 85.28);
INSERT INTO `se_status` VALUES ('2022-11-15', 6.034, 1776.8, 86.92, 93.86, 1457.25, 666.75, 3.82, 21.518, 990.25, 151.275, 76.98, 2421.25, 409.9, 3125, 364.13, 30176, 828.25, 20.29, 251.61, 156.75, 85.325, 963, 88.74);
INSERT INTO `se_status` VALUES ('2022-11-16', 6.2, 1775.8, 85.59, 92.86, 1429.25, 665.25, 3.7735, 21.524, 991.75, 151.8, 74.08, 2399, 406.6, 3061.5, 361.36, 27441, 817.5, 20.27, 250.8, 155.45, 85.575, 955.5, 88.44);
INSERT INTO `se_status` VALUES ('2022-11-17', 6.369, 1763, 81.64, 89.78, 1417, 667.5, 3.688, 20.975, 956, 152.75, 72.13, 2376.75, 405.7, 2988, 352.48, 24934, 806.75, 19.73, 245.47, 152.7, 84.975, 938, 87.04);
INSERT INTO `se_status` VALUES ('2022-11-18', 6.355, 1759.7, 79.46, 87.42, 1429.25, 670.75, 3.6655, 21.145, 947.5, 153.025, 72.79, 2376.75, 410.9, 2988, 348.36, 24934, 809.75, 20.03, 241.16, 152.5, 84.075, 939, 85.85);

-- ----------------------------
-- Table structure for ukraine_civilian_casualties
-- ----------------------------
DROP TABLE IF EXISTS `ukraine_civilian_casualties`;
CREATE TABLE `ukraine_civilian_casualties`  (
  `type` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `total` int NULL DEFAULT NULL,
  `children` int NULL DEFAULT NULL,
  PRIMARY KEY (`type`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ukraine_civilian_casualties
-- ----------------------------
INSERT INTO `ukraine_civilian_casualties` VALUES ('Injured', 11415, 838);
INSERT INTO `ukraine_civilian_casualties` VALUES ('Killed', 7068, 438);

-- ----------------------------
-- Table structure for ukraine_round_trip
-- ----------------------------
DROP TABLE IF EXISTS `ukraine_round_trip`;
CREATE TABLE `ukraine_round_trip`  (
  `type` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `num` int NULL DEFAULT NULL,
  PRIMARY KEY (`type`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ukraine_round_trip
-- ----------------------------
INSERT INTO `ukraine_round_trip` VALUES ('From Ukraine', 17688845);
INSERT INTO `ukraine_round_trip` VALUES ('To Ukraine', 9585700);

-- ----------------------------
-- Table structure for ukraine_russia_military_expenditure
-- ----------------------------
DROP TABLE IF EXISTS `ukraine_russia_military_expenditure`;
CREATE TABLE `ukraine_russia_military_expenditure`  (
  `year` int NOT NULL,
  `ukraine` double NULL DEFAULT NULL,
  `russia` double NULL DEFAULT NULL,
  PRIMARY KEY (`year`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ukraine_russia_military_expenditure
-- ----------------------------
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2004, 1.32, 20.96);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2005, 1.69, 27.34);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2006, 2.1, 34.52);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2007, 2.88, 43.53);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2008, 3.39, 56.18);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2009, 2.32, 51.53);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2010, 2.59, 58.72);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2011, 2.5, 70.24);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2012, 2.84, 81.47);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2013, 2.9, 88.35);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2014, 3, 84.7);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2015, 2.96, 66.42);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2016, 2.94, 69.25);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2017, 3.25, 66.91);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2018, 4.17, 61.61);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2019, 5.42, 65.2);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2020, 5.92, 61.71);
INSERT INTO `ukraine_russia_military_expenditure` VALUES (2021, 5.94, 65.91);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` smallint NOT NULL DEFAULT 10,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8 NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE,
  UNIQUE INDEX `email`(`email` ASC) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Roslin', '1WdxXAgRPeWCOQ7cHpX6Yb_KhH1n95AS', '$2y$13$BjQVge8QY.8a8NxysWKkHO1SQ.sl.fRlGJBUap3QvgjM7f2DxistS', NULL, 'roslin_v@163.com', 10, 1675739013, 1675739013, 'LExR42OJqXb2kQGJH_C5UV6c7rUBpp3X_1675739013');
-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `id` int(11) NOT NULL,
  `discuss` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comment
-- ----------------------------


-- ----------------------------
-- Table structure for files
-- ----------------------------
DROP TABLE IF EXISTS `files`;
CREATE TABLE `files`  (
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `download_times` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of files
-- ----------------------------
INSERT INTO `files` VALUES ('aid.csv', 1);
INSERT INTO `files` VALUES ('all_countries.csv', 0);
INSERT INTO `files` VALUES ('articles.csv', 0);
INSERT INTO `files` VALUES ('military_compare_total.csv', 0);
INSERT INTO `files` VALUES ('russia_loss.csv', 0);
INSERT INTO `files` VALUES ('r_u_military_comparison.csv', 0);
INSERT INTO `files` VALUES ('sanction_country.csv', 0);
INSERT INTO `files` VALUES ('sanction_date.csv', 1);
INSERT INTO `files` VALUES ('sanction_type.csv', 0);
INSERT INTO `files` VALUES ('se_status.csv', 1);
INSERT INTO `files` VALUES ('ukraine_civilian_casualties.csv', 0);
INSERT INTO `files` VALUES ('ukraine_round_trip.csv', 0);
INSERT INTO `files` VALUES ('ukraine_russia_military_expenditure.csv', 0);
INSERT INTO `files` VALUES ('作业1(2012885_陈静怡).zip', 0);
INSERT INTO `files` VALUES ('作业1(2013743_林巧莹).zip', 0);
INSERT INTO `files` VALUES ('作业2(2012885_陈静怡).zip', 0);
INSERT INTO `files` VALUES ('作业2(2013743_林巧莹).zip', 0);
INSERT INTO `files` VALUES ('作业3(2012885_陈静怡).zip', 0);
INSERT INTO `files` VALUES ('作业3(2013743_林巧莹).zip', 0);


SET FOREIGN_KEY_CHECKS = 1;

