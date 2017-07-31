<?php include("logica-usuario.php");
include("conecta.php");
include("banco-usuario.php");


$usuario = buscaUsuario($conexao,$_POST["nome"],$_POST["senha"]);

if($usuario == null){
	$_SESSION["danger"] = "Usuario ou senha invalido.";
	header("Location: index.php");
}else{
	$_SESSION["success"] = "Usuario logado com sucesso";
	logaUsuario($usuario["nome"]);
	header("Location: inicio.php");
}
die();
