<?php include("cabecalho.php");
include("banco-produto.php");
include("banco-categoria.php");
include("conecta.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategoria($conexao);

?>

<form action ="altera-produto.php" method ="post">
    <h1>Alterando produto</h1>
    <input type = "hidden" name = "id" value="<?=$produto['id']?>">
    <table class = "table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome"
                       value="<?=$produto['nome']?>"></td>
        </tr>
        <tr>
            <td>Preço de Custo</td>
            <td><input class ="form-control" type = "number" name ="precCst" step=0.01 
                       value="<?=$produto['precCst']?>"></td>		
        </tr>
        <tr>
            <td>Preço de Venda</td>
            <td><input class ="form-control" type = "number" name ="precVnd" step=0.01 
                       value="<?=$produto['precVnd']?>"></td>		
        </tr>
        <tr>
            <td>Quantidade</td>
            <td><input class ="form-control" type = "number" name ="quantidade"
                       value="<?=$produto['quantidade']?>"></td>		
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select name ="categoria_id" class="form-control">
                    <?php foreach($categorias as $categoria):
                        $essaEhCategoria = $produto["categoria_id"] == $categoria["id"];
                        $selecao = $essaEhCategoria ?"selected='selected'" : " ";                        
                    ?>
                    <option value="<?=$categoria['id'] ?><?=$selecao?>">
                        <?=$categoria['nome']?><br/>                        
                    </option>
                    <?php endforeach;?>                    
                </select>
            </td>
        </tr>
    </table>
    <tr>
        <td>
            <button class="btn btn-primary" type="submit">Alterar</button>
        </td>
    </tr>
        
        
    
</form>

<?php include("rodape.php");?>