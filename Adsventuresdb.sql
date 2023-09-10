/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.5.8-log : Database - adsventure
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`adsventure` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `adsventure`;

/*Table structure for table `addads` */

DROP TABLE IF EXISTS `addads`;

CREATE TABLE `addads` (
  `anid` int(11) NOT NULL AUTO_INCREMENT,
  `print` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `cid` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`anid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `addads` */

insert  into `addads`(`anid`,`print`,`size`,`page`,`type`,`nid`,`cid`) values (6,'Normal Print','Large','0-1','SubTitile','2','2'),(7,'Normal Print','Large','0-1','SubTitile','2','1'),(9,'Color Print','XX-Large','3-4','Main Title','6','2');

/*Table structure for table `addrequest` */

DROP TABLE IF EXISTS `addrequest`;

CREATE TABLE `addrequest` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `anid` varchar(200) DEFAULT NULL,
  `uid` varchar(100) DEFAULT NULL,
  `width` varchar(100) DEFAULT NULL,
  `style` varchar(100) DEFAULT NULL,
  `break` varchar(100) DEFAULT NULL,
  `line` varchar(100) DEFAULT NULL,
  `des` varchar(500) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `rdate` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `addrequest` */

insert  into `addrequest`(`rid`,`anid`,`uid`,`width`,`style`,`break`,`line`,`des`,`status`,`rdate`) values (3,'6','3','2  px','Times new Roman','2.0','23','newspaper ad - a printed advertisement that is published in a newspaper','yes','10-06-22 05:03:50'),(5,'7','3','7 px','Causual','2.3 inchs','43','Newspaper Advertising Definition: Print ads that run in local or national, daily or weekly news publications','no','10-06-22 05:30:09'),(6,'6','2','3 PX','Times new Roman','2.0 inchs','566','Arvind Kejriwal, commenting on a widely-shared photo of arrested Delhi Minister Satyendar Jain, today said the minister had been taken to hospital yesterday.\r\n\r\n','no','10-06-22 10:27:59'),(7,'7','4','3 PX','Times new Roman','0.2','300','Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. In practice it would be difficult to write literature that','no','10-06-22 11:10:58'),(8,'9','4','2  px','times new Roman','5','2334','Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. In practice it would be difficult to write literature that','yes','10-06-22 11:12:07');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(100) DEFAULT NULL,
  `dates` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`cid`,`catname`,`dates`,`description`) values (1,'Sports','2022-06-18','Continue this list with the login screen design example of the most downloaded Android app: Facebook. At the top of the screen, Facebook tries to immediately direct the user towards the appâ€™s goal: connecting with friends by liking, commenting and sharing. This reminds the user of why they downloaded the app'),(2,'Cinema','2022-06-02','Mobile operating system Android is a mobile operating system based on a modified version of the Linux kernel and other open source software, designed primarily for touchscreen mobile devices such as smartphones and tablets');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(200) DEFAULT NULL,
  `head` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `fdate` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`fid`,`uid`,`head`,`description`,`fdate`) values (9,'3','Quality Paper','Continue this list with the login screen design example of the most downloaded Android app: Facebook. At the top of the screen, Facebook tries to immediately direct the user towards the appâ€™s goal: ','10-06-22 09:41:29'),(10,'3','Good Data','Mobile operating system Android is a mobile operating system based on a modified version of the Linux kernel and other open source software, designed primarily for touchscreen mobile devices such as s','10-06-22 09:42:09'),(11,'2','Empty Action','Mobile operating system Android is a mobile operating system based on a modified version of the Linux kernel and other open source software, designed primarily for touchscreen mobile devices such as s','10-06-22 10:58:35'),(12,'4','Provide Good Records','Mobile operating system Android is a mobile operating system based on a modified version of the Linux kernel and other open source software, designed primarily for touchscreen mobile devices such as s','10-06-22 11:11:19');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `l_id` int(20) NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`l_id`,`reg_id`,`email`,`password`,`type`,`status`) values (0,'0','admin@gmail.com','123456','ADMIN','yes'),(8,'2','jenishashanrose@gmail.com','123','USER','yes'),(10,'2','thin@gmail.com','345','NEWS','yes'),(11,'3','nevin@gmail.com','123','USER','yes'),(12,'5','meenu@gmail.com','jhjh','NEWS','yes'),(13,'4','user@gmail.com','123','USER','yes'),(14,'6','com@gmail.com','123','NEWS','yes');

/*Table structure for table `news_reg` */

DROP TABLE IF EXISTS `news_reg`;

CREATE TABLE `news_reg` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(66) NOT NULL,
  `address` varchar(44) NOT NULL,
  `iso` varchar(34) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `news_reg` */

insert  into `news_reg`(`nid`,`name`,`email`,`phone`,`address`,`iso`,`pass`) values (2,'Thinathandi','thin@gmail.com','9987565345','TamilNadu\r\n','ISO-777HJGHHG','345'),(5,'Meenu','meenu@gmail.com','9090986546','TamilNadu','ISO-777HJGHHG','jhjh'),(6,'newcom','com@gmail.com','6786786587','Kerla','ISO-777HJGHHG','123');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `rid` varchar(100) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `pdate` varchar(200) NOT NULL,
  `publishdate` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`pid`,`rid`,`amount`,`pdate`,`publishdate`,`status`) values (1,'3','200','2022-06-15','2022-06-24','yes');

/*Table structure for table `replayfeed` */

DROP TABLE IF EXISTS `replayfeed`;

CREATE TABLE `replayfeed` (
  `rfid` int(11) NOT NULL AUTO_INCREMENT,
  `fid` varchar(100) DEFAULT NULL,
  `rdate` varchar(200) DEFAULT NULL,
  `replay` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`rfid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `replayfeed` */

insert  into `replayfeed`(`rfid`,`fid`,`rdate`,`replay`) values (1,'11','11-06-22 10:57:03','Continue this list with the login screen design example of the most downloaded Android app: Facebook. At the top of the screen, Facebook tries to immediately direct the user towards the appâ€™s goal: ');

/*Table structure for table `user_reg` */

DROP TABLE IF EXISTS `user_reg`;

CREATE TABLE `user_reg` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user_reg` */

insert  into `user_reg`(`uid`,`name`,`email`,`address`,`phone`,`password`) values (2,'news_reg','jenishashanrose@gmail.com','utrtyutu','5655654444','yrdtg'),(3,'Nevin','nevin@gmail.com','Ernakulam, kochin-4654','4353645645','123'),(4,'newuser','user@gmail.com','utrtyutu','5655654444','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
