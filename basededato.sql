create database listado;
use listado;
create table ususario
(Dni char(8) not null primary key,
Nombre varchar(20) not null,
Apellido varchar(60) not null,
tipo_carro varchar(30) not null);

INSERT INTO ususario VALUES(46743045,'Julieta','Zamora Huamani','Yaris');
INSERT INTO ususario VALUES(78546925,'Juan','Zambrano Anampa','Lexus');
INSERT INTO ususario VALUES(49856237,'Carlos','Rivas Humanan','Audi');
INSERT INTO ususario VALUES(77945122,'Agusto','Vera Ramires','Mercedes-Benz');