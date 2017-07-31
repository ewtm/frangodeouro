<?php include("logica-usuario.php");
header("Location: produto-lista.php");
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");



$id = $_POST['id'];
removeProduto($conexao,$id);
$_SESSION["success"] = "Produto removido com sucesso.";

die();
?>