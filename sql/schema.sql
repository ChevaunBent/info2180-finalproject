CREATE DATABASE IF NOT EXISTS BugMe;

USE BugMe;
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER ON BugMe.* TO 'info2180'@'localhost' IDENTIFIED BY '2020Sem1';

DROP TABLE IF EXISTS UsersTable;
CREATE TABLE UsersTable (
   id INT AUTO_INCREMENT,
   firstname VARCHAR(64),
   lastname VARCHAR(64),
   password VARCHAR(64),
   email VARCHAR(64),
   datejoined DATETIME,
   record_digest VARCHAR(64),
   PRIMARY KEY(id));

DROP TABLE IF EXISTS IssuesTables;
CREATE TABLE IssuesTables (
   id INT AUTO_INCREMENT,
   description TEXT(254),
   type VARCHAR(64),
   priority VARCHAR(64),
   status VARCHAR(64),
   assigned_to INT,
   created_by INT,
   created DATETIME,
   updated DATETIME,
   record_digest VARCHAR(64),
   PRIMARY KEY(id));


INSERT INTO UsersTable (firstname, lastname, password, email, datejoined) 
SELECT 'administrator','administrator', md5('Password123*'), 'admin@project2.com', '2020-12-01' 
WHERE NOT EXISTS (SELECT email FROM UsersTable WHERE email='admin@project2.com');

INSERT INTO UsersTable (firstname, lastname, password, email, datejoined) 
SELECT 'Chevaun','Bent', md5('Chevaun123*'), 'chevaunbent@uwimona.com', LOCALTIME() 
WHERE NOT EXISTS (SELECT email FROM UsersTable WHERE email='chevaunbent@uwimona.com');

INSERT INTO IssuesTables (description, type, priority, status, assigned_to, created_by, created, updated) 
VALUES ("Last issue would not save","Bug", "Major", "OPEN", 2, 2, LOCALTIME(), LOCALTIME());

INSERT INTO IssuesTables (description, type, priority, status, assigned_to, created_by, created, updated) 
VALUES  ("Ensure all features ar working","Proposal", "Medium", "IN PROGRESS", 3, 3, LOCALTIME(), LOCALTIME());
