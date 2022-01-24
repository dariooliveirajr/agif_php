/* Inserir produto*/
delimiter $$

	drop procedure if exists inserir_produto $$
	create procedure inserir_produto(
	in
	ld_produto varchar (777),
    ld_valor decimal (7,2),
    ld_descricao varchar (999)
)
	BEGIN
	insert into produto
	(produto, valor, descricao)
    values(ld_produto, ld_valor, ld_descricao);
	end $$
        
delimiter ;

/* Buscar produto*/
delimiter $$

	drop procedure if exists buscar_produto $$
	create procedure buscar_produto(
	in 
	ld_id_produto varchar(666)
	)
	BEGIN
	if (ld_id_produto="") then
	select "Digite o ID do produto";
	else
	select*from produto where id_produto=ld_id_produto;
	end if;
	end $$
        
delimiter ;

/*call buscar_produto ("Lucas");

/* Alterar produto*/
delimiter $$

	drop procedure if exists alterar_produto $$
	create procedure alterar_produto(
	in
	ld_id_produto int,
	ld_produto varchar (777),
    ld_valor decimal (7,2),
    ld_descricao varchar (999)
)
	BEGIN
	if (ld_id_produto="") then
	select "Digita o ID do produto";
	else 
	update produto set produto=ld_produto, valor=ld_valor, descricao=ld_descricao  where 
    id_produto=ld_id_produto;
	end if;
	end $$
    
delimiter ;

/*call alterar_produto (1, "Enri", "471.617.828-56", "53.984.865-4", "011973672801", "evilsdomains@gmail.com", "Al. Andorinha", "779", "Morada dos Pássaros", "06428-080", "Barueri", "São Paulo", "Brasil");
select * from tipo_produto;

/* Excluir software*/
delimiter $$
		drop procedure if exists excluir_produto $$
		create procedure excluir_produto(
		in 
		ld_id_produto int
	)
		BEGIN
		if (ld_id_produto="") then
		select "Digite o ID do produto";
		else 
		delete from produto where id_produto=ld_id_produto;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_produto$$
		create procedure listar_produto()
		BEGIN
		select*from produto;
		end $$
delimiter ;
