create database oficina;

use oficina;

create table endereco(

cep char(9) primary key,
rua VARCHAR(60)not null,
bairro VARCHAR(40)not null,
cidade VARCHAR(40)not null,
uf char(2)not null);


create table cliente(
cpf char(12)primary key,
nome VARCHAR(60)not null,
telefone VARCHAR(15)not NULL,
cep char(9)not null,
numerocasa integer not null,
complemento VARCHAR(30),
foreign key(cep)references endereco(cep);
(30)


create table funcionario(
matricula integer primary key,
nome VARCHAR(60)not null,
telefone VARCHAR(15)not null,
cpf char(12)not null,
qualificacao VARCHAR(30)not null,
experiencia VARCHAR(20)not null,
cep char(9)not null,
numerocasa integer not null,
complemento VARCHAR(30),
foreign key(cep)references endereco(cep));

create table veiculo
placa char(7)primary key,
marca varchar(20)not null,
modelo varchar(20)not null,
cor varchar(20)not null,
ano char(12)not null,
cpf char(12)not null,
foreign key(cpf)references cliente(cpf));
