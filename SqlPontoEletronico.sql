create database pontoEletronico;

use pontoEletronico;

create table empresa(
	idEmpresa int not null auto_increment primary key,
    nomeFantasia varchar(80),
    razaoSocial varchar(100),
    cnpj varchar(19),
    ramoAtividade varchar(100),
    telefone varchar(13),
    donoEmpresa varchar(100)
);

create table usuario(
	idUser int not null auto_increment primary key,
    nomeUser varchar(),
    senha varchar(),
    tipo boolean,
    empresaId integer references empresa(idEmpresa)
);

create table funcionario(
	idFunc int not null auto_increment primary key,
    nomeFunc varchar(100),
    cpf varchar(14),
    rg varchar(12),
    dataNascimento date,
    email varchar(100),
    telefone varchar(13),
    cargo varchar(50),
    setor(50),
    situacao boolean,
    empresaId integer references empresa(idEmpresa),
    userId integer references usuario(idUser)
);


create table feriados(
	idFeriados int not null auto_increment,
    descricao varchar(100),
    dataFeriado date
);

create table RegistroHoras(
	idRegistro int not null auto_increment,
    dataReg date,
    horaReg time,
    tipoReg boolean,
    qtdHoras int,
    horaExtra int,
    funcId integer references funcionario(idFunc)
);

create table AbonoHoras(
	idAbono int not null auto_increment,
    justificativa varchar(150),
    hrsAbonadas int, 
    funcId integer references funcionario(idFunc)
);