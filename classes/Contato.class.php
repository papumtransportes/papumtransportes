<?php
	class Contato extends BD{

		public function registerAction($parameters = array()){
			$pdo = parent::conn();

			$dataquery = $pdo->prepare("INSERT INTO contato(name, phone, email, message, created_at) VALUES(:name, :phone, :email, :message, NOW())");
			$dataquery->bindParam(":name", $parameters['name']);
			$dataquery->bindParam(":phone", $parameters['phone']);
			$dataquery->bindParam(":email", $parameters['email']);
			$dataquery->bindParam(":message", $parameters['message']);
			if($dataquery->execute()){
				return true;
			}else{
				return false;
			}
		}

	}