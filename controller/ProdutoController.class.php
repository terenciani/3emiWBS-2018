<?php
	include_once("dao/DaoProduto.class.php");
	
	class ProdutoController
	{
		
		function excluir($id)
		{
			$dao = new DaoProduto ();
			$dao ->excluir($id);
		}
	}
?>