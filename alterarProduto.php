<?php
	include_once "controller/ProdutoController.class.php";
	$controller = new ProdutoController();
	if(isset($_POST["salvar"])) {
		 $controller -> atualizarProduto($_POST);
	}else{
		$id=$_GET["id"];
		
		$produto = $controller -> buscarProdutoPorId($id);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="hidden" name="codigo" value="<?=$produto->getIdProduto()?>" >
		<input type="text" name="nome" value="<?=$produto->getNome()?>" >
		<input type="submit" name="salvar">
	</form>
</body>
</html>