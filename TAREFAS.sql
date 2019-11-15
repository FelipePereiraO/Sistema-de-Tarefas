create database sistema;
use sistema;
create table tarefas(
cod int not null auto_increment,
titulo varchar(20) not null,
data date,
hora time,
descricao text not null,
primary key(cod)
);
create table realizadas(
cod int not null auto_increment,
titulo varchar(20) not null,
data date,
hora time,
descricao text not null,
primary key(cod)
);