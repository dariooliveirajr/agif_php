/* Inserir tipo_consultoria*/
delimiter $$

	drop procedure if exists inserir_tipo_consultoria $$
	create procedure inserir_tipo_consultoria(
	in
	ld_tipo_consultoria varchar (777),
    ld_descricao varchar (999)
)
	BEGIN
	insert into tipo_consultoria
	(tipo_consultoria,descricao)
    values(ld_tipo_consultoria,ld_descricao);
	end $$
        
delimiter ;

/* Buscar tipo_consultoria*/
delimiter $$

	drop procedure if exists buscar_tipo_consultoria $$
	create procedure buscar_tipo_consultoria(
	in 
	ld_id_tipo_consultoria varchar(666)
	)
	BEGIN
	if (ld_id_tipo_consultoria="") then
	select "Digite o ID do tipo consultoria";
	else
	select*from tipo_consultoria where id_tipo_consultoria=ld_id_tipo_consultoria;
	end if;
	end $$
        
delimiter ;

call buscar_tipo_consultoria ("1");

/* Alterar tipo consultoria*/
delimiter $$

	drop procedure if exists alterar_tipo_consultoria $$
	create procedure alterar_tipo_consultoria(
	in
	ld_id_tipo_consultoria int,
	ld_tipo_consultoria varchar (777),
    ld_descricao varchar (999)
)
	BEGIN
	if (ld_id_tipo_consultoria="") then
	select "Digita o ID do tipo_consultoria";
	else 
	update tipo_consultoria set tipo_consultoria=ld_tipo_consultoria, descricao=ld_descricao  where 
    id_tipo_consultoria=ld_id_tipo_consultoria;
	end if;
	end $$
    
delimiter ;

/*call alterar_tipo_consultoria (1, "Enri", "471.617.828-56", "53.984.865-4", "011973672801", "evilsdomains@gmail.com", "Al. Andorinha", "779", "Morada dos Pássaros", "06428-080", "Barueri", "São Paulo", "Brasil");
select * from tipo_consultoria;

/* Excluir software*/
delimiter $$
		drop procedure if exists excluir_tipo_consultoria $$
		create procedure excluir_tipo_consultoria(
		in 
		ld_id_tipo_consultoria int
	)
		BEGIN
		if (ld_id_tipo_consultoria="") then
		select "Digite o ID do tipo consultoria";
		else 
		delete from tipo_consultoria where id_tipo_consultoria=ld_id_tipo_consultoria;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_tipo_consultoria $$
		create procedure listar_tipo_consultoria()
		BEGIN
		select*from tipo_consultoria;
		end $$
delimiter ;