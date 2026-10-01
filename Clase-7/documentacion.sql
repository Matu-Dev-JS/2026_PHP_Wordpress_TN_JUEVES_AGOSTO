/*
Crear la tabla de usuarios
-id
-nombre
-mail
-password
-fecha_creacion

VARCHAR sirve para guardar strings
Tiene una longitud maxima de caracteres 255
Si queremos guardar texto mas largo TEXT (65000) o LONGTEXT (4billones)
*/

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE foros (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    descripcion TEXT(1000),
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE membresias (
	id INT AUTO_INCREMENT PRIMARY KEY,
    fk_id_usuario INT NOT NULL,
    fk_id_foro INT NOT NULL,
    rol ENUM('usuario', 'administrador', 'dueño') DEFAULT 'usuario',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (fk_id_usuario) REFERENCES usuarios(id),
    FOREIGN KEY (fk_id_foro) REFERENCES foros(id)
)

INSERT INTO usuarios (nombre, email, password) VALUES ('pepe', "pepe@gmail.com", 'pepe123')

INSERT INTO foros (nombre, descripcion) VALUES ('Juegos de mesa', 'Ven a hablar sobre juegos de mesa')
INSERT INTO membresias (fk_id_usuario, fk_id_foro, rol) VALUES (1, 1, 'dueño')