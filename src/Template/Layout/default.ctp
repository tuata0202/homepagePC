<!DOCTYPE html>
<!-- AppSet - App Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="PACOM">
	<meta name="description" content="システム受託開発及びラボ型開発、ITコンサルテイングを提供いたします。お客様のお悩みをヒアリングし、最適な提案を行っております。当社のエンジニアはベトナムトップ大学を卒業し、人工知能、IoT、スマホアプリやWebシステムなどの豊富経験をお持ちしております。" />
	<meta name="keywords" content="システム受託開発,ラボ型開発,ITコンサルテイン,WEBシステム開発,人工知能開発">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php echo $this->Html->css('https://fonts.googleapis.com/css?family=Lato%3A100%2C300%2C400%2C700%2C900%2C100italic%2C300italic%2C400italic%2C700italic%2C900italic%7COswald%3A300%2C400%2C700&ver=1546006013') ?>
	<!-- SITE TITLE -->
	<?php if($lang =="vi_VN"):?>
	<title>Pacom Solution Co., Ltd. - Phát triển hợp đồng hệ thống và phát triển phòng thí nghiệm, tư vấn CNTT</title>
	<?php else:?>
	<title>株式会社パコムソリューション - システム受託開発及びラボ型開発、ITコンサルテイング</title>
	<?php endif;?>

	<!-- FAVICON AND TOUCH ICONS  -->




	<!-- GOOGLE FONTS -->


	<!-- BOOTSTRAP CSS -->
	<?php echo $this->Html->css('bootstrap.min') ?>
	<?php echo $this->Html->css('font-awesome.min') ?>
	<?php echo $this->Html->css('linecons-font-style') ?>
	<?php echo $this->Html->css('jquery.fs.boxer') ?>
	<?php echo $this->Html->css('content_slider_style') ?>
	<?php echo $this->Html->css('animate') ?>
	<?php echo $this->Html->css('owl.carousel') ?>
	<?php echo $this->Html->css('style.css?v=' . $cssVers) ?>
	<?php echo $this->Html->css('style1.css?v=' . $cssVers) ?>
	<?php if($lang =="vi_VN"):?>
		<?php echo $this->Html->css('style_vi.css?v=' . $cssVers) ?>
	<?php endif;?>
	<?php echo $this->Html->css('responsive') ?>
	<?php echo $this->Html->css('v-light-red') ?>
	<?php echo $this->Html->css('slick') ?>
	<?php echo $this->Html->css('slick-theme') ?>
	<?php echo $this->Html->css('custom.css?v=' . $cssVers) ?>
	<!-- <link rel="shortcut icon" href=""> -->

	<!-- EXTERNAL SCRIPTS
    ============================================= -->
	<?= $this->Html->script('modernizr-2.8.0.min') ?>
	<?= $this->Html->script('jquery-2.1.0.min') ?>
	<?= $this->Html->script('plugins') ?>
	<?= $this->Html->script('functions') ?>
	<?= $this->Html->script('jquery.parallax') ?>
	<?= $this->Html->script('wow.min') ?>
	<?= $this->Html->script('jquery.content_slider.min') ?>
	<?= $this->Html->script('jquery.mousewheel') ?>
	<?= $this->Html->script('slick.min') ?>
	<?= $this->Html->script('jquery.nav') ?>
</head>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6406289.js"></script>
<!-- End of HubSpot Embed Code -->
<body>
	<!-- PAGE CONTENT
============================================= -->
	<div id="page-top"></div>
	<?= $this->Flash->render() ?>
	<?= $this->fetch('content') ?>
	
	<?php if ($lang == "vi_VN" || $lang == "en_US") : ?>
        <?= $this->element('/vi/footer') ?>
    <?php else : ?>
		<?= $this->element('/footer') ?>
    <?php endif; ?>
	
	<!-- END PAGE CONTENT -->
	<script type="text/javascript">
		/*----------- wow animation with support of wow.js and animation.css ----------------*/
		var wow = new WOW({
			boxClass: 'wow', // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset: 0, // distance to the element when triggering the animation (default is 0)
			mobile: false // trigger animations on mobile devices (true is default)
		});
		wow.init();

		/*----------- Google Map - with support of gmaps.js ----------------*/

		function isMobile() {
			return ('ontouchstart' in document.documentElement);
		}

		jQuery(document).ready(function($) {
			if (!isMobile()) {
				$('.img_banner').height($(window).height());
				// $('.img_banner').css('height','auto');
				$(window).resize(function() {
					// $('.img_banner').height($(window).height());
					$('.img_banner').css('height', 'auto');
					$('.top-section').height($('.img_banner').height() - 70);
				});
			} else {
				$('.top-section').height($('.img_banner').height() - 70);
			}

			"use strict";

			/*---------------------- Current Menu Item -------------------------*/
			$('#main-menu #headernavigation').onePageNav({
				currentClass: 'active',
				changeHash: false,
				scrollSpeed: 750,
				scrollThreshold: 0.5,
				scrollOffset: 160,
				filter: ':not(.sub-menu a, .not-in-home)',
				easing: 'swing'
			});

			$('.btn-lanch').on('click', function() {
				$('html,body').animate({
					scrollTop: $($(this).attr('data')).offset().top - 120
				}, 1000);
				$(this).blur();
			});

			// $('#headernavigation a').on('click', function() {
			// 	$('html,body').animate({
			// 		scrollTop: $($(this).attr('href')).offset().top - 120
			// 	}, 1000);
			// 	$(this).blur();
			// });
			$(".div-wrapper").hover(function() {
				$(this).addClass("hover-profile");
			}, function() {
				$(".div-wrapper").removeClass("hover-profile");
			});


			/*------------------- Testimonials Client Slider ----------------------*/
			var image_array = new Array();
			image_array = [{
					image: 'img/images/testimonials-client/1.jpg'
				},
				// image for the first layer, goes with the text from id="sw0"
				{
					image: 'img/images/testimonials-client/2.jpg'
				},
				// image for the second layer, goes with the text from id="sw1"
				{
					image: 'img/images/testimonials-client/3.jpg'
				},
				// image for the third layer, goes with the text from id="sw2"
				{
					image: 'img/images/testimonials-client/4.jpg'
				},
				// ...
				{
					image: 'img/images/testimonials-client/5.jpg'
				},
				{
					image: 'img/images/testimonials-client/6.jpg'
				},
				{
					image: 'img/images/testimonials-client/7.jpg'
				}
			];


		});
		// document ready function End
	</script>
	<?= $this->Html->script('custom') ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156089703-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-156089703-1');
	</script>
</body>

</html>