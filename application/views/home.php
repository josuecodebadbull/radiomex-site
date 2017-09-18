<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Radiomex</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css/bootstrap.min.css">
	<link href="<?=base_url()?>includes/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url()?>includes/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="<?=base_url()?>includes/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url()?>includes/css/owl.carousel.css" rel="stylesheet">
	<link href="<?=base_url()?>includes/css/style.css" rel="stylesheet" type="text/css" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="<?=base_url()?>includes/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>includes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>includes/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="<?=base_url()?>includes/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>includes/js/superfish.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>includes/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>includes/js/owl.carousel.js" type="text/javascript"></script>
	<script src="<?=base_url()?>includes/js/animate.js" type="text/javascript"></script>
	<script src="<?=base_url()?>includes/js/jquery.BlackAndWhite.js"></script>
	<script src="<?=base_url()?>includes/js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the <?=base_url()?>includes/images/ with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});

		function initMap() {
        var uluru = {lat: 19.447432, lng: -99.1600977};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
		
	</script>
</head>
<body>
<!-- PRELOADER -->
<img id="preloader" src="<?=base_url()?>includes/images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="index.html" >
							<img id="logo" src="<?=base_url()?>includes/img/radiomex180.png">
						</a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM 
					<div id="search-form" class="pull-right">
						<form method="get" action="#">
							<input type="text" name="Search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div>
					SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first active scroll_btn"><a href="#home" >Home</a></li>
								<li class="scroll_btn"><a href="#about" >Acerca de nosotros</a></li>
								<!-- <li class="scroll_btn"><a href="#projects" >Projects</a></li> -->
								<li class="scroll_btn"><a href="#team" >Equipo</a></li>
								<!-- <li class="scroll_btn"><a href="#news" >News</a></li> -->
								<li class="scroll_btn last"><a href="#contacts" >Contacto</a></li>
								<!-- <li class="sub-menu">
									<a href="javascript:void(0);" >Pages</a>
									<ul>
										<li><a href="blog.html" >Blog</a></li>
										<li><a href="blog-post.html" >Blog Post</a></li>
										<li><a href="portfolio-post.html" >Portfolio Single Work</a></li>
									</ul>
								</li> -->
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- HOME -->
		<section id="home" class="padbot0">
				
			<!-- TOP SLIDER -->
			<div class="flexslider top_slider">
				<ul class="slides">
					<li class="slide1">
						<div class="flex_caption1">
							<p class="title1 captionDelay2 FromTop cwhite">Sistemas</p>
							<p class="title2 captionDelay4 FromTop cwhite">de Seguridad</p>
							<!-- <p class="title3 captionDelay6 FromTop cwhite">Templates</p> -->
							<p class="title4 captionDelay7 FromBottom cwhite">Empresa y Negocio , Geolocalización , C.C.T.V. ó Videovigilancia , Control de acceso , Intrusión y Automatización</p>
						</div>
						<a class="slide_btn FromRight" href="<?php base_url()?>/service" >Saber más</a>
					<li class="slide2">
						<div class="flex_caption1">
							<p class="title1 captionDelay1 FromBottom">Redes </p>
							
							<!-- <p class="title2 captionDelay4 FromLeft">Design</p> -->
							<!-- <p class="title3 captionDelay2 FromLeft">Theme</p> -->
							<p class="title4 captionDelay7 FromLeft">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Saber más</a>
					</li>
					<li class="slide3">
						<div class="flex_caption1">
							<p class="title1 captionDelay6 FromLeft">Radiocomunicaciones</p>
							<!-- <p class="title2 captionDelay2 FromBottom">Video</p>
							<p class="title3 captionDelay3 FromBottom">Background</p> -->
							<p class="title4 captionDelay5 FromBottom">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Saber más</a>
						
						<!-- VIDEO BACKGROUND -->
						<a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide3',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
						<!-- //VIDEO BACKGROUND -->
					</li>
					<li class="slide4">
						<div class="flex_caption1">
							<p class="title2 captionDelay4 FromBottom">Soluciones integrales en</p> <br>
							<p class="title1 captionDelay1 FromTop cwhite">Iluminación</p>
							
							<!-- <p class="title2 captionDelay2 FromBottom">Video</p>
							<p class="title3 captionDelay3 FromBottom">Background</p> -->
							<p class="title4 captionDelay5 FromBottom">The template is suitable for any company and the direction that appreciates style, purity and quality of the web site.</p>
						</div>
						<a class="slide_btn FromRight" href="javascript:void(0);" >Saber más</a>
						
						<!-- VIDEO BACKGROUND -->
						<a id="P2" class="player" data-property="{videoURL:'tDvBwPzJ7dY',containment:'.top_slider .slide4',autoPlay:true, mute:true, startAt:0, opacity:1}" ></a>
						<!-- //VIDEO BACKGROUND -->
					</li>
				</ul>
			</div>
			<!-- <div id="carousel">
				<ul class="slides">
					<li><img src="<?=base_url()?>includes/images//slider/slide1_bg.jpg" alt="" /></li>
					<li><img src="<?=base_url()?>includes/images//slider/slide2_bg.jpg" alt="" /></li>
					<li><img src="<?=base_url()?>includes/images//slider/slide3_bg.jpg" alt="" /></li>
				</ul>
			</div><!-- //TOP SLIDER -->
		</section><!-- //HOME -->
		
		
		<!-- ABOUT -->
		<section id="about">
			
			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<!-- CONTAINER -->
				<div class="container">
				
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Calidad</p>
								<span>Excelente servicio</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Experiencia</b></p>
								<span>un chingo de experiencia que tenemos </span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Garantia</b></p>
								<span>Garantia, respaldamos servicio , mantenimiento correctivo</span>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Capacitados</b> y certificados</p>
								<span>Contamos con las mejores certificaciones del mundo mundial.</span>
							</a>
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //SERVICES -->
			
			<!-- CLEAN CODE 
			<div class="cleancode_block">
				
				
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active clearfix" id="tab1">
							<p class="title"><b>Clean</b> Code</p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab2">
							<p class="title"><b>Technical</b> Support</p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab3">
							<p class="title"><b>Responsive</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab4">
							<p class="title"><b>Documentation</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab5">
							<p class="title"><b>Quality</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab6">
							<p class="title"><b>Support</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
					</div>
					<ul id="myTab" class="nav nav-tabs">
						<li class="active"><a class="i1" href="#tab1" data-toggle="tab" ><i></i><span>Clean Code</span></a></li>
						<li><a class="i2" href="#tab2" data-toggle="tab" ><i></i><span>Support</span></a></li>
						<li><a class="i3" href="#tab3" data-toggle="tab" ><i></i><span>Responsive</span></a></li>
						<li><a class="i4" href="#tab4" data-toggle="tab" ><i></i><span>Documentation</span></a></li>
						<li><a class="i5" href="#tab5" data-toggle="tab" ><i></i><span>Quality</span></a></li>
						<li><a class="i6" href="#tab6" data-toggle="tab" ><i></i><span>Support</span></a></li>
					</ul> //CASTOM TAB
				</div>//CONTAINER 
			</div> //CLEAN CODE -->


			
			<!-- MULTI PURPOSE -->
			<div class="purpose_block">
				
				<!-- CONTAINER -->
				<div class="container">
					
					<!-- ROW -->
					<div class="row">
					
						<div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
							<h2><b>Multi-purpose</b> WordPress Theme</h2>
							<p>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<a class="btn btn-active" href="javascript:void(0);" ><span data-hover="Yes I want it">Byu This theme</span></a>
							<a class="btn" href="javascript:void(0);" >View more templates</a>
						</div>
						
						<div class="col-lg-5 col-md-5 col-sm-5 ipad_img_in" data-appear-top-offset="-200" data-animated="fadeInRight">
							<img class="ipad_img1" src="<?=base_url()?>includes/img/scb3000.png" alt="" />
						</div>
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //MULTI PURPOSE -->
		</section><!-- //ABOUT -->
		
		
		<!-- PROJECTS -->
		<section id="projects" class="padbot20">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Featured</b> Works</h2>
			</div><!-- //CONTAINER -->
			
				
			<div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
				<!-- PROJECTS SLIDER -->
				<div class="owl-demo owl-carousel projects_slider">
					
					<!-- work1 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?=base_url()?>includes/images//works/1.jpg" alt="" />
								<a class="zoom" href="<?=base_url()?>includes/images//works/1.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work1 -->
					
					<!-- work2 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?=base_url()?>includes/images//works/2.jpg" alt="" />
								<a class="zoom" href="<?=base_url()?>includes/images//works/2.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work2 -->
					
					<!-- work3 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?=base_url()?>includes/images//works/3.jpg" alt="" />
								<a class="zoom" href="<?=base_url()?>includes/images//works/3.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work3 -->
					
					<!-- work4 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?=base_url()?>includes/images//works/4.jpg" alt="" />
								<a class="zoom" href="<?=base_url()?>includes/images//works/4.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work4 -->
					
					<!-- work5 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?=base_url()?>includes/images//works/5.jpg" alt="" />
								<a class="zoom" href="<?=base_url()?>includes/images//works/5.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work5 -->
					
					<!-- work6 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?=base_url()?>includes/images//works/6.jpg" alt="" />
								<a class="zoom" href="<?=base_url()?>includes/images//works/6.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work6 -->
					
					<!-- work7 -->
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="<?=base_url()?>includes/images//works/7.jpg" alt="" />
								<a class="zoom" href="<?=base_url()?>includes/images//works/7.jpg" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" >Ginger Beast</a>
									<span>17 March, 2041</span>
								</div>
							</div>
						</div>
					</div><!-- //work7 -->
				</div><!-- //PROJECTS SLIDER -->
			</div>
		</section><!-- //PROJECTS -->
		
		
		<!-- TEAM -->
		<section id="team">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>Nuestro</b> Equipo</h2>
				
				<!-- ROW -->
				<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TEAM SLIDER -->
					<div class="owl-demo owl-carousel team_slider">
				
						<!-- crewman1 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?=base_url()?>includes/images//team/1.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Roberto Sarabia</p>
										<span>Director</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman2 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?=base_url()?>includes/images//team/2.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Francisco Gutierrez</p>
										<span>Creative Director</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman1 -->
						
						<!-- crewman3 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?=base_url()?>includes/images//team/3.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Josué Casasola</p>
										<span>Manager</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman3 -->
						
						<!-- crewman4 -->
						<div class="item">
							<div class="crewman_item">
								<div class="crewman">
									<img src="<?=base_url()?>includes/images//team/4.jpg" alt="" />
								</div>
								<div class="crewman_descr center">
									<div class="crewman_descr_cont">
										<p>Peter Parker</p>
										<span>Manager</span>
									</div>
								</div>
								<div class="crewman_social">
									<a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a>
									<a href="javascript:void(0);" ><i class="fa fa-facebook-square"></i></a>
								</div>
							</div>
						</div><!-- crewman4 -->
					</div><!-- TEAM SLIDER -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //TEAM -->
		
		
		<!-- NEWS -->
		<section id="news">
		
			<!-- CONTAINER -->
			<div class="container">
				<h2><b>¿Quienes </b> somos ?</h2>
				
				<!-- TESTIMONIALS -->
				<div class="testimonials" data-appear-top-offset="-200" data-animated="fadeInUp">
						
					<!-- TESTIMONIALS SLIDER -->
					<div class="owl-demo owl-carousel testim_slider">
						
						<!-- TESTIMONIAL1 -->
						<div class="item">
							<div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
							
						</div><!-- TESTIMONIAL1 -->
						
						<!-- TESTIMONIAL2 -->
						<div class="item">
							<div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
							
						</div><!-- TESTIMONIAL2 -->
						
						<!-- TESTIMONIAL3 -->
						<div class="item">
							<div class="testim_content">“There is nothing scary in the darkness, if you encounter it face-to-face. The inevitable price we pay for our happiness is eternal fear to lose it. When you start thinking a lot about your past, it becomes your present and you can't see your future without it.”</div>
						</div><!-- TESTIMONIAL3 -->
					</div><!-- TESTIMONIALS SLIDER -->
				</div><!-- //TESTIMONIALS -->
				
				<!-- RECENT POSTS -->
				<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="<?=base_url()?>includes/img/breather-7169.jpg" alt="" />
								<a class="link" href="blog-post.html" ></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" > Cuida tu local o negocio con los sistemas mas modernos</a>
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="<?=base_url()?>includes/img/breather-181280.jpg" alt="" />
								<a class="link" href="blog-post.html"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" >Siempre puedes estar seguro que tu hogar esta a salvo con las sistemas de videovigilancia</a>
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="<?=base_url()?>includes/img/crew-88059.jpg" alt="" />
								<a class="link" href="blog-post.html"></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" >Aca otra cosa aca chida de negocios</a>
							</div>
						</div>
					</div>
				</div><!-- RECENT POSTS -->
			</div><!-- //CONTAINER -->
		</section><!-- //NEWS -->
	</div><!-- //PAGE -->
	
	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<footer>
			
		<!-- CONTAINER -->
		<div class="container">
			
			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
					<h4><b>Featured</b> posts</h4>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="<?=base_url()?>includes/images//blog/1.jpg" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="blog.html" >As we have developed a unique layout template</a>
							<ul class="post_item_inf_small">
								<li>10 January 2014</li>
							</ul>
						</div>
					</div>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="<?=base_url()?>includes/images//blog/2.jpg" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="blog.html" >How much is to develop a design for the game?</a>
							<ul class="post_item_inf_small">
								<li>14 January 2014</li>
							</ul>
						</div>
					</div>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="<?=base_url()?>includes/images//blog/3.jpg" alt="" />
						</div>
						<div class="post_item_content_small">
							<a class="title" href="blog.html" >How to pump designer</a>
							<ul class="post_item_inf_small">
								<li>21 December 2013</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- MAPA -->
				<div class="col-md-12">
					<script async defer
					    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFaOscxpZXSAZRBPPSxBSecsPmsbJG2po&callback=initMap">
					</script>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<h4><b>About</b> us</h4>
					<p>We value people over profits, quality over quantity, and keeping it real. As such, we deliver an unmatched working relationship with our clients.</p>
					<p>Our team is intentionally small, eclectic, and skilled; with our in-house expertise, we provide sharp and</p>
					<ul class="social">
						<li><a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="map_show fa fa-map-marker"></i></a></li>
					</ul>
				</div>
				
				<div class="respond_clear"></div>
				
				<div class="col-lg-4 col-md-4 padbot30">
					<h4><b>Contacts</b> Us</h4>
					
					<!-- CONTACT FORM -->
					<div class="span9 contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="contact-form-face" class="clearfix" action="#">
								<input type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
								<textarea name="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
								<input class="contact_btn" type="submit" value="Send message" />
							</form>
						</div>
					</div><!-- //CONTACT FORM -->
				</div>
			</div><!-- //ROW -->
			<div class="row copyright">
				<div class="col-lg-12 text-center">
				
				 <p>Crafted with <i class="fa fa-heart"></i>, <a href="http://designscrazed.org/" >Designscrazed</a></p>
				</div>
			
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->
	
	
	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div><!-- //MAP -->

</div>

</body>
</html>