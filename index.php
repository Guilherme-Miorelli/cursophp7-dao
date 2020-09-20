<?php
	
	require_once("config.php");

	/*$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);*/

	//está trazendo apenas um usuário por ID específica
	/*$root = new Usuario();

	$root->loadbyId(3);

	echo $root;*/

	//Carrega uma lista de usuários
/*
	$lista = Usuario::getList();//como não há um $this no método getList foi instanciado como estático, então está buscando direto sem precisar instanciar o objeto

	echo json_encode($lista);*/
/*
	//Carrega uma lista de usuários buscando pelo login
	$search = Usuario::search("jo");

	echo json_encode($search);*/

	//Carrega um usuário usando login e senha
/*
	$usuario = new Usuario();
	$usuario->login("root", "123");

	echo $usuario;
*/
/*
	//Criando um noov usuario
	$aluno = new Usuario("aluno", "@aluno");

	$aluno->insert();

	echo $aluno;*/
/*
//alterar um usuario
	$usuario = new Usuario();

	$usuario->loadbyId(8);

	$usuario->update("professor", "98765432312");

	echo $usuario;*/

	$usuario = new Usuario();

	$usuario->loadbyId(7);

	$usuario->delete();

	echo $usuario;

?>