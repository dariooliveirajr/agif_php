/* Inserir software*/
delimiter $$

	drop procedure if exists inserir_software $$
	create procedure inserir_software(
	in
	ld_software varchar (777),
    ld_descricao varchar (999)
)
	BEGIN
	insert into software
	(software, descricao)
    values(ld_software, ld_descricao);
	end $$
        
delimiter ;

/* Buscar software*/
delimiter $$

	drop procedure if exists buscar_software $$
	create procedure buscar_software(
	in 
	ld_id_software varchar(666)
	)
	BEGIN
	if (ld_id_software="") then
	select "Digite o ID do software";
	else
	select*from software where id_software=ld_id_software;
	end if;
	end $$
        
delimiter ;

/*call buscar_software ("Lucas");

/* Alterar tipo_servico*/
delimiter $$

	drop procedure if exists alterar_software $$
	create procedure alterar_software(
	in
	ld_id_software int,
	ld_software varchar (777),
    ld_descricao varchar (999)
)
	BEGIN
	if (ld_id_software="") then
	select "Digita o ID do software";
	else 
	update software set software=ld_software, descricao=ld_descricao  where id_software=ld_id_software;
	end if;
	end $$
    
delimiter ;

/*call alterar_software (1, "Enri", "471.617.828-56", "53.984.865-4", "011973672801", "evilsdomains@gmail.com", "Al. Andorinha", "779", "Morada dos Pássaros", "06428-080", "Barueri", "São Paulo", "Brasil");
select * from software;

/* Excluir software*/
delimiter $$
		drop procedure if exists excluir_software $$
		create procedure excluir_software(
		in 
		ld_id_software int
	)
		BEGIN
		if (ld_id_software="") then
		select "Digite o ID do software";
		else 
		delete from software where id_software=ld_id_software;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_software $$
		create procedure listar_software()
		BEGIN
		select*from software;
		end $$
delimiter ;
