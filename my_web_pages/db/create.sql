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
    ADD FOREIGN KEY(email) REFERENCES users(email),
    ADD FOREIGN KEY(session_id) REFERENCES sessions(session_id);