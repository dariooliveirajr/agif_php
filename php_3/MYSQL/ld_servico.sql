/* Inserir servico*/
delimiter $$

	drop procedure if exists inserir_servico $$
	create procedure inserir_servico(
	in
	ld_id_adm int,
	ld_id_cliente int,
	ld_id_tipo_servico int,
	ld_data_implatacao date,
	ld_data_venda date,
	ld_valor decimal (10,2),
	ld_forma_pagamento varchar (777),
	ld_cep varchar (9),
	ld_rua varchar (777),
	ld_numero varchar (777),
	ld_bairro varchar (777),
	ld_cidade varchar (777),
	ld_observacao varchar (777)
)
	BEGIN
	insert into servico
	(id_adm ,id_cliente ,id_tipo_servico ,data_implatacao ,data_venda,valor,forma_pagamento ,cep ,rua ,numero,bairro,cidade,observacao)
    values(ld_id_adm ,ld_id_cliente ,ld_id_tipo_servico ,ld_data_implatacao ,ld_data_venda,ld_valor ,ld_forma_pagamento ,ld_cep ,ld_rua ,ld_numero,ld_bairro,ld_cidade,ld_observacao);
	end $$
        
delimiter ;

/* Buscar servico*/
delimiter $$

	drop procedure if exists buscar_servico $$
	create procedure buscar_servico(
	in 
	ld_id_servico varchar(666)
	)
	BEGIN
	if (ld_id_servico="") then
	select "Digite o id da servico";
	else
	select*from servico where id_servico=ld_id_servico;
	end if;
	end $$
        
delimiter ;

/*call buscar_servico ("Lucas");

/* Alterar servico*/
delimiter $$

	drop procedure if exists alterar_servico $$
	create procedure alterar_servico(
	in
	ld_id_servico int,
	ld_id_adm int,
	ld_id_cliente int,
	ld_id_tipo_servico int,
	ld_data_implatacao date,
	ld_data_venda date,
	ld_valor decimal (10,2),
	ld_forma_pagamento varchar (777),
	ld_cep varchar (9),
	ld_rua varchar (777),
	ld_numero varchar (777),
	ld_bairro varchar (777),
	ld_cidade varchar (777),
	ld_observacao varchar (777)
)
	BEGIN
	if (ld_id_servico="") then
	select "Digite o ID do servico";
	else 
	update servico set id_adm=ld_id_adm, id_cliente=ld_id_cliente,
    id_tipo_servico=ld_id_tipo_servico, data_implatacao=ld_data_implatacao,
    data_venda=ld_data_venda, valor=ld_valor, forma_pagamento=ld_forma_pagamento, cep=ld_cep, rua=ld_rua, numero=ld_numero,
    bairro=ld_bairro, cidade=ld_cidade, observacao=ld_observacao where 
    id_servico=ld_id_servico;
	end if;
	end $$
    
delimiter ;

/*call alterar_servico (1, "Enri", "471.617.828-56", "53.984.865-4", "011973672801", "evilsdomains@gmail.com", "Al. Andorinha", "779", "Morada dos Pássaros", "06428-080", "Barueri", "São Paulo", "Brasil");
select * from servico;

/* Excluir servico*/
delimiter $$
		drop procedure if exists excluir_servico $$
		create procedure excluir_servico(
		in 
		ld_id_servico int
	)
		BEGIN
		if (ld_id_servico="") then
		select "Digite o ID da servico";
		else 
		delete from servico where id_servico=ld_id_servico;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_servico $$
		create procedure listar_servico()
		BEGIN
		select*from servico;
		end $$
delimiter ;