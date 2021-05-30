DROP TABLE IF EXISTS table_city;

CREATE TABLE `table_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matp` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



DROP TABLE IF EXISTS table_contact;

CREATE TABLE `table_contact` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ten` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taptin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` text COLLATE utf8_unicode_ci,
  `ghichu` text COLLATE utf8_unicode_ci,
  `diachi` text COLLATE utf8_unicode_ci,
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  `stt` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



DROP TABLE IF EXISTS table_counter;

CREATE TABLE `table_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tm` int(11) DEFAULT '0',
  `ip` varchar(16) COLLATE utf8_unicode_ci DEFAULT '0.0.0.0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=253 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO table_counter VALUES("1","1601083806","::1");
INSERT INTO table_counter VALUES("2","1601084832","::1");
INSERT INTO table_counter VALUES("3","1601086427","::1");
INSERT INTO table_counter VALUES("4","1601087429","::1");
INSERT INTO table_counter VALUES("5","1601088751","::1");
INSERT INTO table_counter VALUES("6","1601090553","::1");
INSERT INTO table_counter VALUES("7","1601091662","::1");
INSERT INTO table_counter VALUES("8","1601092651","::1");
INSERT INTO table_counter VALUES("9","1601093833","::1");
INSERT INTO table_counter VALUES("10","1601094754","::1");
INSERT INTO table_counter VALUES("11","1601095692","::1");
INSERT INTO table_counter VALUES("12","1601257295","::1");
INSERT INTO table_counter VALUES("13","1601258222","::1");
INSERT INTO table_counter VALUES("14","1601259227","::1");
INSERT INTO table_counter VALUES("15","1601260160","::1");
INSERT INTO table_counter VALUES("16","1601262825","::1");
INSERT INTO table_counter VALUES("17","1601268636","::1");
INSERT INTO table_counter VALUES("18","1601274823","::1");
INSERT INTO table_counter VALUES("19","1601278095","::1");
INSERT INTO table_counter VALUES("20","1601279179","::1");
INSERT INTO table_counter VALUES("21","1601280683","::1");
INSERT INTO table_counter VALUES("22","1601281600","::1");
INSERT INTO table_counter VALUES("23","1601282528","::1");
INSERT INTO table_counter VALUES("24","1601283557","::1");
INSERT INTO table_counter VALUES("25","1601284486","::1");
INSERT INTO table_counter VALUES("26","1601285809","::1");
INSERT INTO table_counter VALUES("27","1601286783","::1");
INSERT INTO table_counter VALUES("28","1601341417","::1");
INSERT INTO table_counter VALUES("29","1601344492","::1");
INSERT INTO table_counter VALUES("30","1601346710","::1");
INSERT INTO table_counter VALUES("31","1601348913","::1");
INSERT INTO table_counter VALUES("32","1601350505","::1");
INSERT INTO table_counter VALUES("33","1601351406","::1");
INSERT INTO table_counter VALUES("34","1601352427","::1");
INSERT INTO table_counter VALUES("35","1601353696","::1");
INSERT INTO table_counter VALUES("36","1601354619","::1");
INSERT INTO table_counter VALUES("37","1601355539","::1");
INSERT INTO table_counter VALUES("38","1601360496","::1");
INSERT INTO table_counter VALUES("39","1601361396","::1");
INSERT INTO table_counter VALUES("40","1601362918","::1");
INSERT INTO table_counter VALUES("41","1601364081","::1");
INSERT INTO table_counter VALUES("42","1601364588","113.161.89.144");
INSERT INTO table_counter VALUES("43","1601364653","66.249.83.51");
INSERT INTO table_counter VALUES("44","1601364657","66.102.8.240");
INSERT INTO table_counter VALUES("45","1601366844","113.161.89.144");
INSERT INTO table_counter VALUES("46","1601373475","113.161.37.179");
INSERT INTO table_counter VALUES("47","1601374397","113.161.37.179");
INSERT INTO table_counter VALUES("48","1601427655","113.161.37.179");
INSERT INTO table_counter VALUES("49","1601429672","113.161.37.179");
INSERT INTO table_counter VALUES("50","1601433096","113.161.89.144");
INSERT INTO table_counter VALUES("51","1601434979","113.161.89.144");
INSERT INTO table_counter VALUES("52","1601543406","113.161.37.179");
INSERT INTO table_counter VALUES("53","1601545075","112.197.6.5");
INSERT INTO table_counter VALUES("54","1601545151","113.161.37.179");
INSERT INTO table_counter VALUES("55","1601545315","113.161.89.144");
INSERT INTO table_counter VALUES("56","1601545317","66.102.8.234");
INSERT INTO table_counter VALUES("57","1601693580","::1");
INSERT INTO table_counter VALUES("58","1614329389","::1");
INSERT INTO table_counter VALUES("59","1614332436","::1");
INSERT INTO table_counter VALUES("60","1614333358","::1");
INSERT INTO table_counter VALUES("61","1614391449","::1");
INSERT INTO table_counter VALUES("62","1614393288","::1");
INSERT INTO table_counter VALUES("63","1614394388","::1");
INSERT INTO table_counter VALUES("64","1614395478","::1");
INSERT INTO table_counter VALUES("65","1614396468","::1");
INSERT INTO table_counter VALUES("66","1614397563","::1");
INSERT INTO table_counter VALUES("67","1614398466","::1");
INSERT INTO table_counter VALUES("68","1614400674","::1");
INSERT INTO table_counter VALUES("69","1614401809","::1");
INSERT INTO table_counter VALUES("70","1614561458","::1");
INSERT INTO table_counter VALUES("71","1614564084","::1");
INSERT INTO table_counter VALUES("72","1614565751","::1");
INSERT INTO table_counter VALUES("73","1614567023","::1");
INSERT INTO table_counter VALUES("74","1614568015","::1");
INSERT INTO table_counter VALUES("75","1614568937","::1");
INSERT INTO table_counter VALUES("76","1614570327","::1");
INSERT INTO table_counter VALUES("77","1614571227","::1");
INSERT INTO table_counter VALUES("78","1614572737","::1");
INSERT INTO table_counter VALUES("79","1614572898","113.161.89.144");
INSERT INTO table_counter VALUES("80","1614573806","113.161.89.144");
INSERT INTO table_counter VALUES("81","1614575703","113.161.89.144");
INSERT INTO table_counter VALUES("82","1614578472","113.161.89.144");
INSERT INTO table_counter VALUES("83","1614578507","69.171.251.15");
INSERT INTO table_counter VALUES("84","1614578515","69.171.251.12");
INSERT INTO table_counter VALUES("85","1614578515","69.171.251.8");
INSERT INTO table_counter VALUES("86","1614579903","113.161.89.144");
INSERT INTO table_counter VALUES("87","1614580892","113.161.89.144");
INSERT INTO table_counter VALUES("88","1614589175","14.161.46.205");
INSERT INTO table_counter VALUES("89","1614590397","14.161.46.205");
INSERT INTO table_counter VALUES("90","1614591324","14.161.46.205");
INSERT INTO table_counter VALUES("91","1614592364","14.161.46.205");
INSERT INTO table_counter VALUES("92","1614607105","1.55.44.190");
INSERT INTO table_counter VALUES("93","1614608007","1.55.44.190");
INSERT INTO table_counter VALUES("94","1614609178","1.55.44.190");
INSERT INTO table_counter VALUES("95","1614609419","129.146.158.17");
INSERT INTO table_counter VALUES("96","1614610225","1.55.44.190");
INSERT INTO table_counter VALUES("97","1614611164","1.55.44.190");
INSERT INTO table_counter VALUES("98","1614612112","1.55.44.190");
INSERT INTO table_counter VALUES("99","1614612123","173.252.83.12");
INSERT INTO table_counter VALUES("100","1614612124","173.252.83.2");
INSERT INTO table_counter VALUES("101","1614612125","173.252.83.11");
INSERT INTO table_counter VALUES("102","1614613046","1.55.44.190");
INSERT INTO table_counter VALUES("103","1614613064","173.252.83.10");
INSERT INTO table_counter VALUES("104","1614614187","1.55.44.190");
INSERT INTO table_counter VALUES("105","1614614215","173.252.83.13");
INSERT INTO table_counter VALUES("106","1614614216","173.252.83.14");
INSERT INTO table_counter VALUES("107","1614614249","173.252.83.116");
INSERT INTO table_counter VALUES("108","1614614665","173.252.83.3");
INSERT INTO table_counter VALUES("109","1614615250","1.55.44.190");
INSERT INTO table_counter VALUES("110","1614615721","173.252.79.11");
INSERT INTO table_counter VALUES("111","1614615963","173.252.79.14");
INSERT INTO table_counter VALUES("112","1614616008","66.220.149.119");
INSERT INTO table_counter VALUES("113","1614616014","66.220.149.9");
INSERT INTO table_counter VALUES("114","1614616016","66.220.149.38");
INSERT INTO table_counter VALUES("115","1614616017","66.220.149.45");
INSERT INTO table_counter VALUES("116","1614616017","66.220.149.49");
INSERT INTO table_counter VALUES("117","1614616029","66.220.149.116");
INSERT INTO table_counter VALUES("118","1614616678","1.55.44.190");
INSERT INTO table_counter VALUES("119","1614616787","173.252.79.11");
INSERT INTO table_counter VALUES("120","1614616789","173.252.79.8");
INSERT INTO table_counter VALUES("121","1614616816","173.252.87.120");
INSERT INTO table_counter VALUES("122","1614616824","173.252.87.1");
INSERT INTO table_counter VALUES("123","1614616824","173.252.87.5");
INSERT INTO table_counter VALUES("124","1614616832","173.252.87.18");
INSERT INTO table_counter VALUES("125","1614616840","139.99.8.123");
INSERT INTO table_counter VALUES("126","1614616855","113.185.75.145");
INSERT INTO table_counter VALUES("127","1614617633","1.55.44.190");
INSERT INTO table_counter VALUES("128","1614625664","49.213.78.31");
INSERT INTO table_counter VALUES("129","1614626182","173.252.95.31");
INSERT INTO table_counter VALUES("130","1614640172","173.252.79.19");
INSERT INTO table_counter VALUES("131","1614641094","173.252.83.1");
INSERT INTO table_counter VALUES("132","1614643467","173.252.79.15");
INSERT INTO table_counter VALUES("133","1614643596","66.220.149.27");
INSERT INTO table_counter VALUES("134","1614645447","113.185.75.145");
INSERT INTO table_counter VALUES("135","1614645747","173.252.87.8");
INSERT INTO table_counter VALUES("136","1614646183","14.161.46.205");
INSERT INTO table_counter VALUES("137","1614646628","173.252.83.11");
INSERT INTO table_counter VALUES("138","1614646629","173.252.83.116");
INSERT INTO table_counter VALUES("139","1614646635","66.220.149.41");
INSERT INTO table_counter VALUES("140","1614646639","66.220.149.16");
INSERT INTO table_counter VALUES("141","1614646639","66.220.149.24");
INSERT INTO table_counter VALUES("142","1614646742","113.161.89.144");
INSERT INTO table_counter VALUES("143","1614647918","113.161.89.144");
INSERT INTO table_counter VALUES("144","1614648204","14.161.46.205");
INSERT INTO table_counter VALUES("145","1614648759","173.252.79.14");
INSERT INTO table_counter VALUES("146","1614648763","173.252.107.13");
INSERT INTO table_counter VALUES("147","1614648766","66.220.149.20");
INSERT INTO table_counter VALUES("148","1614648862","113.161.89.144");
INSERT INTO table_counter VALUES("149","1614649401","14.161.46.205");
INSERT INTO table_counter VALUES("150","1614649814","171.253.139.59");
INSERT INTO table_counter VALUES("151","1614651042","171.253.139.59");
INSERT INTO table_counter VALUES("152","1614651156","49.213.78.31");
INSERT INTO table_counter VALUES("153","1614651936","14.161.46.205");
INSERT INTO table_counter VALUES("154","1614652048","173.252.83.17");
INSERT INTO table_counter VALUES("155","1614652224","49.213.78.31");
INSERT INTO table_counter VALUES("156","1614653142","49.213.78.31");
INSERT INTO table_counter VALUES("157","1614653312","171.253.139.59");
INSERT INTO table_counter VALUES("158","1614653461","173.252.87.9");
INSERT INTO table_counter VALUES("159","1614653590","66.220.149.14");
INSERT INTO table_counter VALUES("160","1614653784","173.252.111.17");
INSERT INTO table_counter VALUES("161","1614654807","49.213.78.31");
INSERT INTO table_counter VALUES("162","1614655773","49.213.78.31");
INSERT INTO table_counter VALUES("163","1614657325","49.213.78.31");
INSERT INTO table_counter VALUES("164","1614658065","210.245.32.82");
INSERT INTO table_counter VALUES("165","1614658273","49.213.78.31");
INSERT INTO table_counter VALUES("166","1614658319","66.220.149.44");
INSERT INTO table_counter VALUES("167","1614658320","66.220.149.30");
INSERT INTO table_counter VALUES("168","1614659297","14.161.46.205");
INSERT INTO table_counter VALUES("169","1614659541","49.213.78.31");
INSERT INTO table_counter VALUES("170","1614661072","173.252.83.13");
INSERT INTO table_counter VALUES("171","1614661079","31.13.127.117");
INSERT INTO table_counter VALUES("172","1614662025","14.161.46.205");
INSERT INTO table_counter VALUES("173","1614662621","171.253.138.251");
INSERT INTO table_counter VALUES("174","1614662956","14.161.46.205");
INSERT INTO table_counter VALUES("175","1614664260","69.171.249.5");
INSERT INTO table_counter VALUES("176","1614664648","113.161.89.144");
INSERT INTO table_counter VALUES("177","1614665417","66.220.149.34");
INSERT INTO table_counter VALUES("178","1614665426","66.220.149.5");
INSERT INTO table_counter VALUES("179","1614665426","66.220.149.36");
INSERT INTO table_counter VALUES("180","1614665426","173.252.111.11");
INSERT INTO table_counter VALUES("181","1614665426","173.252.111.24");
INSERT INTO table_counter VALUES("182","1614665427","173.252.111.16");
INSERT INTO table_counter VALUES("183","1614665428","173.252.111.113");
INSERT INTO table_counter VALUES("184","1614665557","171.253.141.59");
INSERT INTO table_counter VALUES("185","1614665664","113.161.89.144");
INSERT INTO table_counter VALUES("186","1614666072","66.220.149.116");
INSERT INTO table_counter VALUES("187","1614666073","66.220.149.119");
INSERT INTO table_counter VALUES("188","1614666079","173.252.111.118");
INSERT INTO table_counter VALUES("189","1614666079","173.252.111.21");
INSERT INTO table_counter VALUES("190","1614666084","173.252.107.29");
INSERT INTO table_counter VALUES("191","1614666084","173.252.127.29");
INSERT INTO table_counter VALUES("192","1614666084","173.252.127.117");
INSERT INTO table_counter VALUES("193","1614667876","49.213.78.31");
INSERT INTO table_counter VALUES("194","1614668839","14.161.46.205");
INSERT INTO table_counter VALUES("195","1614669636","113.185.75.145");
INSERT INTO table_counter VALUES("196","1614670479","14.161.46.205");
INSERT INTO table_counter VALUES("197","1614671379","14.161.46.205");
INSERT INTO table_counter VALUES("198","1614672338","14.161.46.205");
INSERT INTO table_counter VALUES("199","1614673127","173.252.127.18");
INSERT INTO table_counter VALUES("200","1614673128","173.252.127.28");
INSERT INTO table_counter VALUES("201","1614673136","69.171.251.5");
INSERT INTO table_counter VALUES("202","1614673140","173.252.127.118");
INSERT INTO table_counter VALUES("203","1614673256","14.161.46.205");
INSERT INTO table_counter VALUES("204","1614673450","49.213.78.31");
INSERT INTO table_counter VALUES("205","1614674199","14.161.46.205");
INSERT INTO table_counter VALUES("206","1614675175","49.213.78.31");
INSERT INTO table_counter VALUES("207","1614675262","14.161.46.205");
INSERT INTO table_counter VALUES("208","1614676199","14.161.46.205");
INSERT INTO table_counter VALUES("209","1614676845","49.213.78.31");
INSERT INTO table_counter VALUES("210","1614677141","14.161.46.205");
INSERT INTO table_counter VALUES("211","1614677290","210.245.32.82");
INSERT INTO table_counter VALUES("212","1614677706","113.185.73.23");
INSERT INTO table_counter VALUES("213","1614677712","113.161.89.144");
INSERT INTO table_counter VALUES("214","1614678669","14.161.46.205");
INSERT INTO table_counter VALUES("215","1614679321","210.245.32.82");
INSERT INTO table_counter VALUES("216","1614680293","14.161.46.205");
INSERT INTO table_counter VALUES("217","1614680793","49.213.78.31");
INSERT INTO table_counter VALUES("218","1614681141","113.185.73.23");
INSERT INTO table_counter VALUES("219","1614683798","173.252.111.4");
INSERT INTO table_counter VALUES("220","1614684784","1.55.44.232");
INSERT INTO table_counter VALUES("221","1614685328","173.252.83.2");
INSERT INTO table_counter VALUES("222","1614685700","173.252.111.3");
INSERT INTO table_counter VALUES("223","1614685836","1.55.44.232");
INSERT INTO table_counter VALUES("224","1614687027","1.55.44.232");
INSERT INTO table_counter VALUES("225","1614687891","49.213.78.31");
INSERT INTO table_counter VALUES("226","1614688678","1.55.44.232");
INSERT INTO table_counter VALUES("227","1614689661","1.55.44.232");
INSERT INTO table_counter VALUES("228","1614690290","171.253.185.121");
INSERT INTO table_counter VALUES("229","1614690805","49.213.78.31");
INSERT INTO table_counter VALUES("230","1614692085","49.213.78.31");
INSERT INTO table_counter VALUES("231","1614693000","173.252.79.22");
INSERT INTO table_counter VALUES("232","1614693380","173.252.95.19");
INSERT INTO table_counter VALUES("233","1614693567","1.55.44.232");
INSERT INTO table_counter VALUES("234","1614693743","173.252.83.13");
INSERT INTO table_counter VALUES("235","1614693760","69.171.251.16");
INSERT INTO table_counter VALUES("236","1614693889","66.220.149.31");
INSERT INTO table_counter VALUES("237","1614693980","49.213.78.31");
INSERT INTO table_counter VALUES("238","1614694118","27.78.33.241");
INSERT INTO table_counter VALUES("239","1614694950","49.213.78.31");
INSERT INTO table_counter VALUES("240","1614695086","1.55.44.232");
INSERT INTO table_counter VALUES("241","1614695462","129.146.158.17");
INSERT INTO table_counter VALUES("242","1614696489","49.213.78.31");
INSERT INTO table_counter VALUES("243","1614696645","129.146.158.17");
INSERT INTO table_counter VALUES("244","1614702328","173.252.127.112");
INSERT INTO table_counter VALUES("245","1614702433","49.213.78.31");
INSERT INTO table_counter VALUES("246","1614703461","49.213.78.31");
INSERT INTO table_counter VALUES("247","1614706581","49.213.78.31");
INSERT INTO table_counter VALUES("248","1614711040","173.252.79.15");
INSERT INTO table_counter VALUES("249","1614726384","69.171.251.14");
INSERT INTO table_counter VALUES("250","1614735009","113.161.89.144");
INSERT INTO table_counter VALUES("251","1614735831","210.245.32.82");
INSERT INTO table_counter VALUES("252","1614736661","113.161.89.144");


