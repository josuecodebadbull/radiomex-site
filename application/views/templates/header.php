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
    
    <link rel="icon" type="image/vnd.microsoft.icon" href="http://www.radiocomunicacion.com.mx/img/favicon.ico?1446583696">
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
	<script src="<?=base_url()?>includes/js/main.js" type="text/javascript"></script>
	<script src="<?=base_url()?>includes/js/backstretch.js" type="text/javascript"></script>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TimelineMax.min.js"></script>
	<script type="text/javascript" src ="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/CSSPlugin.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TimelineLite.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js" type="text/javascript"></script>

    <script type="text/javascript">
		base_url = "<?=base_url()?>";
	</script>
    

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