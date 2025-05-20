CREATE DATABASE classroom_system;

USE classroom_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('student', 'teacher', 'admin') DEFAULT 'student'
);

-- Sample User (Password: 12345)
INSERT INTO users (username, password, role)
VALUES ('jubair', SHA2('12345', 256), 'teacher');

