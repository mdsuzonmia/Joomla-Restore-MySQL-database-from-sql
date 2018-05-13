

/*--- 01 ACADEMIC YEAR ---*/
DROP TABLE IF EXISTS `#__sms_academic_year_suzon`;

CREATE TABLE IF NOT EXISTS `#__sms_academic_year_suzon` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `year` varchar(255) COLLATE utf8_bin NOT NULL,
  `published` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin  ;

