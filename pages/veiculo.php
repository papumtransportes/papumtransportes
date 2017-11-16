<div class='container-fluid'>
	<div class="row">
		<div class="card">
			<h3>Veiculo</h3>
			<div class="veiculos">
				<div class="spinner">
				  <div class="bounce1"></div>
				  <div class="bounce2"></div>
				  <div class="bounce3"></div>
				</div>
			</div>
		</div>
		<div class="card">
			<button class="btn action-button veiculo">
				Adicionar Veiculo
			</button>
			<div id="feedback"></div>
			<div class="cadastro">
				<form action="" id="veiculo" method="post" enctype="multipart/form-data" style="width: 100%">
					<div class="row">
						<div class="col-md-12">
							<label>* campos obrigatórios</label>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Renavam:</label>
							<input type="text" class="input" name="Renavam" id="renavam" placeholder="Digite o renavam" value="" required="required"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Chassi:</label>
							<input type="text" class="input" name="chassi" id="chassi" placeholder="Digite o chassi" value="" required="required"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Placa:</label>
							<input type="text" class="input" name="placa" id="placa" placeholder="Digite a placa" value="" required="required"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Modelo:</label>
							<input type="text" class="input" name="modelo" id="modelo" placeholder="Digite o modelo" value="" required="required"/>
						</div>
						<div class="col-md-12">
							<label class="label-input">* Marca:</label>
							<input type="text" class="input" name="marca" id="marca" placeholder="Digite a marca" value="" required="required"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Ano do Modelo:</label>
							<input type="text" class="input" name="anomodelo" id="anomodelo" placeholder="Digite o ano do modelo" value="" required="required"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Ano de Fabricação:</label>
							<input type="text" class="input" name="anofabricacao" id="anofabricacao" placeholder="Digite o ano de fabricação" value="" required="required"/>
						</div>
						<div class="col-md-12">
							<label class="label-input">* Categoria do Veiculo:</label>
							<select name="categoria" id="categoria" class="selectpicker form-control escolha input" required="required">
							  	<optgroup label="Caminhão">
								    <option value="vuc">VUC</option>
								    <option value="toco">Toco</option>
								    <option value="truck">Truck</option>
							  	</optgroup>
							  	<optgroup label="Carreta">
								    <option value="2 eixos">2 eixos</option>
								    <option value="3 eixos">3 eixos</option>
								    <option value="Bitrem">Bitrem</option>
							  	</optgroup>
							  	<optgroup label="Outro">
							    	<option value="Outro">Outro</option>
							  	</optgroup>
							</select>
						</div>
						<div class="col-md-12">
							<label class="label-input">Comentário</label>
							<textarea name="comentario" id="comentario" class="input" placeholder="Comentário sobre o Caminhão"></textarea>
						</div>
						<div col-md-12>
							<input type="submit" class="btn action-button" value="Cadastrar" style='margin-left:15px;width:150px'>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		var url = "http://localhost/tcc/";
		var numveiculos = 0;

		$("#anomodelo").mask("9999");
		$("#anofabricacao").mask("9999");
		$("#placa").mask("AAA-9999");

		$(".veiculos").ready(function(){
			$.ajax({
				type: 'POST',
				url : url+'sys/Veiculo/veiculos',
				dataType: 'json',
				success: function(retorno){
					if(retorno == false){
						$(".veiculos").html("<center><h4>Nenhum veiculo cadastrado</h4></center>");
					}else{
						var html = "<ul class='list-items'>";
						$.each(retorno.results, function(i, value){
							html += "<li class='veiculo_"+value.id+"'>";
							html += '<div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>';
							html += '<div class="details">';
							html += '<strong><label>'+value.modelo+'</label></strong>';
							html += '<p>';
							html += 'Placa: '+value.placa+'<br>';
							html += 'Marca: '+value.marca+'<br>';
							html += 'Chassi: '+value.chassi+'<br>';
							html += 'Ano de Fabricação: '+value.anofabricacao+'<br>';
							html += 'Ano do Modelo: '+value.anomodelo+'<br>';
							html += 'Renavam: '+value.renavam+'<br>';
							html += '</p>';
							html += '</div>';
							html += '<a class="delete" id="'+value.id+'"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
							html += "</li>";
						});
						html += "</ul>";
						$(".veiculos").html(html);

						numveiculos = $(".veiculos li").length;
					}
				}
			});
		});

		$(document).on("click", ".delete", function(e){
			var id = $(this).attr("id");

			if(confirm("Tem certeza que deseja apagar esse veiculo?") == false){
				return false;
			}

			$.ajax({
				type: 'POST',
				url: url+'sys/Veiculo/delete',
				dataType: 'json',
				data: {
					id: id,
				}, success: function(retorno){
					if(retorno == true){
						var num = $(".veiculos li").length;
						$(".veiculo_"+id).fadeOut();
						num--;
						if(num == 0){
							$(".veiculos").html("<center><h4>Nenhum veiculo cadastrado</h4></center>");
						}
					}else{
						$("#feedback").html("<div style='color:red;'>Ocorreu um erro, tente novamente mais tarde</div>");
						hidemessage("#feedback");
					}
				}
			})
		});
	});
</script>