<?php include("logica-usuario.php");
header("Location: relatorio-venda.php");
include("cabecalho.php");
include("conecta.php");
include("banco-venda.php");



$nomeVd = $_POST['nomeVd'];
removeVenda($conexao,$nomeVd);
$_SESSION["success"] = "Venda removido com sucesso.";

die();
?>
