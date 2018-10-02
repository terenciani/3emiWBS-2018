<?php
	include_once("dao/DaoProduto.class.php");
	
	class ProdutoController
	{
		
		function excluir($id)
		{
			$dao = new DaoProduto ();
			$dao ->excluir($id);
		}

		function buscarProdutoPorId($id)
		{
			$dao = new DaoProduto ();
			return $dao ->buscarProdutoPorIdNoBanco($id);

		}
		function atualizarProduto($post){
			$dao = new DaoProduto();
			$dao -> atualizar($post);
		}
	}
?>
