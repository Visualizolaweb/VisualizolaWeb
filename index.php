<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Visualizo la Web, Diseño y Desarrollo Web a Medida</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="@guille_valen, @claudiamile">

	<!--[if lt IE 9]> 
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/assets.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/font_elegant.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700" type="text/css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body class="page_index">


<!--
<div id="preloader">
	<div>
		<i class="icon_cog cog1"></i>
		<i class="icon_cog cog2"></i>
	</div>
</div>
-->

<div id="wrapper_main">
<!-- HEADER -->
	<header id="header">
		<div class="container">
<!-- LOGO -->
			<div class="logo_main">
				<a href="/">
					<img src="img/logo_main.png" alt="Infinity">
				</a>
			</div>

<!-- MAIN MENU -->
			<i class="icon_menu visible-sm visible-xs"></i>
			<i class="back_top_mobile arrow_carrot-up"></i>
			<nav id="menu_main">
				<?php include_once('pages/mainmenu.php'); ?>
			</nav>
		</div>
	</header>

	<div id="wrapper_scroll">
<!-- MAIN SLIDER -->
	<section id="home" class="slider_main__wrapper">
		<div id="slider_main" class="flexslider">
			<ul class="slides">
				<li class="slide slide__1">
		 						<img class="slide_img__1" src="img/slide_01-1.png" alt="welcome to agency">
				</li>


				<li class="slide slide__3">
					<div class="container">
						<div class="slider_main__caption">
							<h3>Wow-wow, todas nuestras</h3>
							<h6>Web son adaptables</h6>
							<h4>A moviles</h4>
							<h5>¿La tuya tambien?</h5>
							<div class="btn_wrapper">
								<a href="#contact" class="btn btn_shadow">Realizar Cotización</a>
							</div>
						</div>
						<img class="slide_img__1" src="img/slide_03-1.png" alt="welcome to agency">
						<img class="slide_img__2" src="img/slide_02-2.png" alt="welcome to agency">
					</div>
				</li>				

				<li class="slide slide__2">
					<div class="container">
						<div class="slider_main__caption">
							<h3>Diseños Frescos, Modernos</h3>
							<h4>Elegantes</h4>							
							<h4>Y Creativos<h4>
							<h5>Reflejando siempre tu marca</h5>
							<div class="btn_wrapper">
								<a href="#contact" class="btn btn_shadow">Realizar Cotización</a>
							</div>
						</div>
						<img class="slide_img__1" src="img/slide_02-1.png" alt="welcome to agency">
					</div>
				</li>

			</ul>
		</div>
	</section>

<!-- WHO WE ARE -->
	<section id="about_us" class="about_us">
	<div class="container">
		<div class="about_us__text">
			<h2>¿QUE ES VISUALIZO LA WEB?</h2>
			<div class="row">
				<div class="col-sm-6">
					<h3>Visualizo la web es una agencia de comunicaciones y diseño web, formada por diseñadores, ingenieros y desarrolladores con más de 10 años de experiencia en el ámbito del diseño web y medios digitales.</h3>
				</div>
				<div class="col-sm-6">
					<p>Durante nuestra trayectoria, visualizo la web ha evolucionado constantemente en el desarrollo de nuevas técnicas y herramientas, permitiéndonos dar una respuesta efectiva a las diferentes necesidades que posee cada cliente.</p>
					<p>Nuestro objetivo no se concentra sólo en crear simples páginas web, sino tener un sentido de pertenencia en cada proyecto, logrando así un producto de calidad y la satisfacción de cada uno de nuestros clientes.</p>
					<p>Visualizo la Web opera desde Medellín-Colombia pero con las puertas abiertas para todo el mundo.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-3">
				<div class="about_us__item">
					<div class="item_hover trs_all"></div>
					<i class="icon_archive"></i>
					<h4 class="trs_color">Diseño Creativo</h4>
					<p class="trs_color">Nuestros sitios web cuentan con un diseño limpio pero creativo, siempre reflejando la identidad de tu empresa, marca o producto.</p>
					<div>
						<a class="btn" href="#">Leer Mas</a>
					</div>

				</div>
			</div>

			<div class="col-sm-3">
				<div class="about_us__item">
					<div class="item_hover trs_all"></div>					

					<i class="icon_target"></i>
					<h4 class="trs_color">Adaptable a Moviles</h4>
					<p class="trs_color">Hoy en dia los usarios se conectan mas por smartphone que por PC, debido a eso siempre nuestras web vienen adaptadas a dispositivos moviles.</p>
					<div>
						<a class="btn" href="#">Leer Mas</a>
					</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="about_us__item">
					<div class="item_hover trs_all"></div>
					<i class="icon_cog"></i>
					<h4 class="trs_color">Desarrollo Eficaz</h4>
					<p class="trs_color">Cada desarrollo es unico, según la necesidad aplicariamos diferentes lenguajes y tecnologias para que su sistema sea perfecto!.</p>
					<div>
						<a class="btn" href="#">Leer Mas</a>
					</div>
				</div>
			</div>

			<div class="col-sm-3">
				<div class="about_us__item">
					<div class="item_hover trs_all"></div>
					<i class="icon_calendar"></i>
					<h4 class="trs_color">Tiempo Record!</h4>
					<p class="trs_color">Su tiempo es ORO y eso lo sabemos, por eso nuestras páginas web se entregan en un tiempo estimado de 8 dias siempre instaladas en el servidor</p>
					<div>
						<a class="btn" href="#">Leer Mas</a>
					</div>


				</div>
			</div>
		</div>
	</div>
	</section>

