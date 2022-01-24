/* Inserir consultoria*/
delimiter $$

	drop procedure if exists inserir_consultoria $$
	create procedure inserir_consultoria(
	in
	ld_id_tipo_consultoria int,
	ld_id_consultor int,
	ld_id_cliente int,
	ld_id_adm int,
	ld_data_venda date,
	ld_data_consultoria date,
	ld_valor_consultoria decimal (10,2),
	ld_observacao varchar (100)
)
	BEGIN
	insert into consultoria
	(id_tipo_consultoria, id_consultor, id_cliente, id_adm, data_venda, data_consultoria, valor_consultoria, observacao)
    values(ld_id_tipo_consultoria,ld_id_consultor,ld_id_cliente,ld_id_adm,ld_data_venda,ld_data_consultoria,ld_valor_consultoria,ld_observacao);
	end $$
        
delimiter ;

/* Buscar consultoria*/
delimiter $$

	drop procedure if exists buscar_consultoria $$
	create procedure buscar_consultoria(
	in 
	ld_id_consultoria varchar(666)
	)
	BEGIN
	if (ld_id_consultoria="") then
	select "Digite o id da consultoria";
	else
	select*from consultoria where id_consultoria=ld_id_consultoria;
	end if;
	end $$
        
delimiter ;

call buscar_consultoria ("1");

/* Alterar venda*/
delimiter $$

	drop procedure if exists alterar_consultoria $$
	create procedure alterar_consultoria(
	in
	ld_id_consultoria int,
	ld_id_tipo_consultoria int,
	ld_id_consultor int,
	ld_id_cliente int,
	ld_id_adm int,
	ld_data_venda date,
	ld_data_consultoria date,
	ld_valor_consultoria decimal (10,2),
	ld_observacao varchar (100)
)
	BEGIN
	if (ld_id_consultoria="") then
	select "Digite o ID da consultoria";
	else 
	update consultoria set id_tipo_consultoria=ld_id_tipo_consultoria, id_consultor=ld_id_consultor,  
    id_cliente=ld_id_cliente, id_adm=ld_id_adm, data_venda=ld_data_venda,
    data_consultoria=ld_data_consultoria, valor_consultoria=ld_valor_consultoria, observacao=ld_observacao where 
    id_consultoria=ld_id_consultoria;
	end if;
	end $$
    
delimiter ;

call alterar_consultoria (2,3,2,1,1,'2018-03-03','2018-03-03',100,"fgfdgdfg");
select * from consultoria;

/* Excluir software*/
delimiter $$
		drop procedure if exists excluir_consultoria $$
		create procedure excluir_consultoria(
		in 
		ld_id_consultoria int
	)
		BEGIN
		if (ld_id_consultoria="") then
		select "Digite o ID da consultoria";
		else 
		delete from consultoria where id_consultoria=ld_id_consultoria;
		end if;
		end $$
delimiter ;

/* Listar software*/
delimiter $$
		drop procedure if exists listar_consultoria $$
		create procedure listar_consultoria()
		BEGIN
		select*from consultoria;
		end $$
delimiter ;

