CREATE DATABASE smartwatch_db;

USE smartwatch_db;

CREATE TABLE smartwatches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(100) NOT NULL,
    marca VARCHAR(100) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    caracteristicas TEXT NOT NULL
);

INSERT INTO smartwatches (modelo, marca, precio, caracteristicas) VALUES
('Galaxy Watch 4', 'Samsung', 249.99, 'Health tracking, GPS, AMOLED display'),
('Apple Watch Series 7', 'Apple', 399.00, 'Fitness tracking, ECG, Retina display'),
('Fossil Gen 5', 'Fossil', 295.00, 'Heart rate tracking, Wear OS, customizable watch faces');