<!-- OUR TEAM -->
	<section id="our_team" class="our_team">
	<div class="container">
		<h2>Nuestro Equipo</h2>

		<div class="row">
			<div class="col-md-3">
				<div class="our_team__item trs_all">
					<img class="trs_opacity" src="img/our_team__1.jpg" alt="">
					<div class="our_team__info trs_transform">
						<h4>Guille Valencia
							<span>Desarrollador FrontEnd</span>
						</h4>
						<div class="our_team__desc trs_opacity">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus.</p>
						</div>
					</div>
					<ul class="trs_transform">
						<li><a href="#"><i class="social_twitter"></i></a></li>
						<li><a href="#"><i class="social_facebook"></i></a></li>
						<li><a href="#"><i class="social_linkedin"></i></a></li>
						<li><a href="#"><i class="social_dribbble"></i></a></li>
					</ul>
					<div class="our_team__address trs_transform">
						<address>
							<p class="our_team__email"><a href="">mymail@infinity.com</a></p>
							<p class="our_team__website"><a href="">www.infiniti.com</a></p>
						</address>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="our_team__item trs_all">
					<img class="trs_opacity" src="img/our_team__2.jpg" alt="">
					<div class="our_team__info trs_transform">
						<h4>Claudia Giraldo
							<span>Desarrolladora BackEnd</span>
						</h4>
						<div class="our_team__desc trs_opacity">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus.</p>
						</div>
					</div>
					<ul class="trs_transform">
						<li><a href="#"><i class="social_twitter"></i></a></li>
						<li><a href="#"><i class="social_facebook"></i></a></li>
						<li><a href="#"><i class="social_linkedin"></i></a></li>
						<li><a href="#"><i class="social_dribbble"></i></a></li>
					</ul>
					<div class="our_team__address trs_transform">
						<address>
							<p class="our_team__email"><a href="">mymail@infinity.com</a></p>
							<p class="our_team__website"><a href="">www.infiniti.com</a></p>
						</address>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="our_team__item trs_all">
					<img class="trs_opacity" src="img/our_team__3.jpg" alt="">
					<div class="our_team__info trs_transform">
						<h4>Cesar Moreno
							<span>Arquitecto DBA</span>
						</h4>
						<div class="our_team__desc trs_opacity">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus.</p>
						</div>
					</div>
					<ul class="trs_transform">
						<li><a href="#"><i class="social_twitter"></i></a></li>
						<li><a href="#"><i class="social_facebook"></i></a></li>
						<li><a href="#"><i class="social_linkedin"></i></a></li>
						<li><a href="#"><i class="social_dribbble"></i></a></li>
					</ul>
					<div class="our_team__address trs_transform">
						<address>
							<p class="our_team__email"><a href="">mymail@infinity.com</a></p>
							<p class="our_team__website"><a href="">www.infiniti.com</a></p>
						</address>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="our_team__item trs_all">
					<img class="trs_opacity" src="img/our_team__4.jpg" alt="">
					<div class="our_team__info trs_transform">
						<h4>Ramiro Barrientos
							<span>Analista de Calidad</span>
						</h4>
						<div class="our_team__desc trs_opacity">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus.</p>
						</div>
					</div>
					<ul class="trs_transform">
						<li><a href="#"><i class="social_twitter"></i></a></li>
						<li><a href="#"><i class="social_facebook"></i></a></li>
						<li><a href="#"><i class="social_linkedin"></i></a></li>
						<li><a href="#"><i class="social_dribbble"></i></a></li>
					</ul>
					<div class="our_team__address trs_transform">
						<address>
							<p class="our_team__email"><a href="">mymail@infinity.com</a></p>
							<p class="our_team__website"><a href="">www.infiniti.com</a></p>
						</address>
					</div>
				</div>
			</div>

		</div>
	</div>
	</section>