DROP TABLE IF EXISTS table_district;

CREATE TABLE `table_district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_city` int(11) DEFAULT '0',
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maqh` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



DROP TABLE IF EXISTS table_excel;

CREATE TABLE `table_excel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



DROP TABLE IF EXISTS table_gallery;

CREATE TABLE `table_gallery` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_photo` int(11) DEFAULT '0',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hash` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_mau` int(11) DEFAULT '0',
  `taptin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_video` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `com` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kind` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `val` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO table_gallery VALUES("9","31","tieuchi3-3930.png","","","","0","","","3","cong-trinh","product","man","cong-trinh","1","1600396061","0");
INSERT INTO table_gallery VALUES("10","31","tieuchi2-8923.png","","","","0","","","4","cong-trinh","product","man","cong-trinh","1","1600396061","0");
INSERT INTO table_gallery VALUES("8","31","tieuchi1-4469.png","","","","0","","","2","cong-trinh","product","man","cong-trinh","1","1600396061","0");
INSERT INTO table_gallery VALUES("7","31","tintuc-8570.jpg","","","","0","","","1","cong-trinh","product","man","cong-trinh","1","1600396061","0");
INSERT INTO table_gallery VALUES("11","5","quangcao-7331.jpg","","","","0","","","1","san-pham","product","man_list","san-pham","1","1600829420","0");
INSERT INTO table_gallery VALUES("12","6","quangcao-9842.jpg","","","","0","","","1","san-pham","product","man_list","san-pham","1","1600829434","0");
INSERT INTO table_gallery VALUES("13","7","quangcao-7175.jpg","","","","0","","","1","san-pham","product","man_list","san-pham","1","1600829446","0");
INSERT INTO table_gallery VALUES("14","8","slide-7684.jpg","","","","0","","","1","san-pham","product","man_list","san-pham","1","1600837033","0");
INSERT INTO table_gallery VALUES("21","5","11-9958.jpg","","","","0","","","1","san-pham","product","man","san-pham","1","1614612062","0");
INSERT INTO table_gallery VALUES("22","5","13-3809.jpg","","","","0","","","2","san-pham","product","man","san-pham","1","1614612062","0");
INSERT INTO table_gallery VALUES("23","5","12-1114.jpg","","","","0","","","3","san-pham","product","man","san-pham","1","1614612063","0");
INSERT INTO table_gallery VALUES("24","5","14-6951.jpg","","","","0","","","4","san-pham","product","man","san-pham","1","1614612063","0");
INSERT INTO table_gallery VALUES("25","5","16-1447.jpg","","","","0","","","5","san-pham","product","man","san-pham","1","1614612063","0");
INSERT INTO table_gallery VALUES("26","5","15-2600.jpg","","","","0","","","6","san-pham","product","man","san-pham","1","1614612063","0");
INSERT INTO table_gallery VALUES("27","6","24-2157.jpg","","","","0","","","7","san-pham","product","man","san-pham","1","1614613874","0");
INSERT INTO table_gallery VALUES("28","6","22-6757.jpg","","","","0","","","8","san-pham","product","man","san-pham","1","1614613874","0");
INSERT INTO table_gallery VALUES("29","6","21-6212.jpg","","","","0","","","9","san-pham","product","man","san-pham","1","1614613874","0");
INSERT INTO table_gallery VALUES("30","6","25-2074.jpg","","","","0","","","10","san-pham","product","man","san-pham","1","1614613874","0");
INSERT INTO table_gallery VALUES("31","6","23-5944.jpg","","","","0","","","11","san-pham","product","man","san-pham","1","1614613874","0");
INSERT INTO table_gallery VALUES("32","7","32-9359.jpg","","","","0","","","7","san-pham","product","man","san-pham","1","1614614893","0");
INSERT INTO table_gallery VALUES("33","7","35-8450.jpg","","","","0","","","8","san-pham","product","man","san-pham","1","1614614893","0");
INSERT INTO table_gallery VALUES("34","7","31-3641.jpg","","","","0","","","9","san-pham","product","man","san-pham","1","1614614893","0");
INSERT INTO table_gallery VALUES("35","7","34-1188.jpg","","","","0","","","10","san-pham","product","man","san-pham","1","1614614893","0");
INSERT INTO table_gallery VALUES("36","7","33-3137.jpg","","","","0","","","11","san-pham","product","man","san-pham","1","1614614893","0");
INSERT INTO table_gallery VALUES("37","8","sp4-4318.jpg","","","","0","","","7","san-pham","product","man","san-pham","1","1614615664","0");
INSERT INTO table_gallery VALUES("38","8","44-4818.jpg","","","","0","","","8","san-pham","product","man","san-pham","1","1614615674","0");
INSERT INTO table_gallery VALUES("39","8","41-6617.jpg","","","","0","","","9","san-pham","product","man","san-pham","1","1614615674","0");
INSERT INTO table_gallery VALUES("40","8","43-8616.jpg","","","","0","","","10","san-pham","product","man","san-pham","1","1614615674","0");
INSERT INTO table_gallery VALUES("41","8","42-9734.jpg","","","","0","","","11","san-pham","product","man","san-pham","1","1614615674","0");
INSERT INTO table_gallery VALUES("42","9","52-2662.jpg","","","","0","","","7","san-pham","product","man","san-pham","1","1614616457","0");
INSERT INTO table_gallery VALUES("43","9","53-4908.jpg","","","","0","","","8","san-pham","product","man","san-pham","1","1614616458","0");
INSERT INTO table_gallery VALUES("44","9","51-2027.jpg","","","","0","","","9","san-pham","product","man","san-pham","1","1614616459","0");
INSERT INTO table_gallery VALUES("45","9","54-4600.jpg","","","","0","","","10","san-pham","product","man","san-pham","1","1614616459","0");


