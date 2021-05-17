<?php $url = $this->request->getRequestTarget();
$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');

use Cake\I18n\I18n;

if ($lang == 'vi_VN') {
	$lang = '/vi';
} else {
	$lang = '';
}
?>
<nav id="main-menu-no-header" class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<div class="list-language-mobile" style="display:none">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					<?php if (I18n::getLocale() == 'ja') : ?>
						<?= $this->Html->image('/img/image/flag/jp.png', array('alt' => 'JP')); ?>
					<?php elseif (I18n::getLocale() == 'vi_VN') : ?>
						<?= $this->Html->image('/img/image/flag/vi.png', array('alt' => 'VI')); ?>
					<?php endif; ?>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu show-flag">
					<li>
						<?php if (I18n::getLocale() == 'ja') : ?>
							<?php echo $this->Html->link(
								'<img src="/img/image/flag/vi.png">',
								['language' => 'vi_VN', 'controller' => $controller, 'action' => $action, $pageId],
								['class' => '', 'escape' => false]
							); ?>
						<?php elseif (I18n::getLocale() == 'vi_VN') : ?>
							<?php echo $this->Html->link(
								'<img src="/img/image/flag/jp.png">',
								['language' => 'ja', 'controller' => $controller, 'action' => $action, $pageId],
								['class' => '', 'escape' => false]
							); ?>
						<?php endif ?>
					</li>
					<!-- <li><a href="#" class="changelanguage" data-value="en"><img src="/img/image/flag/en.png"></a></li> -->
				</ul>
			</div>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button>
			<!-- Logo -->
			<a style="display: none; color: #595959" id="logo-second-load" class="navbar-brand" href="<?= $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:toppage']) ?>">
                    <div class="wrap-logo">
                        <?= $this->Html->image('images/logo/logo-sm.png', ['style' => 'width: 35%', 'alt' => ''])  ?>
                        <span>PA</span>COM<br>
                        <span class="wrap-solutions">SOLUTIONS</span>
                    </div>
                </a>
			<a style="color: #595959" id="logo-first-load" class="navbar-brand" href="<?= $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:toppage']) ?>">
				<div class="wrap-logo">
					<?= $this->Html->image('images/logo/logo-sm.png', ['style' => 'width: 35%', 'alt' => ''])  ?>
					<span>PA</span>COM<br>
					<span class="wrap-solutions">SOLUTIONS</span>
				</div>
			</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="<?= (strpos($url, $lang . '/company/information') !== false) ? 'active' : '' ?>">
					<a href="<?= $this->Url->build($lang . '/company/information') ?>"><?= __('company_info') ?></a>
				</li>
				<li class="<?= (strpos($url, $lang . '/introductions') !== false) ? 'active' : '' ?>">
					<?php echo $this->Html->link(__('introduction'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_web'], ['class' => '', 'escape' => false]); ?>

					<?php if (true) : ?>
						<ul class="sub-menu menu-child">
							<li class="<?= ($url == $lang . '/introductions/sys_web') ? 'active' : '' ?>">
								<?php echo $this->Html->link(__('sys_web'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_web'], ['class' => '', 'escape' => false]); ?>
							</li>
							<li class="<?= ($url == $lang . '/introductions/sys_business') ? 'active' : '' ?>">
								<?php echo $this->Html->link(__('sys_business'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_business'], ['class' => '', 'escape' => false]); ?>
							<li class="<?= ($url == $lang . '/introductions/app') ? 'active' : '' ?>">
								<?php echo $this->Html->link(__('sys_app'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_app'], ['class' => '', 'escape' => false]); ?>
							</li>
							<li class="<?= ($url == $lang . '/introductions/ai') ? 'active' : '' ?>">
								<?php echo $this->Html->link(__('sys_ai'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_ai'], ['class' => '', 'escape' => false]); ?>
							</li>
						</ul>
					<?php endif; ?></li>
				<li class="<?= (strpos($url, $lang . '/developments') !== false) ? 'active' : '' ?>">
					<?php echo $this->Html->link(__('ex_development'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_sys_web'], ['class' => '', 'escape' => false]); ?>

					<?php if (true) : ?>
						<ul class="sub-menu menu-child">
							<li class="<?= ($url == $lang . '/developments/sys_web') ? 'active' : '' ?>">
								<?php echo $this->Html->link(__('sys_web'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_sys_web'], ['class' => '', 'escape' => false]); ?>

							</li>
							<li class="<?= ($url == $lang . '/developments/sys_business') ? 'active' : '' ?>">
								<?php echo $this->Html->link(__('sys_business'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_sys_business'], ['class' => '', 'escape' => false]); ?>

							</li>
							<li class="<?= ($url == $lang . '/developments/app') ? 'active' : '' ?>">
								<?php echo $this->Html->link(__('sys_app'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_app'], ['class' => '', 'escape' => false]); ?>

							</li>
							<li class="<?= ($url == $lang . '/developments/ai') ? 'active' : '' ?>">
								<?php echo $this->Html->link(__('sys_ai'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_ai'], ['class' => '', 'escape' => false]); ?>

							</li>
						</ul>
					<?php endif; ?></li>
				<li class="<?= ($url == $lang . '/news') ? 'active' : '' ?>">
					<?php echo $this->Html->link(__('news'), ['language' => I18n::getLocale(), 'controller' => 'News', 'action' => 'index', 'news:index'], ['class' => '', 'escape' => false]); ?>
				</li>

				<?php if (false) : ?>
					<li class="<?= ($url == $lang . '/company/recruitment') ? 'active' : '' ?>">
						<?php echo $this->Html->link(__('採用情報'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:recruitment'], ['class' => '', 'escape' => false]); ?>
					</li>
				<?php endif; ?>

				<?php if (false) : ?>
					<li class="<?= ($url == $lang . '/company/testimonial') ? 'active' : '' ?>">
						<?php echo $this->Html->link(__('お客様の声'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:testimonial'], ['class' => '', 'escape' => false]); ?>
					</li>
				<?php endif; ?>

				<li class="<?= ($url == $lang . '/company/contacts') ? 'active' : '' ?>">
					<?php echo $this->Html->link(__('contact'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:contacts'], ['class' => '', 'escape' => false]); ?>
				</li>

				<li class="lang">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						<?php if (I18n::getLocale() == 'ja') : ?>
							<?= $this->Html->image('/img/image/flag/jp.png', array('alt' => 'JP')); ?>
						<?php elseif (I18n::getLocale() == 'vi_VN') : ?>
							<?= $this->Html->image('/img/image/flag/vi.png', array('alt' => 'VI')); ?>
						<?php endif; ?>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu show-flag">
						<li>
							<?php if (I18n::getLocale() == 'ja') : ?>
								<?php echo $this->Html->link(
									$this->Html->image('/img/image/flag/vi.png', array('alt' => 'VI')),
									['language' => 'vi_VN', 'controller' => $controller, 'action' => $action, $pageId],
									['class' => '', 'escape' => false]
								); ?>
							<?php elseif (I18n::getLocale() == 'vi_VN') : ?>
								<?php echo $this->Html->link(
									$this->Html->image('/img/image/flag/jp.png', array('alt' => 'JP')),
									['language' => 'ja', 'controller' => $controller, 'action' => $action, $pageId],
									['class' => '', 'escape' => false]
								); ?>
							<?php endif ?>
						</li>
						<!-- <li><a href="#" class="changelanguage" data-value="en"><img src="/img/image/flag/en.png"></a></li> -->
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>