<!-- SERVICES -->
	<section id="services" class="services">
	<div class="container">
		<h2>Our Services</h2>

		<div class="row">
			<div class="col-sm-4">
				<div class="services_item">
					<i class="icon_cog"></i>
					<h4><a href="#">Development</a></h4>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="services_item">
					<i class="icon_heart"></i>
					<h4><a href="#">Web design</a></h4>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="services_item">
					<i class="icon_camera"></i>
					<h4><a href="#">Photographer</a></h4>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4">
				<div class="services_item">
					<i class="icon_cart"></i>
					<h4><a href="#">E-commerce</a></h4>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="services_item">
					<i class="icon_group"></i>
					<h4><a href="#">Marketing</a></h4>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="services_item">
					<i class="icon_calendar"></i>
					<h4><a href="#">Events</a></h4>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-6 col-sm-3 services_logo">
				<a class="trs_opacity" href="#">
					<img src="img/services_logo__1.jpg" alt="">
				</a>
			</div>

			<div class="col-xs-6 col-sm-3 services_logo">
				<a class="trs_opacity" href="#">
					<img src="img/services_logo__2.jpg" alt="">
				</a>
			</div>

			<div class="col-xs-6 col-sm-3 services_logo">
				<a class="trs_opacity" href="#">
					<img src="img/services_logo__3.jpg" alt="">
				</a>
			</div>

			<div class="col-xs-6 col-sm-3 services_logo">
				<a class="trs_opacity" href="#">
					<img src="img/services_logo__4.jpg" alt="">
				</a>
			</div>
		</div>
	</div>
	</section>

<!-- FEATURED WORKS -->
	<section id="featured" class="featured">
	<div class="container">
		<h2>Featured Works</h2>

		<div id="slider_featured__1" class="flexslider">
			<img src="img/featured_slider__top.png" alt="">
			<ul class="slides">
				<li><img src="img/featured_slide__1.png" alt=""></li>
				<li><img src="img/featured_slide__2.png" alt=""></li>
				<li><img src="img/featured_slide__3.png" alt=""></li>
			</ul>
		</div>

		<div id="slider_featured__2" class="owlslider">
			<div class="item">
				<div class="row">
					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__1.jpg">
							<img src="img/featured_tile__1.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__2.jpg">
							<img src="img/featured_tile__2.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__3.jpg">
							<img src="img/featured_tile__3.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__4.jpg">
							<img src="img/featured_tile__4.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__5.jpg">
							<img src="img/featured_tile__5.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__6.jpg">
							<img src="img/featured_tile__6.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="row">
					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__2.jpg">
							<img src="img/featured_tile__2.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__3.jpg">
							<img src="img/featured_tile__3.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__1.jpg">
							<img src="img/featured_tile__1.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__5.jpg">
							<img src="img/featured_tile__5.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__6.jpg">
							<img src="img/featured_tile__6.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__4.jpg">
							<img src="img/featured_tile__4.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="row">
					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__3.jpg">
							<img src="img/featured_tile__3.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__1.jpg">
							<img src="img/featured_tile__1.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__2.jpg">
							<img src="img/featured_tile__2.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__6.jpg">
							<img src="img/featured_tile__6.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__4.jpg">
							<img src="img/featured_tile__4.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>

					<div class="col-xs-4">
						<a class="item_content" href="img/featured_tile__5.jpg">
							<img src="img/featured_tile__5.jpg" alt="">
							<div class="item_caption">
								<span></span>
								<h4>Half Devil bird</h4>
								<p>Illustration</p>
							</div>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
	</section>

