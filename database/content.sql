/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : content

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-07-17 14:53:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for api_log
-- ----------------------------
DROP TABLE IF EXISTS `api_log`;
CREATE TABLE `api_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module` varchar(255) NOT NULL DEFAULT '',
  `controller` varchar(255) NOT NULL DEFAULT '',
  `action` varchar(255) NOT NULL DEFAULT '',
  `post_params` varchar(255) NOT NULL DEFAULT '',
  `return_params` varchar(255) NOT NULL DEFAULT '',
  `code` int(10) NOT NULL DEFAULT '0',
  `msg` text NOT NULL,
  `created` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of api_log
-- ----------------------------
INSERT INTO `api_log` VALUES ('1', 'admin/login/login', '', '', '{\"username\":\"admin\",\"password\":\"000000\"}', '', '0', '', '1531809605');
INSERT INTO `api_log` VALUES ('2', 'admin/login/login', '', '', '{\"username\":\"admin\",\"password\":\"000000\"}', '', '0', '', '1531809692');
INSERT INTO `api_log` VALUES ('3', '/', '', '', '', '', '0', '', '1531809692');
INSERT INTO `api_log` VALUES ('4', 'admin', '', '', '', '', '0', '', '1531809694');
INSERT INTO `api_log` VALUES ('5', 'admin/content', '', '', '', '', '0', '', '1531809704');
INSERT INTO `api_log` VALUES ('6', 'admin/content/modify/8', '', '', '', '', '0', '', '1531809707');
INSERT INTO `api_log` VALUES ('7', 'admin/content', '', '', '', '', '0', '', '1531809738');
INSERT INTO `api_log` VALUES ('8', 'admin/content/modify/8', '', '', '', '', '0', '', '1531809744');
INSERT INTO `api_log` VALUES ('9', 'admin/content/modify/8', '', '', '', '', '0', '', '1531809897');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `sort` int(10) NOT NULL DEFAULT '1' COMMENT '排序',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '地址',
  `channel` tinyint(1) NOT NULL DEFAULT '1' COMMENT '途径',
  `created_at` int(10) NOT NULL DEFAULT '0',
  `updated_at` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `k` varchar(128) NOT NULL,
  `v` text NOT NULL,
  `created_at` int(10) NOT NULL DEFAULT '0',
  `updated_at` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('3', 'seo', 'sdfsdff', '1531726051', '1531726051');

-- ----------------------------
-- Table structure for content
-- ----------------------------
DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(1) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '2',
  `created_at` int(10) NOT NULL DEFAULT '0',
  `updated_at` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of content
-- ----------------------------
INSERT INTO `content` VALUES ('2', '2', '测试2', '第二则新闻', '试试', '2', '152352152', '1531294356');
INSERT INTO `content` VALUES ('3', '1', 'ceshi', 'ssssss', 'lihagn', '0', '1531292666', '1531292666');
INSERT INTO `content` VALUES ('4', '2', '专员', 'sdfsdfsfsf', 'lihagn', '2', '1531358769', '1531358769');
INSERT INTO `content` VALUES ('5', '1', '专员', '说的分手的', '沙发上地方', '1', '1531358871', '1531358871');
INSERT INTO `content` VALUES ('6', '2', '连天暴雨1', '<p style=\"padding-bottom: 14px; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><span style=\"font-weight: 700;\">关于网页授权的两种scope的区别说明</span></p><p style=\"padding-bottom: 14px; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">1、以snsapi_base为scope发起的网页授权，是用来获取进入页面的用户的openid的，并且是静默授权并自动跳转到回调页的。用户感知的就是直接进入了回调页（往往是业务页面）</p><p style=\"padding-bottom: 14px; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">2、以snsapi_userinfo为scope发起的网页授权，是用来获取用户的基本信息的。但这种授权需要用户手动同意，并且由于用户同意过，所以无须关注，就可在授权后获取该用户的基本信息。</p><p style=\"padding-bottom: 14px; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">3、用户管理类接口中的“获取用户基本信息接口”，是在用户和公众号产生消息交互或关注后事件推送后，才能根据用户OpenID来获取用户基本信息。这个接口，包括其他微信接口，都是需要该用户（即openid）关注了公众号后，才能调用成功的。</p>', '李航', '1', '1531725068', '1531726163');
INSERT INTO `content` VALUES ('8', '1', '测试', 'sdfsdfsfsd', '士大夫士大夫', '3', '1531726202', '1531726202');

-- ----------------------------
-- Table structure for manager
-- ----------------------------
DROP TABLE IF EXISTS `manager`;
CREATE TABLE `manager` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) NOT NULL DEFAULT '0' COMMENT '角色ID',
  `nickname` varchar(64) NOT NULL DEFAULT '' COMMENT '昵称',
  `username` varchar(64) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(64) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` varchar(10) NOT NULL DEFAULT '' COMMENT '盐',
  `phone` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `supper_master` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否为超级管理员：0-否，1-是',
  `enable` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否可用：0-不可用，1-可用',
  `created_at` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(10) NOT NULL DEFAULT '0',
  `last_login_time` int(10) NOT NULL DEFAULT '0' COMMENT '上次登陆时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='管理员';

-- ----------------------------
-- Records of manager
-- ----------------------------
INSERT INTO `manager` VALUES ('1', '0', '慢慢', 'admin', '11fa0081096f48bf8c9e2fc6fc10b0d0', '6609', '15928803350', '1', '1', '1531365003', '0', '1529476108');
INSERT INTO `manager` VALUES ('3', '3', 'missheart', 'xinwen', 'f12adbbd53299658e6d606e46aaeef68', '254867', '15928803351', '0', '1', '1531370117', '1531370270', '0');

-- ----------------------------
-- Table structure for manager_role
-- ----------------------------
DROP TABLE IF EXISTS `manager_role`;
CREATE TABLE `manager_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(64) NOT NULL DEFAULT '' COMMENT '角色',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '角色描述',
  `auth_access` text COMMENT '权限',
  `created_at` int(10) NOT NULL,
  `updated_at` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='管理员角色';

-- ----------------------------
-- Records of manager_role
-- ----------------------------
INSERT INTO `manager_role` VALUES ('3', '文章管理', '专门操作文章编写', '020000,020100,020101', '1531361420', '1531386519');

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '热门');
INSERT INTO `type` VALUES ('2', '普通');
