<?php

	//include_once("model/Produto.class.php");
	include_once("includes/Conexao.class.php");	

	class DaoProduto {

		public function listarProdutos () {
			$sql = "SELECT * FROM tb_produto";
			$sqlPreparado = Conexao::meDeAConexao()->prepare($sql);
			$resposta = $sqlPreparado->execute();
			$lista = $sqlPreparado->fetchAll(PDO::FETCH_ASSOC);
		//	var_dump($lista); 
			$vetorDeObjetos = array();
			foreach ($lista as $linha) {
					$vetorDeObjetos [] = $this ->transformaDadosDoBancoEmObjeto ($linha);

			} 
			
			return $vetorDeObjetos;
		}
		public function transformaDadosDoBancoEmObjeto($dadosDoBanco)
		{
			$produto = new Produto();
			$produto->setIdProduto($dadosDoBanco['id_produto']);
			$produto->setNome($dadosDoBanco['nome']);
			$produto->setDescricao($dadosDoBanco['descricao']);
			$produto->setPreco($dadosDoBanco['preco']);
			$produto->setImagem($dadosDoBanco['nome_imagem']);

			return $produto;
		
		}

	}

?>