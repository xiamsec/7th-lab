CREATE DATABASE form_data;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(100),
  email VARCHAR(100),
  gender VARCHAR(10),
  bio TEXT,
  interests VARCHAR(100),
  password VARCHAR(100)
);