
/* Inserir Cliente*/
delimiter $$

	drop procedure if exists inserir_cliente $$
	create procedure inserir_cliente(
	in
	ld_cliente varchar (777),
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
	insert into cliente
	(cliente, cpf, rg, tel, email, cep, rua, numero, bairro, cidade)
    values(ld_cliente,ld_cpf,ld_rg,ld_tel,ld_email,ld_cep,ld_rua,ld_numero,ld_bairro,ld_cidade);
	end $$
        
delimiter ;

select*from cliente;

/* Buscar Cliente*/
delimiter $$

	drop procedure if exists buscar_cliente $$
	create procedure buscar_cliente(
	in 
	ld_id_cliente varchar(999)
	)
	BEGIN
	if (ld_id_cliente="") then
	select "Digite o id do Cliente";
	else
	select*from cliente where id_cliente=ld_id_cliente;
	end if;
	end $$
        
delimiter ;

call buscar_cliente(16);
select*from cliente;
/* Alterar Cliente*/
delimiter $$

	drop procedure if exists alterar_cliente $$
	create procedure alterar_cliente(
	in
	ld_id_cliente int,
	ld_cliente varchar (777),
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
	if (ld_id_cliente="") then
	select "Digita o ID do cliente";
	else 
	update cliente set cliente=ld_cliente, cpf=ld_cpf, rg=ld_rg, tel=ld_tel, email=ld_email,
    cep=ld_cep, rua=ld_rua, numero=ld_numero, bairro=ld_bairro, cidade=ld_cidade where id_cliente=ld_id_cliente;
	end if;
	end $$
    
delimiter ;

call alterar_cliente ('1','5','5','5','4','4','4','4','4','4','4');
select * from cliente;

/* Excluir Admin*/
delimiter $$
		drop procedure if exists excluir_cliente $$
		create procedure excluir_cliente(
		in 
		ld_id_cliente int
	)
		BEGIN
		if (ld_id_cliente="") then
		select "Digite o ID do Cliente";
		else 
		delete from cliente where id_cliente=ld_id_cliente;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_cliente $$
		create procedure listar_cliente()
		BEGIN
		select*from cliente;
		end $$
delimiter ;
