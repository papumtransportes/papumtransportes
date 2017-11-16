<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form id="msform" action="" method="post" enctype="multipart/form-data">
				<!-- progressbar -->
				<div id="feedback"></div>
				<ul id="progressbar">
					<li class="active">Categoria</li>
					<li>Subcategoria</li>
					<li>Detalhes do Anúncio</li>
				</ul>
				<!-- fieldsets -->
				<fieldset>
					<h2 class="fs-title">Escolha uma categoria</h2>
					<div class='categorias'>
						<div class="spinner">
						  <div class="bounce1"></div>
						  <div class="bounce2"></div>
						  <div class="bounce3"></div>
						</div>
					</div>
					<input type="button" name="next" class="next action-button" value="Próximo" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Escolha uma subcategoria</h2>
					<div class='subcategorias'></div>
					<input type="button" name="previous" class="previous action-button" value="Anterior" />
					<input type="button" name="next" class="next action-button" value="Próximo" />
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Informe os detalhes do anúncio</h2>
					<div class='items'>
						<div class='item' id='3'>
							<div class="row">
								<div class='col-md-12'>
									<h3>Item 1</h3>
								</div>
								<div class="col-md-12">
									<label>Nome do Item</label>
									<input type="text" id="nome_1" class="form-control input-md" style="width:100%" required="required">
								</div>
								<div class="col-md-3">
									<label>Comp</label>
									<input type="text" id="comp_1" class="form-control input-md" style="width:100%" required="required">
								</div>
								<div class="col-md-3">
									<label>Largura</label>
									<input type="text" id="largura_1" class="form-control input-md" style="width:100%" required="required">
								</div>
								<div class="col-md-3">
									<label>Altura</label>
									<input type="text" id="altura_1" class="form-control input-md" style="width:100%" required="required">
								</div>
								<div class="col-md-3">
									<div class="form-group">
									  	<label for="sel1">Medida</label>
									  	<select class="form-control" id="sel1_1" required="required">
											<option>M</option>
									  		<option>CM</option>
									  	</select>
									</div> 
								</div>
								<div class="col-md-6">
									<label>Peso</label>
									<input type="text" id="peso_1" class="form-control input-md" required="required">
								</div>
								<div class="col-md-6">
									<label>Quantidade</label>
									<input type="text" id="quantidade_1" class="form-control input-md" required="required">
								</div>
							</div>
						</div>
					</div>
					<button type="button" class="btn btn-default adicionar-item action-button" style="width:100%">
						<span class="glyphicon glyphicon-plus"></span> Adicionar mais um item
					</button>
					<div class="col-md-12">
						<hr style="border:0.0625rem solid #DDDDDD">
					</div>
					<div class="col-md-12">
						<h3>Título do Anúncio</h3>
						<input type="text" id="titulo_anuncio" class="form-control input-md" required="required">
					</div>
					<div class="col-md-12">
						<h3>Retirada</h3>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label>CEP</label>
							<input type="text" id="cep_r" class="form-control input-md" required="required">
						</div>
						<div class="col-md-4">
							<label>Rua</label>
							<input type="text" id="rua_r" class="form-control input-md" required="required">
						</div>
						<div class="col-md-4">
							<label>Número</label>
							<input type="text" id="numero_r" class="form-control input-md" required="required">
						</div>
						<div class="col-md-4">
							<label>Bairro</label>
							<input type="text" id="bairro_r" class="form-control input-md" required="required">
						</div>
						<div class="col-md-6">
							<label>Cidade</label>
							<input type="text" id="cidade_r" class="form-control input-md" required="required">
						</div>
						<div class="col-md-6">
							<label>Estado</label>
							<input type="text" id="estado_r" class="form-control input-md" required="required">
						</div>
					</div>
					<br>
					<div class="col-md-12">
						<h3>Entrega</h3>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label>CEP</label>
							<input type="text" id="cep_e" class="form-control input-md" required="required">
						</div>
						<div class="col-md-4">
							<label>Rua</label>
							<input type="text" id="rua_e" class="form-control input-md" required="required">
						</div>
						<div class="col-md-4">
							<label>Número</label>
							<input type="text" id="numero_e" class="form-control input-md" required="required">
						</div>
						<div class="col-md-4">
							<label>Bairro</label>
							<input type="text" id="bairro_e" class="form-control input-md" required="required">
						</div>
						<div class="col-md-6">
							<label>Cidade</label>
							<input type="text" id="cidade_e" class="form-control input-md" required="required">
						</div>
						<div class="col-md-6">
							<label>Estado</label>
							<input type="text" id="estado_e" class="form-control input-md" required="required">
						</div>
						<div class="col-md-12" id="feedback">
							
						</div>
					</div>
					<input type="button" name="previous" class="previous action-button" value="Anterior" />
					<input type="submit" name="submit" class="submit action-button" value="Anunciar" />
				</fieldset>
			</form>
			<div class="card" style="display: none;" id="success">
				<h3>Anúncio efetuado com sucesso</h3>
				<p>Caso haja alguma oferta você sera notificado no seu perfil</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		var url = "http://localhost/tcc/";

		$("#cep_r").mask("99999-999");
		$("#cep_e").mask("99999-999");

		$("#msform").submit(function(e){
			e.preventDefault();

			var items = [];
			var titulo = $("#titulo_anuncio").val();
			var numitems = $(".items").children().length;
			var cep_r = $("#cep_r").val();
			var rua_r = $("#rua_r").val();
			var numero_r = $("#numero_r").val();
			var bairro_r = $("#bairro_r").val();
			var cidade_r = $("#cidade_r").val();
			var estado_r = $("#estado_r").val();

			var cep_e = $("#cep_r").val();
			var rua_e = $("#rua_r").val();
			var numero_e = $("#numero_r").val();
			var bairro_e = $("#bairro_r").val();
			var cidade_e = $("#cidade_r").val();
			var estado_e = $("#estado_r").val();

			var categoria = parseInt($("input[name=categoria]:checked").val());
			var subcategoria = parseInt($("input[name=subcategoria]:checked").val());

			for(var i = 0; i < numitems; i++){
				items[i] = {
					nome: $("#nome_"+(i+1)).val(),
					comp: $("#comp_"+(i+1)).val(),
					largura: $("#largura_"+(i+1)).val(),
					altura: $("#altura_"+(i+1)).val(),
					medida: $("#sel1_"+(i+1)).val(),
					peso: $("#peso_"+(i+1)).val(),
					quantidade: $("#quantidade_"+(i+1)).val()
				};
			}

			$.ajax({
				type: 'POST',
				url: url+'sys/Anuncio/register',
				dataType: 'json',
				data: {
					items: items,
					titulo: titulo,
					cep_r: cep_r,
					rua_r: rua_r,
					numero_r: numero_r,
					bairro_r: bairro_r,
					cidade_r: cidade_r,
					estado_r: estado_r,
					cep_e: cep_e,
					rua_e: rua_e,
					numero_e: numero_e,
					bairro_e: bairro_e,
					cidade_e: cidade_e,
					estado_e: estado_e,
					categoria: categoria,
					subcategoria: subcategoria
				}, success: function(retorno){
					console.log(retorno);
					if(retorno == true){
						$("#msform").hide();
						$("#success").fadeIn();
					}else{
						$("#feedback").html("<div style='color:red;'>Ocorreu um erro, tente novamente mais tarde</div>");
						hidemessage("#feedback");
					}
				}, error: function(e){
					console.log(e);
				}
			})

			return false;
		});
	});
</script>
<br>