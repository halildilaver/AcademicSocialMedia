# Host: localhost  (Version 5.5.5-10.1.38-MariaDB)
# Date: 2019-06-12 20:25:25
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "file"
#

DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "file"
#

INSERT INTO `file` VALUES (1,6,'e60e42be34c5ab78ee29fd6714a4ffd0.pdf'),(2,7,'1c15ec46a50795b8bf46fa27df2a3062.jpeg'),(3,8,'a68bfc8d5343cb3a01ea9f96eae5f1ec.doc'),(4,9,'c2f0a17c9fb4ba12ef361ad71e23dd94.pdf'),(5,10,'b76c725568d1e718fecf8872368a6729.pdf'),(6,11,'958128d5acb3bd1c154ce6155ebab309.pdf'),(7,12,'6040a400715bf0fc1397b4761070481e.pdf'),(8,13,'f9ba653b7eb7b50badc326ba38c167f2.pdf'),(9,14,'66a44e2a9857ba750bb15957be5ec4e5.pdf'),(10,16,'eac08a21d52998c18a76e0a955ace62c.pdf'),(11,25,'5b5fc550377b53061fcbfb5bc1d0ce30.docx'),(12,26,'99c18de6889d8a5ec5be6af59169128f.pdf');

#
# Structure for table "follow"
#

DROP TABLE IF EXISTS `follow`;
CREATE TABLE `follow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `followid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "follow"
#

INSERT INTO `follow` VALUES (10,1,5),(11,4,2),(17,2,1),(20,1,4),(21,1,2);

#
# Structure for table "messages"
#

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senderid` int(11) DEFAULT NULL,
  `receiverid` int(11) DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `time` datetime DEFAULT NULL,
  `sendername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "messages"
#

INSERT INTO `messages` VALUES (2,2,1,'Merhaba','0000-00-00 00:00:00','Harun Urhan'),(3,1,2,'Merhabalar','0000-00-00 00:00:00','Halil Dilaver'),(4,1,2,'Bi konu hakkında görüşlerinizi merak ediyordumda?','0000-00-00 00:00:00','Harun Urhan'),(7,2,1,'Buyurun nasıl yardımcı olabilirim?',NULL,'Halil Dilaver'),(8,1,2,'En son paylaşmış olduğunuz proje hakkında ufak bir sorum olacaktı..',NULL,'Harun Urhan');

#
# Structure for table "migration_versions"
#

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migration_versions"
#

INSERT INTO `migration_versions` VALUES ('20190217151840','2019-02-17 15:19:21'),('20190224111049','2019-02-24 11:11:09'),('20190225161017','2019-02-25 16:10:31'),('20190225165940','2019-02-25 16:59:50'),('20190304141317','2019-03-04 14:13:29'),('20190304165424','2019-03-04 16:54:36'),('20190306085605','2019-03-06 08:56:21'),('20190306091912','2019-03-06 09:19:19'),('20190401155347','2019-04-01 15:54:00'),('20190401190532','2019-04-01 19:05:38'),('20190408183703','2019-04-08 18:37:12'),('20190408194229','2019-04-08 19:42:34'),('20190408194544','2019-04-08 19:49:01'),('20190415163517','2019-04-15 16:35:29'),('20190415191642','2019-04-15 19:16:48'),('20190423144127','2019-04-23 14:41:39'),('20190423144404','2019-04-23 14:44:09'),('20190423145322','2019-04-23 14:53:25'),('20190423145548','2019-04-23 14:55:53'),('20190423185759','2019-04-23 18:58:06'),('20190501210716','2019-05-01 21:07:27'),('20190506200206','2019-05-06 20:02:15');

