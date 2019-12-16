 CREATE DATABASE 'site';
 
 CREATE TABLE IF NOT EXISTS 'users' (
 'id' int(3) NOT NULL AUTO_INCREMENT ,
 'email' varchar(30) NOT NULL
 'name' varchar(20) NOT NULL,
 'password' varchar(30) NOT NULL,
 'admin' int(1) NOT NULL);
 
CREATE TABLE IF NOT EXISTS 'books' (
`id` INT(3) NOT NULL AUTO_INCREMENT , 
`book` VARCHAR(70) NOT NULL ,
`avtor` VARCHAR(70) NOT NULL ,
`about` TEXT NOT NULL ,
`pic` MEDIUMBLOB NOT NULL ,
`file` MEDIUMBLOB NOT NULL ,
`cat` VARCHAR(40) NOT NULL);
