CREATE TABLE trucks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(255) NOT NULL,
    model VARCHAR(255) NOT NULL,
    year INT NOT NULL,
    color VARCHAR(50),
    mma DECIMAL(10, 2) NOT NULL,
    tara DECIMAL(10, 2) NOT NULL,
    carga_util DECIMAL(10, 2) AS (mma - tara) STORED
);
