<?php
	if (isset($_POST['enviar'])){
		include_once("controller/LoginController.class.php");
		$controle  = new LoginController();
		
		$controle->logar($_POST);
	}
	if (isset($_POST['salvar'])){
		include_once("controller/LoginController.class.php");
		$controle  = new LoginController();
		
		$controle->salvarUsuario($_POST);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="login">
		<input type="password" name="senha">
		<input type="submit" name="enviar">
	</form>
	<h1>Cadastro</h1>
	<form method="POST">
		<input type="text" name="nome">
		<input type="text" name="login" required>
		<input type="password" name="senha" required>
		<input type="submit" name="salvar">
	</form>
</body>
</html>