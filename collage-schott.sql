/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : collage-schott

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 27/02/2021 18:49:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bysentencestable
-- ----------------------------
DROP TABLE IF EXISTS `bysentencestable`;
CREATE TABLE `bysentencestable`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bysentencestable
-- ----------------------------

-- ----------------------------
-- Table structure for bywordstable
-- ----------------------------
DROP TABLE IF EXISTS `bywordstable`;
CREATE TABLE `bywordstable`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `text` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bywordstable
-- ----------------------------

-- ----------------------------
-- Table structure for randomwordtable_de
-- ----------------------------
DROP TABLE IF EXISTS `randomwordtable_de`;
CREATE TABLE `randomwordtable_de`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `word1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word7` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 208 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of randomwordtable_de
-- ----------------------------

-- ----------------------------
-- Table structure for randomwordtable_en
-- ----------------------------
DROP TABLE IF EXISTS `randomwordtable_en`;
CREATE TABLE `randomwordtable_en`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `word1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `word7` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 257 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of randomwordtable_en
-- ----------------------------
INSERT INTO `randomwordtable_en` VALUES (208, 'Schon', 'lange', 'träumt', 'davon', 'als', 'Theaterautorin', 'Karriere');
INSERT INTO `randomwordtable_en` VALUES (209, 'zu', 'machen', 'Richtig', 'weit', 'gekommen', 'ist', 'sie');
INSERT INTO `randomwordtable_en` VALUES (210, 'damit', 'aber', 'nicht', 'sie', 'muss', 'sich', 'mit');
INSERT INTO `randomwordtable_en` VALUES (211, 'dem', 'Unterrichten', 'anderer', 'über', 'Wasser', 'halten', 'während');
INSERT INTO `randomwordtable_en` VALUES (212, 'sie', 'nach', 'wie', 'vor', 'daran', 'festhält', 'den');
INSERT INTO `randomwordtable_en` VALUES (213, 'großen', 'Durchbruch', 'zu', 'schaffen', 'Als', 'dann', 'auch');
INSERT INTO `randomwordtable_en` VALUES (214, 'noch', 'ihr', '40', 'Geburtstag', 'naht', 'der', 'für');
INSERT INTO `randomwordtable_en` VALUES (215, 'sie', 'enormen', 'Symbolcharakter', 'hat', 'entscheidet', 'sie', 'etwas');
INSERT INTO `randomwordtable_en` VALUES (216, 'ganz', 'anderes', 'zu', 'versuchen:', 'Sie', 'nennt', 'sich');
INSERT INTO `randomwordtable_en` VALUES (217, 'nun', 'und', 'versucht', 'als', 'Rapperin', 'ihr', 'Glück');
INSERT INTO `randomwordtable_en` VALUES (218, 'zur', 'Verwunderung', 'ihres', 'Umfeldes', 'Doch', 'auch', '');
INSERT INTO `randomwordtable_en` VALUES (219, 'Radha', 'selbst', 'ist', 'sich', 'nicht', 'sicher', 'ob');
INSERT INTO `randomwordtable_en` VALUES (220, 'dies', 'wirklich', 'ihr', 'Weg', 'ist', 'Immer', 'wieder');
INSERT INTO `randomwordtable_en` VALUES (221, 'wechselt', 'sie', 'zwischen', 'dem', 'Theater', 'und', 'der');
INSERT INTO `randomwordtable_en` VALUES (222, 'Musik', 'umher', 'auf', 'der', 'Suche', 'nach', 'Erfolg');
INSERT INTO `randomwordtable_en` VALUES (223, 'und', 'sich', 'selbst', '…', 'Geschichten', 'über', 'Menschen');
INSERT INTO `randomwordtable_en` VALUES (224, 'die', 'nach', 'ihrem', 'Lebensweg', 'suchen', 'vielleicht', 'auch');
INSERT INTO `randomwordtable_en` VALUES (225, 'sich', 'selbst', 'suchen', 'gibt', 'es', 'im', 'Film');
INSERT INTO `randomwordtable_en` VALUES (226, 'bekanntlich', 'ohne', 'Ende', 'Da', 'wäre', 'der', 'Coming-of-Age');
INSERT INTO `randomwordtable_en` VALUES (227, 'der', 'sich', 'quasi', 'dadurch', 'definiert', 'dass', 'er');
INSERT INTO `randomwordtable_en` VALUES (228, 'junge', 'Menschen', 'zeigt', 'die', 'noch', 'nicht', 'wissen');
INSERT INTO `randomwordtable_en` VALUES (229, 'wer', 'sie', 'sind', 'und', 'was', 'sie', 'wollen');
INSERT INTO `randomwordtable_en` VALUES (230, 'Zuletzt', 'hat', 'es', 'aber', 'auch', 'eine', 'Reihe');
INSERT INTO `randomwordtable_en` VALUES (231, 'von', 'Werken', 'gewesen', 'die', 'Protagonisten', 'und', 'Protagonistinnen');
INSERT INTO `randomwordtable_en` VALUES (232, 'im', 'fortgeschrittenen', 'Alter', 'zeigen', 'Das', 'Motto', '');
INSERT INTO `randomwordtable_en` VALUES (233, 'dieser', 'Werke:', 'Man', 'ist', 'nie', 'zu', 'alt');
INSERT INTO `randomwordtable_en` VALUES (234, 'um', 'sich', 'zu', 'ändern', 'und', 'noch', 'einmal');
INSERT INTO `randomwordtable_en` VALUES (235, 'von', 'vorne', 'anzufangen', 'Tanz', 'ins', 'Leben', 'Buchclub');
INSERT INTO `randomwordtable_en` VALUES (236, 'und', 'andere', 'wollen', 'das', 'Publikum', 'ermuntern', 'noch');
INSERT INTO `randomwordtable_en` VALUES (237, 'einmal', 'da', 'rauszugehen', 'alles', 'zu', 'hinterfragen', '');
INSERT INTO `randomwordtable_en` VALUES (238, 'und', 'etwas', 'Neues', 'auszuprobieren', 'Ich', 'muss', 'aber');
INSERT INTO `randomwordtable_en` VALUES (239, 'Kunst', 'machen', 'Geschichten', 'um', 'Leute', 'die', 'irgendwo');
INSERT INTO `randomwordtable_en` VALUES (240, 'dazwischen', 'sind', 'und', 'nichts', 'mit', 'sich', 'anzufangen');
INSERT INTO `randomwordtable_en` VALUES (241, 'wissen', 'sind', 'da', 'schon', 'seltener', 'Wenn', 'dann');
INSERT INTO `randomwordtable_en` VALUES (242, 'lernen', 'wir', 'dabei', 'Figuren', 'kennen', 'die', 'in');
INSERT INTO `randomwordtable_en` VALUES (243, 'einer', 'Midlife', 'Crisis', 'stecken', 'und', 'alles', 'in');
INSERT INTO `randomwordtable_en` VALUES (244, 'Frage', 'stellen', 'was', 'sie', 'bisher', 'erreicht', 'haben');
INSERT INTO `randomwordtable_en` VALUES (245, 'Im', 'Fall', 'von', 'bedeutet', 'dies', 'aber', 'auch');
INSERT INTO `randomwordtable_en` VALUES (246, 'Habe', 'ich', 'überhaupt', 'etwas', 'erreicht', 'Radha', 'Blank');
INSERT INTO `randomwordtable_en` VALUES (247, 'die', 'hier', 'Regie', 'führte', 'das', 'Drehbuch', 'schrieb');
INSERT INTO `randomwordtable_en` VALUES (248, 'und', 'die', 'Hauptrolle', 'übernahm', 'inszeniert', 'sich', 'als');
INSERT INTO `randomwordtable_en` VALUES (249, 'eine', 'Künstlerin', 'der', 'Großes', 'vorhergesagt', 'wurde', 'was');
INSERT INTO `randomwordtable_en` VALUES (250, 'aber', 'irgendwie', 'nie', 'wirklich', 'eingetreten', 'ist', 'Das');
INSERT INTO `randomwordtable_en` VALUES (251, 'ist', 'dann', 'noch', 'einmal', 'etwas', 'gemeiner', 'als');
INSERT INTO `randomwordtable_en` VALUES (252, 'die', 'Fälle', 'oben', 'wo', 'Frauen', 'sich', 'einfach');
INSERT INTO `randomwordtable_en` VALUES (253, 'nur', 'ein', 'bisschen', 'öffnen', 'sollten', 'Hier', 'geht');
INSERT INTO `randomwordtable_en` VALUES (254, 'es', 'um', 'das', 'Eingemachte:', 'Das', 'ganze', 'Leben');
INSERT INTO `randomwordtable_en` VALUES (255, 'von', 'Radha', 'ist', 'darauf', 'ausgerichtet', 'eine', 'Künstlerin');
INSERT INTO `randomwordtable_en` VALUES (256, 'zu', 'sein', 'ist', 'damit', 'ein', 'Film', 'über');

SET FOREIGN_KEY_CHECKS = 1;
