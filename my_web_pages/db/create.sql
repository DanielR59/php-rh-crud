CREATE TABLE users (
    email VARCHAR(60),
    name VARCHAR(60),
    position VARCHAR(20),
    load_date DATE DEFAULT CURRENT_DATE,
    modification_time TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NULL,
    PRIMARY KEY(email)
);

CREATE TABLE sessions(
    session_id INT NOT NULL AUTO_INCREMENT,
    session_date DATE DEFAULT CURRENT_DATE,
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

CREATE PROCEDURE sp_get_report(IN email_var VARCHAR(60))
BEGIN
    SELECT s.session_date, a.status 
    FROM users AS u
    INNER JOIN attendance AS a ON (u.email = a.email AND u.email = email_var AND a.email = email_var)
    INNER JOIN sessions AS s ON (a.session_id = s.session_id)
END;
