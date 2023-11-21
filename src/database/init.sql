use roman_f_qschool_test;

CREATE TABLE Users (
  isActive BOOLEAN,
  fullName VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(255),
  password VARCHAR(255),
  isEmailNotificationEnabled BOOLEAN
);

CREATE TABLE UserGroups (
  groupName VARCHAR(255),
  groupDescription VARCHAR(255)
);

CREATE TABLE MessageSections (
  sectionId INT PRIMARY KEY,
  sectionName VARCHAR(255),
  colorLabel VARCHAR(255),
  creationDateTime DATETIME,
  createdByUser VARCHAR(255),
  parentSectionId INT,
  FOREIGN KEY (parentSectionId) REFERENCES MessageSections(sectionId)
);

CREATE TABLE Messages (
  messageId INT PRIMARY KEY,
  messageText TEXT,
  messageTitle VARCHAR(255),
  creationDateTime DATETIME,
  senderUser VARCHAR(255),
  receiverUser VARCHAR(255),
  sectionId INT,
  FOREIGN KEY (sectionId) REFERENCES MessageSections(sectionId)
);