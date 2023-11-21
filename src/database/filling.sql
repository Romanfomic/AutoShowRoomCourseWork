INSERT INTO `Groups`
    (`name`, `description`)
    VALUES
    ('Группа 1', 'Описание группы 1'),
    ('Группа 2', 'Описание группы 2'),
    ('Группа 3', 'Описание группы 3'),
    ('Группа 4', 'Описание группы 4')
;

INSERT INTO `Users`
    (`isActive`, `fullName`, `email`, `phone`, `password`, `isEmailNotificationEnabled`)
    VALUES
    (1, 'Иванов Иван Иванович', 'admin@example.com', '88005553535', '$2y$10$MbceiVuLgyEBMMVE9YmZf.KHs2oMP4JIdffsY0MFHyFXnqJGXtKRu', 'false'),
    (0, 'Петров Петр Петрович', 'user_1@example.com', '88008008080', '$2y$10$LN4WUhPvg12PMwruyZ/t5uizRvBq.j3rPrdPFvot5qHQyRT7yxbNi', 'false')
;

INSERT INTO `UserGroups`
    (userId, groupId)
    VALUES
    (1, 1),
    (1, 2),
    (1, 4),
    (2, 1)
;