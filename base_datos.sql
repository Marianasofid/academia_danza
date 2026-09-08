CREATE DATABASE IF NOT EXISTS danza_viva;

USE danza_viva;

-- =========================================
-- TABLA USUARIO
-- =========================================

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol ENUM('estudiante', 'admin') NOT NULL DEFAULT 'estudiante'
);

-- =========================================
-- TABLA CLASE
-- =========================================

CREATE TABLE clase (
    id_clase INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT NOT NULL,
    nivel VARCHAR(50) NOT NULL,
    edad_minima INT NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

-- =========================================
-- TABLA HORARIO
-- =========================================

CREATE TABLE horario (
    id_horario INT AUTO_INCREMENT PRIMARY KEY,
    id_clase INT NOT NULL,
    dia VARCHAR(50) NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_fin TIME NOT NULL,

    FOREIGN KEY (id_clase)
    REFERENCES clase(id_clase)
    ON DELETE CASCADE
);

-- =========================================
-- TABLA INSCRIPCION
-- =========================================

CREATE TABLE inscripcion (
    id_inscripcion INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    id_clase INT NOT NULL,
    fecha_inscripcion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    UNIQUE KEY inscripcion_unica (id_usuario, id_clase),

    FOREIGN KEY (id_usuario)
    REFERENCES usuario(id_usuario)
    ON DELETE CASCADE,

    FOREIGN KEY (id_clase)
    REFERENCES clase(id_clase)
    ON DELETE CASCADE
);

-- =========================================
-- INSERTAR CLASES
-- =========================================

INSERT INTO clase
(nombre, descripcion, nivel, edad_minima, precio)
VALUES
(
    'Cumbia',
    'Aprende los pasos y movimientos tradicionales de la cumbia colombiana.',
    'Principiante',
    5,
    80000
),
(
    'Bambuco',
    'Conoce los movimientos y pasos característicos del bambuco colombiano.',
    'Principiante',
    5,
    80000
),
(
    'Sanjuanero',
    'Practica los pasos y movimientos propios del sanjuanero colombiano.',
    'Intermedio',
    5,
    85000
),
(
    'Danza antioqueña',
    'Aprende diferentes expresiones de la danza tradicional antioqueña.',
    'Principiante',
    5,
    80000
),
(
    'Danza urbana',
    'Desarrolla coordinación, ritmo y expresión corporal mediante danza urbana.',
    'Intermedio',
    5,
    90000
),
(
    'Carranga',
    'Aprende movimientos inspirados en la tradición musical y cultural de la carranga.',
    'Principiante',
    5,
    80000
);

-- =========================================
-- INSERTAR HORARIOS
-- =========================================

INSERT INTO horario
(id_clase, dia, hora_inicio, hora_fin)
VALUES
(1, 'Lunes y miércoles', '16:00:00', '17:00:00'),
(2, 'Martes y jueves', '16:00:00', '17:00:00'),
(3, 'Miércoles y viernes', '17:00:00', '18:00:00'),
(4, 'Lunes y jueves', '16:00:00', '17:00:00'),
(5, 'Martes y viernes', '17:00:00', '18:00:00'),
(6, 'Viernes y sábado', '10:00:00', '11:00:00');

-- =========================================
-- USUARIO ADMINISTRADOR
-- =========================================

INSERT INTO usuario
(nombre, apellido, correo, password, rol)
VALUES
(
    'Administrador',
    'Academia',
    'admin@danzaviva.com',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC4L3uQ7fRj5v8u7f5K',
    'admin'
);