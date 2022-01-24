/* Inserir adm*/
delimiter $$

	drop procedure if exists inserir_adm $$
	create procedure inserir_adm(
	in
	ld_adm varchar (777),
	ld_cpf varchar (14), 
    ld_rg varchar (12),
    ld_tel varchar (777),
	ld_email varchar (777),
    ld_senha varchar (999),
    ld_cep varchar (9),
    ld_rua varchar (777),
    ld_numero varchar (777),
    ld_bairro varchar (777),
    ld_cidade varchar (777)
)
	BEGIN
	insert into adm
	(adm, cpf, rg, tel, email,senha, cep, rua, numero, bairro, cidade)
    values(ld_adm,ld_cpf,ld_rg,ld_tel,ld_email,ld_senha,ld_cep,ld_rua,ld_numero,ld_bairro,ld_cidade);
	end $$
        
delimiter ;

/* Buscar adm*/
delimiter $$

	drop procedure if exists buscar_adm $$
	create procedure buscar_adm(
	in 
	ld_id_adm varchar(666)
	)
	BEGIN
	if (ld_id_adm="") then
	select "Digite o ID do adm";
	else
	select*from adm where id_adm=ld_id_adm;
	end if;
	end $$
        
delimiter ;

/*call buscar_adm ("Lucas");

/* Alterar adm*/
delimiter $$

	drop procedure if exists alterar_adm $$
	create procedure alterar_adm(
	in
	ld_id_adm int,
	ld_adm varchar (777),
	ld_cpf varchar (14), 
    ld_rg varchar (12),
    ld_tel varchar (777),
	ld_email varchar (777),
    ld_senha varchar (999),
    ld_cep varchar (9),
    ld_rua varchar (777),
    ld_numero varchar (777),
    ld_bairro varchar (777),
    ld_cidade varchar (777)
)
	BEGIN
	if (ld_id_adm="") then
	select "Digita o ID do adm";
	else 
	update adm set adm=ld_adm, cpf=ld_cpf, rg=ld_rg, tel=ld_tel, email=ld_email, senha=ld_senha, cep=ld_cep, rua=ld_rua,
    numero=ld_numero, bairro=ld_bairro, cidade=ld_cidade where id_adm=ld_id_adm;
	end if;
	end $$
    
delimiter ;

/*call alterar_adm (1, "Enri", "471.617.828-56", "53.984.865-4", "011973672801", "evilsdomains@gmail.com", "Al. Andorinha", "779", "Morada dos Pássaros", "06428-080", "Barueri", "São Paulo", "Brasil");
select * from adm;

/* Excluir consultor*/
delimiter $$
		drop procedure if exists excluir_adm $$
		create procedure excluir_adm(
		in 
		ld_id_adm int
	)
		BEGIN
		if (ld_id_adm="") then
		select "Digite o ID do adm";
		else 
		delete from adm where id_adm=ld_id_adm;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_adm $$
		create procedure listar_adm()
		BEGIN
		select*from adm;
		end $$
delimiter ;