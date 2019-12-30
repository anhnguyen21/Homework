CREATE DATABASE login;
USE login;

CREATE TABLE users(
id int PRIMARY KEY,
   username varchar(50),
   password varchar(50),
   fullName varchar(50)
);
INSERT INTO users
VALUES (1, 'admin', '123', 'Nguyen A'),
(2, 'teo', '234', 'Le Teo');
SELECT id from users where username='admin' and password='123';
SELECT fullName from users where id=1;

