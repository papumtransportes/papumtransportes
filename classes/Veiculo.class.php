<?php
	class Veiculo extends BD{

		private static function checkExist($placa){
			session_start();
			$pdo = @BD::conn();

			$select = $pdo->prepare("SELECT * FROM veiculo WHERE placa = '".$placa."' AND id_user = '".$_SESSION['id_user']."'");
			$select->execute();
			if($select->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		}

		public function registerAction($parameters = array()){
			session_start();
			$pdo = parent::conn();
			$arr = array("status" => "ok", "results" => "");

			if(Veiculo::checkExist($parameters['placa'])){
				return "existe";
			}
			
			$dataquery = $pdo->prepare("INSERT INTO veiculo(id_user, renavam, chassi, placa, modelo, marca, anomodelo, anofabricacao, categoria, comentario, created_at) VALUES(:id_user, :renavam, :chassi, :placa, :modelo, :marca, :anomodelo, :anofabricacao, :categoria, :comentario, NOW())");
			$dataquery->bindParam(":id_user", $_SESSION['id_user']);
			$dataquery->bindParam(":renavam", $parameters['renavam']); 
			$dataquery->bindParam(":chassi", $parameters['chassi']);
			$dataquery->bindParam(":placa", $parameters['placa']);
			$dataquery->bindParam(":modelo", $parameters['modelo']);
			$dataquery->bindParam(":marca", $parameters['marca']);
			$dataquery->bindParam(":anomodelo", $parameters['anomodelo']);
			$dataquery->bindParam(":anofabricacao", $parameters['anofabricacao']);
			$dataquery->bindParam(":categoria", $parameters['categoria']); 
			$dataquery->bindParam(":comentario", $parameters['comentario']);
			if($dataquery->execute()){
				$select = $pdo->prepare("SELECT id FROM veiculo WHERE id_user = '".$_SESSION['id_user']."' AND placa = '".$parameters['placa']."'");
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

			$dataquery = $pdo->prepare("DELETE FROM veiculo WHERE id_user = :id_user AND id = :id");
			$dataquery->bindParam(":id_user", $_SESSION['id_user']);
			$dataquery->bindParam(":id", $parameters['id']);
			if($dataquery->execute()){
				return true;
			}else{
				return false;
			}
		}

		public function veiculosAction($parameters = array()){
			session_start();
			$pdo = parent::conn();
			$arr = array("status" => true, "results" => array());

			$dataquery = $pdo->prepare("SELECT * FROM veiculo WHERE id_user = :id_user");
			$dataquery->bindParam(":id_user", $_SESSION['id_user']);
			$dataquery->execute();
			if($dataquery->rowCount() > 0){
				while($fetch = $dataquery->fetchObject()){
					$arr["results"][] = array(
						"id" => $fetch->id,
						"renavam" => $fetch->renavam,
						"chassi" => $fetch->chassi,
						"placa" => $fetch->placa,
						"modelo" => $fetch->modelo,
						"marca" => $fetch->marca,
						"anomodelo" => $fetch->anomodelo,
						"anofabricacao" => $fetch->anofabricacao,
						"categoria" => $fetch->categoria,
						"comentario" => $fetch->comentario	
					);
				}

				return $arr;
			}else{
				return false;
			}
		}

	}