CREATE DATABASE bookstore;

USE bookstore;

CREATE TABLE libro(
    id_libro INT(11) NOT NULL AUTO_INCREMENT,
    title VARCHAR(50) NOT NULL,
    author VARCHAR(100) NOT NULL,
    publication_date VARCHAR(10) NOT NULL,
    description TEXT,
    PRIMARY KEY (id_libro)
);

