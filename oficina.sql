drop database if exists oficina;

create database oficina character set utf8 collate utf8_general_ci;

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
foreign key(cep)references endereco(cep));



create table funcionario(
matricula integer primary key auto_increment,
nome VARCHAR(60)not null,
telefone VARCHAR(15)not null,
cpf char(12)not null,
qualificacao VARCHAR(30)not null,
experiencia VARCHAR(20)not null,
cep char(9)not null,
numerocasa integer not null,
complemento VARCHAR(30),
foreign key(cep)references endereco(cep));

create table veiculo(
placa char(7)primary key,
marca varchar(20)not null,
modelo varchar(20)not null,
cor varchar(20)not null,
ano char(12)not null,
cpf char(12)not null,
foreign key(cpf)references cliente(cpf));

create table servico(
ordemservico integer primary KEY auto_increment,
defeito varchar(100)not null,
dataentrada date not null,
datasaida date not null,
preco double not null,
garantia varchar(50)not null,
formapagamento varchar(20)not null,
placa char(7)not null,
foreign key(placa)references veiculo(placa));

create table peca(
codigopeca integer primary key auto_increment,
modeloano varchar(250)not null,
nome varchar(50)not null,
anocarro VARCHAR(4)not null,
quantidade integer not null,
marca varchar (30) not null);

create table servicopeca(
idservicopeca integer primary key auto_increment,
ordemservico integer not null,
quantidade integer not null, 
codigopeca INTEGER not null,
FOREIGN key(codigopeca)references peca(codigopeca),
FOREIGN key(ordemservico)references servico(ordemservico));


create table servicofunc(
idservicofunc integer primary key auto_increment,
ordemservico integer not null,
descricao varchar(100)not null,
matricula integer not null,
FOREIGN key(ordemservico)references servico(ordemservico),
FOREIGN key(matricula)references funcionario(matricula));

insert into endereco(cep,rua,bairro,cidade,uf)VALUES
('23085-610','rua padre pauwels','campo grande','rio de janeiro','rj')
('26551-090','travessa elpidio','cruzeiro do sul','mesquita','rj');

insert into cliente(cpf,nome,telefone,cep,numerocasa,complemento)VALUES
('123456789-10','jariele','(21)99886-4587','23085-610',100,'apartamento 10');

insert into funcionario(nome,telefone,cpf,qualificacao,experiencia,cep,numerocasa,complemento)VALUES
('maria jariele','(21)99886-4587','018058653-07',' eletricista','4 anos','23085-610','34','casa');