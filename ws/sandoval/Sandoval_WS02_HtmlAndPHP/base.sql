CREATE DATABASE IF NOT EXISTS inventario_pc;
USE inventario_pc;

CREATE TABLE computadoras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    CPU VARCHAR(100),
    ram VARCHAR(50),
    almacenamiento VARCHAR(100),
    GPU VARCHAR(100),
    sistema VARCHAR(100),
    marca VARCHAR(100),
    modelo VARCHAR(100),
    pantalla VARCHAR(100),
    bateria VARCHAR(100),
    color VARCHAR(50),
    precio FLOAT
);
