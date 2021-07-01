CREATE DATABASE IF NOT EXISTS `auth`;
USE `auth`
CREATE TABLE IF NOT EXISTS `users` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(50) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `username` (`username`)
);
