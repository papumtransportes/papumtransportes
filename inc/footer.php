		<div class="portfolio-modal modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
		   	<div class="modal-dialog">
		      	<div class="modal-content">
		         	<div class="close-modal" data-dismiss="modal">
		            	<div class="lr">
		               		<div class="rl"></div>
		            	</div>
		         	</div>
		         	<div class="container login">
		           	 	<div class="row">
		               		<div class="col-lg-8 mx-auto">
		                  		<div class="modal-body">
		                  			<form action="" method="post" enctype="multipart/form-data" id="login">
		                  				<div class="col-md-12">
			                     			<h3>Login</h3>
			                     		</div>
			                     		<div class="col-md-12" id="feedback">
			                     		</div>
			                     		<div class="col-md-12">
			                     			<input type="text" class="haruki" name="login" id="login_l" placeholder="Meu login: "/>
			                     		</div>
			                     		<div class="col-md-12">
			                     			<input type="password" class="haruki" name="password" id="password_l" placeholder="Sua senha: "/>
			                     		</div>
			                     		<div class="col-md-12">
			                     			<br>
			                     			<a href="#!" class='select-categoria'>Deseja se cadastrar?</a>
			                     			<br>
			                     		</div>
			                     		<div class="col-md-12">
			                     			<input type="submit" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" value="Login"/>
			                     		</div>
		                  			</form>
		                     	</div>
		                  	</div>
		               	</div>
		            </div>
		            <div class="container categoria">
		            	<div class="row">
		            		<div class="col-lg-8 mx-auto">
			            		<div class="modal-body">
			            			<div class="row">
			            				<div class="col-md-12">
			            						<h3>Escolha um tipo de usuário</h3>
			            					</div>
			            				<div class="element col-md-6">
											<div class="view project_descr center">
												<h3><a href="#!" class='select-tipo' id='cliente'><i class="fa fa-user" style="font-size:96px;" aria-hidden="true"></i> <br>Cliente</a></h3>
											</div>
										</div>
										<div class="element  col-md-6">
											<div class="view project_descr center" >
												<h3><a href="#!" class='select-tipo' id='transportadora'><i class="fa fa-truck" style="font-size:96px;"></i><br>Transportador</a></h3>
											</div>
										</div>
										<div class="element col-md-12">
											<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger back-login">Voltar</a>
										</div>
			            			</div>
			            		</div>
		            		</div>
		            	</div>
		            </div>
		            <div class="container cliente">
		            	<div class="row">
		            		<div class="col-lg-8 mx-auto">
		            			<div class="modal-body">
		            				<form action="" method="post" enctype="multipart/form-data" id="cliente">
		            					<div class="row">
			            					<div class="col-md-12">
			            						<h3>Cadastro de Cliente</h3>
			            					</div>
				                     		<div class="col-md-12"><hr></div>
				                     		<div class="col-md-6">
				                     			<label>Nome:</label>
				                     			<input type='text' name='firstname' id='firstname_c' class='haruki' placeholder='Digite seu Nome' required="required"/>
				                     		</div>
				                     		<div class="col-md-6">
				                     			<label>Sobrenome:</label>
				                     			<input type='text' name='lastname' id='lastname_c' class='haruki' placeholder='Digite seu Sobrenome' required="required"/>
				                     		</div>
				                     		<div class="col-md-6">
				                     			<label>CPF:</label>
				                     			<input type='text' name='cpf' id='cpf_c' class='haruki' placeholder='000.000.000-00' required="required"/>
				                     		</div>
				                     		<div class="col-md-6">
				                     			<label>RG:</label>
				                     			<input type='text' name='cpf' id='rg_c' class='haruki' placeholder='00.000.000-0' required="required"/>
				                     		</div>
				                     		<div class="col-md-6">
				                     			<label>Data de Nacimento:</label>
				                     			<input type='date' name='dtnasci' id='dtnasci_c' class='haruki' placeholder='00/00/0000' required='required'>
				                     		</div>
				                     		<div class="col-md-6">
				                     			<label>Sexo:</label>
					                     		<select class='haruki escolha'>
													<option>F</option>
													<option>M</option>
												</select>
											</div>
											<div class="col-md-12"><hr></div>
											<div class="col-md-6">
												<label>Telefone:</label>
												<input type='text' name='telefone' id='telefone_c' class='haruki' placeholder='(xx) xxxx - xxxxx' required="required"/>
											</div>
											<div class="col-md-6">
												<label>Celular:</label>
												<input type='text' name='celular' id='celular_c' class='haruki' placeholder='(xx) xxxx - xxxxx' required="required"/>
											</div>
											<div class="col-md-6">
												<label>Email:</label>
												<input type='email' id='email_c' name='email' class='haruki' placeholder='Digite seu E-mail' required='required'/>
											</div>
											<div class="col-md-6">
												<label>Confirme seu Email:</label>
												<input type='email' id='cemail_c' name='email' class='haruki' placeholder='Digite seu E-mail' required='required'/>
											</div>
											<div class="col-md-6">
												<label>Senha:</label>
												<input type='password' name='password_c' id='password_c' class='haruki' placeholder='Digite sua Senha' required="required"/>
											</div>
											<div class="col-md-6">
												<label>Confirme sua Senha:</label>
												<input type='password' name='confpass_c' id='confpass_c' class='haruki' placeholder='Confirme sua Senha' required="required"/>
											</div>
											<div class="col-md-12">
												<p>
													Ao cadastrar-se, você aceita os Termos de Serviço da PAPUM e a Política de Privacidade. Ao completar o seu cadastro, você concorda em ser notificado pela PAPUM sobre informações do site, e-mails transacionais e promoções selecionadas. Nós não vendemos, alugamos ou compartilhamos o seu e-mail você pode optar por se descadastrar a qualquer momento.e 
												</p>
											</div>
											<div class="col-md-12" id="feedback_c">
				                     		</div>
											<div class="col-md-12">
												<input type="submit" class="btn btn-primary btn-xl btn-cliente text-uppercase js-scroll-trigger" value="Cadastrar"/>
											</div>
											<div class="element col-md-12">
												<br><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger back-categoria">Voltar</a>
											</div>
				                     	</div>
		            				</form>
		            			</div>
		            		</div>
		            	</div>
		            </div>
		            <div class="container transportadora">
		            	<div class="row">
		            		<div class="col-lg-8 mx-auto">
		            			<div class="modal-body">
		            				<form action="" method="post" enctype="multipart/form-data" id="transportadora">
		            					<div class="row">
		            						<div class="col-md-12">
			            						<h3>Cadastro de Transportadora</h3>
			            					</div>
			            					<div class="col-md-6">
			            						<label>Nome:</label>
			            						<input type='text' id='firstname_t' name='firstname' class='haruki' placeholder='Digite o nome Fantasia' required='required'/>
			            					</div>
			            					<div class="col-md-6">
			            						<label>Razão Social:</label>
			            						<input type='text' id='lastname_t' name='lastname' class='haruki' placeholder='Digite a Razão Social' required='required'/>
			            					</div>
			            					<div class="col-md-12">
			            						<hr>
			            					</div>
			            					<div class="col-md-12">
			            						<label>CNPJ:</label>
			            						<input type='text' name='cnpj' id='cnpj_t' class='haruki' placeholder='Digite seu CNPJ' required="required"/>
			            					</div>
			            					<div class="col-md-12">
			            						<hr>
			            					</div>
			            					<div class="col-md-6">
			            						<label>Telefone:</label>
			            						<input type='text' id='telefone_t' name='telefone' class='haruki' placeholder='Digite seu Telefone' required='required'/>
			            					</div>
			            					<div class="col-md-6">
			            						<label>Celular:</label>
			            						<input type='text' name='celular' id='celular_t' class='haruki' placeholder='Digite seu Celular' required="required"/>
			            					</div>
			            					<div class="col-md-6">
			            						<label>Email:</label>
			            						<input type='email' id='email_t' name='email' class='haruki' placeholder='Digite seu E-mail' required='required'/>
			            					</div>
			            					<div class="col-md-6">
			            						<label>Confirme seu email:</label>
			            						<input type='email' id='cemail_t' name='email' class='haruki' placeholder='Confirme seu E-mail' required='required'/>
			            					</div>
			            					<div class="col-md-6">
			            						<label>Senha:</label>
			            						<input type='password' name='password' id='password_t' class='haruki' placeholder='Digite sua Senha' required="required"/>
			            					</div>
			            					<div class="col-md-6">
			            						<label>Confirme sua Senha:</label>
			            						<input type='password' name='confpass' id='confpass_t' class='haruki' placeholder='Confirme sua Senha' required="required"/>
			            					</div>
			            					<div class="col-md-12">
												<p>
													Ao cadastrar-se, você aceita os Termos de Serviço da PAPUM e a Política de Privacidade. Ao completar o seu cadastro, você concorda em ser notificado pela PAPUM sobre informações do site, e-mails transacionais e promoções selecionadas. Nós não vendemos, alugamos ou compartilhamos o seu e-mail você pode optar por se descadastrar a qualquer momento.e 
												</p>
											</div>
											<div class="col-md-12" id="feedback_t">
				                     		</div>
											<div class="col-md-12">
												<input type="submit" class="btn btn-primary btn-xl btn-transportadora text-uppercase js-scroll-trigger" value="Cadastrar"/>
											</div>
											<div class="element col-md-12">
												<br><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger back-categoria">Voltar</a>
											</div>
		            					</div>
		            				</form>
		            			</div>
		            		</div>
		            	</div>
		            </div>
		            <div class="container email">
		            	<div class="row">
		            		<div class="col-lg-8 mx-auto">
		            			<div class="modal-body">
		            				<h3>Cadastro efetuado com sucesso</h3>
									<p>Foi enviada uma confirmação de email para <span class='send'></span></p>
		            			</div>
		            		</div>
		            	</div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>

		<script type="text/javascript" src="<?php echo BASE; ?>vendor/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>js/jquery.dataTables.min.js"></script>	
		<script type="text/javascript" src="<?php echo BASE; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>	
		<script type="text/javascript" src="<?php echo BASE; ?>vendor/jquery-easing/jquery.easing.min.js"></script>	

		<script type="text/javascript" src="<?php echo BASE; ?>js/jqBootstrapValidation.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>js/contact_me.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>js/jquery.mask.js"></script>

		<script type="text/javascript" src="<?php echo BASE; ?>js/functions.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>js/agency.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>js/script.js"></script>
	</body>
</html>