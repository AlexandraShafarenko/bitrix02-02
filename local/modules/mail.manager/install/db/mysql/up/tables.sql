CREATE TABLE IF NOT EXISTS `y_emails` (
                    `ID` int(11) NOT NULL AUTO_INCREMENT,
                    `NAME` varchar(255) NOT NULL,
                    `EMAIL` varchar(255) NOT NULL,
                    PRIMARY KEY(`ID`)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `y_flowers` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `TITLE` varchar(255) NOT NULL,
    `COUNTRY` varchar(255) NOT NULL,
    `COLOR` varchar(255) NOT NULL,
    PRIMARY KEY(`ID`)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `y_authors` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `NAME` varchar(255) NOT NULL,
    `SURNAME` varchar(255) NOT NULL,
    PRIMARY KEY(`ID`)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `y_books` (
    `ID` int(11) NOT NULL AUTO_INCREMENT,
    `TITLE` varchar(255) NOT NULL,
    `AUTHOR_ID` int(11) NOT NULL,
    PRIMARY KEY(`ID`)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;