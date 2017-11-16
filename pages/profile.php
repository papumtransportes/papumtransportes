<?php
	if(!isset($_SESSION['id_user'])){
		echo "<h4>ERRO 200</h4><p>Você não tem permissão para acessar essa página</p>";
		exit;
	}
?>
<div class='menu-mobile'>
	<div class="logo">Papum Transportes</div>
	<a href="" class="menu-toggle">
		<i class="fa fa-reorder"></i>
	</a>
</div>
<div class="menu-side">
	<div class="menu-list">
		<div class="logo">Papum Transportes</div>
		<div class="img-profile">
			<img src="http://alt.rampages.us/wp-content/uploads/2017/08/default-profile-pic.jpg"/>
		</div>
		<div class="menu">
			<ul>
				<li class="active"><a href="" class='page' id='profile'><i class="fa fa-user"></i> Meu Perfil</a></li>
				<li><a href="" class='page' id='anuncios'><i class="fa fa-sign-out"></i> Meus Anúncios</a></li>
				<li><a href="" class='page' id='historico'><i class="fa fa-list"></i> Histórico</a></li>
			</ul>
		</div>
	</div>
	<div class="menu-options">
		<ul>
			<?php if($logado->level == 0){ ?>
			<li><a href="" class='page' id='anuncio'>Fazer um anúncio</a></li>
			<li><a href="" class='page' id='pesquisa'>Pesquisar uma transportadora</a></li>
			<li><a href="" class='page' id='lances'>Lances</a></li>
			<?php }else if($logado->level == 1){ ?>
			<li><a href="" class='page' id='motorista'>Motoristas</a></li>
			<li><a href="" class='page' id='veiculo'>Veiculos</a></li>
			<li><a href="" class='page' id='pesquisar'>Pesquisar Anúncios</a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="perfil">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="profile">
						<div class="details-profile">
							<?php if($logado->level == 0){ ?>
							<h3><?= $logado->firstname." ".$logado->lastname; ?></h3>
							<p>CPF: <?= $logado->cpf; ?></p>
							<p>RG: <?= $logado->rg; ?></p>
							<p>Data de Nascimento: <?= date("d/m/Y", strtotime($logado->datanasc)); ?></p>
							<p>Telefone: <?= $logado->telefone; ?></p>
							<p>Celular: <?= $logado->celular; ?></p>
							<p>Email: <?= $logado->email; ?></p>
							<?php }else if($logado->level == 1){ ?>
							<h3><?= $logado->firstname; ?></h3>
							<p>Razão Social: <?= $logado->lastname; ?></p>
							<p>CNPJ: <?= $logado->cpf; ?></p>
							<p>Telefone: <?= $logado->telefone; ?></p>
							<p>Celular: <?= $logado->celular; ?></p>
							<p>Email: <?= $logado->email; ?></p>
							<?php } ?>
						</div>
						<a class='btn btn-primary btn-xl page' id='edit'>Editar Perfil</a>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card anuncios">
					<div class="spinner">
					  <div class="bounce1"></div>
					  <div class="bounce2"></div>
					  <div class="bounce3"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>