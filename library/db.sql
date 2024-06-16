/*

USE library;


CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    admin BOOLEAN NOT NULL DEFAULT false
);

CREATE TABLE books(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
author VARCHAR(255) NOT NULL,
year INT NOT NULL,
availability BOOLEAN NOT NULL DEFAULT TRUE
);

INSERT INTO books(title, author, year, availability)
VALUES
('Biografija', 'Emiiiiils', 2024, true);


CREATE TABLE borrowed(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
bookId INT NOT NULL,
title VARCHAR(255) NOT NULL,
author VARCHAR(255) NOT NULL,
year INT NOT NULL,
availability BOOLEAN NOT NULL DEFAULT false,
FOREIGN KEY (bookId) REFERENCES books(id));


ALTER TABLE borrowed
DROP FOREIGN KEY borrowed_ibfk_1;

ALTER TABLE borrowed
ADD CONSTRAINT borrowed_ibfk_1
FOREIGN KEY (bookId) REFERENCES books(id)
ON DELETE CASCADE;
*/
