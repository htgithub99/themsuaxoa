/*
 Navicat Premium Data Transfer

 Source Server         : localdb
 Source Server Type    : MySQL
 Source Server Version : 50640
 Source Host           : 127.0.0.1:3306
 Source Schema         : pt14111

 Target Server Type    : MySQL
 Target Server Version : 50640
 File Encoding         : 65001

 Date: 22/11/2018 10:23:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_desc` varchar(500) DEFAULT NULL,
  `content` text,
  `feature_image` varchar(500) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
BEGIN;
INSERT INTO `posts` VALUES (4, 'bai viet 4', 'mo ta 4', 'noi dung 4', NULL, 'fpt', 400);
INSERT INTO `posts` VALUES (5, 'tieu de test 1', 'mo ta ngan test 1', 'noi dung test 1', NULL, 'thienth', NULL);
INSERT INTO `posts` VALUES (6, 'test 2', 'mo ta ngan test 2', 'noi dung test 2', NULL, 'fpt poly', 1);
INSERT INTO `posts` VALUES (7, 'asdfasdfasdf', 'asfasdf', 'asdfasdfasdf', 'imgs/5bf620c645267-9. User Profile - Trang Profile của người dùng – 2.png', 'adsfasdf', 1);
INSERT INTO `posts` VALUES (8, 'asdfsdfdsf', 'sdfs', 'dfsdfsdf', 'imgs/5bf620fbcc674-4.1 Food Now- chi tiết món.png', 'sdfsdf', 1);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
