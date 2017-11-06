<?php

require_once("config.php");

//CARREGA UM USUARIO
//$teste = new Usuario();
//$teste->loadbyId(4);
//echo $teste;

//CARREGA UMA LISTA DE USUARIOS

//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("li");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("teste","!@#$");

//echo $usuario;
/*
//Criando um novo usuario
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;*/

$usuario = new Usuario();

$usuario->LoadById(4);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;

?>