CREATE DATABASE IF NOT EXISTS crud;
USE crud;

CREATE TABLE users (
    email VARCHAR(60),
    name VARCHAR(60),
    position VARCHAR(20),
    load_date DATE NOT NULL DEFAULT (CURRENT_DATE),
    modification_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(email)
);

CREATE TABLE sessions(
    session_id INT NOT NULL AUTO_INCREMENT,
    session_date DATE NOT NULL DEFAULT (CURRENT_DATE),
    notes TEXT,
    PRIMARY KEY(session_id)
);


CREATE TABLE attendance(
    email VARCHAR(60),
    status ENUM('present', 'absent', 'excused') ,
    session_id INT
);

ALTER TABLE attendance
    ADD FOREIGN KEY(session_id) REFERENCES sessions(session_id);

DELIMITER $$

CREATE PROCEDURE sp_get_report(IN email_parameter VARCHAR(60))
BEGIN
    SELECT s.session_date AS session_date, a.status AS status 
    FROM users AS u
    INNER JOIN attendance AS a ON (u.email = a.email AND u.email = email_parameter AND a.email = email_parameter)
    INNER JOIN sessions AS s ON (a.session_id = s.session_id);
END $$

CREATE USER daniel IDENTIFIED BY 'daniel';
GRANT ALL PRIVILEGES ON *.* TO 'daniel'@'%' WITH GRANT OPTION;

