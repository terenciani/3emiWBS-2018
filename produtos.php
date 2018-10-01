<?php
	if (isset($_GET['id'])){
		include_once("controller/ProdutoController.class.php");
		$controller = new ProdutoController();
		$id=$_GET['id'];
		$controller -> excluir($id);
	}
?>
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
	
	?>

		<a href ="dadosproduto.php?id=<?=$produto->getIdProduto()?>" > 
			<img src='imagens/<?=$produto->getImagem()?>'>
		</a>
		<a href="produtos.php?op=excluir&id=<?=$produto-> getIdProduto()?>" > 
			excluir
		</a>
		<a href="alterarProduto.php?id=<?=$produto-> getIdProduto()?>" > 
			excluir
		</a>
	<?php
	}

	?>
	
</body>
</html>