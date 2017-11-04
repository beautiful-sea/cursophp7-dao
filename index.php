<?php

require_once("config.php");

/*$sql = new sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

$teste = new Usuario();

$teste->loadbyId(4);

echo $teste;

?>