CREATE TABLE `categories` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL
);

CREATE TABLE `posts` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `categoryId` int NOT NULL,
  `authorId` int NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime DEFAULT current_timestamp()
);

CREATE TABLE `admins` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL
);

CREATE TABLE `messages` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `createdAt` datetime DEFAULT current_timestamp()
);

ALTER TABLE `posts` ADD FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`);

ALTER TABLE `posts` ADD FOREIGN KEY (`authorId`) REFERENCES `admins` (`id`);
