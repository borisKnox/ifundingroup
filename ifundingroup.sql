/*
 Navicat Premium Data Transfer

 Source Server         : ifundgroup
 Source Server Type    : MySQL
 Source Server Version : 100408
 Source Host           : 127.0.0.1:3306
 Source Schema         : ifundingroup

 Target Server Type    : MySQL
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 27/12/2019 23:22:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for apply_nows
-- ----------------------------
DROP TABLE IF EXISTS `apply_nows`;
CREATE TABLE `apply_nows`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `company_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of apply_nows
-- ----------------------------
INSERT INTO `apply_nows` VALUES (1, 'admin', 'Limited liability partnership', 'Working capital', 'email@test.com', '2019-12-08 03:57:57', '2019-12-08 03:57:57');
INSERT INTO `apply_nows` VALUES (3, 'admin', 'Partnership (less than 4 partners)', 'Tax payment', 'elina.mora.2019@gmail.com', '2019-12-08 04:04:42', '2019-12-08 04:04:42');
INSERT INTO `apply_nows` VALUES (4, 'admin', 'Limited company', 'Working capital', 'admin@test.com', '2019-12-26 16:55:49', '2019-12-26 16:55:49');
INSERT INTO `apply_nows` VALUES (5, 'admin', 'Sole trader', 'Commercial mortage', 'Phill4oku@yahoo.com', '2019-12-26 22:48:35', '2019-12-26 22:48:35');

-- ----------------------------
-- Table structure for careers
-- ----------------------------
DROP TABLE IF EXISTS `careers`;
CREATE TABLE `careers`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of careers
-- ----------------------------
INSERT INTO `careers` VALUES (1, 'Collections & Recoveries', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum.', '2019-12-08 11:42:17', '2019-12-08 12:38:20');
INSERT INTO `careers` VALUES (2, 'Data, Risk & Analytics', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.', '2019-12-08 12:39:00', '2019-12-08 12:39:00');
INSERT INTO `careers` VALUES (3, 'Engineering', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum id metus ac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet sagittis. In tincidunt orci sit amet elementum vestibulum.', '2019-12-08 12:39:16', '2019-12-08 12:39:16');
INSERT INTO `careers` VALUES (4, 'Marketing & Communications', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.', '2019-12-08 12:39:32', '2019-12-08 12:39:32');
INSERT INTO `careers` VALUES (5, 'People Team', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.', '2019-12-08 12:39:53', '2019-12-08 12:39:53');
INSERT INTO `careers` VALUES (6, 'Product, Design, & Delivery', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.', '2019-12-08 12:40:08', '2019-12-08 12:40:08');

-- ----------------------------
-- Table structure for contact_us
-- ----------------------------
DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE `contact_us`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contact_us
-- ----------------------------
INSERT INTO `contact_us` VALUES (1, 'admin', 'wefsadf', 'ijshaban@hotmail.com', 'sdasda', NULL, '2019-12-07 14:42:17', '2019-12-07 14:42:17');
INSERT INTO `contact_us` VALUES (3, 'admin', 'dssadS', 'ijshaban@hotmail.com', 'sadfa', NULL, '2019-12-07 14:52:52', '2019-12-07 14:52:52');
INSERT INTO `contact_us` VALUES (4, 'admin', 'wefsadf', 'ijshaban@hotmail.com', 'sadssdf', 'C:\\xampp\\tmp\\php1617.tmp', '2019-12-07 14:53:49', '2019-12-07 14:53:49');
INSERT INTO `contact_us` VALUES (6, 'admin', 'wefsadf', 'ijshaban@hotmail.com', 'lkhlkj', NULL, '2019-12-07 15:08:49', '2019-12-07 15:08:49');
INSERT INTO `contact_us` VALUES (7, 'admin', 'wefsadf', 'hossamxm12@gmail.com', 'kgkhgkj', NULL, '2019-12-07 15:09:28', '2019-12-07 15:09:28');
INSERT INTO `contact_us` VALUES (8, 'admin', 'wefsadf', 'ibrahim.shaban.1996@gmail.com', 'fsefesdc', 'files/gHYORFb9bGcw4wYD1slkL0PomfVZugvw771VgyAm.pdf', '2019-12-07 15:14:30', '2019-12-07 15:14:30');
INSERT INTO `contact_us` VALUES (9, 'admin', 'dfhxfhnx', 'Phill4oku@yahoo.com', 'vbxvcbcvxbcxvbcxvb', NULL, '2019-12-26 22:51:17', '2019-12-26 22:51:17');

-- ----------------------------
-- Table structure for home_pages
-- ----------------------------
DROP TABLE IF EXISTS `home_pages`;
CREATE TABLE `home_pages`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `test_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `test_job` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `test_graph` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `home_pagescol` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of home_pages
-- ----------------------------
INSERT INTO `home_pages` VALUES (2, 'Freelancer-Web Developer', 'asdfadf', 'PAULA WILSON', 'Media Analyst / SkyNet', 'dafasf', '2019-12-05 04:18:39', '2019-12-06 14:39:05', NULL);
INSERT INTO `home_pages` VALUES (5, 'Freelancer', 'fasdf', 'PAULA WILSON', 'Media Analyst / SkyNet', 'dsafaf', '2019-12-06 14:09:18', '2019-12-06 14:09:18', NULL);

-- ----------------------------
-- Table structure for investments
-- ----------------------------
DROP TABLE IF EXISTS `investments`;
CREATE TABLE `investments`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for loans
-- ----------------------------
DROP TABLE IF EXISTS `loans`;
CREATE TABLE `loans`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `updated_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `citisencard` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `gender` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `card_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `card_number` int(11) NULL DEFAULT NULL,
  `card_cvc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `card_expiry_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `payment1` tinyint(3) NULL DEFAULT NULL,
  `payment2` tinyint(3) NULL DEFAULT NULL,
  `prjname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `itsrate` double NULL DEFAULT NULL,
  `ltv` double NULL DEFAULT NULL,
  `trmon` double NULL DEFAULT NULL,
  `prj_expiry_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `prj_target` double NULL DEFAULT NULL,
  `prj_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of loans
-- ----------------------------
INSERT INTO `loans` VALUES (5, '2019-12-28 02:38:27', '2019-12-28 02:38:27', 'adsf', 'afs', 'zxc@sdf.d', '123123123123', '(123) 123-1231', 'M', '123123123', '123123', '123123', '123123', 123123, NULL, '12/3123', 1, NULL, '123123', 123123, 123, 123, '12/3123', 123123, NULL);
INSERT INTO `loans` VALUES (6, '2019-12-28 06:16:44', '2019-12-28 06:16:44', 'axc', 'gnh', 'hussam@test.com', '234234234234', '(243) 324-2342', 'M', 'fgfghfghfghf', 'dfdfgd', '23423', '234423', 234234, NULL, '23/4234', 1, NULL, 'yhntnt', 23, 23, 32, '32/4423', 234, NULL);
INSERT INTO `loans` VALUES (7, '2019-12-28 06:22:11', '2019-12-28 06:22:11', 'bnm', 'ghj', 'mmm@mmm.mm', '123123123123', '(123) 123-1231', 'M', '123213123', '123213', '12312', '123', 123213, NULL, '12/3123', NULL, 2, '123', NULL, 123, 12312, '12/3123', 123213, NULL);
INSERT INTO `loans` VALUES (8, '2019-12-28 06:27:07', '2019-12-28 06:27:07', 'bgt', 'ty', 'vnn@fgg.nn', '354345345345', '(345) 345-3453', 'M', '345435453', '3454', '345435', '34', 345345, NULL, '34/5345', 1, NULL, '34', 345, 345, 345, '34/5435', 345345, NULL);
INSERT INTO `loans` VALUES (9, '2019-12-28 06:27:15', '2019-12-28 06:27:15', 'bgt', 'ty', 'vnn@fgg.nn', '354345345345', '(345) 345-3453', 'M', '345435453', '3454', '345435', '34', 345345, NULL, '34/5345', 1, NULL, '34', 345, 345, 345, '34/5435', 345345, NULL);
INSERT INTO `loans` VALUES (10, '2019-12-28 06:28:09', '2019-12-28 06:28:09', 'bmm', 'vbv', 'hussam@test.com', '123123123123', '(123) 123-1231', 'M', '123123123', '123123', '12312', '123123', 123123, NULL, '12/3123', 1, NULL, '213', 213, 123215, 123123, '12/3123', 123123, 'prj_file/FTL95TRsvlPUQGcy75BauDnhTxS23z2mE4TDS2Jk.png');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_12_02_164317_add_role_to_users_table', 2);
INSERT INTO `migrations` VALUES (4, '2019_12_03_111510_alter_users_table', 3);
INSERT INTO `migrations` VALUES (5, '2019_12_04_144524_create_home_pages_table', 4);
INSERT INTO `migrations` VALUES (6, '2019_12_07_235417_create_contact_us_table', 5);
INSERT INTO `migrations` VALUES (7, '2019_12_08_130427_create_apply_nows_table', 6);
INSERT INTO `migrations` VALUES (8, '2019_12_08_184855_create_careers_table', 7);
INSERT INTO `migrations` VALUES (9, '2019_12_09_011954_create_resumes_table', 8);
INSERT INTO `migrations` VALUES (10, '2019_12_10_232210_add_columns_to_users_table', 9);
INSERT INTO `migrations` VALUES (11, '2019_12_27_011828_create_investments_table', 10);
INSERT INTO `migrations` VALUES (12, '2019_12_27_011901_create_loans_table', 10);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for resumes
-- ----------------------------
DROP TABLE IF EXISTS `resumes`;
CREATE TABLE `resumes`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `up_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of resumes
-- ----------------------------
INSERT INTO `resumes` VALUES (1, 'admin', 'ijshaban@hotmail.com', NULL, '2019-12-08 15:34:12', '2019-12-08 15:34:12');
INSERT INTO `resumes` VALUES (2, 'admin', 'admin@test.com', NULL, '2019-12-08 15:40:14', '2019-12-08 15:40:14');
INSERT INTO `resumes` VALUES (3, 'admin', 'ibrahim_shaban_1996@hotmail.com', NULL, '2019-12-08 15:42:34', '2019-12-08 15:42:34');
INSERT INTO `resumes` VALUES (4, 'admin', 'ibrahim.shaban.1996@gmail.com', NULL, '2019-12-08 15:44:42', '2019-12-08 15:44:42');
INSERT INTO `resumes` VALUES (5, 'admin', 'ibrahim_shaban_1996@hotmail.com', NULL, '2019-12-08 15:48:13', '2019-12-08 15:48:13');
INSERT INTO `resumes` VALUES (6, 'admin', 'ibrahim_shaban_1996@hotmail.com', 'Ibrahim_CV.pdf', '2019-12-08 15:49:26', '2019-12-08 15:49:26');
INSERT INTO `resumes` VALUES (7, 'admin', 'ijshaban@hotmail.com', NULL, '2019-12-08 15:52:10', '2019-12-08 15:52:10');
INSERT INTO `resumes` VALUES (9, 'admin', 'hossamxm12@gmail.com', 'files/V5WD3t6y7NsOgFTlUnkHRCqEqcoxY1cMUT2ZG7un.pdf', '2019-12-08 16:18:18', '2019-12-08 16:18:18');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT 2,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `status` int(11) NULL DEFAULT 0,
  `role` enum('admin','author','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `deleted_by` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `home_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `apartment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `stat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `zip_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dob` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `home_ownership` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `check_graduation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `school_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `undergraduate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `graduation_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `emp_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `emp_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `income_total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `exp_total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  INDEX `users_created_by_foreign`(`created_by`) USING BTREE,
  INDEX `users_updated_by_foreign`(`updated_by`) USING BTREE,
  INDEX `users_deleted_by_foreign`(`deleted_by`) USING BTREE,
  CONSTRAINT `users_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `users_deleted_by_foreign` FOREIGN KEY (`deleted_by`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `users_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@test.com', NULL, '$2y$10$4/ETnA3qNKuigxDQQoGlj.oBokpK3J/P4tfEnbXb.GoTgQ4TTRbAW', 1, NULL, '2019-12-01 11:55:18', '2019-12-27 00:40:00', 1, 'admin', 'wweer', NULL, NULL, NULL, NULL, NULL, 'wesrwe', 'qaesrf', 'aestf', 'sd', 'adsf', 'sadfg', '232', 'dfg', '12/31/2312', NULL, 'true', '123123', '12312', '11/21/2019', NULL, '123', '123', '123');
INSERT INTO `users` VALUES (2, 'ahmed', 'ahmed@test.com', NULL, '$2y$10$JJ7z7NTM9IQiS9jJm4eUXun0sDfoWJIxjGBVEBeR89J8Azs8E/7Gq', 2, NULL, '2019-12-02 02:38:10', '2019-12-16 08:47:02', 0, 'user', NULL, 'avatrs/ezeIrVwCPZH1oIwuuwofIfXXN5mI9Y4WqzDN3IX3.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (3, 'Hussam', 'hussam@test.com', NULL, '123123123', 2, NULL, '2019-12-03 01:25:15', '2019-12-03 02:12:22', 1, 'user', 'Test Test', 'avatrs/BG8xSosTaGf5Kd7E4ElrzkczhaBjeCKjB635nCY5.jpeg', '0465421332', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` VALUES (6, 'Abood Shaban', 'abood@abood.com', NULL, '$2y$10$wHpSFQkxESqDvTT7hjR2D.BpeogWRiEq95m8kpDC2aDAeXXZurG.m', 2, NULL, '2019-12-10 14:05:05', '2019-12-11 04:00:16', 0, 'user', NULL, NULL, NULL, NULL, NULL, NULL, 'abood', 'Shaban', 'Gaza', 'Gaza', 'Gaza', 'Gaza', '00972', '0597244786', '12/8/1229', 'Recent', 'I have graduate from collage or school', 'Sabaa', 'debluma', '2019-12-11', 'Current', 'abood Shaban', '800', '5');
INSERT INTO `users` VALUES (8, 'zxc', 'zxc@sdf.d', NULL, '123123', 2, NULL, '2019-12-27 23:00:34', '2019-12-27 23:00:34', 1, 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
