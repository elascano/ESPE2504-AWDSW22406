CREATE DATABASE computers_db;

USE computers_db;

CREATE TABLE computers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(100) NOT NULL,
    modelo VARCHAR(100) NOT NULL,
    procesador VARCHAR(100) NOT NULL,
    ram INT NOT NULL,
    almacenamiento INT NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    sistema VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    fecha DATE NOT NULL,
    comentarios TEXT
);