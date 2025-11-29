CREATE DATABASE logdb;
USE logdb;

CREATE TABLE log(
hora VARCHAR(5),
actividad VARCHAR(100),
estado VARCHAR(20)
);

INSERT INTO log(hora,actividad,estado) VALUES ("08;40","Actividad real","Activo");