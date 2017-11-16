var prefixo;

function meu_callback(conteudo){
	if(!("erro" in conteudo)){

		$("#rua_"+prefixo).val(conteudo.logradouro);
		$("#bairro_"+prefixo).val(conteudo.bairro);
		$("#cidade_"+prefixo).val(conteudo.localidade);
		$("#estado_"+prefixo).val(conteudo.uf);
		/*
		document.getElementById("rua").value(conteudo.logradouro);
		document.getElementById("bairro").value(conteudo.bairro);
		document.getElementById("cidade").value(conteudo.cidade);
		document.getElementById("estado").value(conteudo.uf);
		*/
	}else{
		limpa_formulario_cep();
		alert("CEP não encontrado");
	}
}

$(function(){

	var url = "http://localhost/tcc/";
	var type = "";
	var current_fs, next_fs, previous_fs;
	var left, opacity, scale;
	var animating;
	var numitems = 1;
	var step = 1;
	var atual = "";
	var categoria = "";
	var subcategoria = "";
	var menu = false;
	var cadastro = false;
	var motorista = false;

	function getAnuncios(){
		$.ajax({
			type: 'POST',
			url: url+'sys/Anuncio/carregar',
			dataType: 'json',
			success: function(retorno){
				if(retorno.status == "ok"){
					var html = "<h3>Anúncios Pendentes</h3><table class='table'>";
					html += "<thead class='small-text'><tr><th>#</th><th>Titulo</th><th>Data de Anúncio</th><th>Categoria</th><th>Subcategoria</th><th>Ações</th></tr></thead><tbody>";
					$.each(retorno.results, function(i, value){
						html += "<tr><td>"+value.id+"</td><td>"+value.titulo+"</td><td>"+value.created_at+"</td><td>"+value.categoria+"</td><td>"+value.subcategoria+"</td><td><a href='' class='view' id='"+value.id+"'>Ver mais</a></td></tr>";
					});
					html += "</tbody></table>";
					$(".anuncios").html(html);
					$(".anuncios table").dataTable({
						language: {
						    "sEmptyTable": "Nenhum registro encontrado",
						    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
						    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
						    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
						    "sInfoPostFix": "",
						    "sInfoThousands": ".",
						    "sLengthMenu": "_MENU_ resultados por página",
						    "sLoadingRecords": "Carregando...",
						    "sProcessing": "Processando...",
						    "sZeroRecords": "Nenhum registro encontrado",
						    "sSearch": "Pesquisar",
						    "oPaginate": {
						        "sNext": "Próximo",
						        "sPrevious": "Anterior",
						        "sFirst": "Primeiro",
						        "sLast": "Último"
						    },
						    "oAria": {
						        "sSortAscending": ": Ordenar colunas de forma ascendente",
						        "sSortDescending": ": Ordenar colunas de forma descendente"
						    }
						},
						responsive: true
					});
				}else{
					$(".anuncios").html("<center><h3>Nenhum Anúncio em Andamento</h3></center>");
				}
			}, error: function(e){
				console.log(e);
			}
		});
	}

	function setDados(dados){
		if(dados.level == 0){
			localStorage.setItem("fullname", dados.fullname);
			localStorage.setItem("cpf", dados.cpf);
			localStorage.setItem("rg", dados.rg);
			localStorage.setItem("datanasc", dados.datanasc);
			localStorage.setItem("email", dados.email);
			localStorage.setItem("telefone", dados.telefone);
			localStorage.setItem("celular", dados.celular);
			localStorage.setItem("level", dados.level);
		}else{
			localStorage.setItem("fullname", dados.fullname);
			localStorage.setItem("razao", dados.razao);
			localStorage.setItem("email", dados.email);
			localStorage.setItem("celular", dados.celular);
			localStorage.setItem("telefone", dados.telefone);
			localStorage.setItem("cnpj", dados.cnpj);
			localStorage.setItem("level", dados.level);
		}
	}

	function limpa_formulario_cep(){
		document.getElementById('rua').value=("");
        document.getElementById('bairro').value=("");
       	document.getElementById('cidade').value=("");
        document.getElementById('estado').value=("");
	}

	function pesquisacep(valor, prefix){
		var cep = valor.replace(/\D/g, '');
		if(cep != ""){

			prefixo = prefix;

			var validacep = /^[0-9]{8}$/;

			if(validacep.test(cep)){
				document.getElementById('rua_'+prefix).value="...";
                document.getElementById('bairro_'+prefix).value="...";
                document.getElementById('cidade_'+prefix).value="...";
                document.getElementById('estado_'+prefix).value="...";

                var script = document.createElement('script');

                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
                
                document.body.appendChild(script);
			}else{
				limpa_formulario_cep();
                alert("Formato de CEP inválido.");
			}
		}else{
			limpa_formulario_cep();
		}
	}

	$(document).on("change", "#cep_e, #cep_r", function(){
		var prefix = $(this).attr("id");
		prefix = prefix.split("_")[1];
		pesquisacep($(this).val(), prefix);
	});

	$(".menu-toggle").click(function(){
		if(menu == false){
			$(".menu-side").fadeIn();
			$(this).html("<i class='fa fa-close'></i>");
			menu = true;
		}else{
			$(".menu-side").fadeOut();
			menu = false;
			$(this).html("<i class='fa fa-reorder'></i>");
		}


		return false;
	});

	$("#cpf_c").mask("999.999.999-99");
	$("#rg_c").mask("99.999.999-9");
	$("#telefone_c, #telefone_t, #phone").mask("(99)9999-9999");
	$("#celular_c, #celular_t").mask("(99)99999-9999");
	$("#cnpj_t").mask("99.999.999/9999-99");

	$(".m").click(function(e){
		e.preventDefault();
		$(".email").hide();
		if(type != ""){
			$("."+type).hide();
		}
		$(".categoria").hide();
		$(".login").show();
		$("#login").modal("toggle");
		return false;
	});

	$(".select-categoria").click(function(e){
		e.preventDefault();

		$(".login").hide();
		$(".categoria").fadeIn();

		return false;
	});

	$(".back-login").click(function(e){
		e.preventDefault();

		$(".categoria").hide();
		$(".login").fadeIn();

		return false;
	});

	$(".select-tipo").click(function(e){
		e.preventDefault();

		type = $(this).attr('id');

		$(".categoria").hide();
		$("."+type).fadeIn();

		return false;
	});

	$(".back-categoria").click(function(e){
		$(".categoria").fadeIn();
		e.preventDefault();

		$("."+type).hide();

		return false;
	});
	
	$(document).on("click",".page",function(e){
		e.preventDefault();

		numitems = 1;

		var page = $(this).attr("id");
		var fullname = localStorage.getItem("fullname");
		var cpf = localStorage.getItem("cpf");
		var rg = localStorage.getItem("rg");
		var datanasc = localStorage.getItem("datanasc");
		var telefone = localStorage.getItem("telefone");
		var celular = localStorage.getItem("celular");
		var email = localStorage.getItem("email");
		var largura = $(document).width();

		if(atual == page){
			return false;
		}

		var perfil = "";
		if(localStorage.getItem("level") == 0){
			perfil += '<div class="details-profile">';
			perfil += '<h3>'+localStorage.getItem("fullname")+'</h3>';
			perfil += '<p>CPF: '+localStorage.getItem("cpf")+'</p>';
			perfil += '<p>RG: '+localStorage.getItem("rg")+'</p>';
			perfil += '<p>Data de Nascimento: '+localStorage.getItem("datanasc")+'</p>';
			perfil += '<p>Telefone: '+localStorage.getItem("telefone")+'</p>';
			perfil += '<p>Celular: '+localStorage.getItem("celular")+'</p>';
			perfil += '<p>Email: '+localStorage.getItem("email")+'</p>';
			perfil += '</div>';
		}else{
			perfil += '<div class="details-profile">';
			perfil += '<h3>'+localStorage.getItem("fullname")+'</h3>';
			perfil += '<p>Razão Social: '+localStorage.getItem("razao")+'</p>';
			perfil += '<p>CNPJ: '+localStorage.getItem("cnpj")+'</p>';
			perfil += '<p>Telefone: '+localStorage.getItem("telefone")+'</p>';
			perfil += '<p>Celular: '+localStorage.getItem("celular")+'</p>';
			perfil += '<p>Email: '+localStorage.getItem("email")+'</p>';
			perfil += '</div>';
		}

		if(page == "profile"){
			$(".perfil").html('<div class="container-fluid"><div class="row"><div class="col-md-12"><div class="card"><div class="profile">'+perfil+'<a class="btn btn-primary btn-xl page" id="edit">Editar Perfil</a></div></div></div><div class="col-md-12"><div class="card anuncios"><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div></div></div></div>');
			getAnuncios()
		}else{
			$(".perfil").load(url+'pages/'+page+'.php');
		}

		if(largura <= 1085){
			$(".menu-side").fadeOut();
			$(".menu-toggle").html("<i class='fa fa-reorder'></i>");
			menu = false;
		}else{
			$(".menu-side").show();
		}

		cadastro = false;
		motorista = false;


		$.ajax({
			type: 'POST',
			url: url+'sys/Anuncio/categorias',
			dataType: 'json',
			success: function(retorno){
				console.log(retorno);
				if(retorno.status == "ok"){
					var html = "<ul class='collection'>";
					$.each(retorno.results, function(i, value){
						html += "<li class='collection-item'>";
						html += '<div class="md-radio md-radio-inline"><input type="radio" name="categoria" id="'+value.id+'" value="'+value.id+'"/><label for="'+value.id+'">'+value.categoria+'</label></div><p>Anúncios nessa categoria: '+value.views+'</p>';
						html += "</li>";
					});
					html += "</ul>";
					$(".categorias").html(html);
				}else{
					$(".categorias").html("<center><h4>Nenhuma categoria cadastrada</h4></center>");
				}
			}, error: function(e){
				console.log(e);
			}
		});

		atual = page;

		return false;
	});

	$(document).on("click", ".adicionar-item", function(){
		numitems++;
		var add = '<div class="item" id="'+numitems+'"><div class="row"><div class="col-md-12"><h3>Item '+numitems+'</h3></div><div class="col-md-12"><label>Nome do Item</label><input type="text" id="nome_'+numitems+'" class="form-control input-md" style="width:100%"></div><div class="col-md-3"><label>Comp</label><input type="text" id="comp_'+numitems+'" class="form-control input-md" style="width:100%"></div><div class="col-md-3"><label>Largura</label><input type="text" id="largura_'+numitems+'" class="form-control input-md" style="width:100%"></div><div class="col-md-3"><label>Altura</label><input type="text" id="altura_'+numitems+'" class="form-control input-md" style="width:100%"></div><div class="col-md-3"><div class="form-group"><label for="sel1">Medida</label><select class="form-control" id="sel1_'+numitems+'"><option>M</option><option>CM</option></select></div></div><div class="col-md-6"><label>Peso</label><input type="text" id="peso_'+numitems+'" class="form-control input-md"></div><div class="col-md-6"><label>Quantidade</label><input type="text" id="quantidade_'+numitems+'" class="form-control input-md"></div></div></div>';
		$(".items").append(add);
	});

	$(document).on("change", "input[name=categoria]", function(){
		var categoria = $(this).attr('id');
		$.ajax({
			type: 'POST',
			url: url+'sys/Anuncio/subcategorias',
			dataType: 'json',
			data: {
				id_categoria: categoria
			}, success: function(retorno){
				if(retorno.status == "ok"){
					var html = "<ul class='collection'>";
					$.each(retorno.results, function(i, value){
						html += "<li class='collection-item'>";
						html += '<div class="md-radio md-radio-inline"><input type="radio" name="subcategoria" id="'+value.id+'" value="'+value.id+'"/><label for="'+value.id+'">'+value.subcategoria+'</label></div><p>Anúncios nessa subcategoria: '+value.views+'</p>';
						html += "</li>";
					});
					html += "</ul>";
					$(".subcategorias").html(html);
				}else{
					$(".subcategorias").html("<center><h4>Nenhuma subcategoria cadastrada</h4></center>");
				}
			}
		});
	});

	$(document).on("click", ".next", function(){
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();

		categoria = $("input[name=categoria]:checked").val();
		subcategoria = $("input[name=subcategoria]:checked").val();

		if(step == 1 && categoria == ""){
			$("#feedback").html("<div style='color:red;'>Você deve selecionar uma categoria</div>");
			hidemessage("#feedback");
			return false;
		}else if(step == 2 && subcategoria == ""){
			$("#feedback").html("<div style='color:red;'>Você deve selecionar uma subcategoria</div>");
			hidemessage("#feedback");
			return false;
		}

		$("#cep").mask("99999-999");
		
		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		
		//show the next fieldset
		next_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50)+"%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'transform': 'scale('+scale+')'});
				next_fs.css({'left': left, 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
		step++;
	});

	$(document).on("click", ".previous", function(){
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();

		previous_fs = $(this).parent().prev();
		
		//de-activate current step on progressbar
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
		
		//show the previous fieldset
		previous_fs.show(); 
		//hide the current fieldset with style
		current_fs.animate({opacity: 0}, {
			step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1-now) * 50)+"%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({'left': left});
				previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
			}, 
			duration: 800, 
			complete: function(){
				current_fs.hide();
				animating = false;
			}, 
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

	$(document).on("submit", "#edit", function(e){
		e.preventDefault();

		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var cpf = $("#cpf").val();
		var rg = $("#rg").val();
		var datanasc = $("#datanasc").val();
		var sexo = $("#sexo").val();
		var telefone = $("#telefone").val();
		var celular = $("#celular").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var confpass = $("#confpass").val();

		if(firstname == "" || lastname == "" || cpf == "" || rg == "" || datanasc == "" || sexo == "" || telefone == "" || celular == "" || email == ""){
			$("#feedback").html("<div style='color:red;'>Você deve preencher os campos obrigatórios</div>");
			hidemessage("#feedback");
			return false;
		}

		if(password != confpass){
			$("#feedback").html("<div style='color:red;'>As senhas não estão conferindo</div>");
			hidemessage("#feedback");
			return false;
		}

		if(password.length < 8 && password != ""){
			$("#feedback").html("<div style='color:red;'>A senha deve ser maior que 8 digitos</div>");
			hidemessage("#feedback");
			return false;
		}

		$.ajax({
			type: 'POST',
			url: url+'sys/User/edit',
			dataType: 'json',
			data: {
				firstname: firstname,
				lastname: lastname,
				cpf: cpf,
				rg: rg,
				datanasc: datanasc,
				sexo: sexo,
				telefone: telefone,
				celular: celular,
				email: email,
				password: password
			}, success: function(retorno){
				if(retorno == true){
					$("#feedback").html("<div style='color:green;'>Perfil alterado com sucesso</div>");
					hidemessage("#feedback");
				}else{
					$("#feedback").html("<div style='color:red;'>Ocorreu um erro, tente novamente mais tarde</div>");
					hidemessage("#feedback");
				}
			}
		})

		return false;
	});

	$(".anuncios").ready(function(){
		getAnuncios();
	});

	$(document).on("click", ".motorista", function(){
		if(motorista == false){
			$(".cadastro").slideDown();
			motorista = true;
		}else{
			$(".cadastro").slideUp();
			motorista = false;
		}
	});

	$(document).on("click", ".veiculo", function(){
		if(cadastro == false){
			$(".cadastro").slideDown();
			cadastro = true;
		}else{
			$(".cadastro").slideUp();
			cadastro = false;
		}
	});

	$("#login").submit(function(e){
		e.preventDefault();

		var login = $("#login_l").val();
		var senha = $("#password_l").val();

		if(login == "" || senha == ""){
			$("#feedback").html("<div style='color:red;'>Voce deve preencher login e senha</div>");
			hidemessage("#feedback");
			return false;
		}

		$.ajax({
			type: 'POST',
			url: url+'sys/User/login',
			dataType: 'json',
			data: {
				login: login,
				senha: senha
			},
			success: function(retorno){
				if(retorno.status == true){
					setDados(retorno.results);
					$(".ml-auto").html('<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Serviços</a></li><li class="nav-item"><a class="nav-link js-scroll-trigger" href="#categorias">Categorias</a></li><li class="nav-item"><a class="nav-link js-scroll-trigger" href="#sobre">Sobre</a></li><li class="nav-item"> <a class="nav-link js-scroll-trigger" href="profile">Meu Perfil</a></li><li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contato">Contato</a></li>');
					$('#login').modal('toggle');
				}else{
					$("#feedback").html("<div style='color:red;'>Login ou Senha Incorretos</div>");
					hidemessage("#feedback");
				}
			}, error: function(e){
				console.log(e);
			}
		})

		return false;
	});

	$(".btn-cliente").click(function(e){
		e.preventDefault();

		var firstname = $("#firstname_c").val();
		var lastname = $("#lastname_c").val();
		var cpf = $("#cpf_c").val();
		var rg = $("#rg_c").val();
		var datanasc = $("#dtnasci_c").val();
		var sexo = $(".escolha").val();
		var telefone = $("#telefone_c").val();
		var celular = $("#celular_c").val();
		var email = $("#email_c").val();
		var cemail = $("#cemail_c").val();
		var password = $("#password_c").val();
		var confpass = $("#confpass_c").val();

		if(firstname == "" || lastname == "" || cpf == "" || rg == "" || datanasc == "" || sexo == "" || telefone == "" || celular == "" || email == "" || cemail == "" || password == "" || confpass == ""){
			$("#feedback_c").html("<div style='color:red;'>Voce deve preencher todos os campos</div>");
			hidemessage("#feedback_c");
			return false;
		}

		if(email != cemail){
			$("#feedback_c").html("<div style='color:red;'>Os emails informados não estão conferindo</div>");
			hidemessage("#feedback_c");
			return false;
		}

		if(password != confpass){
			$("#feedback_c").html("<div style='color:red;'>As senhas informadas não estão conferindo</div>");
			hidemessage("#feedback_c");
			return false
		}

		if(password.length < 8){
			$("#feedback_c").html("<div style='color:red;'>Sua senha deve ter no mínimo 8 dígitos</div>");
			hidemessage("#feedback_c");
			return false;
		}

		$.ajax({
			type: 'POST',
			url: url+'sys/User/cliente',
			dataType: 'json',
			data: {
				firstname: firstname,
				lastname: lastname,
				cpf: cpf,
				rg: rg,
				datanasc: datanasc,
				sexo: sexo,
				telefone: telefone,
				celular: celular,
				email: email,
				password: password,
				level: 0
			}, success: function(retorno){
				console.log(retorno);
				if(retorno == true){
					$(".send").text(email);
					$("."+type).hide();
					$(".email").fadeIn();
				}else if(retorno == "existe"){
					$("#feedback_c").html("<div style='color:red;'>Já existe uma conta com esses dados</div>");
					hidemessage("#feedback_c");
				}else{
					$("#feedback_c").html("<div style='color:red;'>Ocorreu um erro, tente novamente mais tarde</div>");
					hidemessage("#feedback_c");
				}
			}, error: function(e){
				console.log(e);
			}
		})

		return false;
	});

	$(".btn-transportadora").click(function(e){
		e.preventDefault();

		var firstname = $("#firstname_t").val();
		var lastname = $("#lastname_t").val();
		var cnpj = $("#cnpj_t").val();
		var telefone = $("#telefone_t").val();
		var celular = $("#celular_t").val();
		var email = $("#email_t").val();
		var cemail = $("#cemail_t").val();
		var password = $("#password_t").val();
		var confpass = $("#confpass_t").val();

		if(firstname == "" || lastname == "" || cnpj == "" || telefone == "" || telefone == "" || email == "" || cemail == "" || password == "" || confpass == ""){
			$("#feedback_t").html("<div style='color:red;'>Voce deve preencher todos os campos</div>");
			hidemessage("#feedback_t");
			return false;
		}

		if(email != cemail){
			$("#feedback_t").html("<div style='color:red;'>Os emails informados não estão conferindo</div>");
			hidemessage("#feedback_t");
			return false;
		}

		if(password != confpass){
			$("#feedback_t").html("<div style='color:red;'>As senhas informadas não estão conferindo</div>");
			hidemessage("#feedback_t");
			return false
		}

		if(password.length < 8){
			$("#feedback_t").html("<div style='color:red;'>Sua senha deve ter no mínimo 8 dígitos</div>");
			hidemessage("#feedback_t");
			return false
		}

		$.ajax({
			type: 'POST',
			url: url+'sys/User/transportadora',
			dataType: 'json',
			data: {
				firstname: firstname,
				lastname: lastname,
				cnpj: cnpj,
				telefone: telefone,
				celular: celular,
				email: email,
				password: password,
				level: 1
			}, success: function(retorno){
				if(retorno == true){
					$(".send").text(email);
					$("."+type).hide();
					$(".email").fadeIn();
				}else if(retorno == "existe"){
					$("#feedback_t").html("<div style='color:red;'>Já existe uma conta com esses dados</div>");
					hidemessage("#feedback_t");
				}else{
					$("#feedback_c").html("<div style='color:red;'>Ocorreu um erro, tente novamente mais tarde</div>");
					hidemessage("#feedback_t");
				}
			}, error: function(e){
				console.log(e);
			}
		})

		return false;
	});

	$(document).on("submit", "#veiculo", function(e){
		e.preventDefault();

		var renavam = $("#renavam").val();
		var chassi = $("#chassi").val();
		var placa = $("#placa").val();
		var modelo = $("#modelo").val();
		var marca = $("#marca").val();
		var anomodelo = $("#anomodelo").val();
		var anofabricacao = $("#anofabricacao").val();
		var categoria = $("#categoria").val();
		var comentario = $("#comentario").val();

		if(renavam == "" || chassi == "" || placa == "" || modelo == "" || marca == "" || anomodelo == "" || anofabricacao == "" || categoria == ""){
			$("#feedback").html("<div style='color:red;'>Voce deve preencher todos os campos obrigatórios</div>");
			hidemessage("#feedback");
			return false;
		}

		$.ajax({
			type: 'POST',
			url: url+'sys/Veiculo/register',
			dataType: 'json',
			data: {
				renavam: renavam,
				chassi: chassi,
				placa: placa,
				modelo: modelo,
				marca: marca,
				anomodelo: anomodelo,
				anofabricacao: anofabricacao,
				categoria: categoria,
				comentario: comentario
			}, success: function(retorno){
				console.log(retorno);
				if(retorno == false){
					$("#feedback").html("<div style='color:red;'>Ocorreu um erro, tente novamente mais tarde</div>");
					hidemessage("#feedback");
				}else if(retorno == "existe"){
					$("#feedback").html("<div style='color:red;'>Já existe um veiculo cadastrado com essa placa</div>");
					hidemessage("#feedback");
				}else{
					var num = $(".veiculos li").length;

					console.log(num);

					$("#feedback").html("<div style='color:green;'>Veiculo cadastrado com sucesso</div>");
					$(".cadastro").slideUp();
					var html = "<li class='veiculo_"+retorno.results+"'>";
						html += '<div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>';
						html += '<div class="details">';
						html += '<strong><label>'+modelo+'</label></strong>';
						html += '<p>';
						html += 'Placa: '+placa+'<br>';
						html += 'Marca: '+marca+'<br>';
						html += 'Chassi: '+chassi+'<br>';
						html += 'Ano de Fabricação: '+anofabricacao+'<br>';
						html += 'Ano do Modelo: '+anomodelo+'<br>';
						html += 'Renavam: '+renavam+'<br>';
						html += '</p>';
						html += '</div>';
						html += '<a class="delete" id="'+retorno.results+'"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
						html += "</li>";

					if(num == 0){
						html = "<ul class='list-items'>"+html+"</ul>";
						$(".veiculos").html(html);
					}else{
						$(".veiculos ul").append(html);
					}

					cadastro = false;
					hidemessage("#feedback");
				}
			}, error: function(e){
				console.log(e);
			}
		});

		return false;
	});

	$(document).on("submit", "#motorista", function(e){
		e.preventDefault();

		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var rg = $("#rg").val();
		var oe = $("#oe").val();
		var cpf = $("#cpf").val();
		var nregistro = $("#nregistro").val();
		var cathab = $("#cathab").val();
		var validade = $("#validade").val();

		if(firstname == "" || lastname == "" || rg == "" || oe == "" || cpf == "" || nregistro == "" || cathab == "" || validade == ""){
			$("#feedback").html("<div style='color:red;'>Voce deve preencher todos os campos obrigatórios</div>");
			hidemessage("#feedback");
			return false;
		}

		$.ajax({
			type: 'POST',
			url: url+'sys/Motorista/register',
			dataType: 'json',
			data: {
				firstname: firstname,
				lastname: lastname,
				rg: rg,
				oe: oe,
				cpf: cpf,
				nregistro: nregistro,
				cathab: cathab,
				validade: validade
			}, success: function(retorno){
				console.log(retorno);
				if(retorno == false){
					$("#feedback").html("<div style='color:red;'>Ocorreu um erro, tente novamente mais tarde</div>");
					hidemessage("#feedback");
				}else if(retorno == "existe"){
					$("#feedback").html("<div style='color:red;'>Já existe um motorista cadastrado com esses dados</div>");
					hidemessage("#feedback");
				}else{
					var num = $(".motoristas li").length;

					$("#feedback").html("<div style='color:green;'>Veiculo cadastrado com sucesso</div>");
					$(".cadastro").slideUp();
					var html = "<li class='motorista_"+retorno.results+"'>";
						html += '<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>';
						html += '<div class="details">';
						html += '<strong><label>'+firstname+' '+lastname+'</label></strong>';
						html += '<p>';
						html += 'RG: '+rg+'<br>';
						html += 'OE: '+oe+'<br>';
						html += 'CPF: '+cpf+'<br>';
						html += 'Nº Registro: '+nregistro+'<br>';
						html += 'Categoria da Carteira: '+cathab+'<br>';
						html += 'Validade: '+validade+'<br>';
						html += '</p>';
						html += '</div>';
						html += '<a class="delete" id="'+retorno.results+'"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
						html += "</li>";

					if(num == 0){
						html = "<ul class='list-items'>"+html+"</ul>";
						$(".motoristas").html(html);
					}else{
						$(".motoristas ul").append(html);
					}

					motorista = false;
				}
			}, error: function(e){
				console.log(e);
			}
		})

		return false;
	});

});