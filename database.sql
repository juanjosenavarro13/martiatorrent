DROP DATABASE IF EXISTS martiatorrent;
CREATE DATABASE martiatorrent;
USE martiatorrent;

-- TABLA DE USUARIOS
CREATE TABLE usuarios(

  id        int(11) NOT NULL AUTO_INCREMENT,
  usuario   varchar(50) NOT NULL,
  password  varchar(50) NOT NULL,

  constraint usuarios_pk primary key (id)
)ENGINE=INNODB;

-- TABLA DE CATEGORIAS
CREATE TABLE categorias(

  id        int(11) NOT NULL AUTO_INCREMENT,
  nombre    varchar(50) NOT NULL,

  constraint categorias_pk primary key (id)
)ENGINE=INNODB;

-- INSERT CATEGORIAS
INSERT INTO categorias(nombre) VALUES('Peliculas'), ('Juegos');

-- TABLA SUBCATEGORIAS
CREATE TABLE subcategorias(

  id        int(11) NOT NULL AUTO_INCREMENT,
  nombre    varchar(50) NOT NULL,
  categoria int(11) NOT NULL,

  constraint subcategorias_pk primary key (id),
  constraint subcategorias_fk foreign key (categoria) references categorias(id)
)ENGINE=INNODB;

-- INSERT SUBCATEGORIAS
INSERT INTO subcategorias(nombre,categoria) VALUES
('Accion',1), ('Aventuras',1),
('Plataformas',2), ('Shooter',2);