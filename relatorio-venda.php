<?php include("logica-usuario.php");
include ("cabecalho.php");
include("conecta.php");
include("banco-venda.php");



mostraAlerta("success");
mostraAlerta("danger");
?>


    <table class="table table-striped table-bordered">
	<tr>
            <th>Nome</th>
            <th>Quantidade Vendida</th>
            <th>Venda Total</th>
            <th>Media de venda</th>
            <th>Lucro Total</th>
            <th>Lucro Unitario</th>
            
        </tr>
        <?php 
            $vendas = listaVenda($conexao);
            foreach($vendas as $venda):
        ?>
        <tr>
            <td><?=$venda['nomeVd'] ?></td>
            <td><?=$venda['quantidadeVd'] ?></td>
            <td><?=$venda['vndTotal'] ?></td>
            <td><?=$venda['vndTotal']/$venda['quantidadeVd'] ?></td>          
            <td><?=$venda['vndTotal'] - ($venda['quantidadeVd']* $venda['precCst']) ?></td>
            <td><?=($venda['vndTotal'] - ($venda['quantidadeVd']* $venda['precCst']))/$venda['quantidadeVd'] ?></td>
            <td>
                <form  action = "remove-venda.php" method = "post">
                    <input type="hidden" name="nomeVd" value = "<?= $venda['nomeVd']?>">
                    <button   class = "btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
        
        <?php
	endforeach
	?>
        
</table>     




<?php include("rodape.php");?>
