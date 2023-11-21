use roman_f_qschool_test;

CREATE TABLE Groups (
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
  FOREIGN KEY (groupId) REFERENCES Groups(id),
  PRIMARY KEY (userId, groupId)
);

CREATE TABLE MessageSections (
  id INT PRIMARY KEY AUTO_INCREMENT,
  sectionName VARCHAR(255),
  colorLabel VARCHAR(255),
  creationDateTime DATETIME,
  createdByUser VARCHAR(255),
  parentSectionId INT,
  FOREIGN KEY (parentSectionId) REFERENCES MessageSections(id)
);

CREATE TABLE Messages (
  id INT PRIMARY KEY AUTO_INCREMENT,
  msgText TEXT,
  title VARCHAR(255),
  creationDateTime DATETIME,
  senderUser VARCHAR(255),
  receiverUser VARCHAR(255),
  sectionId INT,
  FOREIGN KEY (sectionId) REFERENCES MessageSections(Id)
);