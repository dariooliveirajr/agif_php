/* Inserir Funcionario*/
delimiter $$

	drop procedure if exists inserir_funcionario $$
	create procedure inserir_funcionario(
	in
	ld_funcionario varchar (777),
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
	insert into funcionario
	(funcionario, cpf, rg, tel, email, cep, rua, numero, bairro, cidade)
	values(ld_funcionario, ld_cpf, ld_rg, ld_tel, ld_email, ld_cep, ld_rua, ld_numero, ld_bairro, ld_cidade);
	
	end $$
        
delimiter ;

/* Buscar funcionario*/
delimiter $$

	drop procedure if exists buscar_funcionario $$
	create procedure buscar_funcionario(
	in 
	ld_id_funcionario varchar(666)
	)
	BEGIN
	if (ld_id_funcionario="") then
	select "Digite o id do funcionario";
	else
	select*from funcionario where id_funcionario=ld_id_funcionario;
	end if;
	end $$
        
delimiter ;

/*call buscar_funcionario ("Lucas");

/* Alterar Cliente*/
delimiter $$

	drop procedure if exists alterar_funcionario $$
	create procedure alterar_funcionario(
	in
	ld_id_funcionario int,
	ld_funcionario varchar (777),
	ld_cpf varchar (15), 
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
	if (ld_id_funcionario="") then
	select "Digita o ID do funcionario";
	else 
	update funcionario set funcionario=ld_funcionario, cpf=ld_cpf, rg=ld_rg, tel=ld_tel, email=ld_email, cep=ld_cep, rua=ld_rua, numero=ld_numero, bairro=ld_bairro, cidade=ld_cidade 
	where id_funcionario=ld_id_funcionario;
	end if;
	end $$
    
delimiter ;

/*call alterar_funcionario (1, "Enri", "471.617.828-56", "53.984.865-4", "011973672801", "evilsdomains@gmail.com", "Al. Andorinha", "779", "Morada dos Pássaros", "06428-080", "Barueri", "São Paulo", "Brasil");
select * from funcionario;

/* Excluir Admin*/
delimiter $$
		drop procedure if exists excluir_funcionario $$
		create procedure excluir_funcionario(
		in 
		ld_id_funcionario int
	)
		BEGIN
		if (ld_id_funcionario="") then
		select "Digite o ID do funcionario";
		else 
		delete from funcionario where id_funcionario=ld_id_funcionario;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_funcionario $$
		create procedure listar_funcionario()
		BEGIN
		select*from funcionario;
		end $$
delimiter ;
