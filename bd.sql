 CREATE DATABASE 'site';
 CREATE TABLE IF NOT EXISTS 'users' (
 'id' int(3) NOT NULL AUTO_INCREMENT ,
 'email' varchar(30) NOT NULL
 'name' varchar(20) NOT NULL,
 'password' varchar(30) NOT NULL,
 'admin' int(1) NOT NULL);
