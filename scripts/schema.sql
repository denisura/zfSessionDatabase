-- scripts/schema.sqlite.sql
--
-- You will need load your database schema with this SQL.

CREATE DATABASE IF NOT EXISTS `test`;

    CREATE TABLE `test`.`app_session` (  
      `id` char(32),  
      `modified` int,  
      `lifetime` int,  
      `data` text,  
      PRIMARY KEY (`id`)  
    );  