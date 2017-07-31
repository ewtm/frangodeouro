<?php include("logica-usuario.php");
include("cabecalho.php");



mostraAlerta("success");?>

<p class = "text-success">Logado como <?= usuarioLogado()
		?> <a href =  "logout.php">Deslogar</a></p>

<font color="red"><h1>Frango de Ouro </h1></font>
<img src="imagem/frango1.jpeg" width="500" onmouseover="this.src='imagem/frango2.jpeg'" onmouseout="this.src='imagem/frango1.jpeg'"/>


 
<?php include("rodape.php");?>
