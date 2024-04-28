-- Reset by deleting user tester and database php_mysql_sample_db 
DROP USER IF EXISTS 'tester'@'localhost';
DROP DATABASE IF EXISTS `php_mysql_sample_db` ;

-- Create database php_mysql_sample_db
CREATE DATABASE IF NOT EXISTS `php_mysql_sample_db` ;

USE `php_mysql_sample_db`;

-- Create table login
CREATE TABLE IF NOT EXISTS `login` (
  `user` varchar(50) PRIMARY KEY,
  `pswd` varchar(50) NOT NULL
);

#single quotes on columns, table, etc name will be wrong. Use single slanted (top left tilda)
INSERT INTO `login` 
(`user`, `pswd`) 
VALUES
	('jma', 'jma123'),
	('jack', 'jack123'),
	('jeff', 'jeff123'),
	('jane', 'jane123'),
	('joe', 'joe123');

-- Create table nba for search purpose
CREATE TABLE IF NOT EXISTS `nba` (
  `player` varchar(50) PRIMARY KEY,
  `team` varchar(50) NOT NULL, 
  `number` INT NOT NULL, 
  `ppg` DOUBLE NOT NULL
);

INSERT INTO `nba` 
(`player`, `team`, `number`, `ppg`) #point per game
VALUES
	('Michael Jordan', 'Chicago Bulls', 23, 33.6),
	('Kobe Byant', 'LA Lakers', 24, 28.3),
	('Bill Russell', 'Boston Celtics', 6, 19.2),
	('John Stockton', 'Utah Jazz', 12, 13.5),
	('James Harden', 'Houston Rockets', 23, 23.6),
	('LeBron James', 'LA Lakers', 6, 26.1)
;

-- CREATE MORE TABLES if necessary ...php_mysql_sample_dbnbalogin
-- INSERT INTO MORE TABLES if necessary ...

-- Create a new use tester that can access the database php_mysql_sample_db.
-- Reference: https://www.digitalocean.com/community/tutorials/how-to-create-a-new-user-and-grant-permissions-in-mysql
CREATE USER 'tester'@'localhost' IDENTIFIED BY 'tester123'; #'tester123' is the username
GRANT ALL PRIVILEGES ON `php_mysql_sample_db`.* TO 'tester'@'localhost';
FLUSH PRIVILEGES; -- This FLUSH statement is critical without which the CREATE USER will NOT happen! 

#for double quotes " " use \" \" 

#tester is for heidi, jma is for login.php
