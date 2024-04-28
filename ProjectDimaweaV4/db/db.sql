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

-- Inserting sample users into 'login' table. Note: use single quotes (top-left keyboard)
INSERT INTO `login`
(`user`, `pass`)
VALUES 
	('jma', 'jm123'),
	('joe', 'joe123'),
	('john', 'john123'),
	('jesh', 'kesh')
;
	
-- Creating table for AI Tools
CREATE TABLE if NOT EXISTS `tools` (
	`tool` VARCHAR(50) PRIMARY KEY,
	`category` VARCHAR(50) NOT NULL,
	`price` VARCHAR(50) NOT NULL,
	`url` VARCHAR(100) NOT NULL
);

-- Inserting data into 'tools' table. 
INSERT INTO `tools` 
(`tool`, `category`, `price`, `url`)
VALUES
	('Midjourney', 'Generative Art', 'Paid', 'https://www.midjourney.com/home'),
	('OpenAI', 'Productivity', 'Freemium', 'https://openai.com/'),
	('Github Autopilot', 'Coding', 'Paid', 'https://github.com/features/copilot'),
	('Adobe Firefly', 'Generative Art', 'Free', 'https://firefly.adobe.com/'),
	('Artsmart AI', 'Generative Art', 'Paid', 'https://artsmart.ai/'),
	('Logomakerr', 'Generative Art', 'Paid', 'https://logomakerr.ai/'),
	('Freeflo', 'Generative Art', 'Free', 'https://freeflo.ai/'),
	('Inworld', 'Gaming', 'Freemium', 'https://inworld.ai/'),
	('Logo AI', 'Graphic Design', 'Paid', 'https://www.logoai.com/'),
	('Runway ML', 'Generative Video', 'Freemium', 'https://research.runwayml.com/'),
	('StoryNest', 'Generative Text', 'Paid', 'https://storynest.ai/'),
	('HomeDesignsAI', 'Design Generators', 'Freemium', 'https://homedesigns.ai/')
;
	
-- Creating new user with privileges 
CREATE USER 'joe'@'localhost' IDENTIFIED BY 'joe123';
GRANT ALL PRIVILEGES ON `INFS3800Project`.* TO 'joe'@'localhost';
FLUSH PRIVILEGES;