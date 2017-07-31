<?php include ("cabecalho.php");
include("conecta.php");
include("banco-venda.php");

$produto_id = $_POST["id"];
$nome = $_POST["nome"];
$quantidade = $_POST["quantidade"];
$categoria_id=$_POST["categoria_id"];


$vndTotal = $_POST['vndTotal'];

if(insereVenda($conexao, $nome, $quantidade,$vndTotal, $produto_id)){
?>
    <p class = "text-success">Produto: <?= $nome;?> | foi Vendido</p>
<?php } else { 
    $msg = mysqli_error($conexao);
?>
    <p class = "text-danger">Produto nao foi Vendido :<?=$msg;?></p>
<?php
}
mysqli_close($conexao);
?>