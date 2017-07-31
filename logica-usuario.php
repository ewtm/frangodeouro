<?php 
session_start();

function mostraAlerta($tipo){
	if(isset($_SESSION[$tipo])){
?>
	<p class="alert-<?= $tipo ?>"><?= $_SESSION[$tipo]?></p>
<?php
		unset($_SESSION[$tipo]);
	}
}

function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
	if(!usuarioEstaLogado()){
	$_SESSION["danger"] = "Voce nao tem acesso a esta funcionalidade.";
		header("Location: index.php");
		
		die();
	}
}

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}

function logaUsuario($nome){
	$_SESSION["usuario_logado"] = $nome;
}

function logout(){
	session_destroy();
	session_start();
}