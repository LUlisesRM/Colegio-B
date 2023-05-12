-- se elimina si es que no esta la DB
drop schema if exists bd_benavente;
create schema if not exists bd_benavente default character set utf8 collate utf8_spanish_ci;

use  bd_benavente;

-- creamos la tabla

CREATE TABLE tutores(
id_tutor int(10) primary key auto_increment not null,
imagen longblob,

apellido_paterno text not null,
apellido_materno  text not null,
nombre text not null,

curp varchar (18) not null,
telefono varchar (10) not null,
correo_personal text,
codigo_postal varchar(5)not null
)engine=Innodb default charset=utf8;

CREATE TABLE alumnos(
id_alumno int(10) primary key not null auto_increment,
imagen longblob,
matricula int not null,
clave_tutor int,

apellido_paterno text not null,
apellido_materno  text not null,
nombre text not null,
estatus text not null,
fecha_alta date,
fecha_baja date,
correo_institucional text not null,
contraseña text not null,

curp varchar (18) not null,
nss varchar (11) not null,
permisos varchar (3) not null default 001,
fecha_registro  datetime not null default current_timestamp,
foreign key (clave_tutor) references tutores(id_tutor)
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

alter table padmon
change column id_padmon id_padmon int(10) not null auto_increment,
add primary key (id_padmon);

INSERT INTO padmon (nomina,apellido_paterno,apellido_materno,nombre,estatus,
contraseña,curp,homoclave,nss,telefono,correo_personal,correo_institucional,codigo_postal)
VALUES ('0001','REYES','MILAN','LUIS ULISES', 'ACTIVO','Milan2015:','REML00000000000000','111',
'10000000000','5500000000','lurm.m@','ulisesmilan20@benavente-colegio.edu.mx','07420');



/* UPDATE padmon set codigo_postal = '55540' where id_padmon = 2 */