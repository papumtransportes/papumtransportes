		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		   <div class="container">
		      <a class="navbar-brand js-scroll-trigger" href="home">Papum Transportes</a>
		      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		      Menu
		      <i class="fa fa-bars"></i>
		      </button>
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		         <ul class="navbar-nav text-uppercase ml-auto">
		            <li class="nav-item">
		               <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
		            </li>
		            <li class="nav-item">
		               <a class="nav-link js-scroll-trigger" href="#categorias">Categorias</a>
		            </li>
		            <li class="nav-item">
		               <a class="nav-link js-scroll-trigger" href="#sobre">Sobre</a>
		            </li>
		            <?php if(!isset($_SESSION['id_user'])){ ?>
		            <li class="nav-item">
		               <a class="nav-link js-scroll-trigger m" data-toggle="modal" href="#login">Login</a>
		            </li>
		            <li class="nav-item">
		               <a class="nav-link js-scroll-trigger m" data-toggle="modal" href="#login">Cadastro</a>
		            </li>
		           	<?php }else{ ?>
		           	<li class="nav-item">
		               <a class="nav-link js-scroll-trigger" href="profile">Meu perfil</a>
		            </li>
		           	<?php } ?>
		            <li class="nav-item">
		               <a class="nav-link js-scroll-trigger" href="#contato">Contato</a>
		            </li>
		         </ul>
		      </div>
		   </div>
		</nav>
		<!-- Header -->
		<header class="masthead">
		   <div class="container">
		      <div class="intro-text">
		         <div class="intro-lead-in">Transporte Seguro.</div>
		         <div class="intro-heading text-uppercase">Sempre ao seu alcance.</div>
		         <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Saiba mais</a>
		      </div>
		   </div>
		</header>
		<!-- Services -->
		<section id="services">
		   <div class="container">
		      <div class="row">
		         <div class="col-lg-12 text-center">
		            <h2 class="section-heading text-uppercase">Serviços</h2>
		            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		         </div>
		      </div>
		      <div class="row text-center">
		         <div class="col-md-4">
		            <span class="fa-stack fa-4x">
		            <i class="fa fa-circle fa-stack-2x text-primary"></i>
		            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
		            </span>
		            <h4 class="service-heading">E-Commerce</h4>
		            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
		         </div>
		         <div class="col-md-4">
		            <span class="fa-stack fa-4x">
		            <i class="fa fa-circle fa-stack-2x text-primary"></i>
		            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
		            </span>
		            <h4 class="service-heading">Responsive Design</h4>
		            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
		         </div>
		         <div class="col-md-4">
		            <span class="fa-stack fa-4x">
		            <i class="fa fa-circle fa-stack-2x text-primary"></i>
		            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
		            </span>
		            <h4 class="service-heading">Web Security</h4>
		            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
		         </div>
		      </div>
		   </div>
		</section>
		<!-- Portfolio Grid -->
		<section class="bg-light" id="categorias">
		   <div class="container">
		      <div class="row">
		         <div class="col-lg-12 text-center">
		            <h2 class="section-heading text-uppercase">Categorias</h2>
		            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		         </div>
		      </div>
		      <div class="row">
		         <div class="col-md-4 col-sm-6 portfolio-item">
		            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
		               <div class="portfolio-hover">
		                  <div class="portfolio-hover-content">
		                     <i class="fa fa-plus fa-3x"></i>
		                  </div>
		               </div>
		               <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
		            </a>
		            <div class="portfolio-caption">
		               <h4>Threads</h4>
		               <p class="text-muted">Illustration</p>
		            </div>
		         </div>
		         <div class="col-md-4 col-sm-6 portfolio-item">
		            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
		               <div class="portfolio-hover">
		                  <div class="portfolio-hover-content">
		                     <i class="fa fa-plus fa-3x"></i>
		                  </div>
		               </div>
		               <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
		            </a>
		            <div class="portfolio-caption">
		               <h4>Explore</h4>
		               <p class="text-muted">Graphic Design</p>
		            </div>
		         </div>
		         <div class="col-md-4 col-sm-6 portfolio-item">
		            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
		               <div class="portfolio-hover">
		                  <div class="portfolio-hover-content">
		                     <i class="fa fa-plus fa-3x"></i>
		                  </div>
		               </div>
		               <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
		            </a>
		            <div class="portfolio-caption">
		               <h4>Finish</h4>
		               <p class="text-muted">Identity</p>
		            </div>
		         </div>
		         <div class="col-md-4 col-sm-6 portfolio-item">
		            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
		               <div class="portfolio-hover">
		                  <div class="portfolio-hover-content">
		                     <i class="fa fa-plus fa-3x"></i>
		                  </div>
		               </div>
		               <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
		            </a>
		            <div class="portfolio-caption">
		               <h4>Lines</h4>
		               <p class="text-muted">Branding</p>
		            </div>
		         </div>
		         <div class="col-md-4 col-sm-6 portfolio-item">
		            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
		               <div class="portfolio-hover">
		                  <div class="portfolio-hover-content">
		                     <i class="fa fa-plus fa-3x"></i>
		                  </div>
		               </div>
		               <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
		            </a>
		            <div class="portfolio-caption">
		               <h4>Southwest</h4>
		               <p class="text-muted">Website Design</p>
		            </div>
		         </div>
		         <div class="col-md-4 col-sm-6 portfolio-item">
		            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
		               <div class="portfolio-hover">
		                  <div class="portfolio-hover-content">
		                     <i class="fa fa-plus fa-3x"></i>
		                  </div>
		               </div>
		               <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
		            </a>
		            <div class="portfolio-caption">
		               <h4>Window</h4>
		               <p class="text-muted">Photography</p>
		            </div>
		         </div>
		      </div>
		   </div>
		</section>
		<!-- About -->
		<section id="sobre">
		   <div class="container">
		      <div class="row">
		         <div class="col-lg-12 text-center">
		            <h2 class="section-heading text-uppercase">Sobre</h2>
		            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		         </div>
		      </div>
		      <div class="row">
		         <div class="col-lg-12">
		            <ul class="timeline">
		               <li>
		                  <div class="timeline-image">
		                     <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
		                  </div>
		                  <div class="timeline-panel">
		                     <div class="timeline-heading">
		                        <h4>2009-2011</h4>
		                        <h4 class="subheading">Our Humble Beginnings</h4>
		                     </div>
		                     <div class="timeline-body">
		                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
		                     </div>
		                  </div>
		               </li>
		               <li class="timeline-inverted">
		                  <div class="timeline-image">
		                     <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
		                  </div>
		                  <div class="timeline-panel">
		                     <div class="timeline-heading">
		                        <h4>March 2011</h4>
		                        <h4 class="subheading">An Agency is Born</h4>
		                     </div>
		                     <div class="timeline-body">
		                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
		                     </div>
		                  </div>
		               </li>
		               <li>
		                  <div class="timeline-image">
		                     <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
		                  </div>
		                  <div class="timeline-panel">
		                     <div class="timeline-heading">
		                        <h4>December 2012</h4>
		                        <h4 class="subheading">Transition to Full Service</h4>
		                     </div>
		                     <div class="timeline-body">
		                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
		                     </div>
		                  </div>
		               </li>
		               <li class="timeline-inverted">
		                  <div class="timeline-image">
		                     <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
		                  </div>
		                  <div class="timeline-panel">
		                     <div class="timeline-heading">
		                        <h4>July 2014</h4>
		                        <h4 class="subheading">Phase Two Expansion</h4>
		                     </div>
		                     <div class="timeline-body">
		                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
		                     </div>
		                  </div>
		               </li>
		               <li class="timeline-inverted">
		                  <div class="timeline-image">
		                     <h4>Be Part
		                        <br>Of Our
		                        <br>Story!
		                     </h4>
		                  </div>
		               </li>
		            </ul>
		         </div>
		      </div>
		   </div>
		</section>
		<!-- Contact -->
		<section id="contato">
		   <div class="container">
		      <div class="row">
		         <div class="col-lg-12 text-center">
		            <h2 class="section-heading text-uppercase">Contato</h2>
		            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
		         </div>
		      </div>
		      <div class="row">
		         <div class="col-lg-12">
		            <form id="contactForm" name="sentMessage" novalidate>
		               <div class="row">
		                  <div class="col-md-6">
		                     <div class="form-group">
		                        <input class="form-control" id="name" type="text" placeholder="Seu nome *" required data-validation-required-message="Please enter your name.">
		                        <p class="help-block text-danger"></p>
		                     </div>
		                     <div class="form-group">
		                        <input class="form-control" id="email" type="email" placeholder="Seu email *" required data-validation-required-message="Please enter your email address.">
		                        <p class="help-block text-danger"></p>
		                     </div>
		                     <div class="form-group">
		                        <input class="form-control" id="phone" type="tel" placeholder="Seu telefone *" required data-validation-required-message="Please enter your phone number.">
		                        <p class="help-block text-danger"></p>
		                     </div>
		                  </div>
		                  <div class="col-md-6">
		                     <div class="form-group">
		                        <textarea class="form-control" id="message" placeholder="Sua mensagem *" required data-validation-required-message="Por favor digite uma mensagem."></textarea>
		                        <p class="help-block text-danger"></p>
		                     </div>
		                  </div>
		                  <div class="clearfix"></div>
		                  <div class="col-lg-12 text-center">
		                     <div id="success"></div>
		                     <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar mensagem</button>
		                  </div>
		               </div>
		            </form>
		         </div>
		      </div>
		   </div>
		</section>
		<!-- Footer -->
		<footer>
		   <div class="container">
		      <div class="row">
		         <div class="col-md-4">
		            <span class="copyright">Copyright &copy; Papum Transportes 2017</span>
		         </div>
		         <div class="col-md-4">
		            <ul class="list-inline social-buttons">
		               <li class="list-inline-item">
		                  <a href="#">
		                  <i class="fa fa-twitter"></i>
		                  </a>
		               </li>
		               <li class="list-inline-item">
		                  <a href="#">
		                  <i class="fa fa-facebook"></i>
		                  </a>
		               </li>
		               <li class="list-inline-item">
		                  <a href="#">
		                  <i class="fa fa-linkedin"></i>
		                  </a>
		               </li>
		            </ul>
		         </div>
		         <div class="col-md-4">
		            <ul class="list-inline quicklinks">
		               <li class="list-inline-item">
		                  <a href="#">Privacy Policy</a>
		               </li>
		               <li class="list-inline-item">
		                  <a href="#">Terms of Use</a>
		               </li>
		            </ul>
		         </div>
		      </div>
		   </div>
		</footer>
		<!-- Portfolio Modals -->
		<!-- Modal 1 -->
		<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
		   <div class="modal-dialog">
		      <div class="modal-content">
		         <div class="close-modal" data-dismiss="modal">
		            <div class="lr">
		               <div class="rl"></div>
		            </div>
		         </div>
		         <div class="container">
		            <div class="row">
		               <div class="col-lg-8 mx-auto">
		                  <div class="modal-body">
		                     <!-- Project Details Go Here -->
		                     <h2 class="text-uppercase">Project Name</h2>
		                     <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
		                     <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
		                     <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
		                     <ul class="list-inline">
		                        <li>Date: January 2017</li>
		                        <li>Client: Threads</li>
		                        <li>Category: Illustration</li>
		                     </ul>
		                     <button class="btn btn-primary" data-dismiss="modal" type="button">
		                     <i class="fa fa-times"></i>
		                     Close Project</button>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
		<!-- Modal 2 -->
		<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
		   <div class="modal-dialog">
		      <div class="modal-content">
		         <div class="close-modal" data-dismiss="modal">
		            <div class="lr">
		               <div class="rl"></div>
		            </div>
		         </div>
		         <div class="container">
		            <div class="row">
		               <div class="col-lg-8 mx-auto">
		                  <div class="modal-body">
		                     <!-- Project Details Go Here -->
		                     <h2 class="text-uppercase">Project Name</h2>
		                     <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
		                     <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
		                     <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
		                     <ul class="list-inline">
		                        <li>Date: January 2017</li>
		                        <li>Client: Explore</li>
		                        <li>Category: Graphic Design</li>
		                     </ul>
		                     <button class="btn btn-primary" data-dismiss="modal" type="button">
		                     <i class="fa fa-times"></i>
		                     Close Project</button>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
		<!-- Modal 3 -->
		<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
		   <div class="modal-dialog">
		      <div class="modal-content">
		         <div class="close-modal" data-dismiss="modal">
		            <div class="lr">
		               <div class="rl"></div>
		            </div>
		         </div>
		         <div class="container">
		            <div class="row">
		               <div class="col-lg-8 mx-auto">
		                  <div class="modal-body">
		                     <!-- Project Details Go Here -->
		                     <h2 class="text-uppercase">Project Name</h2>
		                     <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
		                     <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
		                     <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
		                     <ul class="list-inline">
		                        <li>Date: January 2017</li>
		                        <li>Client: Finish</li>
		                        <li>Category: Identity</li>
		                     </ul>
		                     <button class="btn btn-primary" data-dismiss="modal" type="button">
		                     <i class="fa fa-times"></i>
		                     Close Project</button>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
		<!-- Modal 4 -->
		<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
		   <div class="modal-dialog">
		      <div class="modal-content">
		         <div class="close-modal" data-dismiss="modal">
		            <div class="lr">
		               <div class="rl"></div>
		            </div>
		         </div>
		         <div class="container">
		            <div class="row">
		               <div class="col-lg-8 mx-auto">
		                  <div class="modal-body">
		                     <!-- Project Details Go Here -->
		                     <h2 class="text-uppercase">Project Name</h2>
		                     <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
		                     <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
		                     <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
		                     <ul class="list-inline">
		                        <li>Date: January 2017</li>
		                        <li>Client: Lines</li>
		                        <li>Category: Branding</li>
		                     </ul>
		                     <button class="btn btn-primary" data-dismiss="modal" type="button">
		                     <i class="fa fa-times"></i>
		                     Close Project</button>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
		<!-- Modal 5 -->
		<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
		   <div class="modal-dialog">
		      <div class="modal-content">
		         <div class="close-modal" data-dismiss="modal">
		            <div class="lr">
		               <div class="rl"></div>
		            </div>
		         </div>
		         <div class="container">
		            <div class="row">
		               <div class="col-lg-8 mx-auto">
		                  <div class="modal-body">
		                     <!-- Project Details Go Here -->
		                     <h2 class="text-uppercase">Project Name</h2>
		                     <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
		                     <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
		                     <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
		                     <ul class="list-inline">
		                        <li>Date: January 2017</li>
		                        <li>Client: Southwest</li>
		                        <li>Category: Website Design</li>
		                     </ul>
		                     <button class="btn btn-primary" data-dismiss="modal" type="button">
		                     <i class="fa fa-times"></i>
		                     Close Project</button>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
		<!-- Modal 6 -->
		<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
		   <div class="modal-dialog">
		      <div class="modal-content">
		         <div class="close-modal" data-dismiss="modal">
		            <div class="lr">
		               <div class="rl"></div>
		            </div>
		         </div>
		         <div class="container">
		            <div class="row">
		               <div class="col-lg-8 mx-auto">
		                  <div class="modal-body">
		                     <!-- Project Details Go Here -->
		                     <h2 class="text-uppercase">Project Name</h2>
		                     <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
		                     <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
		                     <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
		                     <ul class="list-inline">
		                        <li>Date: January 2017</li>
		                        <li>Client: Window</li>
		                        <li>Category: Photography</li>
		                     </ul>
		                     <button class="btn btn-primary" data-dismiss="modal" type="button">
		                     <i class="fa fa-times"></i>
		                     Close Project</button>
		                  </div>
		               </div>
		            </div>
		         </div>
		      </div>
		   </div>
		</div>