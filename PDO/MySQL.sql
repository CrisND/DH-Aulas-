create database aulapdo; 

use aulapdo;

create table clientes (
	id int primary key auto_increment, 
    nome varchar(200) not null, 
    email varchar(200) not null, 
    telefone varchar(50) not null 
); 

select * from clientes; 

create table login (
	id int primary key auto_increment, 
    email varchar(100) not null, 
    senha varchar(220) not null
); 

SELECT * FROM login; 

