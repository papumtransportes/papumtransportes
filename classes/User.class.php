<?php
	class User extends BD{

		private static function verifyUser($cpf, $email){
			$pdo = @BD::conn();

			$dataquery = $pdo->prepare("SELECT * FROM users WHERE cpf = :cpf OR email = :email");
			$dataquery->bindParam(":cpf", $cpf);
			$dataquery->bindParam(":email", $email);
			$dataquery->execute();
			if($dataquery->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		}

		public function loginAction($parameters = array()){
			$pdo = parent::conn();
			$arr = array("status" => true, "results" => array());

			$dataquery = $pdo->prepare("SELECT * FROM users WHERE (email = :login OR cpf = :login) AND password = :password");
			$dataquery->bindParam(":login", $parameters['login']);
			$dataquery->bindParam(":password", $parameters['senha']);
			$dataquery->execute();
			if($dataquery->rowCount() > 0){
				session_start();
				$fetch = $dataquery->fetchObject();
				if($fetch->level == 0){
					$arr["results"] = array(
						"fullname" => $fetch->firstname." ".$fetch->lastname,
						"cpf" => $fetch->cpf,
						"rg" => $fetch->rg,
						"datanasc" => date("d/m/Y", strtotime($fetch->datanasc)),
						"telefone" => $fetch->telefone,
						"celular" => $fetch->celular,
						"email" => $fetch->email,
						"level" => $fetch->level
					);
				}else{
					$arr['results'] = array(
						"fullname" => $fetch->firstname,
						"razao" => $fetch->lastname,
						"cnpj" => $fetch->cpf,
						"telefone" => $fetch->telefone,
						"celular" => $fetch->celular,
						"email" => $fetch->email,
						"level" => $fetch->level
					);
				}
				$_SESSION['id_user'] = $fetch->id;
				$_SESSION['level'] = $fetch->level;
			}else{
				$arr["status"] = false;
			}

			return $arr;
		}

		public function editAction($parameters = array()){
			$pdo = parent::conn();
			session_start();

			$filtro = "";
			if($parameters['password'] != ""){
				$filtro = ", password = '".$parameters['password']."'";
			}

			if($_SESSION['level'] == 1){
				$parameters["rg"] = "";
				$parameters["datanasc"] = "";
				$parameters["sexo"] = "";
			}

			$dataquery = $pdo->prepare("UPDATE users SET firstname = :firstname, lastname = :lastname, cpf = :cpf, rg = :rg, datanasc = :datanasc, sexo = :sexo, telefone = :telefone, celular = :celular, email = :email ".$filtro." WHERE id = :id");
			$dataquery->bindParam(":firstname", $parameters['firstname']);
			$dataquery->bindParam(":lastname", $parameters['lastname']);
			$dataquery->bindParam(":cpf", $parameters['cpf']);
			$dataquery->bindParam(":rg", $parameters['rg']);
			$dataquery->bindParam(":datanasc", $parameters['datanasc']);
			$dataquery->bindParam(":sexo", $parameters['sexo']);
			$dataquery->bindParam(":telefone", $parameters['telefone']);
			$dataquery->bindParam(":celular", $parameters['celular']);
			$dataquery->bindParam(":email", $parameters['email']);
			$dataquery->bindParam(":id", $_SESSION['id_user']);
			if($dataquery->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function clienteAction($parameters = array()){
			$pdo = parent::conn();

			$existe = User::verifyUser($parameters['cpf'], $parameters['email']);
			if($existe == true){
				return 'existe';
			}

			// Level 0 Cliente
			// Level 1 Transportadora

			$dataquery = $pdo->prepare("INSERT INTO users(firstname, lastname, cpf, rg, datanasc, sexo, telefone, celular, email, password, level, created_at) VALUES(:firstname, :lastname, :cpf, :rg, :datanasc, :sexo, :telefone, :celular, :email, :password, :level, NOW())");
			$dataquery->bindParam(":firstname", $parameters['firstname']);
			$dataquery->bindParam(":lastname", $parameters['lastname']);
			$dataquery->bindParam(":cpf", $parameters['cpf']);
			$dataquery->bindParam(":rg", $parameters['rg']);
			$dataquery->bindParam(":datanasc", $parameters['datanasc']);
			$dataquery->bindParam(":sexo", $parameters['sexo']);
			$dataquery->bindParam(":telefone", $parameters['telefone']);
			$dataquery->bindParam(":celular", $parameters['celular']);
			$dataquery->bindParam(":email", $parameters['email']);
			$dataquery->bindParam(":password", $parameters['password']);
			$dataquery->bindParam(":level", $parameters['level']);
			if($dataquery->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function transportadoraAction($parameters = array()){
			$pdo = parent::conn();

			$existe = User::verifyUser($parameters['cnpj'], $parameters['email']);
			if($existe == true){
				return 'existe';
			}

			$dataquery = $pdo->prepare("INSERT INTO users(firstname, lastname, rg, cpf, telefone, celular, datanasc, email, sexo, password, level, created_at) VALUES(:firstname, :lastname, '', :cpf, :telefone, :celular, '', :email, '', :password, :level, NOW())");
			$dataquery->bindParam(":firstname", $parameters['firstname']);
			$dataquery->bindParam(":lastname", $parameters['lastname']);
			$dataquery->bindParam(":cpf", $parameters['cnpj']);
			$dataquery->bindParam(":telefone", $parameters['telefone']);
			$dataquery->bindParam(":celular", $parameters['celular']);
			$dataquery->bindParam(":email", $parameters['email']);
			$dataquery->bindParam(":password", $parameters['password']);
			$dataquery->bindParam("level", $parameters['level']);
			if($dataquery->execute()){
				return true;
			}else{
				return false;
			}
		}

	}