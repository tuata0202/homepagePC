<?php 
	$url = $this->request->getRequestTarget(); 
	$url1 = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>
<nav id="main-menu-no-header" class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button>
			<!-- Logo -->
			<a class="navbar-brand logotop" href="<?= $this->Url->build($lang.'/') ?>">
				<?= $this->Html->image('images/logo/logo-sm.png', ['style' => 'width: 20%', 'alt' => ''])  ?>
				<span>PA</span>COM
			</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="<?= (strpos($url, $lang.'/company/infromation') !== false) ? 'active' : '' ?>">
					<a href="<?= $this->Url->build($lang.'/company/infromation') ?>">Thông tin công ty </a>
				</li>
				<li class="<?= (strpos($url, $lang. '/introductions') !== false) ? 'active' : '' ?>">
					<a href="<?= $this->Url->build($lang.'/introductions/sys_web') ?>">Giới thiệu</a>
					<?php if (true) : ?>
						<ul class="sub-menu menu-child">
							<li class="<?= ($url == '/'.$lang.'/introductions/sys_web') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/introductions/sys_web') ?>">Phát triển hệ thống web</a></li>
							<li class="<?= ($url == '/'.$lang.'/introductions/sys_bussiness') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/introductions/sys_bussiness') ?>">Phát triển hệ thống nghiệp vụ </a></li>
							<li class="<?= ($url == '/'.$lang.'/introductions/app') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/introductions/app') ?>">Phát triển ứng dụng điện thoại thông minh </a></li>
							<li class="<?= ($url == '/'.$lang.'/introductions/ai') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/introductions/ai') ?>">Phát triển trí tuệ nhân tạo </a></li>
						</ul>
					<?php endif; ?></li>
				<li class="<?= (strpos($url, $lang. '/developments') !== false) ? 'active' : '' ?>">
					<a href="<?= $this->Url->build($lang.'/developments/sys_web') ?>">Ví dụ phát triển</a>
					<?php if (true) : ?>
						<ul class="sub-menu menu-child">
							<li class="<?= ($url == '/'.$lang.'/developments/sys_web') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/developments/sys_web') ?>">Phát triển hệ thống web</a></li>
							<li class="<?= ($url == '/'.$lang.'/developments/sys_bussiness') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/developments/sys_bussiness') ?>">Phát triển hệ thống nghiệp vụ </a></li>
							<li class="<?= ($url == '/'.$lang.'/developments/app') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/developments/app') ?>">Phát triển ứng dụng điện thoại thông minh </a></li>
							<li class="<?= ($url == '/'.$lang.'/developments/ai') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/developments/ai') ?>">Phát triển trí tuệ nhân tạo </a></li>
						</ul>
					<?php endif; ?></li>
				<li class="<?= ($url == '/'.$lang.'/news') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/news') ?>">Tin tức</a></li>

				<?php if (false) : ?>
					<li class="<?= ($url == '/'.$lang.'/company/recruitment') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/company/recruitment') ?>">採用情報</a></li>
				<?php endif; ?>

				<?php if (false) : ?>
					<li class="<?= ($url == '/'.$lang.'/company/testimonial') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/company/testimonial') ?>">お客様の声</a></li>
				<?php endif; ?>

				<li class="<?= ($url == '/'.$lang.'/company/contacts') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/company/contacts') ?>">Liên hệ</a></li>
				<li class="lang ">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						<img src="/img/image/flag/jp.png"><span class="caret"></span>
					</a>
					<ul class="dropdown-menu show-flag">
						<li><a href="#" class="changelanguage" data-value="vi"><img src="/img/image/flag/vi.png"></a></li>
						<!-- <li><a href="#" class="changelanguage" data-value="en"><img src="/img/image/flag/en.png"></a></li> -->
					</ul>
				</li>
				<?= $url .'------'.$url1?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>