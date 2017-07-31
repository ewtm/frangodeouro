<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$nome = $_POST["nome"];
$precCst = $_POST["precCst"];
$precVnd = $_POST["precVnd"];
$quantidade = $_POST["quantidade"];
$categoria_id = $_POST["categoria_id"];

if(insereProduto($conexao, $nome, $precCst, $precVnd, $quantidade,$categoria_id)){?>
    <p class = "text-success">Produto: <?= $nome;?>  | Adicionado com sucesso!</p>
<?php } else { 
    $msg = mysqli_error($conexao);
?>
    <p class = "text-danger">Produto nao foi adicionado com sucesso :<?=$msg;?></p>
<?php
}
mysqli_close($conexao);?>
    
    
<?php include("rodape.php");?>