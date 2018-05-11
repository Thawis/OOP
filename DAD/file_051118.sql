/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : news_dad

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-05-11 16:49:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mod_dadold_filepath
-- ----------------------------
DROP TABLE IF EXISTS `mod_dadold_filepath`;
CREATE TABLE `mod_dadold_filepath` (
  `index_file` int(11) NOT NULL AUTO_INCREMENT,
  `ArticleID` int(11) NOT NULL,
  `File_Path` varchar(255) NOT NULL,
  `File_Name` varchar(255) NOT NULL,
  `Extension` varchar(10) NOT NULL,
  `Content_Type` varchar(50) NOT NULL,
  `Folder` varchar(100) NOT NULL,
  `Download_Status` int(11) NOT NULL,
  PRIMARY KEY (`index_file`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mod_dadold_filepath
-- ----------------------------
INSERT INTO `mod_dadold_filepath` VALUES ('1', '1437', 'Portals/EasyDNNNewsDocuments/1437/', '20171027155047094_0001.jpg', 'jpg', 'application/imgage', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('2', '1436', 'Portals/EasyDNNNewsDocuments/1436/', '20171027155042118_0001.jpg', 'jpg', 'application/imgage', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('3', '1435', 'Portals/EasyDNNNewsDocuments/1435/', '20171027155036756_0001.jpg', 'jpg', 'application/imgage', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('4', '1380', 'Portals/EasyDNNNews/1380/', 'ประกาศสอบราคา หน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('5', '1364', 'Portals/EasyDNNNews/1364/', '20170824154045385_0001.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('6', '1363', 'Portals/EasyDNNNews/1363/', 'B1.2.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('7', '1362', 'Portals/EasyDNNNews/1362/', 'A1.2.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('8', '1361', 'Portals/EasyDNNNews/1361/', 'ประกาศรายชื่อผู้เสนอราคาที่มีสิทธิได้รับคัดเลือก.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('9', '1358', 'Portals/EasyDNNNews/1358/', 'ประกาศประกวดราคาหน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('10', '1351', 'Portals/EasyDNNNews/1351/', 'ประกาศสอบราคาหน้าที่1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('11', '1348', 'Portals/EasyDNNNews/1348/', 'ประกาศผู้มีสิทธิได้รับการคัดเลือก.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('12', '1331', 'Portals/EasyDNNNews/1331/', 'ประกาศผลผู้มีสิทธิได้รับการคัดเลือก.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('13', '1330', 'Portals/EasyDNNNews/1330/', 'ประกาศผู้มีสิทธิได้รับการคัดเลือก.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('14', '1329', 'Portals/EasyDNNNews/1329/', 'ประกาศยกเลิก.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('15', '1328', 'Portals/EasyDNNNews/1328/', 'ประกาศสอบราคาหน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('16', '1319', 'Portals/EasyDNNNews/1319/', 'ประกาศแม่บ้านอาคารB หน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('17', '1318', 'Portals/EasyDNNNews/1318/', 'ประกาศประกวดราคาแม่บ้านA หน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('18', '1310', 'Portals/EasyDNNNews/1310/', 'ประกาศสอบราคาหน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('19', '1304', 'Portals/EasyDNNNews/1304/', 'ประกาศสอบราคาหน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('20', '1299', 'Portals/EasyDNNNews/1299/', 'ประกาศรายชื่อที่มีสิทธิได้รับการเปิดซองราคา-improve server backup.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('21', '1297', 'Portals/EasyDNNNews/1297/', 'ประกาศรายชื่อผู้เสนอราคาที่มีสิทธิได้รับการคัดเลือก.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('22', '1282', 'Portals/EasyDNNNews/1282/', 'ประกาศสอบราคาหน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('23', '1273', 'Portals/Docs/1273/', 'PR-stickerwrap.pdf', 'pdf', 'application/pdf', 'Docs', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('24', '1272', 'Portals/Docs/1272/', 'DCS-100_B1_Manual_v3.51(WW).pdf', 'pdf', 'application/pdf', 'Docs', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('25', '1256', 'Portals/EasyDNNNews/1256/', 'ประกาศสอบราคาหน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('26', '1254', 'Portals/EasyDNNNews/1254/', 'ประกาศประกวดราคา CCTV2560 หน้า 1-2.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('27', '1252', 'Portals/EasyDNNNewsDocuments/1252/', 'ประกาศรายชื่อผุ้ได้รับสิทธิเปิดซองราคารถไฟฟ้า.jpg', 'jpg', 'application/imgage', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('28', '1238', 'Portals/EasyDNNNews/1238/', 'ประกาศสอบราคาซื้อรถไฟฟ้า 1-2.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('29', '1214', 'Portals/EasyDNNNews/1214/', '070417-ประกาศผล ปย.ร่วมกันส่วนที่ 1-ปรับปรุงห้องน้ำT4T6.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('30', '1212', 'Portals/EasyDNNNews/1212/', 'ประกาศรายชื่อผู้เสนอราคาที่มีสิทธิได้รับการคัดเลือก.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('31', '1219', 'Portals/EasyDNNNews/1219/', 'ศาลาพักคอยรถหน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('32', '1218', 'Portals/EasyDNNNews/1218/', 'ตรวจสอบอาคารหน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('33', '1217', 'Portals/EasyDNNNews/1217/', '20170411162953309_0001.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('34', '1211', 'Portals/EasyDNNNews/1211/', '030417-ประกาศผลพิจารณาผล ปย ร่วมกันส่วนที่ 1 ซ่อมถนน.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('35', '1210', 'Portals/EasyDNNNewsDocuments/1210/', 'รายงานผลการจัดซื้อจัดจ้างเดือนมีค60.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('36', '1206', 'Portals/EasyDNNNews/1206/', '20170331104133150_0001.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('37', '1202', 'Portals/EasyDNNNews/1202/', 'ประกาศสอบราคา-ปรับปรุงห้องน้ำT4และT6 หน้า1-2.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('38', '1201', 'Portals/EasyDNNNews/1201/', 'ประกาศสอบราคาจัดจ้างงานปรับปรุงพื้หินขัดลานเอนกประสงค์อาคารรัฐประศาสนภักดีชั้น2 หน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('39', '1227', 'Portals/EasyDNNNews/1227/', 'Photograph (2).jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('40', '1186', 'Portals/EasyDNNNews/1186/', 'ประกาศสอบราคาซ่อมพื้นถนนหน้า1-2.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('41', '1178', 'Portals/EasyDNNNews/1178/', 'ประกาศ โซนB.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('42', '1179', 'Portals/EasyDNNNews/1179/', 'ประกาศ โซนA.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('43', '1209', 'Portals/EasyDNNNewsDocuments/1209/', 'รายงานผลการจัดซื้อจัดจ้างเดือนกพ60.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('44', '1151', 'Portals/EasyDNNNews/1151/', 'ประกาศรายชื่อผู้เสนอราคาที่มีสิทธิได้รับการคัดเลือก.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('45', '1144', 'Portals/EasyDNNNews/1144/', 'ประกาศสอบราคาจัดจ้างปรับปรุงห้องน้ำT1 (CoreN3)ชั้น1และ2 อาคารB หน้า1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('46', '1208', 'Portals/EasyDNNNewsDocuments/1208/', 'รายงานผลการจัดซื้อจัดจ้างเดือนมค60.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('47', '1119', 'Portals/EasyDNNNews/1119/', 'ประกาศสอบราคางานจัดจ้างทำความสะอาดระบบปรับอากาศ(Fan Coil Unit,FCU)ศูนย์ราชการฯ 1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('48', '1063', 'Portals/EasyDNNNews/1063/', 'ประกาศสอบราคางานจัดจ้างทำความสะอาดระบบปรับอากาศ(Fan Coil Unit,FCU)ศูนย์ราชการฯ 1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('49', '883', 'Portals/EasyDNNNews/883/', 'ปรับปรุงฝาบ่อ.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('50', '882', 'Portals/EasyDNNNews/882/', 'ประกาศรายชื่อผู้มีสิทธิได้รับการคัดเลือกศาลาพักคอยโดยสาร.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('51', '826', 'Portals/EasyDNNNewsDocuments/826/', '1_เอกสารประกวดราคา.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('52', '826', 'Portals/EasyDNNNewsDocuments/826/', 'tor.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('53', '826', 'Portals/EasyDNNNewsDocuments/826/', 'รายละเอียดการคำนวณราคากลาง.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('54', '826', 'Portals/EasyDNNNewsDocuments/826/', '1.2_แบบยื่นข้อเสนอประกวดราคา.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('55', '826', 'Portals/EasyDNNNewsDocuments/826/', '1.4_หนังสือแสดงเงื่อนไขการซื้อ.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('56', '826', 'Portals/EasyDNNNewsDocuments/826/', '1.5_แบบสัญญาจ้าง.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('57', '826', 'Portals/EasyDNNNewsDocuments/826/', '1.6_แบบหนังสือค้ำประกัน.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('58', '826', 'Portals/EasyDNNNewsDocuments/826/', '1.7_บทนิยาม.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('59', '826', 'Portals/EasyDNNNewsDocuments/826/', '1.8_แบบบัญชีเอกสาร (1).pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('60', '738', 'Portals/EasyDNNNews/738/', '2015-12-25_14-47-28.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('61', '703', 'Portals/EasyDNNNews/703/', '001.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('62', '672', 'Portals/EasyDNNNews/672/', '67220151008100851504 (2).jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('63', '669', 'Portals/EasyDNNNews/669/', '20151006090409680.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('64', '664', 'Portals/Docs/664/', '2558_09_30 สรุปผลประกาศ Plaza A.pdf', 'pdf', 'application/pdf', 'Docs', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('65', '663', 'Portals/Docs/663/', '2558_09_30 สรุปผลประกาศ REIT.pdf', 'pdf', 'application/pdf', 'Docs', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('66', '642', 'Portals/Docs/642/', '2558_09_08 ประกาศรับฟังความคิดเห็น โครงการให้สิทธิการจัดหาผลประโยชน์โครงการศูนย์ประชุมและโรงแรม.pdf', 'pdf', 'application/pdf', 'Docs', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('67', '641', 'Portals/Docs/641/', '2558_09_08 ประกาศรับฟังความคิดเห็น โครงการศูนย์รวมร้านอาหารและร้านค้า.pdf', 'pdf', 'application/pdf', 'Docs', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('68', '627', 'Portals/EasyDNNNews/627/', '627ประกาศ-ประกวดราคาCCTV1-2.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('69', '573', 'Portals/EasyDNNNews/573/', 'ประกาศ-จ้างทำป้ายบอกเส้นทางภายใน BM 1-2.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('70', '593', 'Portals/EasyDNNNews/593/', 'scan_0001 (1).jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('71', '572', 'Portals/EasyDNNNewsDocuments/572/', '1.1TOR.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('72', '572', 'Portals/EasyDNNNewsDocuments/572/', '1.1.1 แบบแนบท้าย(1.1)-แปลนติดตั้งCCTV.pdf', 'pdf', 'application/pdf', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('73', '561', 'Portals/EasyDNNNews/561/', 'ประกาศสอบราคาคอมพิวเตอร์.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('74', '544', 'Portals/EasyDNNNews/544/', '544TOR.png', 'png', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('75', '544', 'Portals/Docs/544/', 'TOR.pdf', 'pdf', 'application/pdf', 'Docs', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('76', '544', 'Portals/Docs/544/', 'เอกสารประกวดราคา.pdf', 'pdf', 'application/pdf', 'Docs', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('77', '528', 'Portals/EasyDNNNews/528/', '528090515-ประกาศผลสอบราคาจ้างเหมาก่อสร้างป้ายบอกทางเข้าฯ.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('78', '528', 'Portals/EasyDNNNewsDocuments/528/', '090515.jpg', 'jpg', 'application/imgage', 'EasyDNNNewsDocuments', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('79', '523', 'Portals/EasyDNNNews/523/', '270415listผู้มีสิทธิเสนอราคา.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('80', '520', 'Portals/EasyDNNNews/520/', 'ประกาศ สอบราคาจัดซื้อเครื่องสูบน้ำ.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('81', '503', 'Portals/EasyDNNNews/503/', 'สอบราคาจ้างก่อสร้างป้าย.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('82', '495', 'Portals/EasyDNNNews/495/', 'som.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('83', '490', 'Portals/EasyDNNNews/490/', 'scan_20-02-2558_0001_0001.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('84', '769', 'Portals/Docs/769/', 'แบบรายงานแผนการจัดซื้อจัดจ้าง ปี งบประมาณ 2558.pdf', 'pdf', 'application/pdf', 'Docs', '1');
INSERT INTO `mod_dadold_filepath` VALUES ('85', '393', 'Portals/EasyDNNNews/393/', 'final.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('86', '391', 'Portals/EasyDNNNews/391/', 'Notice Pan.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
INSERT INTO `mod_dadold_filepath` VALUES ('87', '383', 'Portals/EasyDNNNews/383/', '383label1.jpg', 'jpg', 'application/imgage', 'EasyDNNNews', '0');
