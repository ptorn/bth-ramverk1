--
-- Ramverk1 SQL
-- Av: peto16, Peder Tornberg
--
SET NAMES 'utf8';
CREATE DATABASE IF NOT EXISTS peto16;
USE peto16;

DROP TABLE IF EXISTS `ramverk1_Comment`;
DROP TABLE IF EXISTS ramverk1_Book;
DROP TABLE IF EXISTS `ramverk1_User`;

CREATE TABLE ramverk1_User
(
    `id` INT AUTO_INCREMENT NOT NULL,
    `username` VARCHAR(30) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) DEFAULT NULL,
    `firstname` VARCHAR(40) DEFAULT NULL,
    `lastname` VARCHAR(40) DEFAULT NULL,
    `administrator` BOOLEAN DEFAULT False,
    `enabled` BOOLEAN DEFAULT True,
    `deleted` DATETIME DEFAULT NULL,

    PRIMARY KEY (`id`),
    UNIQUE KEY `username_unique` (`username`),
    UNIQUE KEY `email_unique` (`email`)

);

INSERT INTO
    ramverk1_User(username, password, email, firstname, lastname, administrator, enabled)
VALUES
    ('admin', '$2y$10$vaqfYKE2TfIzo7EQMxd8fOg3AvnPBZPTtV4l98aN4Ep6TkmjA2/Cm', 'peder.tornberg@gmail.com', 'Peder', 'Tornberg', True, True),
    ('doe', '$2y$10$dYBys9cIIKEsdtQoiIiELOVkuRbcyfMZt7L8Pinw7JHDpZEol7UN6', 'doe@example.com', 'John', 'Doe', False, True),
    ('bob', '$2y$10$bV/btm035m/Hv87RYB04JuTFN7opVra1zlBcvdKJHxTzBISmQeHSy', 'bob@example.com', 'Bob', 'Builder', False, False),
    ('disabled', '$2y$10$bV/btm035m/Hv87RYB04JuTFN7opVra1zlBcvdKJHxTzBISmQeHSy', 'disabled@example.com', 'Pink', 'Panther', False, False);



CREATE TABLE `ramverk1_Comment`
(
    `id` INT AUTO_INCREMENT NOT NULL,
    `userId` INT,
    `title` VARCHAR(255) DEFAULT "No title",
    `comment` TEXT,

    -- MySQL version 5.6 and higher
    -- `published` DATETIME DEFAULT CURRENT_TIMESTAMP,
    -- `created` DATETIME DEFAULT CURRENT_TIMESTAMP,
    -- `updated` DATETIME DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,

    -- MySQL version 5.5 and lower
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated` DATETIME DEFAULT NULL, --  ON UPDATE CURRENT_TIMESTAMP,
    `deleted` DATETIME DEFAULT NULL,

    PRIMARY KEY (`id`),
    FOREIGN KEY (`userId`) REFERENCES `ramverk1_User` (`id`)

) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;

INSERT INTO ramverk1_Comment (userId, title, comment) VALUES (1, "Weeeeeeee", "Hooooo");
INSERT INTO ramverk1_Comment (userId, title, comment) VALUES (2, "Här testar Doe", "Hej Hej en rolig kommentar från John Doe.");



CREATE TABLE ramverk1_Book (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `column1` VARCHAR(256) NOT NULL,
    `column2` VARCHAR(256) NOT NULL
) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;
-- -------------------------
-- Comments
-- -------------------------
-- VCommentsDetails
DROP VIEW IF EXISTS VCommentsDetails;
CREATE VIEW VCommentsDetails AS
SELECT
    C.id AS commentId,
    C.title AS title,
    C.comment AS comment,
    U.id AS userId,
    C.created AS created,
    C.updated AS updated,
    C.deleted AS deleted,
    U.email AS email,
    U.firstname AS firstname,
    U.lastname AS lastname,
    U.administrator AS admin,
    U.enabled AS enabled
FROM `ramverk1_Comment` AS C
    INNER JOIN `ramverk1_User` AS U
        ON C.userId = U.id
ORDER BY CommentId
;
