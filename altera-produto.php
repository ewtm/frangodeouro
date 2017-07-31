<?php include ("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$precCst = $_POST["precCst"];
$precVnd = $_POST["precVnd"];
$quantidade = $_POST["quantidade"];
$categoria_id= $_POST["categoria_id"];

if(alteraProduto($conexao, $id, $nome, $precCst, $precVnd, $quantidade,$categoria_id)){
?>
    <p class = "text-success">Produto: <?= $nome;?> | foi alterado.</p>
<?php } else { 
    $msg = mysqli_error($conexao);
?>
    <p class = "text-danger">Produto nao foi alterado :<?=$msg;?></p>
<?php
}
mysqli_close($conexao);
?>



<?php include("rodape.php");?>
