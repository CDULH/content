/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : content

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-07-19 17:06:27
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
) ENGINE=InnoDB AUTO_INCREMENT=267 DEFAULT CHARSET=utf8;

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
INSERT INTO `api_log` VALUES ('10', 'admin/content/modify/8', '', '', '', '', '0', '', '1531811018');
INSERT INTO `api_log` VALUES ('11', 'admin/content/modify/8', '', '', '', '', '0', '', '1531811078');
INSERT INTO `api_log` VALUES ('12', 'admin/banner', '', '', '', '', '0', '', '1531811080');
INSERT INTO `api_log` VALUES ('13', 'admin/banner', '', '', '', '', '0', '', '1531811097');
INSERT INTO `api_log` VALUES ('14', 'admin/config/modify', '', '', '', '', '0', '', '1531811101');
INSERT INTO `api_log` VALUES ('15', 'admin/config/modify', '', '', '', '', '0', '', '1531811477');
INSERT INTO `api_log` VALUES ('16', 'admin/config/modify', '', '', '', '', '0', '', '1531811479');
INSERT INTO `api_log` VALUES ('17', 'admin/config/modify', '', '', '', '', '0', '', '1531811479');
INSERT INTO `api_log` VALUES ('18', 'admin/config/modify', '', '', '', '', '0', '', '1531811480');
INSERT INTO `api_log` VALUES ('19', 'admin/config/modify', '', '', '', '', '0', '', '1531811480');
INSERT INTO `api_log` VALUES ('20', 'admin/config', '', '', '', '', '0', '', '1531811483');
INSERT INTO `api_log` VALUES ('21', 'admin/banner', '', '', '', '', '0', '', '1531811485');
INSERT INTO `api_log` VALUES ('22', 'admin/banner', '', '', '', '', '0', '', '1531811500');
INSERT INTO `api_log` VALUES ('23', 'admin/banner', '', '', '', '', '0', '', '1531811501');
INSERT INTO `api_log` VALUES ('24', 'admin/banner', '', '', '', '', '0', '', '1531811501');
INSERT INTO `api_log` VALUES ('25', 'admin/banner', '', '', '', '', '0', '', '1531811501');
INSERT INTO `api_log` VALUES ('26', 'admin/banner', '', '', '', '', '0', '', '1531811510');
INSERT INTO `api_log` VALUES ('27', 'admin/banner', '', '', '', '', '0', '', '1531811511');
INSERT INTO `api_log` VALUES ('28', 'admin/banner', '', '', '', '', '0', '', '1531811515');
INSERT INTO `api_log` VALUES ('29', 'admin/banner', '', '', '', '', '0', '', '1531811527');
INSERT INTO `api_log` VALUES ('30', 'admin/banner', '', '', '', '', '0', '', '1531811529');
INSERT INTO `api_log` VALUES ('31', 'admin/banner/modify', '', '', '', '', '0', '', '1531811532');
INSERT INTO `api_log` VALUES ('32', 'admin/banner/modify', '', '', '', '', '0', '', '1531811590');
INSERT INTO `api_log` VALUES ('33', 'admin/banner/modify', '', '', '', '', '0', '', '1531811591');
INSERT INTO `api_log` VALUES ('34', 'admin/banner/modify', '', '', '', '', '0', '', '1531811591');
INSERT INTO `api_log` VALUES ('35', 'admin/banner/modify', '', '', '', '', '0', '', '1531811615');
INSERT INTO `api_log` VALUES ('36', 'admin/banner/modify', '', '', '', '', '0', '', '1531811616');
INSERT INTO `api_log` VALUES ('37', 'admin/banner/modify', '', '', '', '', '0', '', '1531811616');
INSERT INTO `api_log` VALUES ('38', 'admin/banner/modify', '', '', '', '', '0', '', '1531811617');
INSERT INTO `api_log` VALUES ('39', 'admin/banner/modify', '', '', '', '', '0', '', '1531811618');
INSERT INTO `api_log` VALUES ('40', 'admin/banner/modify', '', '', '', '', '0', '', '1531811629');
INSERT INTO `api_log` VALUES ('41', 'admin/banner/modify', '', '', '', '', '0', '', '1531811641');
INSERT INTO `api_log` VALUES ('42', 'admin/banner/modify', '', '', '', '', '0', '', '1531811666');
INSERT INTO `api_log` VALUES ('43', 'admin/banner/modify', '', '', '', '', '0', '', '1531811667');
INSERT INTO `api_log` VALUES ('44', 'admin/banner/modify', '', '', '', '', '0', '', '1531811667');
INSERT INTO `api_log` VALUES ('45', 'admin/banner/modify', '', '', '', '', '0', '', '1531811667');
INSERT INTO `api_log` VALUES ('46', 'admin/banner/modify', '', '', '', '', '0', '', '1531811667');
INSERT INTO `api_log` VALUES ('47', 'admin/banner/modify', '', '', '', '', '0', '', '1531811668');
INSERT INTO `api_log` VALUES ('48', 'admin/banner/modify', '', '', '', '', '0', '', '1531811691');
INSERT INTO `api_log` VALUES ('49', 'admin/banner/modifyPost', '', '', '{\"channel\":\"1\",\"title\":\"\\u9996\\u9875\",\"sort\":\"1\",\"path\":\"sdfs\",\"_token\":\"xODFTwbPvVf2l0NFs5KhZlX5KmTsq27inD4kYjG1\",\"id\":\"0\"}', '', '0', '', '1531811705');
INSERT INTO `api_log` VALUES ('50', 'admin/banner', '', '', '', '', '0', '', '1531811705');
INSERT INTO `api_log` VALUES ('51', 'admin/banner', '', '', '', '', '0', '', '1531811748');
INSERT INTO `api_log` VALUES ('52', 'admin/banner', '', '', '', '', '0', '', '1531811793');
INSERT INTO `api_log` VALUES ('53', 'admin/banner', '', '', '', '', '0', '', '1531811805');
INSERT INTO `api_log` VALUES ('54', 'admin/banner', '', '', '', '', '0', '', '1531811839');
INSERT INTO `api_log` VALUES ('55', 'admin/banner/modify/1', '', '', '', '', '0', '', '1531811843');
INSERT INTO `api_log` VALUES ('56', 'admin/banner/modifyPost', '', '', '{\"channel\":\"1\",\"title\":\"\\u9996\\u9875\",\"sort\":\"12\",\"path\":\"sdfs\",\"_token\":\"xODFTwbPvVf2l0NFs5KhZlX5KmTsq27inD4kYjG1\",\"id\":\"1\"}', '', '0', '', '1531811848');
INSERT INTO `api_log` VALUES ('57', 'admin/banner', '', '', '', '', '0', '', '1531811848');
INSERT INTO `api_log` VALUES ('58', 'admin/banner', '', '', '', '', '0', '', '1531812059');
INSERT INTO `api_log` VALUES ('59', 'admin/banner/modify', '', '', '', '', '0', '', '1531812060');
INSERT INTO `api_log` VALUES ('60', 'admin/banner', '', '', '', '', '0', '', '1531812063');
INSERT INTO `api_log` VALUES ('61', 'admin/banner', '', '', '', '', '0', '', '1531812064');
INSERT INTO `api_log` VALUES ('62', 'admin/banner', '', '', '', '', '0', '', '1531812065');
INSERT INTO `api_log` VALUES ('63', 'admin/banner', '', '', '', '', '0', '', '1531812065');
INSERT INTO `api_log` VALUES ('64', 'admin/banner', '', '', '', '', '0', '', '1531812065');
INSERT INTO `api_log` VALUES ('65', 'admin/banner', '', '', '', '', '0', '', '1531812065');
INSERT INTO `api_log` VALUES ('66', 'admin/banner', '', '', '', '', '0', '', '1531812067');
INSERT INTO `api_log` VALUES ('67', 'admin/banner', '', '', '', '', '0', '', '1531815910');
INSERT INTO `api_log` VALUES ('68', 'admin/banner', '', '', '', '', '0', '', '1531818021');
INSERT INTO `api_log` VALUES ('69', 'admin/banner', '', '', '', '', '0', '', '1531818023');
INSERT INTO `api_log` VALUES ('70', 'admin/login/login', '', '', '{\"username\":\"admin\",\"password\":\"000000\"}', '', '0', '', '1531964954');
INSERT INTO `api_log` VALUES ('71', '/', '', '', '', '', '0', '', '1531964954');
INSERT INTO `api_log` VALUES ('72', 'admin', '', '', '', '', '0', '', '1531964956');
INSERT INTO `api_log` VALUES ('73', 'admin/config', '', '', '', '', '0', '', '1531964960');
INSERT INTO `api_log` VALUES ('74', 'admin/banner', '', '', '', '', '0', '', '1531964961');
INSERT INTO `api_log` VALUES ('75', 'admin/banner', '', '', '', '', '0', '', '1531965898');
INSERT INTO `api_log` VALUES ('76', 'admin/banner', '', '', '', '', '0', '', '1531965898');
INSERT INTO `api_log` VALUES ('77', 'admin/banner', '', '', '', '', '0', '', '1531965930');
INSERT INTO `api_log` VALUES ('78', 'admin/banner', '', '', '', '', '0', '', '1531965947');
INSERT INTO `api_log` VALUES ('79', 'admin/banner', '', '', '', '', '0', '', '1531965971');
INSERT INTO `api_log` VALUES ('80', 'admin/banner', '', '', '', '', '0', '', '1531968281');
INSERT INTO `api_log` VALUES ('81', 'admin/banner', '', '', '', '', '0', '', '1531968281');
INSERT INTO `api_log` VALUES ('82', 'admin/banner', '', '', '', '', '0', '', '1531968719');
INSERT INTO `api_log` VALUES ('83', 'admin/banner', '', '', '', '', '0', '', '1531968720');
INSERT INTO `api_log` VALUES ('84', 'admin/content', '', '', '', '', '0', '', '1531968721');
INSERT INTO `api_log` VALUES ('85', 'admin/managerRole', '', '', '', '', '0', '', '1531968723');
INSERT INTO `api_log` VALUES ('86', 'admin/manager', '', '', '', '', '0', '', '1531968723');
INSERT INTO `api_log` VALUES ('87', 'admin/config', '', '', '', '', '0', '', '1531968725');
INSERT INTO `api_log` VALUES ('88', 'admin/banner', '', '', '', '', '0', '', '1531968726');
INSERT INTO `api_log` VALUES ('89', 'admin/banner', '', '', '', '', '0', '', '1531969107');
INSERT INTO `api_log` VALUES ('90', 'admin/banner/modify', '', '', '', '', '0', '', '1531969148');
INSERT INTO `api_log` VALUES ('91', 'admin/banner/modify', '', '', '', '', '0', '', '1531969155');
INSERT INTO `api_log` VALUES ('92', 'admin/banner', '', '', '', '', '0', '', '1531969158');
INSERT INTO `api_log` VALUES ('93', 'admin/banner/modify/1', '', '', '', '', '0', '', '1531969212');
INSERT INTO `api_log` VALUES ('94', 'admin/banner/modifyPost', '', '', '{\"channel\":\"1\",\"title\":\"\\u9996\\u9875\",\"sort\":\"12\",\"file_id\":\"1\",\"_token\":\"RT9VMaJLNO2t1O3G6ZQk0X4hTe8q3g3d13sy3Dvy\",\"id\":\"1\"}', '', '0', '', '1531969214');
INSERT INTO `api_log` VALUES ('95', 'admin/banner', '', '', '', '', '0', '', '1531969214');
INSERT INTO `api_log` VALUES ('96', 'admin/banner', '', '', '', '', '0', '', '1531969263');
INSERT INTO `api_log` VALUES ('97', 'admin/banner', '', '', '', '', '0', '', '1531969263');
INSERT INTO `api_log` VALUES ('98', 'admin/banner', '', '', '', '', '0', '', '1531969264');
INSERT INTO `api_log` VALUES ('99', 'admin/banner', '', '', '', '', '0', '', '1531969264');
INSERT INTO `api_log` VALUES ('100', 'admin/banner', '', '', '', '', '0', '', '1531969394');
INSERT INTO `api_log` VALUES ('101', 'admin/banner', '', '', '', '', '0', '', '1531969395');
INSERT INTO `api_log` VALUES ('102', 'admin/banner', '', '', '', '', '0', '', '1531969397');
INSERT INTO `api_log` VALUES ('103', 'admin/banner', '', '', '', '', '0', '', '1531969412');
INSERT INTO `api_log` VALUES ('104', 'admin/banner', '', '', '', '', '0', '', '1531969426');
INSERT INTO `api_log` VALUES ('105', 'admin/banner', '', '', '', '', '0', '', '1531969442');
INSERT INTO `api_log` VALUES ('106', 'admin/banner', '', '', '', '', '0', '', '1531969443');
INSERT INTO `api_log` VALUES ('107', 'admin/banner', '', '', '', '', '0', '', '1531969444');
INSERT INTO `api_log` VALUES ('108', 'admin/banner', '', '', '', '', '0', '', '1531969445');
INSERT INTO `api_log` VALUES ('109', 'admin/banner', '', '', '', '', '0', '', '1531969497');
INSERT INTO `api_log` VALUES ('110', 'admin/banner', '', '', '', '', '0', '', '1531969501');
INSERT INTO `api_log` VALUES ('111', 'admin/banner', '', '', '', '', '0', '', '1531969535');
INSERT INTO `api_log` VALUES ('112', 'admin/banner', '', '', '', '', '0', '', '1531969540');
INSERT INTO `api_log` VALUES ('113', 'admin/banner', '', '', '', '', '0', '', '1531969603');
INSERT INTO `api_log` VALUES ('114', 'admin/banner', '', '', '', '', '0', '', '1531969604');
INSERT INTO `api_log` VALUES ('115', 'admin/banner', '', '', '', '', '0', '', '1531969605');
INSERT INTO `api_log` VALUES ('116', 'admin/config', '', '', '', '', '0', '', '1531969608');
INSERT INTO `api_log` VALUES ('117', 'admin/banner', '', '', '', '', '0', '', '1531969610');
INSERT INTO `api_log` VALUES ('118', 'admin/banner', '', '', '', '', '0', '', '1531969624');
INSERT INTO `api_log` VALUES ('119', 'admin/banner', '', '', '', '', '0', '', '1531969625');
INSERT INTO `api_log` VALUES ('120', 'admin/banner', '', '', '', '', '0', '', '1531969626');
INSERT INTO `api_log` VALUES ('121', 'admin', '', '', '', '', '0', '', '1531969626');
INSERT INTO `api_log` VALUES ('122', 'admin/content', '', '', '', '', '0', '', '1531969631');
INSERT INTO `api_log` VALUES ('123', 'admin/manager', '', '', '', '', '0', '', '1531969634');
INSERT INTO `api_log` VALUES ('124', 'admin/managerRole', '', '', '', '', '0', '', '1531969634');
INSERT INTO `api_log` VALUES ('125', 'admin/managerRole', '', '', '', '', '0', '', '1531969666');
INSERT INTO `api_log` VALUES ('126', 'admin/managerRole', '', '', '', '', '0', '', '1531969667');
INSERT INTO `api_log` VALUES ('127', 'admin/managerRole', '', '', '', '', '0', '', '1531969668');
INSERT INTO `api_log` VALUES ('128', 'admin/managerRole', '', '', '', '', '0', '', '1531969668');
INSERT INTO `api_log` VALUES ('129', 'admin/manager', '', '', '', '', '0', '', '1531969669');
INSERT INTO `api_log` VALUES ('130', 'admin/banner', '', '', '', '', '0', '', '1531969673');
INSERT INTO `api_log` VALUES ('131', 'admin/banner', '', '', '', '', '0', '', '1531969714');
INSERT INTO `api_log` VALUES ('132', 'admin/banner', '', '', '', '', '0', '', '1531969715');
INSERT INTO `api_log` VALUES ('133', 'admin', '', '', '', '', '0', '', '1531969716');
INSERT INTO `api_log` VALUES ('134', 'admin', '', '', '', '', '0', '', '1531969721');
INSERT INTO `api_log` VALUES ('135', 'admin', '', '', '', '', '0', '', '1531969722');
INSERT INTO `api_log` VALUES ('136', 'admin', '', '', '', '', '0', '', '1531969722');
INSERT INTO `api_log` VALUES ('137', 'admin', '', '', '', '', '0', '', '1531969723');
INSERT INTO `api_log` VALUES ('138', 'admin', '', '', '', '', '0', '', '1531970048');
INSERT INTO `api_log` VALUES ('139', 'admin', '', '', '', '', '0', '', '1531970050');
INSERT INTO `api_log` VALUES ('140', 'admin/config', '', '', '', '', '0', '', '1531970051');
INSERT INTO `api_log` VALUES ('141', 'admin/banner', '', '', '', '', '0', '', '1531970052');
INSERT INTO `api_log` VALUES ('142', 'admin/banner', '', '', '', '', '0', '', '1531970190');
INSERT INTO `api_log` VALUES ('143', 'admin/banner', '', '', '', '', '0', '', '1531970324');
INSERT INTO `api_log` VALUES ('144', 'admin/banner', '', '', '', '', '0', '', '1531970377');
INSERT INTO `api_log` VALUES ('145', 'admin/banner', '', '', '', '', '0', '', '1531970378');
INSERT INTO `api_log` VALUES ('146', 'admin/banner', '', '', '', '', '0', '', '1531970379');
INSERT INTO `api_log` VALUES ('147', 'admin/banner', '', '', '', '', '0', '', '1531970381');
INSERT INTO `api_log` VALUES ('148', 'admin/banner', '', '', '', '', '0', '', '1531970394');
INSERT INTO `api_log` VALUES ('149', 'admin/banner', '', '', '', '', '0', '', '1531970833');
INSERT INTO `api_log` VALUES ('150', 'admin/banner', '', '', '', '', '0', '', '1531970848');
INSERT INTO `api_log` VALUES ('151', 'admin/banner', '', '', '', '', '0', '', '1531970884');
INSERT INTO `api_log` VALUES ('152', 'admin/banner', '', '', '', '', '0', '', '1531970885');
INSERT INTO `api_log` VALUES ('153', 'admin/banner', '', '', '', '', '0', '', '1531970885');
INSERT INTO `api_log` VALUES ('154', 'admin/banner', '', '', '', '', '0', '', '1531971250');
INSERT INTO `api_log` VALUES ('155', 'admin/banner', '', '', '', '', '0', '', '1531971251');
INSERT INTO `api_log` VALUES ('156', 'admin/banner', '', '', '', '', '0', '', '1531971252');
INSERT INTO `api_log` VALUES ('157', 'admin/banner', '', '', '', '', '0', '', '1531971252');
INSERT INTO `api_log` VALUES ('158', 'admin/banner/modify', '', '', '', '', '0', '', '1531971254');
INSERT INTO `api_log` VALUES ('159', 'admin/banner/modify', '', '', '', '', '0', '', '1531971391');
INSERT INTO `api_log` VALUES ('160', 'admin/banner/modify', '', '', '', '', '0', '', '1531971421');
INSERT INTO `api_log` VALUES ('161', 'admin/banner/modify', '', '', '', '', '0', '', '1531971485');
INSERT INTO `api_log` VALUES ('162', 'admin/content', '', '', '', '', '0', '', '1531971511');
INSERT INTO `api_log` VALUES ('163', 'admin/content/modify', '', '', '', '', '0', '', '1531971512');
INSERT INTO `api_log` VALUES ('164', 'admin/managerRole', '', '', '', '', '0', '', '1531971552');
INSERT INTO `api_log` VALUES ('165', 'admin/managerRole/permission/3', '', '', '', '', '0', '', '1531971554');
INSERT INTO `api_log` VALUES ('166', 'admin/managerRole/permissionPost', '', '', '{\"selected\":[\"020000\",\"020100\",\"020101\",\"050000\",\"050100\",\"050101\",\"050102\",\"050103\",\"050104\",\"050105\"],\"_token\":\"RT9VMaJLNO2t1O3G6ZQk0X4hTe8q3g3d13sy3Dvy\",\"id\":\"3\"}', '', '0', '', '1531971561');
INSERT INTO `api_log` VALUES ('167', 'admin/managerRole', '', '', '', '', '0', '', '1531971561');
INSERT INTO `api_log` VALUES ('168', 'admin/managerRole/permission/3', '', '', '', '', '0', '', '1531971563');
INSERT INTO `api_log` VALUES ('169', 'admin/managerRole/permission/3', '', '', '', '', '0', '', '1531971579');
INSERT INTO `api_log` VALUES ('170', 'admin/managerRole/permissionPost', '', '', '{\"selected\":[\"020000\",\"020100\",\"020101\",\"050000\",\"050100\",\"050101\",\"050102\",\"050103\",\"050104\",\"050105\",\"050200\",\"050201\",\"050202\",\"050203\",\"050204\",\"050205\"],\"_token\":\"RT9VMaJLNO2t1O3G6ZQk0X4hTe8q3g3d13sy3Dvy\",\"id\":\"3\"}', '', '0', '', '1531971582');
INSERT INTO `api_log` VALUES ('171', 'admin/managerRole', '', '', '', '', '0', '', '1531971582');
INSERT INTO `api_log` VALUES ('172', 'admin/managerRole/permission/3', '', '', '', '', '0', '', '1531971583');
INSERT INTO `api_log` VALUES ('173', 'admin/managerRole/permissionPost', '', '', '{\"selected\":[\"020000\",\"020100\",\"020101\",\"070000\",\"070100\",\"070101\",\"070200\",\"070201\"],\"_token\":\"RT9VMaJLNO2t1O3G6ZQk0X4hTe8q3g3d13sy3Dvy\",\"id\":\"3\"}', '', '0', '', '1531971587');
INSERT INTO `api_log` VALUES ('174', 'admin/managerRole', '', '', '', '', '0', '', '1531971588');
INSERT INTO `api_log` VALUES ('175', 'admin/managerRole/permission/3', '', '', '', '', '0', '', '1531971589');
INSERT INTO `api_log` VALUES ('176', 'admin/banner', '', '', '', '', '0', '', '1531971698');
INSERT INTO `api_log` VALUES ('177', 'admin/banner', '', '', '', '', '0', '', '1531971706');
INSERT INTO `api_log` VALUES ('178', 'admin/banner', '', '', '', '', '0', '', '1531971714');
INSERT INTO `api_log` VALUES ('179', 'admin/banner', '', '', '', '', '0', '', '1531971722');
INSERT INTO `api_log` VALUES ('180', 'admin/banner', '', '', '', '', '0', '', '1531971745');
INSERT INTO `api_log` VALUES ('181', 'admin/banner', '', '', '', '', '0', '', '1531971748');
INSERT INTO `api_log` VALUES ('182', 'admin/banner', '', '', '', '', '0', '', '1531971809');
INSERT INTO `api_log` VALUES ('183', 'admin/banner', '', '', '', '', '0', '', '1531971844');
INSERT INTO `api_log` VALUES ('184', 'admin/banner', '', '', '', '', '0', '', '1531971845');
INSERT INTO `api_log` VALUES ('185', 'admin/banner', '', '', '', '', '0', '', '1531971845');
INSERT INTO `api_log` VALUES ('186', 'admin/banner', '', '', '', '', '0', '', '1531971846');
INSERT INTO `api_log` VALUES ('187', 'admin/banner', '', '', '', '', '0', '', '1531971846');
INSERT INTO `api_log` VALUES ('188', 'admin/banner', '', '', '', '', '0', '', '1531971846');
INSERT INTO `api_log` VALUES ('189', 'admin/banner', '', '', '', '', '0', '', '1531971847');
INSERT INTO `api_log` VALUES ('190', 'admin/banner', '', '', '', '', '0', '', '1531971847');
INSERT INTO `api_log` VALUES ('191', 'admin/banner', '', '', '', '', '0', '', '1531971889');
INSERT INTO `api_log` VALUES ('192', 'admin/banner', '', '', '', '', '0', '', '1531971890');
INSERT INTO `api_log` VALUES ('193', 'admin/banner', '', '', '', '', '0', '', '1531971890');
INSERT INTO `api_log` VALUES ('194', 'admin/banner', '', '', '', '', '0', '', '1531971900');
INSERT INTO `api_log` VALUES ('195', 'admin/banner', '', '', '', '', '0', '', '1531971938');
INSERT INTO `api_log` VALUES ('196', 'admin/banner', '', '', '', '', '0', '', '1531971940');
INSERT INTO `api_log` VALUES ('197', 'admin/banner', '', '', '', '', '0', '', '1531972179');
INSERT INTO `api_log` VALUES ('198', 'admin/banner', '', '', '', '', '0', '', '1531972184');
INSERT INTO `api_log` VALUES ('199', 'admin/login/login', '', '', '', '', '0', '', '1531980040');
INSERT INTO `api_log` VALUES ('200', 'admin/login/login', '', '', '{\"username\":\"admin\",\"password\":\"000000\"}', '', '0', '', '1531980042');
INSERT INTO `api_log` VALUES ('201', '/', '', '', '', '', '0', '', '1531980042');
INSERT INTO `api_log` VALUES ('202', 'admin', '', '', '', '', '0', '', '1531980045');
INSERT INTO `api_log` VALUES ('203', 'admin/content', '', '', '', '', '0', '', '1531980047');
INSERT INTO `api_log` VALUES ('204', 'admin/content/modify/8', '', '', '', '', '0', '', '1531980053');
INSERT INTO `api_log` VALUES ('205', 'admin/content/modifyPost', '', '', '{\"type_id\":\"1\",\"title\":\"\\u6d4b\\u8bd5\",\"author\":\"\\u58eb\\u5927\\u592b\\u58eb\\u5927\\u592b\",\"status\":\"3\",\"content\":\"sdfsdfsfsd\",\"files\":null,\"_token\":\"MNra22nwSYipNbL1t3YLGOtUYDTWMhOE2huVxAVl\",\"id\":\"8\"}', '', '0', '', '1531980069');
INSERT INTO `api_log` VALUES ('206', 'admin/content', '', '', '', '', '0', '', '1531980069');
INSERT INTO `api_log` VALUES ('207', 'admin/content', '', '', '', '', '0', '', '1531980483');
INSERT INTO `api_log` VALUES ('208', 'admin/content', '', '', '', '', '0', '', '1531980537');
INSERT INTO `api_log` VALUES ('209', 'admin/content', '', '', '', '', '0', '', '1531980592');
INSERT INTO `api_log` VALUES ('210', 'admin/content', '', '', '', '', '0', '', '1531980646');
INSERT INTO `api_log` VALUES ('211', 'admin/content', '', '', '', '', '0', '', '1531980665');
INSERT INTO `api_log` VALUES ('212', 'admin/content/remove/3', '', '', '', '', '0', '', '1531980683');
INSERT INTO `api_log` VALUES ('213', 'admin/content', '', '', '', '', '0', '', '1531980683');
INSERT INTO `api_log` VALUES ('214', 'admin/content', '', '', '', '', '0', '', '1531981006');
INSERT INTO `api_log` VALUES ('215', 'admin/content', '', '', '', '', '0', '', '1531981015');
INSERT INTO `api_log` VALUES ('216', 'admin/content', '', '', '', '', '0', '', '1531981413');
INSERT INTO `api_log` VALUES ('217', 'admin/content', '', '', '', '', '0', '', '1531981438');
INSERT INTO `api_log` VALUES ('218', 'admin/content', '', '', '', '', '0', '', '1531981472');
INSERT INTO `api_log` VALUES ('219', 'admin/content', '', '', '', '', '0', '', '1531981551');
INSERT INTO `api_log` VALUES ('220', 'admin/content', '', '', '', '', '0', '', '1531981553');
INSERT INTO `api_log` VALUES ('221', 'admin/content', '', '', '', '', '0', '', '1531981555');
INSERT INTO `api_log` VALUES ('222', 'admin/content', '', '', '', '', '0', '', '1531981571');
INSERT INTO `api_log` VALUES ('223', 'admin/content', '', '', '', '', '0', '', '1531981572');
INSERT INTO `api_log` VALUES ('224', 'admin/content', '', '', '', '', '0', '', '1531981573');
INSERT INTO `api_log` VALUES ('225', 'admin/content', '', '', '', '', '0', '', '1531981602');
INSERT INTO `api_log` VALUES ('226', 'admin/content', '', '', '', '', '0', '', '1531981630');
INSERT INTO `api_log` VALUES ('227', 'admin/content', '', '', '', '', '0', '', '1531981643');
INSERT INTO `api_log` VALUES ('228', 'admin/manager', '', '', '', '', '0', '', '1531981646');
INSERT INTO `api_log` VALUES ('229', 'admin/manager/modify', '', '', '', '', '0', '', '1531981649');
INSERT INTO `api_log` VALUES ('230', 'admin/manager', '', '', '', '', '0', '', '1531981724');
INSERT INTO `api_log` VALUES ('231', 'admin/manager', '', '', '', '', '0', '', '1531981726');
INSERT INTO `api_log` VALUES ('232', 'admin/config', '', '', '', '', '0', '', '1531981728');
INSERT INTO `api_log` VALUES ('233', 'admin/banner', '', '', '', '', '0', '', '1531981729');
INSERT INTO `api_log` VALUES ('234', 'admin/content', '', '', '', '', '0', '', '1531982862');
INSERT INTO `api_log` VALUES ('235', 'admin/content', '', '', '', '', '0', '', '1531982865');
INSERT INTO `api_log` VALUES ('236', 'admin/content', '', '', '', '', '0', '', '1531982894');
INSERT INTO `api_log` VALUES ('237', 'admin/content', '', '', '', '', '0', '', '1531982955');
INSERT INTO `api_log` VALUES ('238', 'admin/content', '', '', '', '', '0', '', '1531982978');
INSERT INTO `api_log` VALUES ('239', 'admin/content', '', '', '', '', '0', '', '1531983006');
INSERT INTO `api_log` VALUES ('240', 'admin/content', '', '', '', '', '0', '', '1531983018');
INSERT INTO `api_log` VALUES ('241', 'admin/content', '', '', '', '', '0', '', '1531983050');
INSERT INTO `api_log` VALUES ('242', 'admin/content', '', '', '', '', '0', '', '1531983059');
INSERT INTO `api_log` VALUES ('243', 'admin/content', '', '', '', '', '0', '', '1531983122');
INSERT INTO `api_log` VALUES ('244', 'admin/content', '', '', '', '', '0', '', '1531983137');
INSERT INTO `api_log` VALUES ('245', 'admin/content', '', '', '', '', '0', '', '1531983150');
INSERT INTO `api_log` VALUES ('246', 'admin/content', '', '', '', '', '0', '', '1531983161');
INSERT INTO `api_log` VALUES ('247', 'admin/content', '', '', '', '', '0', '', '1531983175');
INSERT INTO `api_log` VALUES ('248', 'admin/content', '', '', '', '', '0', '', '1531983217');
INSERT INTO `api_log` VALUES ('249', 'admin/config', '', '', '', '', '0', '', '1531983247');
INSERT INTO `api_log` VALUES ('250', 'admin/config', '', '', '', '', '0', '', '1531983328');
INSERT INTO `api_log` VALUES ('251', 'admin/config', '', '', '', '', '0', '', '1531983329');
INSERT INTO `api_log` VALUES ('252', 'admin/config', '', '', '', '', '0', '', '1531983332');
INSERT INTO `api_log` VALUES ('253', 'admin/config', '', '', '', '', '0', '', '1531983344');
INSERT INTO `api_log` VALUES ('254', 'admin/config', '', '', '', '', '0', '', '1531983361');
INSERT INTO `api_log` VALUES ('255', 'admin/config', '', '', '', '', '0', '', '1531983375');
INSERT INTO `api_log` VALUES ('256', 'admin/config/remove/3', '', '', '', '', '0', '', '1531983383');
INSERT INTO `api_log` VALUES ('257', 'admin/config', '', '', '', '', '0', '', '1531983383');
INSERT INTO `api_log` VALUES ('258', 'admin/banner', '', '', '', '', '0', '', '1531983504');
INSERT INTO `api_log` VALUES ('259', 'admin/banner', '', '', '', '', '0', '', '1531983522');
INSERT INTO `api_log` VALUES ('260', 'admin/banner', '', '', '', '', '0', '', '1531983701');
INSERT INTO `api_log` VALUES ('261', 'admin/banner', '', '', '', '', '0', '', '1531983702');
INSERT INTO `api_log` VALUES ('262', 'admin/banner', '', '', '', '', '0', '', '1531983748');
INSERT INTO `api_log` VALUES ('263', 'admin/banner', '', '', '', '', '0', '', '1531983980');
INSERT INTO `api_log` VALUES ('264', 'admin/banner', '', '', '', '', '0', '', '1531984011');
INSERT INTO `api_log` VALUES ('265', 'admin/banner', '', '', '', '', '0', '', '1531985778');
INSERT INTO `api_log` VALUES ('266', 'admin/banner', '', '', '', '', '0', '', '1531985780');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `sort` int(10) NOT NULL DEFAULT '1' COMMENT '排序',
  `file_id` int(10) NOT NULL DEFAULT '0' COMMENT '地址',
  `channel` tinyint(1) NOT NULL DEFAULT '1' COMMENT '途径',
  `created_at` int(10) NOT NULL DEFAULT '0',
  `updated_at` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', '首页', '12', '1', '1', '1531811705', '1531811848');

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
INSERT INTO `content` VALUES ('4', '2', '专员', 'sdfsdfsfsf', 'lihagn', '2', '1531358769', '1531358769');
INSERT INTO `content` VALUES ('5', '1', '专员', '说的分手的', '沙发上地方', '1', '1531358871', '1531358871');
INSERT INTO `content` VALUES ('6', '2', '连天暴雨1', '<p style=\"padding-bottom: 14px; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\"><span style=\"font-weight: 700;\">关于网页授权的两种scope的区别说明</span></p><p style=\"padding-bottom: 14px; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">1、以snsapi_base为scope发起的网页授权，是用来获取进入页面的用户的openid的，并且是静默授权并自动跳转到回调页的。用户感知的就是直接进入了回调页（往往是业务页面）</p><p style=\"padding-bottom: 14px; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">2、以snsapi_userinfo为scope发起的网页授权，是用来获取用户的基本信息的。但这种授权需要用户手动同意，并且由于用户同意过，所以无须关注，就可在授权后获取该用户的基本信息。</p><p style=\"padding-bottom: 14px; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;\"=\"\">3、用户管理类接口中的“获取用户基本信息接口”，是在用户和公众号产生消息交互或关注后事件推送后，才能根据用户OpenID来获取用户基本信息。这个接口，包括其他微信接口，都是需要该用户（即openid）关注了公众号后，才能调用成功的。</p>', '李航', '1', '1531725068', '1531726163');
INSERT INTO `content` VALUES ('8', '1', '测试', 'sdfsdfsfsd', '士大夫士大夫', '3', '1531726202', '1531726202');

-- ----------------------------
-- Table structure for file
-- ----------------------------
DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '路径',
  `created_at` int(10) NOT NULL DEFAULT '0',
  `updated_at` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='文件上传记录';

-- ----------------------------
-- Records of file
-- ----------------------------
INSERT INTO `file` VALUES ('1', 'index', '0', '0');

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
INSERT INTO `manager_role` VALUES ('3', '文章管理', '专门操作文章编写', '020000,020100,020101,070000,070100,070101,070200,070201', '1531361420', '1531971588');

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
