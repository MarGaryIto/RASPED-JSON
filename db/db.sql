create database rasped;
use rasped;

create table registros(
  id_registro int(3) not null auto_increment primary key,
  hr_entrada time,
  hr_salida_comida time,
  hr_entrada_comida time,
  hr_salida time
  );
  
create table fechas(
  id_fecha int(2) not null auto_increment primary key,
  fecha date
  );
  
create table areas(
  id_area int(1) not null auto_increment primary key,
  area varchar(30)
  );
  
create table ladas(
  id_lada int(3) primary key
  );

create table turnos(
  id_turno int(1) not null auto_increment primary key,
  nombre_turno varchar(10)
  inicio_turno time,
  inicio_comida time,
  final_comida time,
  final_turno
  );
  
create table delegaciones(
  id_delegacion int(2) primary key,
  delegacion_nombre varchar(23)
  );
  
create table puestos(
  id_puesto int(1) primary key,
  fk_area int(1),
  nombre_puesto varchar(45),
  abrev_puesto varchar(8),
  foreign key fk_area references areas(id_area)
  );
   
create table telefonos(
  id_telefono int(2) not null auto_increment primary key,
  fk_lada int(3),
  telefono int(7),
  foreign key fk_lada references ladas(id_lada)
  );
  
create table cupos(
  id_cupo int(2) not null auto_increment primary key,
  fk_delegacion int(2),
  no_cupo int(4),
  foreign key fk_delegacion references delegaciones(id_delegacion)
  );
  
create table personal(
  id_personal not null auto_increment primary key,
  nombre_personal varchar(30),
  apellidos varchar(50),
  contrasena varchar(25),
  fk_cupo int(2), 
  fk_puesto int(1)
  fk_turno int(1)
  fk_telefono int(2)
  );
