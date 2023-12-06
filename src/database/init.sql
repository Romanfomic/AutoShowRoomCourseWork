CREATE DATABASE rbd_project;
use rbd_project;

CREATE TABLE Groupss (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  description VARCHAR(255)
);

CREATE TABLE Users (
  id INT PRIMARY KEY AUTO_INCREMENT,
  isActive BOOLEAN,
  fullName VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(255),
  password VARCHAR(255),
  isEmailNotificationEnabled BOOLEAN
);

CREATE TABLE UserGroups (
  userId INT,
  groupId INT,
  FOREIGN KEY (userId) REFERENCES Users(id),
  FOREIGN KEY (groupId) REFERENCES Groupss(id),
  PRIMARY KEY (userId, groupId)
);



CREATE TABLE CarBrand (
  id INT AUTO_INCREMENT PRIMARY KEY,
  brand VARCHAR(50),
  model VARCHAR(100),
  description VARCHAR(100)
);

CREATE TABLE CarColor (
  id INT AUTO_INCREMENT PRIMARY KEY,
  color VARCHAR(50),
  brightness INT,
  description VARCHAR(100)
);

CREATE TABLE CarBodyType (
  id INT AUTO_INCREMENT PRIMARY KEY,
  body_type VARCHAR(100),
  description VARCHAR(100)
);

CREATE TABLE FuelType (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fuel_type VARCHAR(100),
  fuel_count INT,
  description VARCHAR(100)
);

CREATE TABLE Cars (
  id INT AUTO_INCREMENT PRIMARY KEY,
  brand_id INT,
  color_id INT,
  body_type_id INT,
  fuel_type_id INT,
  FOREIGN KEY (brand_id) REFERENCES CarBrand(id),
  FOREIGN KEY (color_id) REFERENCES CarColor(id),
  FOREIGN KEY (body_type_id) REFERENCES CarBodyType(id),
  FOREIGN KEY (fuel_type_id) REFERENCES FuelType(id)
);