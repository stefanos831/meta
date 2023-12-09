create database `LibraryNew`;

use `LibraryNew`;


CREATE TABLE `LibraryNewLogin` (
  `id` int(9) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,  
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

INSERT INTO `LibraryNewLogin` (`id`, `name`, `email`, `username`, `password` ) VALUES
(1, 'test', 'test', 'test', 'test');


CREATE TABLE `LibraryNewData` (
  `id` int(11) NOT NULL auto_increment,
  `book` varchar(100) NOT NULL,
  `login_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  CONSTRAINT FK_LibraryNewData_1
  FOREIGN KEY (login_id) REFERENCES LibraryNewLogin(id)
  ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;


CREATE TABLE `LibraryNewBooks` (
  `id` int(9) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;


CREATE TABLE `LibraryNewVideo` (
  `id` int(11) NOT NULL auto_increment,
    `name` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
    `object` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;

INSERT INTO `LibraryNewVideo` (`id`, `name`, `video`) VALUES
(1, 'test 2', 'galaxyShort.mp4'), (2, 'test', 'matrixShort.mp4');


INSERT INTO `LibraryNewBooks` (`id`, `name`, `category`, `Images`) VALUES
(101, 'test 2', 'galaxyShort.mp4'), 
(102, 'test 2', 'galaxyShort.mp4'), 
(103, 'test.pdf', 'Art', 'test.png')
(104, 'test fd2', 'galaxyShort.mp4'), 
(105, 'test fsdds2', 'galaxyShort.mp4'), 
(106, 'test6546 2', 'galaxyShort.mp4'), 
(107, 'test hgfhgf2', 'galaxyShort.mp4'), 
(108, 'testdfds 2', 'galaxyShort.mp4'), 
(109, 'testgfdgf 2', 'galaxyShort.mp4'), 
(110, 'test dfgdf2', 'galaxyShort.mp4'), 
(110, 'testdfgdf 2', 'galaxyShort.mp4'), 
(112, 'testgdf 2', 'galaxyShort.mp4'), ;


CREATE TABLE `LibraryNewModels` (
  `id` int(11) NOT NULL auto_increment,
  `model` varchar(200) NOT NULL,
  `scale` varchar(100) NOT NULL,
  `object` varchar(100) NOT NULL,
  `posY` varchar(100) NOT NULL,
  `posX` varchar(100) NOT NULL,
  `posZ` varchar(100) NOT NULL,
  `rotY` varchar(100) NOT NULL,  
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB;
