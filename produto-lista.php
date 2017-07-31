<?php include("logica-usuario.php");
include ("cabecalho.php");

include("conecta.php");
include("banco-produto.php");



mostraAlerta("success");
mostraAlerta("danger");?>


<table class="table table-striped table-bordered">
    
    <tr>
        <th>Nome</th>
        <th>Preço de Custo</th>
        <th>Preço de Venda</th>
        <th>Quantidade</th>
        <th>Total do custo</th>
        <th>Valor da Venda</th>
        <th>% Ganho </th>
    </tr>
    <?php
        $produtos = listaProduto($conexao);
        foreach ($produtos as $produto):
    ?>
    <tr>
        <?php $ganho =  (($produto['precVnd'] - $produto['precCst'])/$produto['precCst'])*100 ;
            $formatado = number_format($ganho, 2)?>
        <td><?=$produto['nome']?></td>
        <td>R$<?=$produto['precCst']?></td>
        <td>R$<?=$produto['precVnd']?></td>
        <td><?=$produto['quantidade']?></td>
        <td>R$<?=$produto['quantidade']*$produto['precCst']?></td>       
        <td>R$<?=$produto['quantidade']*$produto['precVnd']?></td>
        <td><?= $formatado ?></td>
        <td><a class = "btn btn-primary"href=
		"produto-alterar-formulario.php?id=<?=$produto['id']?>">alterar</a></td>
	<td>
	<form  action = "remove-produto.php" method = "post">
            <input type="hidden" name="id" value = "<?= $produto['id']?>">
            <button   class = "btn btn-danger">Remover</button>
        </form>
        </td>
        <td><a class="btn btn-success"href="produto-venda-formulario.php?id=<?=$produto['id']?>">Vender</a></td>
       
    </tr>
    <?php
    endforeach;
    ?>
    
    <?php
        $total = listaTotal($conexao);
        foreach($total as $soma):
    ?>
    <tr>
        <th>Total</th>
        <th>R$<?=$soma['cstTotal']?></th>
        <th>R$<?=$soma['vndTotal']?></th>
        <th><?=$soma['qtTotal']?></th>
        <th>R$<?=$soma['total']?></th>
        <th>R$<?=$soma['vendaTotal']?></th>
    </tr>
    
    <?php
    endforeach;
    ?>
    
</table>



<?php include("rodape.php");?>