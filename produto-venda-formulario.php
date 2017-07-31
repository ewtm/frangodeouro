<?php include("cabecalho.php");

include("banco-produto.php");
include("conecta.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);


?>

<form action ="venda-produto.php" method ="post">
    <h1>Vendendo produto</h1>
    <input type = "hidden" name = "id" value="<?=$produto['id']?>">
    <table class = "table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome"
                       value="<?=$produto['nome']?>"></td>
        </tr>
        <tr>
            <td>Quantidade</td>
            <td><input class ="form-control" type = "number" name ="quantidade"></td>		
        </tr>
        
        <?php 
        $categoria_id = listaCategoria_id($conexao,$id);
        foreach ($categoria_id as $categoria):
            if($categoria['categoria_id']== 1){
        ?>   
             <input type = "hidden" name = "categoria_id" value="<?=$categoria['categoria_id']?>">
            <tr>
                <td>Preço Total</td>
                <td><input class ="form-control" type = "number" name ="vndTotal" step=0.01></td>		
            </tr>
       <?php   
        }
        endforeach;
       ?>
        
    </table>
    <tr>
        <td>
            <button class="btn btn-primary" type="submit">Vender</button>
        </td>
    </tr>
        
        
    
</form>

<?php include("rodape.php");?>