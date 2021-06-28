
create database listado;
use listado;
create table usuario
(id int not null primary key auto_incremet,
    email varchar(25),
contraseña varchar(20) );

INSERT INTO usuario VALUES('1','201615146h@utea.edu.pe','123456');

select *from usurio