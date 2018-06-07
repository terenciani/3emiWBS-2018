<?php
	include_once("model/Usuario.class.php");
	include_once("dao/DaoUsuario.class.php");
	class LoginController{
		public function logar($post){
			
			$dao = new DaoUsuario();
			$usuario = $dao->buscarUsuarioPorLogin($post['login']);
            if (is_null ($usuario->getIdUsuario())) {
            	echo"usuario não encontrado";

            } else{
            	if ($usuario-> getSenha()== $post['senha']){
            		header("location:index.php");

            	} else{
            		echo "senha incorreta";
            	}
            }

			//verificar a senha
			//var_dump($usuario);
		}
		public function salvarUsuario($post){
			if($post['nome']==""){
				echo "Safado! Informe seu nome, por favor.";
			}else{
				$dao = new DaoUsuario();
				$usuario = $dao->buscarUsuarioPorLogin($post['login']);
            	if (is_null ($usuario->getIdUsuario())) {
            	
					$quantidadeDeLinhas = $dao->salvarUsuarioDoForm($post);
		            
		            if($quantidadeDeLinhas > 0){
		            	echo "Usuário salvo com sucesso!";
		            }else{
		            	echo "Erro ao realizar o cadastro!";
		            }

	            } else{
	            	echo "Perdeu playboy! Outro maluco já usa esse nickname";
	            }
	        }
		}
	}
?>