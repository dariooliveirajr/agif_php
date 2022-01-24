/* Inserir consultoria*/
delimiter $$

	drop procedure if exists inserir_implatacao_software $$
	create procedure inserir_implatacao_software(
	in
	ld_id_adm int,
	ld_id_funcionario int,
	ld_id_cliente int,
	ld_id_software int,
	ld_data_venda date,
	ld_data_implatacao date,
	ld_valor_implatacao decimal (10,2),
	ld_observacao varchar (777)
)
	BEGIN
	insert into implantacao_software
	(id_adm, id_funcionario, id_cliente, id_software, data_venda, data_implatacao, valor_implatacao, observacao)
    values(ld_id_adm, ld_id_funcionario, ld_id_cliente, ld_id_software, ld_data_venda, ld_data_implatacao, ld_valor_implatacao, ld_observacao);
	end $$
        
delimiter ;



/* Buscar implantacao_software*/
delimiter $$

	drop procedure if exists buscar_implantacao_software $$
	create procedure buscar_implantacao_software(
	in 
	ld_id_implantacao_software varchar(666)
	)
	BEGIN
	if (ld_id_implantacao_software="") then
	select "Digite o id da implatacao software";
	else
	select*from implantacao_software where id_implantacao_software=ld_id_implantacao_software;
	end if;
	end $$
        
delimiter ;

/* Alterar implantacao software*/
delimiter $$

	drop procedure if exists alterar_implantacao_software $$
	create procedure alterar_implantacao_software(
	in
	ld_id_implantacao_software int,
	ld_id_adm int,
	ld_id_funcionario int,
	ld_id_cliente int,
	ld_id_software int,
	ld_data_venda date,
	ld_data_implatacao date,
	ld_valor_implatacao decimal (10,2),
	ld_observacao varchar (777)
)
	BEGIN
	if (ld_id_implantacao_software="") then
	select "Digite o ID da implantacao software";
	else 
	update implantacao_software set id_adm=ld_id_adm, id_funcionario=ld_id_funcionario,
    id_cliente=ld_id_cliente, id_software=ld_id_software, data_venda=ld_data_venda, 
    data_implatacao=ld_data_implatacao, valor_implatacao=ld_valor_implatacao, observacao=ld_observacao  where 
    id_implantacao_software=ld_id_implantacao_software;
	end if;
	end $$
    
delimiter ;

/*call alterar_implantacao_software (1, "Enri", "471.617.828-56", "53.984.865-4", "011973672801", "evilsdomains@gmail.com", "Al. Andorinha", "779", "Morada dos Pássaros", "06428-080", "Barueri", "São Paulo", "Brasil");
select * from implantacao_software;

/* Excluir software*/
delimiter $$
		drop procedure if exists excluir_implantacao_software $$
		create procedure excluir_implantacao_software(
		in 
		ld_id_implantacao_software int
	)
		BEGIN
		if (ld_id_implantacao_software="") then
		select "Digite o ID da implantacao software";
		else 
		delete from implantacao_software where id_implantacao_software=ld_id_implantacao_software;
		end if;
		end $$
delimiter ;

delimiter $$
		drop procedure if exists listar_implantacao_software $$
		create procedure listar_implantacao_software()
		BEGIN
		select*from implantacao_software;
		end $$
delimiter ;