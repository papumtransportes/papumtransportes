<?php
	class Anuncio extends BD{

		private static function insereItems($parameters = array(), $id_evento){
			$pdo = @BD::conn();
			$status = false;

			foreach($parameters as $key => $value){
				$dataquery = $pdo->prepare("INSERT INTO items_cargas(id_cargas,nome,comp,largura,altura,medida,peso,quantidade) VALUES(:id_cargas,:nome,:comp,:largura,:altura,:medida,:peso,:quantidade)");
				$dataquery->bindParam(':id_cargas', $id_evento);
				$dataquery->bindParam(':nome', $value['nome']);
				$dataquery->bindParam(':comp', $value['comp']);
				$dataquery->bindParam(':largura', $value['largura']);
				$dataquery->bindParam(':altura', $value['altura']);
				$dataquery->bindParam(':medida', $value['medida']);
				$dataquery->bindParam(':peso', $value['peso']);
				$dataquery->bindParam(':quantidade', $value['quantidade']);
				if($dataquery->execute()){
					$status = true;
				}else{
					$status = false;
				}
			}

			return $status;
		}

		public function carregarAction($parameters = array()){
			session_start();
			$pdo = parent::conn();
			$arr = array("status" => "ok", "results" => array());

			$dataquery = $pdo->prepare("SELECT cargas.id, cargas.titulo, cargas.created_at,categorias.categoria, subcategorias.subcategoria FROM cargas INNER JOIN categorias ON cargas.categoria = categorias.id INNER JOIN subcategorias ON subcategorias.id = cargas.id WHERE cargas.id_user = :id_user AND cargas.status = 0");
			$dataquery->bindParam(":id_user", $_SESSION['id_user']);
			$dataquery->execute();
			if($dataquery->rowCount() > 0){
				while($fetch = $dataquery->fetchObject()){
					$arr["results"][] = array(
						"id" => $fetch->id,
						"titulo" => $fetch->titulo,
						"created_at" => date("d/m/Y", strtotime($fetch->created_at)),
						"categoria" => $fetch->categoria,
						"subcategoria" => $fetch->subcategoria
					);
				}

				return $arr;
			}else{
				return false;
			}
		}

		public function historicoAction($parameters = array()){
			session_start();
			$pdo = parent::conn();
			$arr = array("status" => "ok", "results" => array());

			$dataquery = $pdo->prepare("SELECT id, titulo, status, created_at FROM cargas WHERE id_user = :id_user");
			$dataquery->bindParam(":id_user", $_SESSION['id_user']);
			$dataquery->execute();
			if($dataquery->rowCount() > 0){
				while($fetch = $dataquery->fetchObject()){
					$status = "Em aberto";
					if($fetch->status == 1){
						$status = "Combinando";
					}else if($fetch->status == 2){
						$status = "Em processo";
					}else if($fetch->status == 3){
						$status = "Finalizado";
					}

					$arr["results"][] = array(
						"id" => $fetch->id,
						"titulo" => $fetch->titulo,
						"status" => $status,
						"criado" => date("d/m/Y H:i:s", strtotime($fetch->created_at))
					);
				};

				return $arr;
			}else{
				return false;
			}
		} 

		public function registerAction($parameters = array()){
			session_start();
			$pdo = parent::conn();

			$dataquery = $pdo->prepare("INSERT INTO cargas(id_user, titulo, categoria, subcategoria, cep_r, rua_r, numero_r, bairro_r, cidade_r, estado_r, cep_e, rua_e, numero_e, bairro_e, cidade_e, estado_e, status, created_at) VALUES(:id_user,:titulo,:categoria,:subcategoria,:cep_r,:rua_r,:numero_r,:bairro_r,:cidade_r,:estado_r,:cep_e,:rua_e,:numero_e,:bairro_e,:cidade_e,:estado_e,0,NOW())");
			$dataquery->bindParam(':id_user', $_SESSION['id_user']);
			$dataquery->bindParam(':titulo', $parameters['titulo']);
			$dataquery->bindParam(':categoria', $parameters['categoria']);
			$dataquery->bindParam(':subcategoria', $parameters['subcategoria']);
			$dataquery->bindParam(':cep_r', $parameters['cep_r']);
			$dataquery->bindParam(':rua_r', $parameters['rua_r']);
			$dataquery->bindParam(':numero_r', $parameters['numero_r']);
			$dataquery->bindParam(':bairro_r', $parameters['bairro_r']);
			$dataquery->bindParam(':cidade_r', $parameters['cidade_r']);
			$dataquery->bindParam(':estado_r', $parameters['estado_r']);
			$dataquery->bindParam(':cep_e', $parameters['cep_e']);
			$dataquery->bindParam(':rua_e', $parameters['rua_e']);
			$dataquery->bindParam(':numero_e', $parameters['numero_e']);
			$dataquery->bindParam(':bairro_e', $parameters['bairro_e']);
			$dataquery->bindParam(':cidade_e', $parameters['cidade_e']);
			$dataquery->bindParam(':estado_e', $parameters['estado_e']);
			if($dataquery->execute()){
				$select = $pdo->prepare("SELECT id FROM cargas WHERE id_user = ? AND cep_r = ? AND cep_e = ? AND created_at = NOW()");
				$select->execute([$_SESSION['id_user'], $parameters['cep_r'], $parameters['cep_e']]);
				$fetch = $select->fetchObject();
				if(Anuncio::insereItems($parameters['items'], $fetch->id)){
					Anuncio::atualizaViews($parameters['categoria'], $parameters['subcategoria']);
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		private static function atualizaViews($categoria, $subcategoria){
			$pdo = @BD::conn();

			$categoria = $categoria;
			$subcategoria = $subcategoria;
			
			$category = $pdo->prepare("SELECT views FROM categorias WHERE id = '".$categoria."'");
			$category->execute();
			$c = $category->fetchObject();
			$c  = $c->views;
			$c = $c + 1;
			$category = $pdo->prepare("UPDATE categorias SET views = '".$c."' WHERE id = '".$categoria."'");
			$category->execute();
			
			$subcategory = $pdo->prepare("SELECT views FROM subcategorias WHERE id = '".$subcategoria."'");
			$subcategory->execute();
			$s = $subcategory->fetchObject();
			$s = $s->views;
			$s = $s + 1;
			$subcategory = $pdo->prepare("UPDATE subcategorias SET views = '".$s."' WHERE id = '".$subcategoria."'");
			$subcategory->execute();
		}

		public function categoriasAction($parameters = array()){
			$pdo = parent::conn();
			$arr = array("status" => "ok", "results" => array());
			$ids = array();

			$dataquery = $pdo->prepare("SELECT * FROM categorias");
			$dataquery->execute();
			if($dataquery->rowCount() > 0){
				while($fetch = $dataquery->fetchObject()){
					if(!in_array($fetch->id, $ids)){
						$arr["results"][] = array(
							"id" => $fetch->id,
							"categoria" => $fetch->categoria,
							"views" => $fetch->views
						);
						$ids[] = $fetch->id;
					}
				}

				return $arr;
			}else{
				return false;
			}
		}

		public function subcategoriasAction($parameters = array()){
			$pdo = parent::conn();
			$arr = array("status" => "ok", "results" => array());
			$ids = array();

			$dataquery = $pdo->prepare("SELECT * FROM subcategorias WHERE id_categoria = :id_categoria");
			$dataquery->bindParam(":id_categoria", $parameters['id_categoria']);
			$dataquery->execute();
			if($dataquery->rowCount() > 0){
				while($fetch = $dataquery->fetchObject()){
					if(!in_array($fetch->id, $ids)){
						$arr["results"][] = array(
							"id" => $fetch->id,
							"subcategoria" => $fetch->subcategoria,
							"views" => $fetch->views
						);
						$ids[] = $fetch->id;
					}
				}

				return $arr;
			}else{
				return false;
			}
		}

	}