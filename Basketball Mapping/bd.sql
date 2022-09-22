CREATE DATABASE  IF NOT EXISTS `bd-sql`;

USE `bd-sql`;

DROP TABLE IF EXISTS `user`;

CREATE TABLE `bd-sql`.`user` (
    `user_id` INT(11) NOT NULL AUTO_INCREMENT,
    `user` VARCHAR(200) NOT NULL,
    `password` VARCHAR(32) NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    `date_time` DATETIME NOT NULL,
    PRIMARY KEY (`user_id`)
);

DROP TABLE IF EXISTS `teams`;

CREATE TABLE `bd-sql`.`teams` (
    `team_id` INT NOT NULL AUTO_INCREMENT,
    `team_name` VARCHAR(45) NOT NULL,
    `contact` VARCHAR(25) NOT NULL,
    `modality` VARCHAR(25) NOT NULL,
    `gender` VARCHAR(25) NOT NULL,
    `state` VARCHAR(45) NOT NULL,
    `city` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`team_id`)
);