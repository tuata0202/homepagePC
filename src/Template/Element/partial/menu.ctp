
	<!-- Menu -->
	<div class="main-menu-continer">
		<div id="main-menu" class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<!-- Responsive Navigation -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle Navigation</span>
						<i class="fa fa-bars"></i>
					</button> <!-- /.navbar-toggle -->
					<!-- Logo -->
					<a style="display: none;" id="logo-second-load" class="navbar-brand" href="./">
						<?= $this->Html->image('images/logo/logo-sm.png', ['style' => 'width: 20%', 'alt' => ''])  ?>
						<span>PA</span>COM
					</a>
					<a style="color: #fff" id="logo-first-load" class="navbar-brand" href="./">
						<?= $this->Html->image('images/logo/logo-white.png', ['style' => 'width: 20%', 'alt' => ''])  ?>
						
						PACOM
					</a>
					<!-- /.navbar-brand -->
				</div> <!-- /.navbar-header -->

				<nav class="collapse navbar-collapse" role="navigation">
					<!-- Main navigation -->
					<ul id="headernavigation" class="nav navbar-nav pull-right">
						<li class="active"><a href="#page-top">Home</a></li>
						<!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"> -->
						<li>
							<a href="#our-services">Our Services</a>
							<?php if (false) : ?>
							<ul class="sub-menu">
								<li><a target="_blank" href="http://evaca.vn/">Evaca </a></li>
							</ul>
							<?php endif; ?>
						</li>
						<li><a href="#about">About</a></li>
						<li><a href="#our-passion">Our Passion & Mission</a></li>
						<li><a href="#profile">Profile</a></li>
						<li><a href="#contact">Contact Us</a></li>
					</ul> <!-- /.nav .navbar-nav -->
				</nav> <!-- /.navbar-collapse  -->
			</div> <!-- /.container -->
		</div><!-- /#main-menu -->
	</div><!-- /.main-menu-continer -->
	<!-- Menu End -->