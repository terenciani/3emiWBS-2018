<?php
	include_once("model/Usuario.class.php");
	include_once("dao/DaoUsuario.class.php");
	class LoginController{
		public function logar($post){
			
			$dao = new DaoUsuario();
			$usuario = $dao->buscarUsuarioPorLogin($post['login']);


			//verificar a senha
			var_dump($usuario);
		}
	}
?>