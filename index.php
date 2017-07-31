<?php include("logica-usuario.php");  ?>
<html>
<head>
	<meta charset = "utf-8">
	<title>Frango de Ouro</title>
	<link href = "css/bootstrap.css" rel="stylesheet">
        <link href = "css/formulario.css" rel="stylesheet">
        <link rel="shortcut icon" href="Chicken.ico" type="image/x-icon"/>
</head>
<body>
	<div class = "navbar navbar-inverse navbar-fixed-top">
		<div class = "container">
			<div class = "navbar-header">
				<a class ="navbar-brand" href="index.php">Inicio</a>
			</div>
			<div>
                            <ul class = "nav navbar-nav">
				
                            </ul>
			</div>
		</div>
	</div>
    
    <div class = "container">
		<div class = "principal">
                    
    <?php mostraAlerta("danger");?>
    
    <img src="imagem/frango1.jpeg"/>
    
    <h2>Login</h2>
	<form action = "login.php" method = "post">
	<table class = "table">
		<tr>
			<td>Nome</td>
			<td><input class = "form-control" type = "nome" name = "nome"></td>
		</tr>
		<tr>
			<td>Senha</td>
			<td><input class = "form-control" type = "password" name = "senha"></td>
		</tr>
		<tr>
			<td><button class = "btn btn-primary">Login</button></td>
		</tr>
	</table>
	</form>
    
    
<?php include("rodape.php");?>    