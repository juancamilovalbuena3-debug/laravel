-- Base de datos CRUD Empleados con datos de prueba
CREATE DATABASE IF NOT EXISTS crud_empleados;
USE crud_empleados;

CREATE TABLE empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    puesto VARCHAR(100),
    salario DECIMAL(10,2),
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

INSERT INTO empleados (nombre, email, puesto, salario, created_at, updated_at) VALUES
('Juan Pérez', 'juan@example.com', 'Desarrollador', 2500.00, NOW(), NOW()),
('Ana López', 'ana@example.com', 'Diseñadora', 2200.00, NOW(), NOW()),
('Carlos Gómez', 'carlos@example.com', 'Administrador', 2800.00, NOW(), NOW());
