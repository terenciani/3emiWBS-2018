<?php
	include_once "controller/ProdutoController.class.php";
	$id=$_GET["id"];
	echo $id;
	$controller = new ProdutoController();
	$produto = $controller -> buscarProdutoPorId($id);
?>