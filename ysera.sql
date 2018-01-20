/*
MySQL Data Transfer
Source Host: localhost
Source Database: ysera
Target Host: localhost
Target Database: ysera
Date: 03.02.2014 10:13:25
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for news
-- ----------------------------
CREATE TABLE `news` (
  `id` int(11) NOT NULL auto_increment,
  `textfull` longtext collate utf8_bin,
  `textmini` varchar(255) collate utf8_bin default NULL,
  `data` varchar(255) collate utf8_bin default NULL,
  `nazva` varchar(255) collate utf8_bin default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records 
-- ----------------------------
