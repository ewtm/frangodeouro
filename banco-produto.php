<?php 
function insereProduto($conexao,$nome,$precCst,$precVnd,$quantidade,$categoria_id){
    $query = "insert into produto(nome,precCst,precVnd,quantidade,categoria_id)values('$nome',$precCst,$precVnd,'$quantidade',$categoria_id)";
    return mysqli_query($conexao, $query);
}

function listaProduto($conexao){ 
    $produtos = array();
    $resultado = mysqli_query($conexao,"SELECT * FROM produto");
    while($produto = mysqli_fetch_assoc($resultado)){
	array_push($produtos,$produto);
    }
    return $produtos;    
}

function listaTotal($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao,"SELECT sum(quantidade)as qtTotal,sum(precCst)as cstTotal,sum(precVnd) as vndTotal,sum(quantidade*precCst)as total,sum(quantidade*precVnd) as vendaTotal FROM produto");
    while($produto = mysqli_fetch_assoc($resultado)){
	array_push($produtos,$produto);
    }
    return $produtos; 
}

function buscaProduto($conexao,$id){
    $query = "select * from produto where id = $id";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_array($resultado);
}

function alteraProduto($conexao,$id,$nome,$precCst,$precVnd,$quantidade,$categoria_id){
   $query = "update  produto set nome = '$nome',precCst = '$precCst',precVnd='$precVnd',quantidade='$quantidade' ,categoria_id='$categoria_id' where id = '$id'";
   return mysqli_query($conexao, $query);
}

function removeProduto($conexao,$id){
    $query = "delete from produto where id = $id";
    return mysqli_query($conexao,$query);
}

function listaCategoria_id($conexao,$id){
$produtos = array();
    $resultado = mysqli_query($conexao,"SELECT categoria_id FROM produto where id = $id");
    while($produto = mysqli_fetch_assoc($resultado)){
	array_push($produtos,$produto);
    }
    return $produtos;

}