<!-- TESTIMONIALS -->
	<section class="testimonials parallax_box">
		<h3>“</h3>

		<div id="slider_testimonials">
			<div class="item container">
				<h4>Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Pellen tesque aliquet leo</h4>
				<p>
					<span>Anna Balashova</span>
					<span>Creative director</span>
				</p>
			</div>

			<div class="item container">
				<h4>Perferendis quae et consectetur asperiores vero ab quibusdam facere facilis nesciunt laboriosam harum, voluptatem magnam recusandae</h4>
				<p>
					<span>Mari Gustavo</span>
					<span>Web Designer</span>
				</p>
			</div>

			<div class="item container">
				<h4>Nesciunt consequatur reprehenderit totam. Similique molestias odio reiciendis quas repellendus aspernatur error illo inventore</h4>
				<p>
					<span>Anton Kovalsky</span>
					<span>CEO, Creative Director</span>
				</p>
			</div>
		</div>
	</section>

<!-- BLOG -->
	<section id="blog" class="blog">
	<div class="container">
		<h2>Popular blog</h2>

		<div class="row">
			<div class="col-sm-4 blog_article">
				<a href="blog_post.html"><img src="img/blog__1.jpg" alt=""></a>
				<h4 class="blog_article__title"><a href="blog_post.html">Beautiful cards Art</a></h4>
				<p class="blog_article__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue natoque penatibus et magnis. </p>
				<p class="blog_article__info">
					<a href="blog_post.html" class="date">19 February 2014</a>
					<a href="blog_post.html" class="comments">9 comments</a>
					<a href="blog_post.html" class="fav"><i class="icon_heart_alt"></i>25</a>
				</p>
			</div>

			<div class="col-sm-4 blog_article">
				<a href="blog_post.html"><img src="img/blog__2.jpg" alt=""></a>
				<h4 class="blog_article__title"><a href="blog_post.html">Modern FLat furniture</a></h4>
				<p class="blog_article__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue natoque penatibus et magnis. </p>
				<p class="blog_article__info">
					<a href="blog_post.html" class="date">19 February 2014</a>
					<a href="blog_post.html" class="comments">3 comments</a>
					<a href="blog_post.html" class="fav"><i class="icon_heart_alt"></i>8</a>
				</p>
			</div>

			<div class="col-sm-4 blog_article">
				<a href="blog_post.html"><img src="img/blog__3.jpg" alt=""></a>
				<h4 class="blog_article__title"><a href="blog_post.html">Old batman portrait</a></h4>
				<p class="blog_article__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue natoque penatibus et magnis. </p>
				<p class="blog_article__info">
					<a href="blog_post.html" class="date">19 February 2014</a>
					<a href="blog_post.html" class="comments">12 comments</a>
					<a href="blog_post.html" class="fav"><i class="icon_heart_alt"></i>27</a>
				</p>
			</div>
		</div>
	</div>
	</section>

<!-- PRICES -->
	<section id="prices" class="prices">
	<div class="container">
		<h2>Pricing tables</h2>

		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="prices_item trs_all">
					<h4>Free</h4>
					<p class="price"><span>0</span></p>
					<ul>
						<li>10 Styled elements</li>
						<li>1 Advanced admin</li>
						<li>100,000 users</li>
						<li>20 Email Marketing</li>
						<li>Unlimited Users License</li>
					</ul>
					<div class="btn_wrapper">
						<a class="btn btn_shadow" href="#">Order now</a>
					</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-3">
				<div class="prices_item trs_all">
					<h4>Basic</h4>
					<p class="price"><span>25</span></p>
					<ul>
						<li>10 Styled elements</li>
						<li>1 Advanced admin</li>
						<li>100,000 users</li>
						<li>20 Email Marketing</li>
						<li>Unlimited Users License</li>
					</ul>
					<div class="btn_wrapper">
						<a class="btn btn_shadow" href="#">Order now</a>
					</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-3">
				<div class="prices_item trs_all">
					<h4>Business</h4>
					<p class="price">
						<span>50</span>
						<b><b>BEST</b></b>
					</p>
					<ul>
						<li>10 Styled elements</li>
						<li>1 Advanced admin</li>
						<li>100,000 users</li>
						<li>20 Email Marketing</li>
						<li>Unlimited Users License</li>
					</ul>
					<div class="btn_wrapper">
						<a class="btn btn_shadow" href="#">Order now</a>
					</div>
				</div>
			</div>

			<div class="col-xs-6 col-md-3">
				<div class="prices_item trs_all">
					<h4>Premium</h4>
					<p class="price"><span>90</span></p>
					<ul>
						<li>10 Styled elements</li>
						<li>1 Advanced admin</li>
						<li>100,000 users</li>
						<li>20 Email Marketing</li>
						<li>Unlimited Users License</li>
					</ul>
					<div class="btn_wrapper">
						<a class="btn btn_shadow" href="#">Order now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>

