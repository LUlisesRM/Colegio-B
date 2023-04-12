-- se elimina si es que no esta la DB
drop schema if exists bd_benavente;
create schema if not exists bd_benavente default character set utf8 collate utf8_spanish_ci;

use  bd_benavente;

-- creamos la tabla


CREATE TABLE alumnos(
id_alumno int(11) not null,
grado text not null,
matricula int(11) not null,
apellido_paterno text not null,
apellido_materno  text not null,
nombre text(50) not null,
curp  varchar (18) not null,
correo_institucional text not null,
pass varchar (20) not null,
permisos varchar (3) not null default 001,
fecha_registro  datetime not null default current_timestamp
 ) engine=Innodb default charset=utf8;

alter table alumnos
change column id_alumno id_alumno int (10) not null auto_increment,
add primary key (id_alumno);

CREATE TABLE padmon(
id_padmon int(11) not null,
nomina int,
matricula int(11) not null,
apellido_paterno text not null,
apellido_materno  text not null,
nombre text(50) not null,
departamento text,
cargo text,
correo_institucional text not null,
curp  varchar (18) not null,
codigo_postal varchar (5) not null,
telefono varchar (10) not null,
correo_personal text,
pass varchar (20) not null,
permisos varchar (3) not null default 003,
fecha_registro  datetime not null default current_timestamp
 ) engine=Innodb default charset=utf8;
 
alter table padmon
change column id_padmon id_padmon int (10) not null auto_increment,
add primary key (id_padmon);

INSERT INTO alumnos (grado,matricula,apellido_paterno,apellido_materno,nombre,curp,
correo_institucional,pass)
VALUES ('G1','2023248610','CALDERON','VALDEZ','DARINE VALENTINA', 'CAVD160214MDFLLRA7',
'darinecalderon20@benavente-colegio.edu.mx','Calderon2884:');

INSERT INTO alumnos (grado,matricula,apellido_paterno,apellido_materno,nombre,curp,
correo_institucional,pass)
VALUES ('G1','2023214214','CHAVEZ','SANCEN','ALISON', 'CASA160619MDFHNLA4',
'alisonchavez21@benavente-colegio.edu.mx','Chavez1494:');

INSERT INTO alumnos (grado,matricula,apellido_paterno,apellido_materno,nombre,curp,
correo_institucional,pass)
VALUES ('G1','2023298413','CONTRERAS','RAMIREZ','LUIS SANTIAGO', 'CORL161129HMCNMSA8',
'luiscontreras22@benavente-colegio.edu.mx','Contreras2507:');

INSERT INTO padmon (nomina, matricula,apellido_paterno,apellido_materno,nombre,
departamento,cargo,correo_institucional,curp,codigo_postal,telefono,correo_personal,pass)
VALUES ('1','2023271383','REYES','MILAN','LUIS ULISES','DIRECCION','AUXILIAR ADMINISTRATIVO',
'ulisesmilan20@benavente-colegio.edu.mx','REML961130HDFYLS01','07420','5575357042','rmilanlu.cue@gmail.com','Milan2015:');

INSERT INTO padmon (nomina, matricula,apellido_paterno,apellido_materno,nombre,
departamento,cargo,correo_institucional,curp,codigo_postal,telefono,correo_personal,pass)
VALUES ('2','2023274577','REYES','MILAN','LUIS ULISES','DIRECCION','AUXILIAR ADMINISTRATIVO',
'ulisesmilan20@benavente-colegio.edu.mx','REML961130HDFYLS01','07420','5575357042','rmilanlu.cue@gmail.com','Milan2015:');