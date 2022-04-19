<?php

define('MYSQL_HOST', 'localhost');
define('MYSQL_PORT', '3308'); // of 3306. in Mamp preferences kun je zien wat het port nummer van de database is.
define('MYSQL_USERNAME', 'root');
define('MYSQL_PASSWORD', 'root');
define('MYSQL_DATABASE', 'dndwebapp');

/*
#AdminTr!stan
hjkUY-TI967-8#$fm

CREATE DATABASE `dndwebapp`

CREATE TABLE 
`dndwebapp`.`pages` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `title` VARCHAR(255) NOT NULL , 
    `content` TEXT NOT NULL , 
    `slug` VARCHAR(255) NOT NULL , 
    `status` ENUM(
        'published','draft'
    ) 
    NOT NULL DEFAULT 'draft' , 
    PRIMARY KEY (`id`), 
    UNIQUE `PageTitles` (`title`(255))
    ) 
    ENGINE = InnoDB;


CREATE TABLE `dndwebapp`.`users` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `username` VARCHAR(255) NOT NULL , 
    `password` VARCHAR(255) NOT NULL ,
     PRIMARY KEY (`id`)
     ) 
     ENGINE = InnoDB;


CREATE TABLE `dndwebapp`.`blogs` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `title` VARCHAR(255) NOT NULL , 
    `content` TEXT NOT NULL , 
    `slug` VARCHAR(255) NOT NULL , 
    `status` ENUM('published','draft'
    ) 
    NOT NULL DEFAULT 'draft' , 
    PRIMARY KEY (`id`), 
    UNIQUE `blogs` (`title`)
    ) 
    ENGINE = InnoDB;


INSERT INTO `blogs` (
    `id`, `title`, `content`, `slug`, `status`) 
    VALUES (
        '1', 'About Me', 'After finishing different
         courses and training I am capable of developing 
         a simple webapp. This app is a personal project 
         to grow my skills. Base Courses were aimed at 
         syntax and semantics - Setting up a development 
         platform - Statements - Arrays - Operators - 
         Control Structures (if / else statements) - 
         Functions - String functions - Loops - Includes - 
         HTML Forms - Requests - Sessions Another part of 
         training aimed at Object Oriented Programming 
         (OOP) - Classes / Objects - Access modifiers - 
         Inheritance - Getters and Setters - Constants - 
         Abstract Classes and Interfaces - Static keywords - 
         Polymorfisme One course I did was aimed at working 
         with a database. - SQL and Queries - Database 
         relationships (cardinalities) - Database design - 
         PHP MySQL functies - Use of phpMyAdmin - 
         Object Relational Mapping (ORM) 
         The basics of the term Database and all her forms 
         ● Database modelling and implementing from start to finish 
         ● Database manipulation using SQL 
         ● Executing Queries with SQL JavaScript basics 
         ● Creating simple JavaScript functions 
         ● Arithmetic operators 
         ● Variables, datatypes, manipulation 
         ● Use and apply JavaScript in HTML',
          'about', 'draft')


INSERT INTO `users` (
    `id`, `username`, `password`) 
    VALUES (
        '1', '#AdminTr!stan', 'hjkUY-TI967-8#$fm'
    );



INSERT INTO `pages` (`id`, `title`, `content`, `slug`, `status`) VALUES ('1', 'home', 'If you ever played D&D you might have experience with social encounters. Being a Dungeon Master (DM) is a challenge. We have to prepare a game session, but we cannot prepare everything so sometimes we improvise. However, with great improvisation comes great responsibility: details. I made lists and used dice to randomly decide what details I would use. So I wrote one page after another with random unimportant details that do not impact the story of a DM, like a D100 List: Familiar Behavior This led me to a marvellous website with more D100 lists. After learning to write code, I realized I could develop an app to make more \"D100\" lists beyond the scope of 100, and if I would write the code I would no longer need books, notes, notepads or dices to prepare details. Imagine, with one click of the mouse, a script would roll all dices and combine all results into a small text block, reading it out loud would give a detailed, unique yet fully randomized NPC. So next time my party walks into a tavern and ask the DM what people are inside, we do not have to come up on the spot with a memorable or less memorable character. Click the button and see who they meet!', 'home', 'published')

INSERT INTO `pages` (`id`, `title`, `content`, `slug`, `status`) VALUES ('2', 'Homebrewers Notice', 'To facilitate homebrew you have the option to enter your custom race name, or choose to enter a race name from the DnD Beyond races. If nothing is entered the generator randomly chooses one of the DnD Beyond races.', 'notice', 'published')

UPDATE `blogs` SET `status` = 'published' WHERE `blogs`.`id` = 1

INSERT INTO `blogs` (`id`, `title`, `content`, `slug`, `status`) VALUES ('2', 'Future Plans', 'Develop more pages to randomize a wildernis journey, loot, dungeons, perhaps even go as far as Notice Board Quests.', 'plans', 'published')
*/




