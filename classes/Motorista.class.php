<?php
	class Motorista extends BD{

		private static function checkExist($cpf, $rg){
			session_start();
			$pdo = @BD::conn();

			$select = $pdo->prepare("SELECT * FROM motorista WHERE (cpf = '".$cpf."' OR rg = '".$rg."') AND id_user = '".$_SESSION['id_user']."'");
			$select->execute();
			if($select->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		}

		public function registerAction($parameters = array()){
			$pdo = parent::conn();
			$arr = array("status" => "ok", "results" => "");

			if(Motorista::checkExist($parameters['cpf'], $parameters['rg'])){
				return "existe";
			}

			$dataquery = $pdo->prepare("INSERT INTO motorista(id_user, firstname, lastname, rg, oe, cpf, nregistro, cathab, validade, created_at) VALUES(:id_user, :firstname, :lastname, :rg, :oe, :cpf, :nregistro, :cathab, :validade, NOW())");
			$dataquery->bindParam(":id_user", $_SESSION['id_user']);
			$dataquery->bindParam(":firstname", $parameters['firstname']);
			$dataquery->bindParam(":lastname", $parameters['lastname']);
			$dataquery->bindParam(":rg", $parameters['rg']);
			$dataquery->bindParam(":oe", $parameters['oe']);
			$dataquery->bindParam(":cpf", $parameters['cpf']);
			$dataquery->bindParam(":nregistro", $parameters['nregistro']);
			$dataquery->bindParam(":cathab", $parameters['cathab']);
			$dataquery->bindParam(":validade", $parameters['validade']);
			if($dataquery->execute()){
				$select = $pdo->prepare("SELECT id FROM motorista WHERE id_user = '".$_SESSION['id_user']."' AND cpf = '".$parameters['cpf']."' AND rg = '".$parameters['rg']."'");
				$select->execute();
				$fetch = $select->fetchObject();
				$arr["results"] = $fetch->id;

				return $arr;
			}else{
				return false;
			}
		}

		public function deleteAction($parameters = array()){
			session_start();
			$pdo = parent::conn();

			$dataquery = $pdo->prepare("DELETE FROM motorista WHERE id_user = :id_user AND id = :id");
			$dataquery->bindParam(":id_user", $_SESSION['id_user']);
			$dataquery->bindParam(":id", $parameters['id']);
			if($dataquery->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function motoristasAction($parameters = array()){
			session_start();
			$pdo = parent::conn();
			$arr = array("status" => true, "results" => array());

			$dataquery = $pdo->prepare("SELECT * FROM motorista WHERE id_user = :id_user");
			$dataquery->bindParam(":id_user", $_SESSION['id_user']);
			$dataquery->execute();
			if($dataquery->rowCount() > 0){
				while($fetch = $dataquery->fetchObject()){
					$arr["results"][] = array(
						"id" => $fetch->id,
						"firstname" => $fetch->firstname,
						"lastname" => $fetch->lastname,
						"rg" => $fetch->rg,
						"oe" => $fetch->oe,
						"cpf" => $fetch->cpf,
						"nregistro" => $fetch->nregistro,
						"cathab" => $fetch->cathab,
						"validade" => date("d/m/Y", strtotime($fetch->validade))
					);
				}

				return $arr;
			}else{
				return false;
			}
		}

	}