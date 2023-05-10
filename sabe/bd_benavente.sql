-- se elimina si es que no esta la DB
drop schema if exists bd_benavente;
create schema if not exists bd_benavente default character set utf8 collate utf8_spanish_ci;

use  bd_benavente;

-- creamos la tabla


CREATE TABLE alumnos(
id_alumno int(10) not null,
imagen longblob,
matricula int(10) not null auto_increment,

apellido_paterno text not null,
apellido_materno  text not null,
nombre text not null,
estatus  text not null,
fecha_alta date,
fecha_baja date,
contraseña varchar (20) not null,

curp varchar (18) not null,
nss varchar (11) not null,
telefono_padre varchar (10) not null,
correo_personal text,
correo_institucional text not null,
codigo_postal varchar(5)not null,
permisos varchar (3) not null default 001,
fecha_registro  datetime not null default current_timestamp
 ) engine=Innodb default charset=utf8;


CREATE TABLE padmon(
id_padmon int(10) not null,
imagen longblob,
nomina int(8) not null,

apellido_paterno text not null,
apellido_materno  text not null,
nombre text not null,
estatus  text not null,
fecha_alta date,
fecha_baja date,
contraseña varchar (20) not null,

curp varchar (18) not null,
homoclave varchar (3) not null,
nss varchar (11) not null,
telefono varchar (10) not null,
correo_personal text,
correo_institucional text not null,
codigo_postal varchar(5)not null,
permisos varchar (3) not null default 003,
fecha_registro  datetime not null default current_timestamp
 ) engine=Innodb default charset=utf8;

alter table alumnos
change column id_alumno id_alumno int(10) not null auto_increment,
add primary key (id_alumno);

alter table padmon
change column id_padmon id_padmon int(10) not null auto_increment,
add primary key (id_padmon);

INSERT INTO padmon (nomina,apellido_paterno,apellido_materno,nombre,estatus,
contraseña,curp,homoclave,nss,telefono,correo_personal,correo_institucional,codigo_postal)
VALUES ('0001','REYES','MILAN','LUIS ULISES', 'ACTIVO','2013-11-05','C525525','2025-01-13',
'PEQM710426HDFDRR05','PC0','05147102346','5550080107','07420');



/* UPDATE padmon set codigo_postal = '55540' where id_padmon = 2 */