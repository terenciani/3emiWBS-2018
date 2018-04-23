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
	}
?>