create database ejemplo;

use ejemplo;

create table alumno(
	id int not null AUTO_INCREMENT,
	nombre varchar(50) not null,
	carrera varchar(50) not null,
	calificacion float not null,
    
    PRIMARY KEY(id)
);
