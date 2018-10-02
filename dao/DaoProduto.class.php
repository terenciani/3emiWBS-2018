<?php

	include_once("model/Produto.class.php");
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
		public function buscarProdutoPorIdNoBanco($id){
			$sql = "SELECT * FROM tb_produto WHERE id_produto=:id";
			$sqlPreparado = Conexao::meDeAConexao()->prepare($sql);
			$sqlPreparado->bindValue(":id",$id);
			$resposta = $sqlPreparado->execute();
			$produto = $this->transformaDadosDoBancoEmObjeto($sqlPreparado->fetch(PDO::FETCH_ASSOC));
			return $produto;
			
		}

		public function atualizar($post){
			$sql = "UPDATE 
					tb_produto 
					SET 
					nome=:nome
					WHERE id_produto=:id";
			$sqlPreparado = Conexao::meDeAConexao()->prepare($sql);
			$sqlPreparado->bindValue(":id",$post['codigo']);
			$sqlPreparado->bindValue(":nome",$post['nome']);
			$resposta = $sqlPreparado->execute();
			
			
		}

		public function excluir($id){
			$sql = "DELETE  FROM tb_produto WHERE id_produto=:id";
			$sqlPreparado = Conexao::meDeAConexao()->prepare($sql);
			$sqlPreparado->bindValue(":id",$id);
			$resposta = $sqlPreparado->execute();
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