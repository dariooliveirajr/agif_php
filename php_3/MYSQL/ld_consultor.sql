/* Inserir consultor*/
delimiter $$

	drop procedure if exists inserir_consultor $$
	create procedure inserir_consultor(
	in
	ld_consultor varchar (777),
	ld_cpf varchar (14), 
    ld_rg varchar (12),
    ld_tel varchar (777),
	ld_email varchar (200),
    ld_cep varchar (9),
    ld_rua varchar (777),
    ld_numero varchar (777),
    ld_bairro varchar (777),
    ld_cidade varchar (777)
)
	BEGIN
	insert into consultor
	(consultor, cpf, rg, tel, email, cep, rua, numero, bairro, cidade)
    values(ld_consultor,ld_cpf,ld_rg,ld_tel,ld_email,ld_cep,ld_rua,ld_numero,ld_bairro,ld_cidade);
	end $$
        
delimiter ;

/* Buscar consultor*/
delimiter $$

	drop procedure if exists buscar_consultor $$
	create procedure buscar_consultor(
	in 
	ld_id_consultor varchar(666)
	)
	BEGIN
	if (ld_id_consultor="") then
	select "Digite o nome do consultor";
	else
	select*from consultor where id_consultor=ld_id_consultor;
	end if;
	end $$
        
delimiter ;

/*call buscar_consultor ("Lucas");

/* Alterar consultor*/
delimiter $$

	drop procedure if exists alterar_consultor $$
	create procedure alterar_consultor(
	in
	ld_id_consultor int,
	ld_consultor varchar (777),
	ld_cpf varchar (14), 
    ld_rg varchar (12),
    ld_tel varchar (777),
	ld_email varchar (200),
    ld_cep varchar (9),
    ld_rua varchar (777),
    ld_numero varchar (777),
    ld_bairro varchar (777),
    ld_cidade varchar (777)
)
	BEGIN
	if (ld_id_consultor="") then
	select "Digita o ID do consultor";
	else 
	update consultor set consultor=ld_consultor, cpf=ld_cpf, rg=ld_rg, tel=ld_tel, email=ld_email, cep=ld_cep, rua=ld_rua,
    numero=ld_numero, bairro=ld_bairro, cidade=ld_cidade where id_consultor=ld_id_consultor;
	end if;
	end $$
    
delimiter ;

/*call alterar_consultor (1, "Enri", "471.617.828-56", "53.984.865-4", "011973672801", "evilsdomains@gmail.com", "Al. Andorinha", "779", "Morada dos Pássaros", "06428-080", "Barueri", "São Paulo", "Brasil");
select * from consultor;

/* Excluir consultor*/
delimiter $$
		drop procedure if exists excluir_consultor $$
		create procedure excluir_consultor(
		in 
		ld_id_consultor int
	)
		BEGIN
		if (ld_id_consultor="") then
		select "Digite o ID do consultor";
		else 
		delete from consultor where id_consultor=ld_id_consultor;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_consultor $$
		create procedure listar_consultor()
		BEGIN
		select*from consultor;
		end $$
delimiter ;

