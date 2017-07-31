<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");

$categorias = listaCategoria($conexao);
?>


<form action ="adiciona-produto.php" method="post">
    <h1>Cadastro produto</h1>
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome"></td>
        </tr>
        <tr>
            <td>Preço de Custo</td>
            <td><input class ="form-control" type = "number" name ="precCst" step=0.01 ></td>		
        </tr>
        <tr>
            <td>Preço de Venda</td>
            <td><input class ="form-control" type = "number" name ="precVnd" step=0.01 ></td>		
        </tr>
        <tr>
            <td>Quantidade</td>
            <td><input class ="form-control" type = "number" name ="quantidade"></td>		
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select name ="categoria_id" class="form-control">
                    <?php foreach($categorias as $categoria):?>
                    <option value="<?=$categoria['id']?>">
                        <?=$categoria['nome']?><br/>
                    </option>
                    <?php endforeach;?>
                </select>
            </td>
        </tr>
    </table>
    <tr>
        <td>
            <button class="btn btn-primary" type="submit">Adicionar</button>
        </td>
    </tr>
</form>

<?php include("rodape.php");?>