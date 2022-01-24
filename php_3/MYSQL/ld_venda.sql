/* Inserir venda*/
delimiter $$

	drop procedure if exists inserir_venda $$
	create procedure inserir_venda(
	in
	ld_id_adm int,
	ld_id_cliente int,
	ld_id_produto int,
	ld_data_venda date,
	ld_valor_produto decimal (7,2),
	ld_quantidade_produto varchar (999),
	ld_valor_total decimal (10,2)
)
	BEGIN
	insert into venda
	(id_adm, id_cliente, id_produto, data_venda, valor_produto, quantidade_produto, valor_total)
    values(ld_id_adm, ld_id_cliente, ld_id_produto, ld_data_venda, ld_valor_produto, ld_quantidade_produto, ld_valor_total);
	end $$
        
delimiter ;

/* Buscar venda*/
delimiter $$

	drop procedure if exists buscar_venda $$
	create procedure buscar_venda(
	in 
	ld_id_venda varchar(666)
	)
	BEGIN
	if (ld_id_venda="") then
	select "Digite o id da venda";
	else
	select*from venda where id_venda=ld_id_venda;
	end if;
	end $$
        
delimiter ;

/*call buscar_venda ("Lucas");

/* Alterar venda*/
delimiter $$

	drop procedure if exists alterar_venda $$
	create procedure alterar_venda(
	in
	ld_id_venda int,
	ld_id_adm int,
	ld_id_cliente int,
	ld_id_produto int,
	ld_data_venda date,
	ld_valor_produto decimal (7,2),
	ld_quantidade_produto varchar (999),
	ld_valor_total decimal (10,2)
)
	BEGIN
	if (ld_id_venda="") then
	select "Digite o ID do venda";
	else 
	update venda set id_adm=ld_id_adm, id_cliente=ld_id_cliente, id_produto=ld_id_produto, data_venda=ld_data_venda,
    valor_produto=ld_valor_produto, data_venda=ld_data_venda, valor_produto=ld_valor_produto, quantidade_produto=ld_quantidade_produto, 
    valor_total=ld_valor_total where 
    id_venda=ld_id_venda;
	end if;
	end $$
    
delimiter ;

/*call alterar_venda (1, "Enri", "471.617.828-56", "53.984.865-4", "011973672801", "evilsdomains@gmail.com", "Al. Andorinha", "779", "Morada dos Pássaros", "06428-080", "Barueri", "São Paulo", "Brasil");
select * from venda;

/* Excluir software*/
delimiter $$
		drop procedure if exists excluir_venda $$
		create procedure excluir_venda(
		in 
		ld_id_venda int
	)
		BEGIN
		if (ld_id_venda="") then
		select "Digite o ID da venda";
		else 
		delete from venda where id_venda=ld_id_venda;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_venda $$
		create procedure listar_venda()
		BEGIN
		select*from venda;
		end $$
delimiter ;