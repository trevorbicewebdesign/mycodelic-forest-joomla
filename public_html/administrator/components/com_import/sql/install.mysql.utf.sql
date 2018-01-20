
CREATE TABLE IF NOT EXISTS `#__import_processes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `sql` text,
  `code` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__import_que` (
  `id` int(11) NOT NULL,
  `completed_items` int(11) DEFAULT NULL,
  `query` text,
  `batch_size` int(11) DEFAULT NULL,
  `batch_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__import_steps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `process_id` int(11) NOT NULL DEFAULT '0',
  `select_table` varchar(255) NOT NULL DEFAULT '0',
  `selection` text NOT NULL,
  `insert_table` varchar(255) NOT NULL DEFAULT '0',
  `color` varchar(255) NOT NULL,
  `insert_table_values` text NOT NULL,
  `join_tables` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sql` text NOT NULL,
  `code` text NOT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

