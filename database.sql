DROP DATABASE IF EXISTS my_database;
CREATE DATABASE my_database;

USE my_database;

CREATE TABLE my_table (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(50),
    AGE INT,
    ADDRESS VARCHAR(200)
);