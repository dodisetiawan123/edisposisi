/*
 Navicat Premium Data Transfer

 Source Server         : edisposisi
 Source Server Type    : MySQL
 Source Server Version : 100422 (10.4.22-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : esurat_db

 Target Server Type    : MySQL
 Target Server Version : 100422 (10.4.22-MariaDB)
 File Encoding         : 65001

 Date: 06/12/2023 15:21:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dokumen
-- ----------------------------
DROP TABLE IF EXISTS `dokumen`;
CREATE TABLE `dokumen`  (
  `id_dokumen` int NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_surat` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_agenda` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `perihal` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_dokumen` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `timestamp` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_dokumen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dokumen
-- ----------------------------
INSERT INTO `dokumen` VALUES (1, 'PT Barata Indonesia', 'XX11/BRT/50/VA', '182', '2023-12-05', 'asdasd', 'Lampiran.pdf', 'On Review', NULL);
INSERT INTO `dokumen` VALUES (6, 'asdas', 'asdasd', 'asdasd', '2023-12-06', 'sadasd', 'df6cd5881c8acf69f586d41294dff9dc.pdf', 'On Review', '2023-12-06');

-- ----------------------------
-- Table structure for dokumen_user
-- ----------------------------
DROP TABLE IF EXISTS `dokumen_user`;
CREATE TABLE `dokumen_user`  (
  `id_dokumen_user` int NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `id_users` int NULL DEFAULT NULL,
  `id_dokumen` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_dokumen_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dokumen_user
-- ----------------------------

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES (1, 'admin', 'Sekper');
INSERT INTO `groups` VALUES (2, 'members', 'Direksi');
INSERT INTO `groups` VALUES (3, 'general', 'General Manager');

-- ----------------------------
-- Table structure for login_attempts
-- ----------------------------
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 67 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of login_attempts
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `activation_selector` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `activation_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_selector` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_time` int UNSIGNED NULL DEFAULT NULL,
  `remember_selector` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `remember_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_on` int UNSIGNED NOT NULL,
  `last_login` int UNSIGNED NULL DEFAULT NULL,
  `active` tinyint(1) UNSIGNED NULL DEFAULT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `company` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `uc_email`(`email` ASC) USING BTREE,
  UNIQUE INDEX `uc_activation_selector`(`activation_selector` ASC) USING BTREE,
  UNIQUE INDEX `uc_forgotten_password_selector`(`forgotten_password_selector` ASC) USING BTREE,
  UNIQUE INDEX `uc_remember_selector`(`remember_selector` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '127.0.0.1', 'administrator', '$2y$10$LIAhhUtYk8cetV5q3cFqCundFuzMcj58rpzDn94JvwtbxlvLCYJVO', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1701833435, 1, 'Admin', 'istrator', 'ADMIN', '0');
INSERT INTO `users` VALUES (2, '::1', NULL, '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'cecep@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701327537, 1701757860, 1, 'Direksi', 'Barata', 'PT Barata Indonesia', '+623830158599');
INSERT INTO `users` VALUES (3, '::1', NULL, '$2y$10$6el6uaOPumnejhLEk0TxXOFVOjvDfdni0aB59O6CDt9svRQ1JSS3G', 'joko@barata.id', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1701419430, 1701748494, 1, 'Joko', 'Suwarto', 'PT Barata Indonesia', '+623830158599');

-- ----------------------------
-- Table structure for users_groups
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED NOT NULL,
  `group_id` mediumint UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `uc_users_groups`(`user_id` ASC, `group_id` ASC) USING BTREE,
  INDEX `fk_users_groups_users1_idx`(`user_id` ASC) USING BTREE,
  INDEX `fk_users_groups_groups1_idx`(`group_id` ASC) USING BTREE,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES (3, 1, 1);
INSERT INTO `users_groups` VALUES (5, 2, 2);
INSERT INTO `users_groups` VALUES (8, 3, 3);

SET FOREIGN_KEY_CHECKS = 1;
