--se elimina si es que no esta la DB
drop schema if exists `bd_benavente`;
create schema if not exists `bd_benavente` default character set utf8 collate utf8_spanish_ci;

use  `bd_benavente`;

--creamos la tabla


CREATE TABLE `alumnos`{
`id_alumno` int(11) not null,
`grado` text not null,
`matricula` int(11) not null,
`apellido_paterno` text not null,
`apellido_materno`  text not null,
`nombre` text(50) not null,
`CURP`  text (18) not null,
`correo_institucional` text not null,
`pass` varchar (8) not null,
`permisos` int (1) not null,
`fecha_registro`  datetime not null default current_timestamp
} engine=Innodb default charset=utf8;

alter table `bd_benavente`.`alumnos`
change column `id_alumno` `id_alumno` int (10) not null auto_increment,
add primary key (`id_alumno`);

INSERT INTO 'alumnos' (grado,matricula,apellido_paterno,apellido_materno,nombre,CURP,
correo_institucional,pass,permisos)
VALUES ('G1','2023248610','CALDERON','VALDEZ','DARINE VALENTINA', 'CAVD160214MDFLLRA7'
'darinecalderon20@benavente-colegio.edu.mx','Calderon2884:','3');

INSERT INTO 'alumnos' (grado,matricula,apellido_paterno,apellido_materno,nombre,CURP,
correo_institucional,pass,permisos)
VALUES ('G1','2023214214','CHAVEZ','SANCEN','ALISON', 'CASA160619MDFHNLA4'
'alisonchavez21@benavente-colegio.edu.mx','Chavez1494:','3');

INSERT INTO 'alumnos' (grado,matricula,apellido_paterno,apellido_materno,nombre,CURP,
correo_institucional,pass,permisos)
VALUES ('G1','2023298413','CONTRERAS','RAMIREZ','LUIS SANTIAGO', 'CORL161129HMCNMSA8'
'luiscontreras22@benavente-colegio.edu.mx','Contreras2507:','3');