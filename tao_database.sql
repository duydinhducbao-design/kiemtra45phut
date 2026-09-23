
CREATE DATABASE IF NOT EXISTS quanlyhocsinh;

USE quanlyhocsinh;

CREATE TABLE IF NOT EXISTS hocsinh (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    grade FLOAT NOT NULL
);

INSERT INTO hocsinh (name, age, grade) VALUES
('Nguyen Van A', 18, 8.5),
('Tran Thi B', 17, 9.2),
('Le Van C', 18, 7.8),
('Pham Thi D', 17, 9.2),
('Hoang Van E', 18, 6.9);
