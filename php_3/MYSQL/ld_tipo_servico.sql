/* Inserir tipo_servico*/
delimiter $$

	drop procedure if exists inserir_tipo_servico $$
	create procedure inserir_tipo_servico(
	in
	ld_tipo_servico varchar (777),
	ld_descricao varchar (999)
)
	BEGIN
	insert into tipo_servico
	(tipo_servico,descricao)
    values(ld_tipo_servico,ld_descricao);
	end $$
        
delimiter ;

/* Buscar tipo_servico*/
delimiter $$

	drop procedure if exists buscar_tipo_servico $$
	create procedure buscar_tipo_servico(
	in 
	ld_id_tipo_servico varchar(666)
	)
	BEGIN
	if (ld_id_tipo_servico="") then
	select "Digite o ID do tipo servico";
	else
	select*from tipo_servico where id_tipo_servico=ld_id_tipo_servico;
	end if;
	end $$
        
delimiter ;

/*call buscar_tipo_servico ("Lucas");

/* Alterar tipo_servico*/
delimiter $$

	drop procedure if exists alterar_tipo_servico $$
	create procedure alterar_tipo_servico(
	in
	ld_id_tipo_servico int,
	ld_tipo_servico varchar (777),
	ld_descricao varchar (999)
)
	BEGIN
	if (ld_id_tipo_servico="") then
	select "Digita o ID do tipo servico";
	else 
	update tipo_servico set tipo_servico=ld_tipo_servico, descricao=ld_descricao where id_tipo_servico=ld_id_tipo_servico;
	end if;
	end $$
    
delimiter ;

/*call alterar_tipo_servico (1, "Enri", "471.617.828-56", "53.984.865-4", "011973672801", "evilsdomains@gmail.com", "Al. Andorinha", "779", "Morada dos Pássaros", "06428-080", "Barueri", "São Paulo", "Brasil");
select * from tipo_servico;

/* Excluir tipo_servico*/
delimiter $$
		drop procedure if exists excluir_tipo_servico $$
		create procedure excluir_tipo_servico(
		in 
		ld_id_tipo_servico int
	)
		BEGIN
		if (ld_id_tipo_servico="") then
		select "Digite o ID do tipo servico";
		else 
		delete from tipo_servico where id_tipo_servico=ld_id_tipo_servico;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_tipo_servico $$
		create procedure listar_tipo_servico()
		BEGIN
		select*from tipo_servico;
		end $$
delimiter ;


