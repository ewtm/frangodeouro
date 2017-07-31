<?php 
function insereVenda($conexao,$nome,$quantidade,$vndTotal,$produto_id){
    $query = "insert into venda(nomeVd,quantidadeVd,vndTotal,produto_id)values('$nome',$quantidade,$vndTotal,$produto_id)";
    return mysqli_query($conexao, $query);  
}

function listaVenda($conexao){ 
    $produtos = array();
    $resultado = mysqli_query($conexao,"SELECT nomeVd ,sum(quantidadeVd) as quantidadeVd,sum(vndTotal) as vndTotal , p.precCst precCst from venda v , produto p where p.id=v.produto_id group by nomeVd");
    while($produto = mysqli_fetch_assoc($resultado)){
	array_push($produtos,$produto);
    }
    return $produtos;    
}

function removeVenda($conexao,$nomeVd){
    $query = "delete from venda where nomeVd = '$nomeVd'";
    return mysqli_query($conexao,$query);
}

function selecionaVendaTotal(){
   /* SELECT p.precVnd*v.quantidadeVd as VendaTotal FROM produto p , venda v WHERE p.id = v.produto_id group by nomeVd
    SELECT p.precVnd*v.quantidadeVd as VendaTotal FROM produto p , venda v WHERE p.id = v.produto_id and p.id = 1 group by nomeVd*/
}