#
# Structure for table "questions"
#

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `askname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `askphoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answerphoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rid` int(11) DEFAULT NULL,
  `ruid` int(11) DEFAULT NULL,
  `rname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `askid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "questions"
#

INSERT INTO `questions` VALUES (2,'Halil DİLAVER','28da45bb8da1d52e348d998720db469d.jpeg','Burak KARATAŞ','869b057b41f22e10a700ecda32e87c02.jpeg','deneme','yanıt','Reply',1,4,'On Hamiltonian Properties of Honeycomb Meshes',1),(3,'Burak KARATAŞ','869b057b41f22e10a700ecda32e87c02.jpeg','Harun URHAN','29fb3035c8b3d1ac0bb3506621b8e9be.jpeg','question','cevap','Reply',1,2,'On Hamiltonian Properties of Honeycomb Meshes',4),(4,'Halil DİLAVER','28da45bb8da1d52e348d998720db469d.jpeg','Harun URHAN','29fb3035c8b3d1ac0bb3506621b8e9be.jpeg','soru','cevapladım','Reply',16,1,'123123',1),(5,'Harun URHAN','29fb3035c8b3d1ac0bb3506621b8e9be.jpeg','Halil DİLAVER','28da45bb8da1d52e348d998720db469d.jpeg','Soru gonder','cevap verildi','Reply',1,1,'Halil CV',NULL),(6,'Harun URHAN','29fb3035c8b3d1ac0bb3506621b8e9be.jpeg','Halil DİLAVER','28da45bb8da1d52e348d998720db469d.jpeg','sorudeneme','cevap','Reply',22,1,'Yeni dokuman',NULL),(7,'Halil DİLAVER','28da45bb8da1d52e348d998720db469d.jpeg',NULL,NULL,'soru',NULL,'New',10,5,'On Hamiltonian Properties of Honeycomb Meshes',NULL);

#
# Structure for table "research"
#

DROP TABLE IF EXISTS `research`;
CREATE TABLE `research` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `abstract` longtext COLLATE utf8mb4_unicode_ci,
  `userid` int(11) DEFAULT NULL,
  `upload` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `download` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userlocation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `recommendname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "research"
#

