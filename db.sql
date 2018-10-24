CREATE TABLE `data` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(56) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `data` (`id`, `name`, `location`, `deleted`) VALUES
(1,	'John Brown',	'Merrysville',	0),
(2,	'Susan Smith',	'Geneva ',	0),
(3,	'Tim Leary',	'San Francisco',	0),
(4,	'Tim Leary',	'San Francisco',	0),
(5,	'Edward Scissorhands',	'London',	0),
(6,	'Monty Python',	'Glascow',	0),
(7,	'eyore',	'the forest',	0),
(8,	'John Q. Public',	'Everywhere',	0),
(9,	'Tom Sawyer',	'Huckletown',	0),
(10,	'Alladin',	'Abracadabra',	0),
(11,	'Wiley E  Coyote',	'Palm Desert',	0),
(12,	'Oppray',	'Seaside',	0),
(13,	'Jacob ',	'Warsaw',	0),
(14,	'Tabitha',	'Vegas',	1),
(15,	'Martin',	'Mars',	0),
(16,	'George',	'The Jungle',	0),
(17,	'Tony',	'NYC',	1);