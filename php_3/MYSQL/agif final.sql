create database agif;
use agif;
create table cliente
(
	id_cliente int not null Primary key auto_increment,
	cliente varchar (777),
	cpf varchar (14), 
    rg varchar (12),
    tel varchar (777),
    email varchar (200)unique,
    cep varchar (9),
    rua varchar (777),
    numero varchar (777),
    bairro varchar (777),
    cidade varchar (777)
);
select * from cliente;





create table funcionario
(
	id_funcionario int not null Primary key auto_increment,
	funcionario varchar (777),
	cpf varchar (15), 
    rg varchar (12),
    tel varchar (777),
	email varchar (200)unique,
    cep varchar (9),
    rua varchar (777),
    numero varchar (777),
    bairro varchar (777),
    cidade varchar (777)
);
select * from funcionario;


create table consultor
(
	id_consultor int not null Primary key auto_increment,
	consultor varchar (777),
	cpf varchar (14), 
    rg varchar (12),
    tel varchar (777),
	email varchar (200)unique,
    cep varchar (9),
    rua varchar (777),
    numero varchar (777),
    bairro varchar (777),
    cidade varchar (777)
);
select*from consultor;


create table adm
(
	id_adm int not null Primary key auto_increment,
	adm varchar (777),
	cpf varchar (14), 
    rg varchar (12),
    tel varchar (777),
	email varchar (200)unique,
    senha varchar (999),
    cep varchar (9),
    rua varchar (777),
    numero varchar (777),
    bairro varchar (777),
    cidade varchar (777)
);
select*from adm;
insert into adm (adm, cpf, rg, tel, email, senha, cep, rua, numero, bairro, cidade) values ("Créria","","","","creria",md5("123"),"","","","","");


create table tipo_servico
(
	id_tipo_servico int not null Primary key auto_increment,
	tipo_servico varchar (777),
	descricao varchar (999)
);
select*from tipo_servico;

create table software
(
	id_software int not null Primary key auto_increment,
	software varchar (777),
    descricao varchar (999)
);
select*from software;


create table tipo_consultoria
(
	id_tipo_consultoria int not null Primary key auto_increment,
	tipo_consultoria varchar (777),
    descricao varchar (999)
);
select*from tipo_consultoria;

create table produto
(
	id_produto int not null Primary key auto_increment,
	produto varchar (777),
    valor decimal (7,2),
    descricao varchar (999)
);
select*from produto;


create table venda
(
	id_venda int not null Primary key auto_increment,
	id_adm int,
	id_cliente int,
	id_produto int,
	data_venda date,
	valor_produto decimal (7,2),
	quantidade_produto varchar (999),
	valor_total decimal (10,2),
	foreign key (id_adm) references adm (id_adm),
	foreign key (id_cliente) references cliente (id_cliente),
	foreign key (id_produto) references produto (id_produto)
);


create table implantacao_software
(
id_implantacao_software int not null Primary key auto_increment,
id_adm int,
id_funcionario int,
id_cliente int,
id_software int,
data_venda date,
data_implatacao date,
valor_implatacao decimal (10,2),
observacao varchar (777),
foreign key (id_adm) references adm (id_adm),
foreign key (id_cliente) references cliente (id_cliente),
foreign key (id_funcionario) references funcionario (id_funcionario),
foreign key (id_software) references software (id_software)
);

create table consultoria
(
id_consultoria int not null Primary key auto_increment,
id_tipo_consultoria int,
id_consultor int,
id_cliente int,
id_adm int,
data_venda date,
data_consultoria date,
valor_consultoria decimal (10,2),
observacao varchar (100),
foreign key (id_adm) references adm (id_adm),
foreign key (id_cliente) references cliente (id_cliente),
foreign key (id_consultor) references consultor (id_consultor),
foreign key (id_tipo_consultoria) references tipo_consultoria (id_tipo_consultoria)
);


create table servico
(
id_servico int not null Primary key auto_increment,
id_adm int,
id_cliente int,
id_tipo_servico int,
data_implatacao date,
data_venda date,
valor decimal (10,2),
forma_pagamento varchar (777),
cep varchar (9),
rua varchar (777),
numero varchar (777),
bairro varchar (777),
cidade varchar (777),
observacao varchar (777),
foreign key (id_adm) references adm (id_adm),
foreign key (id_cliente) references cliente (id_cliente),
foreign key (id_tipo_servico) references tipo_servico (id_tipo_servico)
);

/* Tabela de isca pra Trigger*/
create table cont_venda
(
id_n_vendas int not null Primary key auto_increment,
n_vendas int not null default 0
);
select*from cont_venda;
insert into cont_venda (n_vendas) values (1);

/* TRIGGER Aumenta numero total de vendas*/
DELIMITER $$

drop trigger if exists cont_vendas_m $$
create trigger cont_vendas_m  AFTER INSERT ON venda for each row
BEGIN
update cont_venda set n_vendas = n_vendas + 1 where id_n_vendas=1;
END$$

DELIMITER ;
select * from cont_venda;

/* TRIGGER Diminui numero total de vendas*/
DELIMITER $$

drop trigger if exists cont_vendas_d $$
create trigger cont_vendas_d  AFTER delete ON venda for each row
BEGIN
update cont_venda set n_vendas = n_vendas - 1 where id_n_vendas=1;
END$$

DELIMITER ;
