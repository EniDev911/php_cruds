CREATE DATABASE `crud-php-mysql-base` CHARACTER SET utf8;

USE `crud-php-mysql-base`;

CREATE TABLE tasks (
	id BIGINT NOT NULL AUTO_INCREMENT,
	name VARCHAR(30) NOT NULL,
	description TEXT,
	PRIMARY KEY(id)
);