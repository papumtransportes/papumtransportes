<?php
	require_once "../config.php";
	if(isset($_SESSION['id_user'])){
		include_once "../classes/BD.class.php";
		$dataquery = @BD::conn()->prepare("SELECT * FROM users WHERE id = ?");
		$dataquery->execute([$_SESSION['id_user']]);
		$logado = $dataquery->fetchObject();

		if(isset($_GET['sair'])){
			unset($_SESSION['id_user']);
			session_destroy();
			echo "<script>location.href='".BASE."';</script>";
		}
	}
	$col = "";
	$name = "";

	if($_SESSION['level'] == 1){
		$col = "col-md-12";
		$name = "CNPJ";
	}else{
		$name = "CPF";
		$col = "col-md-6";
	}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<form action="" id="edit" method="post" enctype="multipart/form-data">
					<div class='row'>
						<div class="col-md-12">
							<h3>Editar Perfil</h3>
							<label>* campos obrigatórios</label>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Nome:</label>
							<input type="text" class="input" name="firstname" id="firstname" placeholder="Digite seu nome" value="<?= $logado->firstname; ?>"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Sobrenome:</label>
							<input type="text" class="input" name="lastname" id="lastname" placeholder="Digite seu Sobrenome"  value="<?= $logado->lastname; ?>"/>
						</div>
						<div class="<?= $col; ?>">
							<label class="label-input">* <?= $name; ?>:</label>
							<input type="text" class="input" name="cpf" id="cpf" placeholder="Digite seu CPF"  value="<?= $logado->cpf; ?>"/>
						</div>
						<?php if($_SESSION['level'] == 0){ ?>
						<div class="col-md-6">
							<label class="label-input">* RG:</label>
							<input type="text" class="input" name="rg" id="rg" placeholder="Digite seu RG" value="<?= $logado->rg; ?>"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Data de Nascimento:</label>
							<input type="date" class="input" name="datanasc" id="datanasc" value="<?= $logado->datanasc; ?>"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Sexo:</label>
							<select name='sexo' class="input" id='sexo'>
								<option value="F" <?php if($logado->sexo == "F"){ echo "selected"; } ?>>F</option>
								<option value="M" <?php if($logado->sexo == "M"){ echo "selected"; } ?>>M</option>
							</select>
						</div>
						<?php } ?>
						<div class="col-md-6">
							<label class="label-input">* Telefone:</label>
							<input type="text" class="input" name="telefone" id="telefone" placeholder="Digite seu Telefone" value="<?= $logado->telefone; ?>"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Celular:</label>
							<input type="text" class="input" name="celular" id="celular" placeholder="Digite seu Celular" value="<?= $logado->celular; ?>"/>
						</div>
						<div class="col-md-12">
							<label class="label-input">* Email:</label>
							<input type="email" class="input" name="email" id="email" placeholder="Digite seu Email" value="<?= $logado->email; ?>"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">Senha</label>
							<input type="password" class="input" name="password" id="password" placeholder="Digite sua Senha"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">Confirme sua senha</label>
							<input type="password" class="input" name="confpass" id="confpass" placeholder="Confirme sua senha"/>
						</div>
						<div class="col-md-12" id="feedback"></div>
						<div class="col-md-12">
							<button class='submit' input='submit'>Editar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
<?php if($_SESSION['level'] == 1){ ?>
	$("#cpf").mask("99.999.999/9999-99");
<?php }else{ ?>
	$("#cpf").mask("999.999.999-99");
<?php } ?>
</script>

<script type="text/javascript">
	$("#telefone").mask("(99)9999-9999");
	$("#celular").mask("(99)99999-9999");
</script>