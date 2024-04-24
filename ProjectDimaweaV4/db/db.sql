-- Project DB
DROP USER IF EXISTS 'joe'@'localhost';
DROP DATABASE IF EXISTS `INFS3800Project`;

-- Creating database 'INFS3800Project';
CREATE DATABASE IF NOT EXISTS `INFS3800Project`;
USE `INFS3800Project`;

-- Creating table for Login
CREATE TABLE if NOT EXISTS `login` (
	`user` VARCHAR(50) PRIMARY KEY,
	`pass` VARCHAR(50) NOT NULL 
);

-- Inserting sample users into 'login' table. Note: use single qis3400uotes (top-left keyboard)
INSERT INTO `login`
(`user`, `pass`)
VALUES 
	('jma', 'jm123'),
	('joe', 'joe123'),
	('john', 'john123'),
	('jesh', 'kesh');
	
-- Creating new user with privileges 
CREATE USER 'joe'@'localhost' IDENTIFIED BY 'joe123';
GRANT ALL PRIVILEGES ON `INFS3800Project`.* TO 'joe'@'localhost';
FLUSH PRIVILEGES;