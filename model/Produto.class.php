<?php
	class Produto{
		private $idProduto;
		private $nome;
		private $descricao;
		private $preco;
		private $imagem;

		public function getIdProduto(){
			return $this->idProduto;
		}
		public function setIdProduto($idProduto){
			$this->idProduto = $idProduto;
		}

		
		public function getNome(){
			return $this->nome;
		}
		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getDescricao(){
			return $this->descricao;
		}
		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}
		public function getPreco(){
			return $this->preco;
		}
		public function setPreco($preco){
			$this->preco = $preco;
		}
		public function getImagem(){
			return $this->imagem;
		}
		public function setImagem($imagem){
			$this->imagem = $imagem;
		}


	}
?>