CREATE DATABASE IF NOT EXISTS unique_wire_netting;
USE unique_wire_netting;

CREATE TABLE IF NOT EXISTS inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    location VARCHAR(255) NOT NULL,
    products TEXT,
    material VARCHAR(100),
    diameter VARCHAR(100),
    aperture VARCHAR(100),
    dimensions VARCHAR(100),
    application TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
