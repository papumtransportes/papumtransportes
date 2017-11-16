<div class="container-fluid">
	<div class="row">
		<div class="card">
			<h3>Motoristas</h3>
			<div class="motoristas">
				<div class="spinner">
				  <div class="bounce1"></div>
				  <div class="bounce2"></div>
				  <div class="bounce3"></div>
				</div>
			</div>
		</div>
		<div class="card">
			<button class="btn action-button motorista">
				Adicionar Motorista
			</button>
			<div id="feedback"></div>
			<div class="cadastro">
				<form action="" id="motorista" method="post" enctype="multipart/form-data" style="width: 100%">
					<div class="row">
						<div class="col-md-12">
							<label>* campos obrigatórios</label>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Nome:</label>
							<input type="text" class="input" name="firstname" id="firstname" placeholder="Digite o nome do motorista" value="" required="required"/>
						</div>
						<div class="col-md-6">
							<label class="label-input">* Sobrenome:</label>
							<input type="text" class="input" name="lastname" id="lastname" placeholder="Digite o sobrenome do motorista" value="" required="required"/>
						</div>
						<div class="col-md-4">
							<label class="label-input">* RG:</label>
							<input type="text" class="input" name="rg" id="rg" placeholder="Digite o RG do motorista" value="" required="required"/>
						</div>
						<div class="col-md-4">
							<label class="label-input">* Orgão Emissor:</label>
							<input type="text" class="input" name="oe" id="oe" placeholder="Digite o Orgão Emissor" value="" required="required"/>
						</div>
						<div class="col-md-4">
							<label class="label-input">* CPF:</label>
							<input type="text" class="input" name="cpf" id="cpf" placeholder="Digite o CPF do motorista" value="" required="required"/>
						</div>
					</div>
					<div class="row" style='margin-top:10px'>
						<div class="col-md-4">
							<label class="label-input">* Nº Registro:</label>
							<input type="text" class="input" name="nregistro" id="nregistro" placeholder="Digite o número de registro" value="" required="required"/>
						</div>
						<div class="col-md-4">
							<label class="label-input">* Cat Hab:</label>
							<select name="cathab" id="cathab" class="selectpicker form-control escolha input" required="required" style="height:55px">
							  	<option value="">Escolha a categoria da carteira</option>
							  	<option value="A">A</option>
							    <option value="B">B</option>
							    <option value="C">C</option>
							    <option value="D">D</option>
							    <option value="E">E</option>
							    <option value="ACC">ACC</option>
							</select>
						</div>
						<div class="col-md-4">
							<label class="label-input">* Validade:</label>
							<input type="date" class="input" name="validade" id="validade" placeholder="Digite a validade" value="" required="required"/>
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
		var nummotoristas = 0;

		$("#cpf").mask("999.999.999-99");
		$("#rg").mask("99.999.999-99");
		$("#oe").mask("AA");
		$("#nregistro").mask("999999999999");

		$(".motoristas").ready(function(){
			$.ajax({
				type: 'POST',
				url: url+'sys/Motorista/motoristas',
				dataType: 'json',
				success: function(retorno){
					if(retorno == false){
						$(".motoristas").html("<center><h4>Nenhum motorista cadastrado</h4></center>");
					}else{
						var html = "<ul class='list-items'>";
						$.each(retorno.results, function(i, value){
							html += "<li class='motorista_"+value.id+"'>";
							html += '<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>';
							html += '<div class="details">';
							html += '<strong><label>'+value.firstname+' '+value.lastname+'</label></strong>';
							html += '<p>';
							html += 'RG: '+value.rg+'<br>';
							html += 'OE: '+value.oe+'<br>';
							html += 'CPF: '+value.cpf+'<br>';
							html += 'Nº Registro: '+value.nregistro+'<br>';
							html += 'Categoria da Carteira: '+value.cathab+'<br>';
							html += 'Validade: '+value.validade+'<br>';
							html += '</p>';
							html += '</div>';
							html += '<a class="delete" id="'+value.id+'"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
							html += "</li>";
						});
						html += "</ul>";
						$(".motoristas").html(html);

						nummotoristas = $(".motoristas li").length;
					}
				}, error: function(e){
					console.log(e);
				}
			})
		});

		$(document).on("click", ".delete", function(e){
			var id = $(this).attr("id");

			if(confirm("Tem certeza que deseja apagar esse motorista?") == false){
				return false;
			}

			$.ajax({
				type: 'POST',
				url: url+'sys/Motorista/delete',
				dataType: 'json',
				data: {
					id: id,
				}, success: function(retorno){
					if(retorno == true){
						var num = $(".motoristas li").length;
						$(".motorista_"+id).fadeOut();
						num--;
						if(num == 0){
							$(".veiculos").html("<center><h4>Nenhum motorista cadastrado</h4></center>");
						}
					}else{
						$("#feedback").html("<div style='color:red;'>Ocorreu um erro, tente novamente mais tarde</div>");
						hidemessage("#feedback");
					}
				}, error: function(e){
					console.log(e);
				}
			})
		});
	});
</script>