<!-- BACKGROUND VIDEO -->
	<section class="background_video">
		<video id="video_player" loop>
			<!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
			<source class="webm" type="video/webm" src="video/movie.webm">
			<!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
			<source class="mp4" type="video/mp4" src="video/movie.mp4">
		</video>

		<script>
			function playvideo() {
				var video = document.getElementById("video_player");
				var button = document.getElementById("video_btn");
				if (video.paused) {
					video.play();
					button.className = "pause"
				} else {
					video.pause();
					button.className = "play"
				}
			}
		</script>

		<a id="video_btn" onclick="playvideo()" href="javascript:void(0);" ><i></i></a>
	</section>

<!-- CONTACT -->
	<section id="contact" class="contact">
	<div class="container">
		<h2>Contactenos</h2>

		<div class="contact_content">
		<div class="row">
			<div class="col-sm-8">
				<form id="contact_form" method="POST" action="send.php">
					<div class="row">
						<div class="col-sm-6">
							<input type="text" required name="Name" placeholder="Nombre">
						</div>

						<div class="col-sm-6">
							<input type="text" required name="Email" placeholder="Correo Electrónico">
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<input type="text" required name="Phone" placeholder="Teléfono">
						</div>

						<div class="col-sm-6">
							<input type="text" required name="Subject" placeholder="Asunto">
						</div>
					</div>

					<textarea name="Message" required placeholder="Mensaje" cols="30" rows="10"></textarea>
					<input type="submit" name="send" id="send" class="btn btn_shadow" value="Enviar Mensaje">
				</form>
			</div>

			<div class="col-sm-4 contact_texts">
				<div class="contact_info">
					<h4><i class="icon_contacts_alt"></i>Get in touch</h4>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est, qui dolorem ipsum quia dolor.</p>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </p>
				</div>

				<div class="contact_address">
					<h4><i class="icon_pin"></i>Our address</h4>
					<table>
						<tr>
							<td><b>Dirección:</b></td>
							<td>Calle 49 # 79 - 12, Medellín - Colombia</td>
						</tr>
						<tr>
							<td><b>Teléfono:</b></td>
							<td>(+57) 300 299 7730</td>
						</tr>
						<tr>
							<td><b>E-mail:</b></td>
							<td>info@visualizolaweb.com</td>
						</tr>
					</table>
				</div>

			</div>
		</div>
		</div>
	</div>
	</section>

<!-- MAP -->
	<section class="map">
		<a id="google_map_toggle" href="#">Show us on the map</a>

		<div id="google_map_container">
			<div id="google_map"></div>
		</div>
	</section>
	</div>

<!-- FOOTER -->
	<footer>
	<div class="container">
		<div class="footer_left">
			<p>© Copyright 2014 by Evatheme. All Rights Reserved.</p>			
		</div>

		<div class="footer_right">
			<ul class="social_links">
				<li><a href="#"><i class="social_twitter"></i></a></li>
				<li><a href="#"><i class="social_facebook"></i></a></li>
				<li><a href="#"><i class="social_linkedin"></i></a></li>
				<li><a href="#"><i class="social_pinterest"></i></a></li>
				<li><a href="#"><i class="social_flickr_circle"></i></a></li>
			</ul>
			<a class="back_top" title="Back to top"><i class="arrow_carrot-up"></i></a>
		</div>
	</div>
	</footer>
</div>

<!-- SCRIPTS -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.1.11.2.min.js"></script>
	<script src="js/jquery.migrate.1.2.1.js"></script>
	<script src="js/device.min.js"></script>
	<script src="js/jquery.scrollto.min.js"></script>
	<script src="js/jquery.flexslider.min.js"></script>
	<script src="js/jquery.blackandwhite.js"></script>
	<script src="js/jquery.owlcarousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.parallax.js"></script>
	<script src="js/jquery.wow.min.js"></script>
	<script src="js/jquery.gomap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>