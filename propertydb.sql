/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : propertydb

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 27/10/2024 04:23:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for image_properties
-- ----------------------------
DROP TABLE IF EXISTS `image_properties`;
CREATE TABLE `image_properties`  (
  `imageID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `propertyID` int NOT NULL,
  `imagePath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`imageID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of image_properties
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (2, '2024_05_11_155422_create_system_users_table', 1);
INSERT INTO `migrations` VALUES (3, '2024_07_06_204008_create_properties_table', 1);
INSERT INTO `migrations` VALUES (4, '2024_07_21_180805_create_image_properties_table', 1);
INSERT INTO `migrations` VALUES (5, '2024_09_24_223843_create_order_payments_table', 1);

-- ----------------------------
-- Table structure for order_payments
-- ----------------------------
DROP TABLE IF EXISTS `order_payments`;
CREATE TABLE `order_payments`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `propertyID` int NOT NULL,
  `payment_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10, 2) NOT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of order_payments
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for properties
-- ----------------------------
DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties`  (
  `propertyID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `propertyName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(12, 2) NOT NULL,
  `contactNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brgy` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `beds` int NOT NULL,
  `baths` int NOT NULL,
  `lotArea` double(8, 2) NOT NULL,
  `otherDetails` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`propertyID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of properties
-- ----------------------------

-- ----------------------------
-- Table structure for system_users
-- ----------------------------
DROP TABLE IF EXISTS `system_users`;
CREATE TABLE `system_users`  (
  `userID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lastName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthDate` date NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `licenseImage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`userID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of system_users
-- ----------------------------
INSERT INTO `system_users` VALUES (2, 'admin@bestproperties.ph', '$2y$12$6u3IGap/R8bUDNLocwXGVOj7UHslZ9dDzfiy6lsUat/hSLacMzB8e', 'Admin', 'Admin', 'Admin', 'sample', '+63', '9269440075', 'Male', '1998-10-13', 'Admin', NULL, 'Active Now', 'approved', NULL, '2024-06-05 18:49:14', '2024-06-05 18:49:14');

-- ----------------------------
-- View structure for vwagentsales
-- ----------------------------
DROP VIEW IF EXISTS `vwagentsales`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwagentsales` AS select `properties`.`propertyID` AS `propertyID`,`properties`.`propertyName` AS `propertyName`,`properties`.`contactNumber` AS `contactNumber`,`properties`.`street` AS `street`,`properties`.`brgy` AS `brgy`,`properties`.`city` AS `city`,`properties`.`province` AS `province`,`properties`.`zip` AS `zip`,`properties`.`beds` AS `beds`,`properties`.`baths` AS `baths`,`properties`.`lotArea` AS `lotArea`,`properties`.`otherDetails` AS `otherDetails`,`properties`.`type` AS `type`,`order_payments`.`userID` AS `userID`,`order_payments`.`payment_id` AS `payment_id`,`order_payments`.`amount` AS `amount`,`order_payments`.`payment_status` AS `payment_status`,`system_users`.`userID` AS `myID`,`order_payments`.`created_at` AS `paymentDate`,`order_payments`.`payer_email` AS `payer_email` from ((`order_payments` join `properties` on((`order_payments`.`propertyID` = `properties`.`propertyID`))) join `system_users` on((`properties`.`userID` = `system_users`.`userID`)));

-- ----------------------------
-- View structure for vwmyproperties
-- ----------------------------
DROP VIEW IF EXISTS `vwmyproperties`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwmyproperties` AS select `properties`.`propertyID` AS `propertyID`,`properties`.`propertyName` AS `propertyName`,`properties`.`price` AS `price`,`properties`.`contactNumber` AS `contactNumber`,`properties`.`street` AS `street`,`properties`.`brgy` AS `brgy`,`properties`.`city` AS `city`,`properties`.`province` AS `province`,`properties`.`zip` AS `zip`,`properties`.`beds` AS `beds`,`properties`.`baths` AS `baths`,`properties`.`lotArea` AS `lotArea`,`properties`.`otherDetails` AS `otherDetails`,`properties`.`type` AS `type`,`order_payments`.`userID` AS `userID`,`order_payments`.`amount` AS `amount`,`order_payments`.`payment_status` AS `payment_status`,`order_payments`.`created_at` AS `created_at` from (`order_payments` join `properties` on((`order_payments`.`propertyID` = `properties`.`propertyID`)));

SET FOREIGN_KEY_CHECKS = 1;