INSERT INTO `research` VALUES (1,'On Hamiltonian Properties of Honeycomb Meshes','On Hamiltonian Properties of Honeycomb Meshes','Honeycomb Meshes','In this paper, we investigated Hamiltonian properties of honeycomb meshes which are created in two different ways. We obtained different Hamilton paths for Honeycomb Meshes for any dimension with using n-bit gray code. Finally, we gave an algorithm which is used to label the nodes of Honeycomb Meshes.\n',1,'c2f0a17c9fb4ba12ef361ad71e23dd94.pdf',7,NULL,'Halil DİLAVER','28da45bb8da1d52e348d998720db469d.jpeg','Turkey','2019-04-08 22:49:01',NULL),(9,'On Hamiltonian Properties of Honeycomb Meshes','On Hamiltonian Properties of Honeycomb Meshes','Honeycomb Meshes','In this paper, we investigated Hamiltonian properties of honeycomb meshes which are created in two different ways. We obtained different Hamilton paths for Honeycomb Meshes for any dimension with using n-bit gray code. Finally, we gave an algorithm which is used to label the nodes of Honeycomb Meshes.',2,'c2f0a17c9fb4ba12ef361ad71e23dd94.pdf',4,NULL,'Harun URHAN','b31d4882b82602682ae185765877758d.jpeg','Turkey','2019-04-08 22:49:01',NULL),(10,'On Hamiltonian Properties of Honeycomb Meshes','icindeha','Honeycomb Meshes','In this paper, we investigated Hamiltonian properties of honeycomb meshes which are created in two different ways. We obtained different Hamilton paths for Honeycomb Meshes for any dimension with using n-bit gray code. Finally, we gave an algorithm which is used to label the nodes of Honeycomb Meshes.\n',2,'c2f0a17c9fb4ba12ef361ad71e23dd94.pdf',16,NULL,'Harun URHAN','b31d4882b82602682ae185765877758d.jpeg','Turkey','2019-04-08 22:49:01',NULL),(13,'Yeni dokuman','aciklama','keywords','abstract',2,'f9ba653b7eb7b50badc326ba38c167f2.pdf',1,NULL,'Harun URHAN','b31d4882b82602682ae185765877758d.jpeg','Turkey','2019-04-08 22:49:01',NULL),(16,'123123','123123','123123','123123',1,'eac08a21d52998c18a76e0a955ace62c.pdf',4,NULL,'Halil DİLAVER','28da45bb8da1d52e348d998720db469d.jpeg','Turkey','2019-04-08 22:50:16',NULL),(22,'Yeni dokuman','aciklama','keywords','abstract',1,'f9ba653b7eb7b50badc326ba38c167f2.pdf',1,NULL,'Halil DİLAVER','28da45bb8da1d52e348d998720db469d.jpeg','Turkey',NULL,'Halil DİLAVER'),(23,'On Hamiltonian Properties of Honeycomb Meshes','hamaes','Honeycomb Meshes','In this paper, we investigated Hamiltonian properties of honeycomb meshes which are created in two different ways. We obtained different Hamilton paths for Honeycomb Meshes for any dimension with using n-bit gray code. Finally, we gave an algorithm which is used to label the nodes of Honeycomb Meshes.',1,'c2f0a17c9fb4ba12ef361ad71e23dd94.pdf',0,NULL,'Halil DİLAVER','28da45bb8da1d52e348d998720db469d.jpeg','Turkey',NULL,'Halil DİLAVER'),(24,'Yeni dokuman','aciklama','keywords','abstract',2,'f9ba653b7eb7b50badc326ba38c167f2.pdf',0,NULL,'Harun URHAN','b31d4882b82602682ae185765877758d.jpeg','Turkey',NULL,'Harun URHAN'),(25,'Başlık','Açıklama','Anahtar Kelimeler','Uzun Açıklama',7,'5b5fc550377b53061fcbfb5bc1d0ce30.docx',NULL,NULL,'Ömür Çelik',NULL,'Turkey',NULL,NULL),(26,'Örnek','örnek','örnek','örnek',1,'99c18de6889d8a5ec5be6af59169128f.pdf',NULL,NULL,'Halil DİLAVER','28da45bb8da1d52e348d998720db469d.jpeg','Turkey',NULL,NULL);

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` longtext COLLATE utf8mb4_unicode_ci,
  `skills` longtext COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workarea` longtext COLLATE utf8mb4_unicode_ci,
  `titleandtasks` longtext COLLATE utf8mb4_unicode_ci,
  `edulis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edumaster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edudoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thesismaster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thesisdoc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roomno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'halil@gmail.com','ROLE_USER','$2y$10$AILDsML4d0Ql/w9i9mW42edhHXNdyjdbRUN0m0uuX2BlJwuK0W4bC','Halil DİLAVER','Turkey','Karabuk Universitesi','Computer Engineeringg','http://www.harunurhan.net','INFOs BİLGİLERİ','Webs Programmer','55222151513','65445131','urhanharun@hotmail.com','Web Programming, PHP, IOT','Student','Karabuk Universitesi','Gazi Üniversitesi','Gazi Üniversitesi','Tensorflow ile Nesne öğrenimi ve tanıma sistemi','','D131','28da45bb8da1d52e348d998720db469d.jpeg',0),(2,'harun@gmail.com','ROLE_USER','$2y$10$AILDsML4d0Ql/w9i9mW42edhHXNdyjdbRUN0m0uuX2BlJwuK0W4bC','Harun URHAN','Turkey',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'b31d4882b82602682ae185765877758d.jpeg',0),(4,'Halil2@zirtmail.com','ROLE_USER','$2y$10$AILDsML4d0Ql/w9i9mW42edhHXNdyjdbRUN0m0uuX2BlJwuK0W4bC','Burak KARATAŞ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'869b057b41f22e10a700ecda32e87c02.jpeg',NULL),(5,'Harun2@hot.com','ROLE_USER','$2y$10$dg4mWfQhoylF1dCioD2zNudl0z1cHSjEkgE4sl2wl6qp5D2peMYBK','Emirhan BAYIR',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'b05311075e08b76e1ab9524afd9fedc5.jpeg',NULL),(6,'burhanselcuk@gmail.com','ROLE_USER','$2y$10$hCb1aqMmx/WQxkjDbv.f3O4xLnsVg8DB5KO0zK3Qv8ywlSIPTZEdy','burhan selcuk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'bselcuk.jpg',0),(7,'omur@hotmail.com','ROLE_USER','$2y$10$jGRWroTlPM0vfyHic4z52umRM2K9ut2Kfkq2pdPfLj6FLGttzQ3Wq','Ömür Çelik','Turkey','','','','Mekatronik Mühendisi','Ansys, SolidWorks','5554655445','','omur@gmail.com','Machine','Student','Karabuk University','','','','','D101',NULL,0);

#
# Structure for table "userinfo"
#

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "userinfo"
#

INSERT INTO `userinfo` VALUES (2,0,'0cat','0',1),(3,0,'0cat','2',1),(5,7,'TÜBİTAK Bilimsel Yayın Teşvik Ödülü, (2014, 2015)',NULL,1),(6,2,'The quenching behavior of a nonlinear parabolic equation with a singular boundary condition','http://www.hjms.hacettepe.edu.tr/uploads/1a71c720-cb84-4508-9a53-55e336e541f0.pdf',1),(7,1,'Quenching behavior of semilinear heat equations with singular boundary conditions\", Electron. J. Diff. Equ., Vol. 2015 (2015), No. 311, pp. 1-13.','http://muh.karabuk.edu.tr/bilgisayar/index.php?page=detail&no=31',1),(8,5,'asdf','0',1),(9,5,'asdf','0',1);
