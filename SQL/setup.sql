--
-- Ramverk1 SQL
-- Av: peto16, Peder Tornberg
--
SET NAMES 'utf8';
CREATE DATABASE IF NOT EXISTS peto16;
USE peto16;

DROP TABLE IF EXISTS `ramverk1_Comment`;
DROP TABLE IF EXISTS `ramverk1_Users`;

CREATE TABLE ramverk1_Users
(
    `id` INT AUTO_INCREMENT NOT NULL,
    `username` VARCHAR(30) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) DEFAULT NULL,
    `firstname` VARCHAR(40) DEFAULT NULL,
    `lastname` VARCHAR(40) DEFAULT NULL,
    `administrator` BOOLEAN DEFAULT False,
    `enabled` BOOLEAN DEFAULT True,

    PRIMARY KEY (`id`),
    UNIQUE KEY `username_unique` (`username`)
);

INSERT INTO
    ramverk1_Users(username, password, email, firstname, lastname, administrator, enabled)
VALUES
    ('admin', '$2y$10$vaqfYKE2TfIzo7EQMxd8fOg3AvnPBZPTtV4l98aN4Ep6TkmjA2/Cm', 'peder.tornberg@gmail.com', 'Peder', 'Tornberg', True, True, "https://s.gravatar.com/avatar/d6192d705954e94e2091f08250bee577"),
    ('doe', '$2y$10$dYBys9cIIKEsdtQoiIiELOVkuRbcyfMZt7L8Pinw7JHDpZEol7UN6', 'doe@example.com', 'John', 'Doe', False, True, "https://s.gravatar.com/avatar/de21b8c123847c80205e93b301437b45"),
    ('bob', '$2y$10$bV/btm035m/Hv87RYB04JuTFN7opVra1zlBcvdKJHxTzBISmQeHSy', 'bob@example.com', 'Bob', 'Builder', False, False, ""),
    ('disabled', '$2y$10$bV/btm035m/Hv87RYB04JuTFN7opVra1zlBcvdKJHxTzBISmQeHSy', 'disabled@example.com', 'Pink', 'Panther', False, False, "");



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
    FOREIGN KEY (`userId`) REFERENCES `ramverk1_Users` (`id`)

) ENGINE INNODB CHARACTER SET utf8 COLLATE utf8_swedish_ci;


-- -------------------------
-- Comments
-- -------------------------
-- VCommentsDetails
DROP VIEW IF EXISTS VCommentsDetails;
CREATE VIEW VCommentsDetails AS
SELECT
    C.id AS CommentId,
    C.title AS Title,
    C.comment AS Comment,
    U.id AS UserId,
    C.created AS Created,
    C.updated AS Updated,
    C.deleted AS Deleted,
    U.email AS Email,
    U.firstname AS Firstname,
    U.lastname AS Lastname,
    U.administrator AS Admin,
    U.enabled AS Enabled
FROM `ramverk1_Comment` AS C
    INNER JOIN `ramverk1_Users` AS U
        ON C.userId = U.id
ORDER BY CommentId
;
