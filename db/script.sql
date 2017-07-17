/*acceso a la base de datos*/

/*

mysql -h bmsyhziszmhf61g1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com -u 	jiwornjvhyvd1y91 -p 
w8o8wmj01z4hw4pz
use wkwxn90mtdsft056

*/


/**primer nivel**/

create table sedes(
id_sede int(2) not null primary key,
nombre_sede varchar(30)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

create table ladas(
id_lada int(3) not null primary key,
lugar varchar(30)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

create table areas(
id_area int(1) not null auto_increment primary key,
nombre_area varchar(20)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

create table fechas(
id_fecha int(2) not null auto_increment primary key,
fecha date
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

create table usuarios(
id_usuario int(1) not null auto_increment primary key,
usuario varchar(5)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

/**segundo nivel**/

create table cupos(
id_cupo int(2) not null auto_increment primary key,
fk_sede int(2),
cupo int(4),
foreign key (fk_sede) references sedes(id_sede)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

create table telefonos(
id_telefono int(2) not null auto_increment primary key,
fk_lada int(3),
telefono int(7),
foreign key (fk_lada) references ladas(id_lada)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

create table horarios(
id_horario int(1) not null auto_increment primary key,
hr_nombre varchar(20),
hr_entrada time,
hr_comida_i time,
hr_comida_f time,
hr_salida time,
tolerancia time
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

create table puestos(
id_puesto int(2) not null auto_increment primary key,
nombre_puesto varchar(50),
fk_area int(1),
foreign key(fk_area) references areas(id_area)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

/**tercer nivel**/

create table personal(
id_personal int(2) not null auto_increment primary key,
fk_cupo int(2),
nombre_personal varchar(20),
apellido_m varchar(15),
apellido_p varchar(15),
fk_telefono int(2),
contrasena varchar(32),
fk_horario int(1),
fk_puesto int(2),
fk_usuario int(1),
foreign key (fk_cupo) references cupos(id_cupo),
foreign key (fk_telefono) references telefonos(id_telefono),
foreign key (fk_horario) references horarios(id_horario),
foreign key (fk_puesto) references puestos(id_puesto),
foreign key (fk_usuario) references usuarios(id_usuario)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

/**cuarto nivel**/

create table asistencias(
id_asistencias int(3) not null auto_increment primary key,
fk_personal int(2),
fk_fecha int(2),
hr_entrada time,
hr_comida_i time,
hr_comida_f time,
hr_salida time,
foreign key (fk_personal) references personal(id_personal),
foreign key (fk_fecha) references fechas(id_fecha)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

create table retardos(
id_retardos int(3) not null auto_increment primary key,
fk_personal int(2),
fk_fecha int(2),
hr_entrada time,
hr_comida_i time,
hr_comida_f time,
hr_salida time,
foreign key (fk_personal) references personal(id_personal),
foreign key (fk_fecha) references fechas(id_fecha)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;

create table faltas(
id_falta int(2) not null auto_increment primary key,
fk_personal int(2),
fk_fecha int(2),
foreign key (fk_personal) references personal(id_personal),
foreign key (fk_fecha) references fechas(id_fecha)
)ENGINE = InnoDB DEFAULT CHARSET = utf8;


/***Inserccion de datos***/

insert into sedes
	values(13,"tulancingo"),(15,"pachuca");
insert into ladas
	values(775,"tulancingo"),(771,"pachuca");
insert into areas(nombre_area)
	values("responsable de area"),("atencion y enlace"),("captura");
insert into cupos(fk_sede,cupo)
	values(12,1254),(12,2001),(12,1882);
insert into telefonos(fk_lada,telefono)
	values(775,1133013),(775,1553264),(771,1012983);
insert into horarios(hr_nombre,hr_entrada,hr_comida_i,hr_comida_f,hr_salida,tolerancia)
	values('matutino','09:00:00','15:00:00','16:30:00','18:00:00','00:05:00');
insert into cupos(fk_sede,cupo)
	values(13,1254),(13,1362),(13,2047);
insert into puestos(nombre_puesto,fk_area)
	values('jefe uar',1),('enlace y fortalecimiento comunitario',2),('capturista',3);
insert into usuarios(usuario)
	values('root'),('admin'),('regis'),('user');
insert into
personal(fk_cupo,nombre_personal,apellido_m,apellido_p,
	fk_telefono,contrasena,fk_horario,fk_puesto,fk_usuario)
values
(4,'ricardo','cazares','barrios',1,'ad7a5ca44f37892d599891e5ef0272fb',1,1,2),/*gatito*/
(5,'celso','martinez','parra',2,'7e8fa98a4cc193d585682a81f9f8b0c9',1,2,4),/*perrito*/
(6,'Jorge Alejandro','Huerta','Cortez',3,'e074a2d05dd7bbf6fc0f469169307efe',1,3,3);/*conejito*/

/*****Consultas*****/

/*todos el personal y sus registros*/
SELECT PER.id_personal,
CUP.fk_sede as sede,
CUP.cupo as cupo,
PER.nombre_personal,
PER.apellido_p,
PER.apellido_m,
TEL.fk_lada as lada,
TEL.telefono,
PER.contrasena,
HOR.hr_nombre as horario,
PUE.nombre_puesto as puesto,
USU.usuario
FROM personal PER, telefonos TEL, cupos CUP, horarios HOR, puestos PUE,usuarios USU
WHERE PER.fk_cupo = CUP.id_cupo and
PER.fk_telefono = TEL.id_telefono and
PER.fk_horario = HOR.id_horario and
PER.fk_puesto = PUE.id_puesto and
PER.fk_usuario = USU.id_usuario;

/*todos los puestos*/
SELECT
P.id_puesto, P.nombre_puesto,A.nombre_area
FROM
puestos P,areas A
WHERE
fk_area = id_area;

/*insertar usuario*/

insert ignore into sedes(id_sede) values ('@sede');

insert into cupos(fk_sede,cupo) values ('@sede','@cupo');

insert ignore into ladas(id_lada) values ('@lada');

insert into telefonos(fk_lada,telefono) values ('@lada','@telefono');

@fk_cupo =
SELECT id_cupo from cupos WHERE fk_sede = '@sede' and cupo = '@cupo';

@fk_telefono =
SELECT id_telefono from telefonos WHERE fk_lada='@lada' and telefono='@telefono';

insert into
personal(fk_cupo,nombre_personal,apellido_m,apellido_p,
	fk_telefono,contrasena,fk_horario,fk_puesto,fk_usuario)
values
('fk_cupo','nombre_personal','apellido_m','apellido_p',
´'fk_telefono','contrasena'´,'fk_horario','fk_puesto','fk_usuario')
