<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php
	include_once("dao/DaoProduto.class.php");
	include_once("model/Produto.class.php");
	$dao = new DaoProduto();
	$vetorDeProdutos= $dao->listarProdutos();
	foreach ($vetorDeProdutos as $produto) {
		echo "<img src='imagens/". $produto -> getImagem()."'>";
		echo $produto -> getNome ();
	}
	?>
</body>
</html>