DROP TABLE IF EXISTS table_lang;

CREATE TABLE `table_lang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `giatri` text COLLATE utf8_unicode_ci,
  `langvi` text COLLATE utf8_unicode_ci,
  `langen` text COLLATE utf8_unicode_ci,
  `stt` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=340 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO table_lang VALUES("5","trangchu","Trang chủ","Home","1");
INSERT INTO table_lang VALUES("6","gioithieu","Giới thiệu","About us","2");
INSERT INTO table_lang VALUES("8","tintuc","Tin tức","News","4");
INSERT INTO table_lang VALUES("9","lienhe","Liên hệ","Contact us","5");
INSERT INTO table_lang VALUES("34","motasanpham","Mô tả","Description","5");
INSERT INTO table_lang VALUES("46","sanpham","Sản phẩm","Product","2");
INSERT INTO table_lang VALUES("31","luotxem","Lượt xem","Views","2");
INSERT INTO table_lang VALUES("30","masp","Mã sản phẩm","Product code","1");
INSERT INTO table_lang VALUES("26","ngaydang","Ngày đăng","Date Submitted","2");
INSERT INTO table_lang VALUES("27","tintuckhac","Tin tức khác","Other news","3");
INSERT INTO table_lang VALUES("40","hotrotructuyen","Hổ trợ trực tuyến","Support Online","1");
INSERT INTO table_lang VALUES("50","dangonline","Đang online","Online","1");
INSERT INTO table_lang VALUES("51","tongtruycap","Tổng truy cập","Total","2");
INSERT INTO table_lang VALUES("52","diachi","Địa chỉ","Address","3");
INSERT INTO table_lang VALUES("53","thongtinlienhe","Thông tin liên hệ","Information Contact","4");
INSERT INTO table_lang VALUES("54","sodienthoai","Số điện thoại","Phone","5");
INSERT INTO table_lang VALUES("55","hovaten","Họ và tên","Full name","1");
INSERT INTO table_lang VALUES("56","chude","Chủ đề","Subject","2");
INSERT INTO table_lang VALUES("57","noidung","Nội dung","Content","3");
INSERT INTO table_lang VALUES("224","matkhaumoi","Mật khẩu mới","New password","1");
INSERT INTO table_lang VALUES("225","nhaplaimatkhaumoi","Nhập lại mật khẩu mới","Re-new password","1");
INSERT INTO table_lang VALUES("65","gui","Gửi","Send","1");
INSERT INTO table_lang VALUES("66","nhaplai","Nhập lại","Reset","2");
INSERT INTO table_lang VALUES("76","dangky","Đăng ký","Sign Up","1");
INSERT INTO table_lang VALUES("78","khongtimthayketqua","Không tìm thấy kết quả","No results found","1");
INSERT INTO table_lang VALUES("197","timduongdi","Tìm đường đi","Find a way","1");
INSERT INTO table_lang VALUES("198","dinhkemtaptin","Đính kèm file","Attachment file","1");
INSERT INTO table_lang VALUES("199","mabaomat","Mã bảo mật","Security code","1");
INSERT INTO table_lang VALUES("86","dichvu","Dịch vụ","Service","1");
INSERT INTO table_lang VALUES("87","timkiem","Tìm kiếm","Search","1");
INSERT INTO table_lang VALUES("226","capnhat","Cập nhật","Update","1");
INSERT INTO table_lang VALUES("227","boqua","Bỏ qua","Cancel","1");
INSERT INTO table_lang VALUES("228","phuongxa","Phường/xã","Wards","1");
INSERT INTO table_lang VALUES("92","truycapngay","Truy cập ngày","Today","1");
INSERT INTO table_lang VALUES("93","dangkynhantin","Đăng ký nhận tin","Sign up to get information","0");
INSERT INTO table_lang VALUES("218","quanhuyen","Quận/huyện","District","1");
INSERT INTO table_lang VALUES("302","vuilongchonquanhuyen","Vui lòng chọn quận huyện","Please select a district","0");
INSERT INTO table_lang VALUES("220","soluongqualon","Số lượng không được lớn hơn 999","Quantity is not greater than 999","1");
INSERT INTO table_lang VALUES("96","hoten","Họ tên","Full name","1");
INSERT INTO table_lang VALUES("97","chitietsanpham","Chi tiết sản phẩm","Product Details","1");
INSERT INTO table_lang VALUES("99","xemthem","Xem thêm","View more","1");
INSERT INTO table_lang VALUES("102","tuyendung","Tuyển dụng","Recruitment","1");
INSERT INTO table_lang VALUES("108","gia","Giá","Price","1");
INSERT INTO table_lang VALUES("221","thongtincanhan","Thông tin cá nhân","Information personal","1");
INSERT INTO table_lang VALUES("193","thuvienanh","Thư viện ảnh","Album","1");
INSERT INTO table_lang VALUES("194","sanphamnoibat","Sản phẩm nổi bật","Featured products","1");
INSERT INTO table_lang VALUES("112","ketquatimkiem","Kết quả tìm kiếm","Search results","1");
INSERT INTO table_lang VALUES("230","dathang","Đặt hàng","Add to cart","1");
INSERT INTO table_lang VALUES("223","matkhaucu","Mật khẩu cũ","Old password","1");
INSERT INTO table_lang VALUES("250","giohang","Giỏ hàng","My cart","1");
INSERT INTO table_lang VALUES("212","hinh","Hình","Picture","1");
INSERT INTO table_lang VALUES("213","soluong","Số lượng","Number","1");
INSERT INTO table_lang VALUES("214","thanhtien","Thành tiền","Amount","1");
INSERT INTO table_lang VALUES("216","tinhthanh","Tỉnh/thành phố","City","1");
INSERT INTO table_lang VALUES("128","nhaptukhoatimkiem","Nhập từ khóa cần tìm...","Enter the keyword...","1");
INSERT INTO table_lang VALUES("205","tinhtrang","Tình trạng","Status","1");
INSERT INTO table_lang VALUES("206","hethang","Hết hàng","Out of stock","1");
INSERT INTO table_lang VALUES("207","dangcapnhat","Đang cập nhật","Updating","1");
INSERT INTO table_lang VALUES("132","danhmucsanpham","Danh mục sản phẩm","Product portfolio","1");
INSERT INTO table_lang VALUES("134","trongtuan","Tuần","Week","1");
INSERT INTO table_lang VALUES("222","thaydoimatkhau","Thay đổi mật khẩu","Change password","1");
INSERT INTO table_lang VALUES("137","thongketruycap","Thống kê truy cập","Statistical access","1");
INSERT INTO table_lang VALUES("146","thongtinsanpham","Thông tin sản phẩm","Products Information","1");
INSERT INTO table_lang VALUES("303","vuilongchonphuongxa","Vui lòng chọn phường xã","Please select a ward","0");
INSERT INTO table_lang VALUES("156","traloi","Trả lời","Answer","1");
INSERT INTO table_lang VALUES("157","huy","Hủy","Cancel","1");
INSERT INTO table_lang VALUES("151","binhluanve","bình luận về","comments about","1");
INSERT INTO table_lang VALUES("152","moibanthaoluan","Mời bạn thảo luận. Vui lòng nhập Tiếng Việt có dấu, tối thiểu 10 ký tự.","Please discuss. Please enter Vietnamese accented, minimum 10 characters.","1");
INSERT INTO table_lang VALUES("200","co","Có","Have","1");
INSERT INTO table_lang VALUES("201","danhgia","Đánh giá","Review","1");
INSERT INTO table_lang VALUES("202","xacnhan","Xác nhận","Confirm","1");
INSERT INTO table_lang VALUES("203","sanphamcungloai","Sản phẩm cùng loại","Product Similar","1");
INSERT INTO table_lang VALUES("204","conhang","Còn hàng","Stocking","1");
INSERT INTO table_lang VALUES("165","thanhtoan","Thanh toán","Pay","1");
INSERT INTO table_lang VALUES("167","chonvideo","Chọn video","Choose video","1");
INSERT INTO table_lang VALUES("168","slogandangkynhantin","Để lại thông tin để nhận tin tức mới nhất từ chúng tôi","Leave information to receive the latest news from us","1");
INSERT INTO table_lang VALUES("208","giamoi","Giá mới","New price","1");
INSERT INTO table_lang VALUES("209","giacu","Giá cũ","Old price","1");
INSERT INTO table_lang VALUES("171","binhluan","Bình luận","Comment","1");
INSERT INTO table_lang VALUES("172","baivietkhac","Bài viết khác","Other news","1");
INSERT INTO table_lang VALUES("174","banmuonxoasanphamnay","Bạn muốn xóa sản phẩm này khỏi giỏ hàng ? ","Do you want to remove this product from your shopping cart?","1");
INSERT INTO table_lang VALUES("176","soluongkhongnhohonkhong","Số lượng đặt mua không được nhỏ hơn 0","Order quantity must not be less than 0","1");
INSERT INTO table_lang VALUES("178","muatiep","Mua tiếp","Buy more","1");
INSERT INTO table_lang VALUES("179","xoatatca","Xóa tất cả","Delete all","1");
INSERT INTO table_lang VALUES("181","kichthuoc","Kích thước","Size","1");
INSERT INTO table_lang VALUES("183","dangnhap","Đăng nhập","Login","1");
INSERT INTO table_lang VALUES("184","taikhoan","Tài khoản","Username","1");
INSERT INTO table_lang VALUES("185","matkhau","Mật khẩu","Password","1");
INSERT INTO table_lang VALUES("186","nhomatkhau","Nhớ mật khẩu","Remember password","1");
INSERT INTO table_lang VALUES("187","quenmatkhau","Quên mật khẩu","Forget password","1");
INSERT INTO table_lang VALUES("188","nhaplaimatkhau","Nhập lại mật khẩu","Confirm password","1");
INSERT INTO table_lang VALUES("189","dienthoai","Điện thoại","Phone","1");
INSERT INTO table_lang VALUES("190","banchuacotaikhoan","Bạn chưa có tài khoản ","You don\'t have a account","1");
INSERT INTO table_lang VALUES("192","laymatkhau","Lấy mật khẩu","Get password","1");
INSERT INTO table_lang VALUES("231","apdung","Áp dụng","Apply","1");
INSERT INTO table_lang VALUES("232","phivanchuyen","Phí vận chuyển"," Transport fee","1");
INSERT INTO table_lang VALUES("296","tamtinh","Tạm tính","Provisional","0");
INSERT INTO table_lang VALUES("234","tongtien","Tổng tiền","Total price","1");
INSERT INTO table_lang VALUES("235","map","Bản đồ","Map","1");
INSERT INTO table_lang VALUES("236","donhang","Đơn hàng","Order","1");
INSERT INTO table_lang VALUES("237","lichsudonhang","Lịch sử đơn hàng","Order history","1");
INSERT INTO table_lang VALUES("238","trangdau","Trang đầu","First page","1");
INSERT INTO table_lang VALUES("239","trangcuoi","Trang cuối","Last page","1");
INSERT INTO table_lang VALUES("240","trangbantruycapkhongtontai","Trang bạn truy cập không tồn tại.","The page you visited does not exist.","1");
INSERT INTO table_lang VALUES("241","vetrangchu","Về trang chủ","Back to homepage","1");
INSERT INTO table_lang VALUES("242","chiase","Chia sẻ","Share","1");
INSERT INTO table_lang VALUES("244","xoa","Xóa","Delete","1");
INSERT INTO table_lang VALUES("245","mausac","Màu sắc","Color","1");
INSERT INTO table_lang VALUES("247","thongtingiaohang","Thông tin giao hàng","Shipment Details","1");
INSERT INTO table_lang VALUES("301","vuilongchontinhthanh","Vui lòng chọn tỉnh thành","Please select a province","0");
INSERT INTO table_lang VALUES("253","yeucaukhac","Yêu cầu khác (không bắt buộc)","Other (Optional)","1");
INSERT INTO table_lang VALUES("254","khongtontaisanphamtronggiohang","Không tồn tại sản phẩm nào trong giỏ hàng !","No products in your shopping cart !","1");
INSERT INTO table_lang VALUES("256","giohangcuaban","Giỏ hàng của bạn","Your cart","1");
INSERT INTO table_lang VALUES("257","vuilongchonsizevamau","Vui lòng chọn size và màu !","Please select size and color !","1");
INSERT INTO table_lang VALUES("258","dangkytaiday","Đăng ký","Sign up here","1");
INSERT INTO table_lang VALUES("259","nhaphoten","Nhập họ tên của bạn","Enter your full name","1");
INSERT INTO table_lang VALUES("260","nhaptaikhoan","Nhập tài khoản của bạn","Enter your account","1");
INSERT INTO table_lang VALUES("261","nhapmatkhau","Nhập mật khẩu (5-15 ký tự)","Choose password (5-15 chars)","1");
INSERT INTO table_lang VALUES("262","nhapemail","Nhập địa chỉ email của bạn","Enter your email address","1");
INSERT INTO table_lang VALUES("263","nhapdienthoai","Nhập số điện thoại","Enter your number phone","1");
INSERT INTO table_lang VALUES("264","nhapdiachi","Nhập địa chỉ của bạn","Enter your address","1");
INSERT INTO table_lang VALUES("265","nhapngaysinh","Nhập ngày sinh","Enter your birthday","1");
INSERT INTO table_lang VALUES("266","gioitinh","Giới tính","Gender","1");
INSERT INTO table_lang VALUES("267","nam","Nam","Male","1");
INSERT INTO table_lang VALUES("268","nu","Nữ","Female","1");
INSERT INTO table_lang VALUES("269","kichhoat","Kích hoạt","Active","1");
INSERT INTO table_lang VALUES("270","nhapmakichhoat","Nhập mã kích hoạt","Enter your active code","1");
INSERT INTO table_lang VALUES("271","nhapmatkhaucu","Nhập mật khẩu cũ","Enter old password","1");
INSERT INTO table_lang VALUES("272","nhapmatkhaumoi","Nhập mật khẩu mới","Enter new password","1");
INSERT INTO table_lang VALUES("273","thich","Thích","Like","1");
INSERT INTO table_lang VALUES("274","dathich","Đã thích","Liked","1");
INSERT INTO table_lang VALUES("275","taithembinhluan","Tải thêm bình luận","Get more comments","1");
INSERT INTO table_lang VALUES("276","trangke","Trang kế","Next page","1");
INSERT INTO table_lang VALUES("277","trangtruoc","Trang trước","Prev page","1");
INSERT INTO table_lang VALUES("279","hinhanh","Hình ảnh","Image","0");
INSERT INTO table_lang VALUES("280","tensanpham","Tên sản phẩm","Product name","0");
INSERT INTO table_lang VALUES("282","duong","Đường phố","Street","1");
INSERT INTO table_lang VALUES("283","hinhthucthanhtoan","Hình thức thanh toán","Payments","0");
INSERT INTO table_lang VALUES("284","vuilongnhaphoten","Vui lòng nhập họ và tên","Please enter your first and last name","0");
INSERT INTO table_lang VALUES("285","vuilongnhapsodienthoai","Vui lòng nhập số điện thoại","Please enter the phone number","0");
INSERT INTO table_lang VALUES("286","vuilongnhapdiachi","Vui lòng nhập địa chỉ","Please enter your address","0");
INSERT INTO table_lang VALUES("287","vuilongnhapdiachiemail","Vui lòng nhập địa chỉ email","Please enter email address","0");
INSERT INTO table_lang VALUES("288","vuilongnhapchude","Vui lòng nhập chủ đề","Please enter subject","0");
INSERT INTO table_lang VALUES("289","vuilongnhapnoidung","Vui lòng nhập nội dung","Please enter content","0");
INSERT INTO table_lang VALUES("290","chon","Chọn","Choose","0");
INSERT INTO table_lang VALUES("292","tieptucmuahang","Tiếp tục mua hàng","Continue shopping","0");
INSERT INTO table_lang VALUES("293","trongthang","Tháng","Month","0");
INSERT INTO table_lang VALUES("294","chinhsach","Chính sách","Supporting policies","0");
INSERT INTO table_lang VALUES("295","thuonghieu","Thương hiệu","Brand","0");
INSERT INTO table_lang VALUES("304","vuilongnhaptaikhoan","Vui lòng nhập tài khoản","Please enter an account","0");
INSERT INTO table_lang VALUES("305","vuilongnhapmatkhau","Vui lòng nhập mật khẩu","Please enter a password","0");
INSERT INTO table_lang VALUES("306","vuilongnhaplaimatkhau","Vui lòng nhập lại mật khẩu","Please enter the password again","0");
INSERT INTO table_lang VALUES("307","vuilongnhapngaysinh","Vui lòng nhập ngày sinh","Please enter your birthday","0");
INSERT INTO table_lang VALUES("308","ngaysinh","Ngày sinh","Date of birth","0");
INSERT INTO table_lang VALUES("312","vuilongnhapmakichhoat","Vui lòng nhập mã kích hoạt","Please enter the activation code","0");
INSERT INTO table_lang VALUES("315","dangxuat","Đăng xuất","Logout","0");
INSERT INTO table_lang VALUES("316","homnay","Hôm nay","Today","0");
INSERT INTO table_lang VALUES("317","homqua","Hôm qua","Yesterday","0");
INSERT INTO table_lang VALUES("318","thongbao","Thông báo","Notify","0");
INSERT INTO table_lang VALUES("319","thoat","Thoát","Exit","0");
INSERT INTO table_lang VALUES("320","chuanhaptukhoatimkiem","Chưa nhập từ khóa tìm kiếm","No search keywords entered","0");
INSERT INTO table_lang VALUES("322","capnhatthongtin","Cập nhật thông tin","Update information","0");
INSERT INTO table_lang VALUES("323","noidungdangcapnhat","Nội dung đang cập nhật","Content is updating","0");
INSERT INTO table_lang VALUES("324","thucdon","Thực đơn","","0");
INSERT INTO table_lang VALUES("325","khuyenmai","Khuyến mãi","","0");
INSERT INTO table_lang VALUES("326","phanhoikhachhang","Phản hồi khách hàng","Customer Feedback","0");
INSERT INTO table_lang VALUES("327","camnhantukhachhang","Cảm nhận từ khách hàng","Testimonials from customers","0");
INSERT INTO table_lang VALUES("328","nhankhuyenmai","Nhận khuyến mãi","Receive a promotion","0");
INSERT INTO table_lang VALUES("329","dangkynhankhuyenmai","Đăng ký nhận khuyến mãi","Sign up to receive promotions","0");
INSERT INTO table_lang VALUES("330","tintucsukien","Tin tức &amp; Sự kiện","News &amp; Event","0");
INSERT INTO table_lang VALUES("331","congtrinh","Công trình"," Construction","0");
INSERT INTO table_lang VALUES("332","baogia","Báo giá","Quotation","0");
INSERT INTO table_lang VALUES("333","congtrinhtieubieu","Công trình tiêu biểu"," Typical projects","0");
INSERT INTO table_lang VALUES("334","doitac","Đối tác","Partner","0");
INSERT INTO table_lang VALUES("335","sanphamchinh","Sản phẩm chính","Main Product","0");
INSERT INTO table_lang VALUES("336","sanphamkhuyenmai","Sản phẩm khuyến mãi","Promotion Products","0");
INSERT INTO table_lang VALUES("337","xuhuong","Xu hướng","Trend","0");
INSERT INTO table_lang VALUES("338","sanphambanchay","Sản phẩm bán chạy","Selling products","0");
INSERT INTO table_lang VALUES("339","sanphammoi","Sản phẩm mới","New Product","0");


DROP TABLE IF EXISTS table_member;

CREATE TABLE `table_member` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_social` tinyint(1) DEFAULT '0',
  `username` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maxacnhan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoai` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` tinyint(1) DEFAULT '0',
  `login_session` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastlogin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hienthi` tinyint(1) DEFAULT '0',
  `ngaysinh` int(11) DEFAULT '0',
  `stt` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



DROP TABLE IF EXISTS table_news;

CREATE TABLE `table_news` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_list` int(11) DEFAULT '0',
  `id_item` int(11) DEFAULT '0',
  `id_cat` int(11) DEFAULT '0',
  `id_sub` int(11) DEFAULT '0',
  `id_tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noibat` tinyint(1) DEFAULT '0',
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `options` text COLLATE utf8_unicode_ci,
  `tenkhongdauvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkhongdauen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidungen` text COLLATE utf8_unicode_ci,
  `noidungvi` text COLLATE utf8_unicode_ci,
  `motaen` text COLLATE utf8_unicode_ci,
  `motavi` text COLLATE utf8_unicode_ci,
  `tenen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT '0',
  `hienthi` tinyint(1) DEFAULT '0',
  `type` varchar(30) COLLATE utf8_unicode_ci DEFAULT '0',
  `ngaytao` int(11) DEFAULT '0',
  `ngaysua` int(11) DEFAULT '0',
  `luotxem` int(11) DEFAULT '0',
  `chucvuvi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taptin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO table_news VALUES("16","0","0","0","0","","0","","","chinh-sach-bao-hanh","","","&lt;ol&gt;
INSERT INTO table_news VALUES("17","0","0","0","0","","0","","","ho-tro-khan-cap-xe-vinfast","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;Bạn có thể an tâm vi vu trên mọi cung đường vì đã có dịch vụ  Hỗ trợ khẩn cấp miễn phí* toàn quốc của VinFast . Từ ngày 19/08/2015, khách hàng mua xe mới sẽ được Hỗ trợ cứu hộ hoặc sửa chữa tại chỗ (Thay bánh dự phòng hoặc kích nổ bình ắc quy) miễn phí trong thời hạn bảo hành 3 năm/100.000km (tùy điều kiện nào đến trước).&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("18","0","0","0","0","","0","","","bao-duong-nhanh-xe-vinfast","","","&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;color:#c0392b;&quot;&gt;&lt;strong&gt;VinFast - Mãnh Liệt Tinh Thần Việt Nam &lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("19","0","0","0","0","","0","","","mua-xe-vinfast-so-luong-lon","","","&lt;h2 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color:#c0392b;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;strong&gt;MUA XE VINFAST THEO LÔ SỐ LƯỢNG LỚN ƯU ĐÃI LỚN&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("20","0","0","0","0","","0","dv2-4307.jpg","{\"p\":\"dv2-4307.jpg\",\"w\":526,\"h\":526,\"m\":\"image\\/jpeg\"}","ho-tro-khan-cap-cuu-ho-mien-phi-vinfast-247","","","&lt;h2 style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size:16px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;strong&gt;HỖ TRỢ KHẨN CẤP MIỄN PHÍ XE VINFAST - CHEVROLET&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("21","0","0","0","0","","0","dv-2543.jpg","{\"p\":\"dv-2543.jpg\",\"w\":640,\"h\":453,\"m\":\"image\\/jpeg\"}","tim-hieu-lop-runflat-va-nhung-uu-nhuoc-diem-cua-no","","","&lt;p&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;Lốp Runflat ra đời nhằm khắc phục tình trạng xe không thể tiếp tục di chuyển do bị thủng lốp. Mặc dù đối với thế hệ lốp thông thường, khi lốp bị thủng, người lái vẫn có thể tự thay thế lốp dự phòng. Tuy nhiên, đây là công việc đòi hỏi những kỹ năng nhất định và tương đối khó thực hiện đối với những người chưa bao giờ thực hành.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("22","0","0","0","0","","0","dvv1-1824.jpg","{\"p\":\"dvv1-1824.jpg\",\"w\":300,\"h\":150,\"m\":\"image\\/jpeg\"}","trai-nghiem-khach-hang-khi-xe-vinfast-chet-may-tai-vung-sau-vung-xa","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:16px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;Một khách hàng không may đi xe VinFast bị chết máy ở vùng sâu vùng xa, nhờ tới sự hỗ trợ của dịch vụ cứu hộ VinFast và nhận được kết quả bất ngờ.&lt;br /&gt;
INSERT INTO table_news VALUES("23","0","0","0","0","","0","dv1-9899.jpg","{\"p\":\"dv1-9899.jpg\",\"w\":650,\"h\":365,\"m\":\"image\\/jpeg\"}","kinh-nghiem-mua-bao-hiem-vat-chat-xe-o-to","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;strong&gt;&lt;em&gt;Kinh nghiệm mua bảo hiểm vật chất xe ô tô&lt;/em&gt;&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("24","0","0","0","0","","0","dv2-9343.png","{\"p\":\"dv2-9343.png\",\"w\":300,\"h\":150,\"m\":\"image\\/png\"}","cac-diem-dang-kiem-o-to-tai-tphcm","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:16px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;Sau khi bạn mua 1 chiếc xe ô tô VinFast, để có thể lăn bánh – tham gia giao thông đúng luật, bạn cần hoàn thiện các như: thủ tục nộp thuế trước bạ, đăng ký bấm biển, đăng kiểm… Thời gian làm việc và Địa chỉ các trung tâm đăng kiểm xe cơ giới, xe ô tô tại TP Hồ Chí MinhTrong thời gian qua có nhiều khách hàng gọi điện đến &lt;a href=&quot;http://vinfast-hochiminh.com/&quot;&gt;&lt;strong&gt;vinfast-hochiminh.com&lt;/strong&gt;&lt;/a&gt; với các câu hỏi như: TP Hồ Chí Minh có bao nhiêu trung tâm đăng kiểm xe cơ giới, xe ô tô ? Địa chỉ các trung tâm đăng kiểm xe cơ giới, xe ô tô tại TP Hồ Chí Minh ở đâu ? Thời gian làm việc của các trung tâm đăng kiểm xe ô tô tại TP Hồ Chí Minh ? Để biết câu trả lời của các câu hỏi trên, Quý bạn đọc vui lòng xem chi tiết tại bài viết dưới đây:&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("25","0","0","0","0","","0","dv3-9300.jpg","{\"p\":\"dv3-9300.jpg\",\"w\":640,\"h\":359,\"m\":\"image\\/jpeg\"}","cac-diem-dang-ky-o-to-tai-tphcm-2020","","","&lt;article&gt;
INSERT INTO table_news VALUES("26","0","0","0","0","","0","dv4-5737.jpg","","vinfast-tiep-tuc-khai-truong-14-xuong-dich-vu-tren-toan-quoc","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;Để phục vụ các khách hàng tốt nhất, VinFast tưng bừng khai trương thêm 14 xưởng dịch vụ trên toàn quốc vào ngày 13/05/2020. Bạn hoàn toàn yên tâm lựa chọn địa điểm tiện lợi nhất để chăm sóc xế yêu sau mùa giản cách xã hội.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("27","0","0","0","0","","0","dv5-1445.jpg","{\"p\":\"dv5-1445.jpg\",\"w\":660,\"h\":441,\"m\":\"image\\/jpeg\"}","bao-duong-bao-hanh-xe-vinfast-thoi-han-toi-da-dieu-kien-chinh-sach-dia-diem-chinh-hang","","","&lt;article&gt;
INSERT INTO table_news VALUES("29","0","0","0","0","","1","2-1838.jpg","{\"p\":\"2-1838.jpg\",\"w\":1280,\"h\":914,\"m\":\"image\\/jpeg\"}","chi-nhanh-showroom-vinfast-binh-dinh-vinfast-thanh-pho-quy-nhon-binh-dinh","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;VinFast Bình Định, Đại lý xe ô tô VinFast chính hãng tại Bình Định. Bán xe VinFast Fadil, VinFast LUX A2.0, VinFast LUX SA2.0, VinFast President, giá xe VinFast, khuyến mãi mua xe .&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("30","0","0","0","0","","1","3-7535.jpg","{\"p\":\"3-7535.jpg\",\"w\":800,\"h\":600,\"m\":\"image\\/jpeg\"}","showroom-vinfast-bao-loc-thanh-pho-bao-loc-lam-dong","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;VinFast VCP Bảo Lộc nằm tại Vincom Plaza Bảo Lộc, 83 Lê Hồng Phong, Phường 1, TP. Bảo Lộc, Tỉnh Lâm Đồng. VinFast Lâm Đồng là nơi trưng bày xe VinFast và tiếp nhận đặt cọc xe VinFast.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("31","0","0","0","0","","1","cs1-6777.jpg","","showroom-vinfast-tran-phu-nha-trang-khanh-hoa","","","&lt;article&gt;
INSERT INTO table_news VALUES("32","0","0","0","0","","1","4-6607.jpg","{\"p\":\"4-6607.jpg\",\"w\":960,\"h\":639,\"m\":\"image\\/jpeg\"}","vinfast-tuy-hoa-phu-yen-dai-ly-vinfast-chinh-hang-phu-yen","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;VinFast Tuy Hòa Phú Yên là đại lý VinFast 3S,Vị trí: VinCom Plaza Tuy Hoà, đường, ĐL Hùng Vương, Phường7, Tuy Hòa, Phú Yên&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("33","0","0","0","0","","1","3-4538.jpg","","dai-ly-vinfast-binh-thuan-vinfast-thanh-pho-phan-thiet","","","&lt;p&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;em&gt;Showroom VinFast Bình Thuận tọa lạc 171-173 Lê Hồng Phong, Phú Trinh, Phan Thiết, tỉnh Bình Thuận. Với vị trí đắc địa này sẽ tạo điều kiện giúp khách hàng dễ dàng tiếp cận các sản phẩm ô tô VinFast.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("34","0","0","0","0","","1","3-4471.jpg","","dai-ly-vinfast-ca-mau-dai-ly-vinfast-cuoi-ban-do-viet-nam","","","&lt;p&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;VinFast Cà Mau nằm tại 139 Nguyễn Tất Thành, Phường 8, Thành Phố Cà Mau, Tỉnh Cà Mau. VinFast Cà Mau là nơi trưng bày xe VinFast và tiếp nhận đặt cọc xe VinFast. Quý khách có nhu cầu đặt cọc xe VinFast thì hãy liên hệ trực tiếp với Bộ phận kinh doanh hoặc gửi yêu cầu đặt cọc xe VinFast ở ngay bên dưới.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("35","0","0","0","0","","1","4-2459.jpg","","dai-ly-vinfast-kien-giang-tp-rach-gia-thanh-pho-bien-dong-bang-song-cuu-long","","","&lt;article&gt;
INSERT INTO table_news VALUES("36","0","0","0","0","","1","dong-thap-9398.jpg","{\"p\":\"cs1-7303.jpg\",\"w\":1600,\"h\":1066,\"m\":\"image\\/jpeg\"}","vinfast-dong-thap-dai-ly-chinh-thuc-tai-xu-so-hoa-sen-dong-bang-song-cuu-long","","","&lt;article&gt;
INSERT INTO table_news VALUES("37","0","0","0","0","","1","showroom-hau-giang-2321.jpg","","vinfast-hau-giang-chi-nhanh-truc-thuoc-he-thong-vinfast-chinh-hang","","","&lt;article&gt;
INSERT INTO table_news VALUES("38","0","0","0","0","","1","140646-vinfast-binh-phuoc-7623.jpg","","vinfast-binh-phuoc-he-thong-vinfast-63-tinh-thanh","","","&lt;p&gt;Showroom VinFast Bình Phước thuộc hệ thống xe VinFast tập đoàn Vingroup. VinFast Bình Phước chuyên phân phối các dòng xe VinFast và cung cấp những dịch vụ tới khách hàng tại tỉnh Bình Phước&lt;/p&gt;
INSERT INTO table_news VALUES("39","0","0","0","0","","1","he-thong-vinfast-can-tho-1613.jpg","","","","","&lt;article&gt;
INSERT INTO table_news VALUES("40","0","0","0","0","","1","140727-vinfast-dak-nong-2506.jpg","","vinfast-dak-nong-he-thong-showroom-vinfast-chinh-hang-tay-nguyen","","","&lt;article&gt;
INSERT INTO table_news VALUES("41","0","0","0","0","","1","showroom-vinh-long-4229.jpg","","vinfast-vinh-long-kinh-chao-quy-khach-hang-showroom-3s-cham-soc-khach-hang-tan-tam","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;em&gt;Showroom xe VinFast Vĩnh Long là đại lý chính thức duy nhất của VinFast tại tỉnh Vĩnh Long và là một trong những đại lý có quy mô lớn nhất tại khu vực phía Nam nói riêng và trên toàn quốc nói chung&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("42","0","0","0","0","","1","dai-ly-vinfast-ben-tre-4595.jpg","","vinfast-ben-tre-showroom-vinfast-63-tinh-thanh","","","&lt;article&gt;
INSERT INTO table_news VALUES("43","0","0","0","0","","1","dai-ly-1s-vinfast-do-xuan-hop-8208.jpg","","","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;Đỗ Xuân Hợp có vị trí đắc địa&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("44","0","0","0","0","","1","dai-ly-vinfast-ba-ria-vung-tau-5073.jpg","","vinfast-ba-ria-vung-tau-vinfast-vung-tau-kinh-chao-quy-khach","","","&lt;article&gt;
INSERT INTO table_news VALUES("45","0","0","0","0","","1","1-1619.jpg","","","","","&lt;p&gt;Danh sách cập nhật Showroom VinFast Miền Bắc, Showroom VinFast Miền Trung, Showroom VinFast Miền Nam, Showroom VinFast Hồ Chí Minh, Showroom VinFast Hà Nội,...&lt;/p&gt;
INSERT INTO table_news VALUES("46","0","0","0","0","","1","2-4935.jpg","","vinfast-le-van-viet-quan-9-showroom-3s-trung-tam-vinfast-dong-sai-gon","","","&lt;article&gt;
INSERT INTO table_news VALUES("47","0","0","0","0","","1","q1-8056.jpg","","vinfast-dong-khoi-quan-1-trung-tam-vinfast-khu-vuc-mien-nam","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;Đại lý VinFast Đồng khởi sở hữu vị trí địa lý đắc địa khi tọa lạc tại tầng L1, TTTM Vincom Centre Đồng Khởi, Số 72 Lê Thánh Tôn, P. Bến Nghé, Q.1, Tp. HCM một trong những TTTM lớn nhất phía Nam.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("48","0","0","0","0","","1","q10-8968.jpg","","vinfast-vincom-32-quan-10-ho-chi-minh","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;VinFast 3/2 nằm tại Vincom Plaza 3/2 107/2A Đường 3 Tháng 2, Phường 11, Quận 10, TP.HCM  VinFast Quận 10 là nơi trưng bày xe VinFast và tiếp nhận đặt cọc xe VinFast. Quý khách có nhu cầu đặt cọc xe VinFast thì hãy liên hệ trực tiếp với Bộ phận kinh doanh theo số Hotline VinFast ở ngay bên dưới: 0945672154&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("49","0","0","0","0","","1","vinfast-pleiku-gia-lai-5650.jpg","{\"p\":\"vinfast-pleiku-gia-lai-5650.jpg\",\"w\":300,\"h\":150,\"m\":\"image\\/jpeg\"}","vinfast-kontum-vincom-plaza-kon-tum","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;Đại lý VinFast Kon Tum tọa lạc tại địa chỉ 02 Phan Đình Phùng, Phường Quyết Thắng, TP Kon Tum, Tỉnh Kon Tum tự hào là Đại lý ủy quyền chính thức của VinFast tại Việt Nam.. VinFast Kon Tum sở hữu không gian thoáng đãng vô cùng sang trọng. Khách hàng khi đến showroom tham quan mua sắm hay sử dụng các dịch vụ tại showroom sẽ luôn cảm nhận được sự thoải mái và hiếu khách từ đội ngũ cán bộ nhân viên.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("50","0","0","0","0","","1","bien-hoa-dn-1996.jpg","","vinfast-bien-hoa-dong-nai-dai-ly-vinfast-chinh-hang-dong-nai","","","&lt;article&gt;
INSERT INTO table_news VALUES("51","0","0","0","0","","1","tai-xuong-2352.jpeg","","vinfast-my-tho-tien-giang-dai-ly-vinfast-chinh-hang-tien-giang","","","&lt;article&gt;
INSERT INTO table_news VALUES("52","0","0","0","0","","1","vinfast-quang-trung-go-vap-4434.jpg","{\"p\":\"vinfast-quang-trung-go-vap-4434.jpg\",\"w\":300,\"h\":150,\"m\":\"image\\/jpeg\"}","dai-ly-vinfast-quang-trung-quan-go-vap-thanh-pho-ho-chi-minh","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;em&gt;&lt;strong&gt;VinFast VCP Quang Trung nằm tại Vincom Plaza Quang Trung, 190 Quang Trung, Phường 10, Quận Gò Vấp, TP.HCM . VinFast Quang Trung là nơi trưng bày xe VinFast và tiếp nhận đặt cọc xe VinFast Fadil, Lux A2.0, Lux SA2.0, President V8&lt;/strong&gt;&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("53","0","0","0","0","","1","q7-7227.jpg","","vinfast-phu-my-hung-dai-ly-uy-quyen-vinfast-quan-7-tp-ho-chi-minh","","","&lt;article&gt;
INSERT INTO table_news VALUES("54","0","0","0","0","","1","vinfast-tan-an-long-an-3869.jpg","","vinfast-long-an-dai-ly-chinh-hang-vinfast-long-an","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;strong&gt;Giới thiệu VinFast Long An:&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("55","0","0","0","0","","1","215453-vinfast-thuan-an-binh-duong-8990.jpg","","vinfast-di-an-binh-duong-dai-ly-vinfast-chinh-hang-binh-duong","","","&lt;article&gt;
INSERT INTO table_news VALUES("56","0","0","0","0","","1","vincom-cong-hoa-1635.jpg","{\"p\":\"vincom-cong-hoa-1635.jpg\",\"w\":300,\"h\":150,\"m\":\"image\\/jpeg\"}","vinfast-vcp-cong-hoa-quan-tan-binh-thanh-pho-ho-chi-minh","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;strong&gt;Giới thiệu VinFast Cộng Hòa:&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("57","0","0","0","0","","1","vinfast-thao-dien-q2-2487.jpg","{\"p\":\"vinfast-thao-dien-q2-2487.jpg\",\"w\":300,\"h\":150,\"m\":\"image\\/jpeg\"}","vinfast-thao-dien-dai-ly-vinfast-quan-2","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;strong&gt;Giới thiệu VinFast Thảo Điền:&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("58","0","0","0","0","","1","binh-thanh-3856.jpg","{\"p\":\"binh-thanh-3856.jpg\",\"w\":300,\"h\":150,\"m\":\"image\\/jpeg\"}","vinfast-tttm-landmark-81-dai-ly-vinfast-quan-binh-thanh-ho-chi-minh","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;strong&gt;Giới thiệu VinFast Landmark 81:&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("59","0","0","0","0","","1","1-4579.jpg","{\"p\":\"1-4579.jpg\",\"w\":1600,\"h\":1151,\"m\":\"image\\/jpeg\"}","vinfast-da-va-dang-xay-dung-hang-loat-tram-sac-dien-xe-o-to-vinfast","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;em&gt;Trong khi dư luận và toàn bộ ngành công nghiệp ô tô Việt Nam vẫn đang xôn xao với thông tin VinFast công bố kế hoạch ra mắt ba mẫu ô tô điện cuối tuần trước, thì đã từ trước đó hãng xe này đã xây dựng sẵn các trạm sạc điện cho ô tô sẵn sàng chờ ghét nối thiết bị.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("60","0","0","0","0","","1","2-6732.jpg","","vinfast-cong-bo-3-mau-xe-o-to-dien-tu-lai-khang-dinh-tam-nhin-tro-thanh-hang-xe-dien-toan-cau","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;Với định hướng chiến lược là trở thành thương hiệu ô tô công nghệ cao toàn cầu, chỉ sau 3 năm đi vào hoạt động, VinFast đã nghiên cứu và phát triển thành công ba dòng xe thông minh đầu tiên là VF31, VF32, VF33, trong đó VF31 là dòng SUV cỡ vừa (Phân khúc C) và chỉ có một phiên bản xe điện, VF32 là xe SUV cỡ trung (Phân khúc D), VF33 là xe SUV cỡ đại (Phân khúc E). VF32 và VF33 mỗi xe đều có 2 phiên bản điện và xăng.&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("61","0","0","0","0","","1","3-5043.jpg","","vinfast-tiep-tuc-but-pha-doanh-so-voi-hon-4500-xe-ban-ra-trong-thang-122020","","","&lt;article&gt;
INSERT INTO table_news VALUES("62","0","0","0","0","","1","4-4821.jpg","","","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;em&gt;Cả 8 tên xe VinFast được đăng ký bản quyền tại Việt Nam và Mỹ hứa hẹn sẽ là những mẫu mới được ra mắt trong năm 2021.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("63","0","0","0","0","","1","5-9529.jpg","","chinh-sach-gia-chao-nam-moi-2021-cho-xe-o-to-vinfast-ap-dung-thang-1-22021","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;VinFast thông báo chính sách giá mới nhằm tạo cơ hội cho các khách hàng sở hữu xe thương hiệu Việt chất lượng cao vào dịp đầu năm mới và tối ưu lợi ích đáp ứng nhu cầu mạnh mẽ của thị trường.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("64","0","0","0","0","","1","6-4999.jpg","","","","","&lt;article&gt;
INSERT INTO table_news VALUES("65","0","0","0","0","","1","7-4247.jpg","","vinfast-gia-han-chinh-sach-uu-dai-truoc-ba-danh-cho-xe-fadil","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;em&gt;VinFast tiếp tục tung ra chính sách có một không hai khi quyết định hỗ trợ 100% lệ phí trước bạ cho những khách hàng nhận xe Fadil sau ngày 31/12 khi ưu đãi của Chính phủ hết hiệu lực.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("66","0","0","0","0","","1","8-9955.jpg","","dieu-kien-ap-dung-chuong-trinh-dan-dau-cung-vinfast-tan-huong-tai-vinpearl","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;Tri ân khách hàng tiên phong tin tưởng và yêu chuộng VinFast&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("67","0","0","0","0","","1","9-9463.jpg","","vinfast-tang-ky-nghi-5-sao-3-ngay-2-dem-tri-an-hon-30000-vinfaster","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;VinFast luôn trân trọng và biết ơn sâu sắc những người đồng hành tuyệt vời – những khách hàng đã sát cánh cùng chúng tôi trong những bước đi đầu tiên, cùng chúng tôi vượt qua một năm đầy thách thức để tạo dựng và lan tỏa mạnh mẽ niềm tự hào Việt Nam, niềm tự hào bản lĩnh và trí tuệ Việt.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("68","0","0","0","0","","1","10-8738.jpg","","vinfast-danh-600-ty-dong-tri-an-30000-khach-hang-tien-phong","","","&lt;article&gt;
INSERT INTO table_news VALUES("69","0","0","0","0","","1","11-7918.jpg","","chuong-trinh-doi-cu-lay-moi-len-doi-xe-sang-vinfast-chinh-thuc-quay-tro-lai-thanh-pho-ho-chi-minh-ngay-04-06122020","","","&lt;article&gt;
INSERT INTO table_news VALUES("70","0","0","0","0","","1","12-8092.jpg","","top-10-xe-o-to-ban-chay-nhat-viet-nam-thang-102020-vinfast-fadil-bat-ngo-vuon-len-vi-tri-thu-ba","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;Sau nhiều tháng cạnh tranh với các đối thủ, Vinfast Fadil đã vươn lên vị trí thứ ba trong bảng xếp hạng Top 10 xe ô tô bán chạy với lượng xe bán ra đạt 1.851 chiếc.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("71","0","0","0","0","","1","13-7013.png","","vinfast-lux-a20-xe-hang-e-gia-hang-d","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;Được định vị ở phân khúc xe sedan hạng E và đồng hạng với các dòng xe Đức như BMW 5-Series, nhưng với chính sách giá tốt, VinFast Lux A2.0 lại đang có giá xấp xỉ so với dòng xe hạng D như Toyota Camry.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("72","0","0","0","0","","1","14-3590.jpg","","vinfast-fadil-gia-tot-an-toan-hang-dau-phan-khuc-hang-a","","","&lt;article&gt;
INSERT INTO table_news VALUES("73","0","0","0","0","","1","15-6181.png","","chinh-sach-gia-moi-cho-xe-o-to-vinfast-ap-dung-tu-ngay-01112020","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;Ngày 01/11/2020, VinFast công bố bảng giá mới đã tích hợp giá trị của chính sách trước bạ 0 đồng và quà tặng tri ân nhằm đơn giản hóa thủ tục mua xe và tối ưu lợi ích theo mong muốn của đông đảo khách hàng.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("74","0","0","0","0","","1","16-7318.jpg","","vi-sao-xe-vinfast-la-gia-tri-cot-loi-moi-o-viet-nam-va-ly-do-nen-mua-xe-vinfast","","","&lt;article&gt;
INSERT INTO table_news VALUES("75","0","0","0","0","","1","17-9951.jpg","","vinfast-fadil-su-lua-chon-hoan-hao-mua-xe-kinh-doanh-dich-vu","","","&lt;article&gt;
INSERT INTO table_news VALUES("76","0","0","0","0","","1","18-9070.jpg","","vinfast-fadil-tung-uu-dai-vuot-troi-fadil-ton-vinh-phai-dep-mung-ngay-phu-nu-viet-nam","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;em&gt;Đặc biệt, chào mừng ngày Phụ nữ Việt Nam (20/10), trong giai đoạn từ ngày 15-31/10, khách hàng mua xe VinFast Fadil bản Cao cấp sẽ được giảm thêm 25 triệu đồng theo chương trình “Fadil tôn vinh phái đẹp”. Chương trình vẫn được áp dụng song song với chính sách giảm trực tiếp 10% cho khách hàng trả thẳng và miễn lãi trả góp 2 năm đầu tiên.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("77","0","0","0","0","","1","19-3807.jpg","","3-mau-xe-vinfast-lap-ky-luc-doanh-so-thang-092020-tai-thi-truong-o-to-viet","","","&lt;article&gt;
INSERT INTO table_news VALUES("78","0","0","0","0","","1","11-4499.jpg","","doi-xe-cu-lay-xe-moi-vinfast-thu-tuc-nhanh-gon-nhieu-uu-dai-hap-dan","","","&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;Chương trình đổi xe cũ lấy xe mới vinfast&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("79","0","0","0","0","","1","20-2597.jpg","","","","","&lt;article&gt;
INSERT INTO table_news VALUES("80","0","0","0","0","","1","21-4908.jpg","","vinfast-president-gia-lan-banh-xe-suv-vinfast-president-khuyen-mai-uu-dai-vinfast","","","&lt;h2 style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;VinFast President sở hữu động cơ mạnh mẽ, thiết kế ngoại thất cao cấp và nội thất hướng đến sự tiện nghi, thoải mái cho chủ nhân.&lt;/em&gt;&lt;/span&gt;&lt;/span&gt;&lt;/h2&gt;
INSERT INTO table_news VALUES("81","0","0","0","0","","1","22-5324.jpg","","vinfast-lux-a20-gia-xe-vinfast-lux-a20-va-khuyen-mai-thang-012021-moi-nhat","","","&lt;p&gt;&lt;em&gt;Bảng giá xe VinFast Lux A2.0 tháng 01/2021. Cập nhật nhanh giá xe VinFast Lux A2.0 khuyến mãi, trả góp. Đánh giá chi tiết xe Vinfast Lux A2.0.&lt;/em&gt;&lt;/p&gt;
INSERT INTO table_news VALUES("82","0","0","0","0","","1","23-9462.jpg","","rinh-xe-o-to-vinfast-chi-tu-33-trieu-dong","","","&lt;article&gt;
INSERT INTO table_news VALUES("83","0","0","0","0","","1","24-4720.jpg","","vinfast-fadil-bang-gia-xe-vinfast-fadil-thang-012021","","","&lt;p&gt;&lt;span style=&quot;font-size:18px;&quot;&gt;&lt;span style=&quot;font-family:Times New Roman,Times,serif;&quot;&gt;&lt;em&gt;Bảng giá &lt;strong&gt;Vinfast Fadil&lt;/strong&gt; 01/2021: Giá niêm yết, giá lăn bánh Fadil &lt;strong&gt;✓&lt;/strong&gt; Đánh giá xe Fadil&lt;strong&gt; ✓&lt;/strong&gt; Mua xe oto&lt;strong&gt; Fadil&lt;/strong&gt; mới, trả góp&lt;strong&gt; ✓ &lt;/strong&gt;Vay 90% giá trị xe.&lt;br /&gt;