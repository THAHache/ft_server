CREATE DATABASE wordpressdb DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE USER 'jperez'@'localhost' IDENTIFIED BY 'contra';

GRANT ALL ON wordpressdb.* TO 'jperez'@'localhost';

FLUSH privileges;