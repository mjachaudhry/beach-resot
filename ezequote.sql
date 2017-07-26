/*
Navicat MySQL Data Transfer

Source Server         : Admin
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ezequote

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-07-26 20:03:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2017_07_25_132507_create_projects_table', '1');
INSERT INTO `migrations` VALUES ('4', '2017_07_25_133215_create_services_table', '1');
INSERT INTO `migrations` VALUES ('5', '2017_07_26_112348_create_project_services_table', '1');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `projects`
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES ('1', 'Ezequote', 'ezequote', 'Residential', 'ascafafa', null, null, '2017-07-26 12:54:31', '2017-07-26 13:27:34');
INSERT INTO `projects` VALUES ('2', 'new ezequote', 'new-ezequote', 'Commercial', 'comments', '2017-07-26', '0', '2017-07-26 13:34:04', '2017-07-26 14:43:59');

-- ----------------------------
-- Table structure for `project_services`
-- ----------------------------
DROP TABLE IF EXISTS `project_services`;
CREATE TABLE `project_services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of project_services
-- ----------------------------
INSERT INTO `project_services` VALUES ('1', '1', '1', null, null, '2017-07-26 12:54:31', '2017-07-26 12:54:31');
INSERT INTO `project_services` VALUES ('2', '1', '3', null, null, '2017-07-26 12:54:31', '2017-07-26 12:54:31');
INSERT INTO `project_services` VALUES ('3', '1', '5', null, null, '2017-07-26 12:54:31', '2017-07-26 12:54:31');
INSERT INTO `project_services` VALUES ('4', '1', '1', null, null, '2017-07-26 13:27:06', '2017-07-26 13:27:06');
INSERT INTO `project_services` VALUES ('5', '1', '2', null, null, '2017-07-26 13:27:07', '2017-07-26 13:27:07');
INSERT INTO `project_services` VALUES ('6', '1', '3', null, null, '2017-07-26 13:27:07', '2017-07-26 13:27:07');
INSERT INTO `project_services` VALUES ('7', '1', '4', null, null, '2017-07-26 13:27:07', '2017-07-26 13:27:07');
INSERT INTO `project_services` VALUES ('8', '1', '5', null, null, '2017-07-26 13:27:07', '2017-07-26 13:27:07');
INSERT INTO `project_services` VALUES ('9', '1', '6', null, null, '2017-07-26 13:27:07', '2017-07-26 13:27:07');
INSERT INTO `project_services` VALUES ('10', '1', '1', null, null, '2017-07-26 13:27:34', '2017-07-26 13:27:34');
INSERT INTO `project_services` VALUES ('11', '1', '2', null, null, '2017-07-26 13:27:34', '2017-07-26 13:27:34');
INSERT INTO `project_services` VALUES ('12', '1', '3', null, null, '2017-07-26 13:27:34', '2017-07-26 13:27:34');
INSERT INTO `project_services` VALUES ('13', '1', '4', null, null, '2017-07-26 13:27:34', '2017-07-26 13:27:34');
INSERT INTO `project_services` VALUES ('14', '1', '5', null, null, '2017-07-26 13:27:34', '2017-07-26 13:27:34');
INSERT INTO `project_services` VALUES ('15', '1', '6', null, null, '2017-07-26 13:27:34', '2017-07-26 13:27:34');
INSERT INTO `project_services` VALUES ('42', '2', '1', null, null, '2017-07-26 13:39:45', '2017-07-26 13:39:45');
INSERT INTO `project_services` VALUES ('43', '2', '2', null, null, '2017-07-26 13:39:45', '2017-07-26 13:39:45');
INSERT INTO `project_services` VALUES ('44', '2', '3', null, null, '2017-07-26 13:39:45', '2017-07-26 13:39:45');
INSERT INTO `project_services` VALUES ('45', '2', '4', null, null, '2017-07-26 13:39:45', '2017-07-26 13:39:45');
INSERT INTO `project_services` VALUES ('46', '2', '5', null, null, '2017-07-26 13:39:45', '2017-07-26 13:39:45');
INSERT INTO `project_services` VALUES ('47', '2', '6', null, null, '2017-07-26 13:39:45', '2017-07-26 13:39:45');

-- ----------------------------
-- Table structure for `services`
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES ('1', 'Detailing', 'detailing', null, null, '2017-07-26 11:32:35', '2017-07-26 11:32:35');
INSERT INTO `services` VALUES ('2', 'Estimating', 'estimating', null, null, '2017-07-26 11:35:20', '2017-07-26 11:35:20');
INSERT INTO `services` VALUES ('3', 'Design', 'design', null, null, '2017-07-26 11:36:00', '2017-07-26 11:36:00');
INSERT INTO `services` VALUES ('4', 'Construction', 'construction', null, null, '2017-07-26 11:36:20', '2017-07-26 11:36:20');
INSERT INTO `services` VALUES ('5', 'Review', 'review', null, null, '2017-07-26 11:36:35', '2017-07-26 11:36:35');
INSERT INTO `services` VALUES ('6', 'Inspection', 'inspection', '0000-00-00', null, '2017-07-26 11:36:51', '2017-07-26 14:50:45');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Mick', 'mick@ezequote.com.au', '$2y$10$ngGOc3GkYjf1STQYF81uieafJsjocIbY3A7Ndm0z2AAyYQs4RZcNW', '1PoOayLcBz9a1wNZlj1NWxkuUTv7zB8f5044PcyaZzq3FfyG0hEVbr2md9FT', '2017-07-26 11:29:17', '2017-07-26 11:29:17');
