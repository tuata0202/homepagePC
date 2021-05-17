	<?php
	/**
	 * @var App\View\AppView $this
	 */

	use Cake\I18n\I18n;
	?>
	<!-- Footer Section -->
	<div class="container-fluid line">
	</div>
	<footer id="footer-section">
		<div class="container line-buttom pad-b-30">
			<div class="info-contact">
				<div class="col-sm-4 info-item info-different">
					<h5><?php echo __('name_company') ?></h5>
					<ul>
						<li>
							<?php echo $this->Html->link(__('company_message'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:information'], ['class' => '', 'escape' => false]); ?>
						</li>
						<li>
							<?php echo $this->Html->link(__('sys_web'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_web'], ['class' => '', 'escape' => false]); ?>
						</li>
						<li>
							<?php echo $this->Html->link(__('company_policy'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:policy'], ['class' => '', 'escape' => false]); ?>
						</li>
						<li>
							<?php echo $this->Html->link(__('contact'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:contacts'], ['class' => '', 'escape' => false]); ?>
						</li>
					</ul>
				</div>
				<div class="col-sm-4 info-item info-address">
					<h5>VietNam</h5>
					<ul>
						<li class="row">
							<div class="info-icon icon-map">
								<i style="font-size: 25px" class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="info-text">
								1101, N04B2 Building, Thanh Thai Str., Cau Giay District, Hanoi
							</div>
						</li>
						<li class="row">
							<div class="info-icon"><i class="fa fa-phone" id="phone" aria-hidden="true"></i></div>
							<div class="info-text" style="padding-top: 5px">
								(+84)972-097-189
							</div>
						</li>
						<li class="row">
							<div class="info-icon">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
							<div class="info-text">
								sale@pacom-solution.com
							</div>
						</li>
					</ul>
				</div>
				<div class="col-sm-4 info-item info-address">
					<h5>窓口</h5>
					<ul>
						<li class="row">
							<div class="info-icon icon-map">
								<i style="font-size: 25px" class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="info-text">
								住所：〒111-0014 <br>
								東京都台東区北上野1-15-5
							</div>
						</li>
						<li class="row">
							<div class="info-icon"><i class="fa fa-phone" id="phone" aria-hidden="true"></i></div>
							<div class="info-text" style="padding-top: 5px">
								080-2367-6818
							</div>
						</li>
						<li class="row">
							<div class="info-icon">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
							</div>
							<div class="info-text">
								sale@pacom-solution.com
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copyrights">
			<?php if (false) : ?>
				<!-- <div class="foot-logo">
				<span class="logo-brand">
					<?= $this->Html->image('images/logo/logo-sm.png', ['style' => 'max-width: 80px', 'alt' => ''])  ?>
					<span>PA</span>COM
				</span>
			</div> -->
			<?php endif; ?>
			<div class="container text">
				<div class="col-sm-6 col-xs-12 info-item logo-brand">
					<?= $this->Html->image('/img/images/logo/logo-white.png', ['style' => 'max-width: 70px', 'alt' => ''])  ?>
					<span>PA</span>COM
				</div>
				<div class="col-sm-6 col-xs-12 copy">
					Copyright &copy; 2019 Pacom Solutions. All rights reserved.
				</div>
			</div><!-- /.container -->
		</div><!-- /.copyrights -->
	</footer><!-- /#footer-section -->
	<!-- Footer Section End -->

	<div id="scroll-to-top">
		<span>
			<i class="fa fa-chevron-up"></i>
		</span>
	</div>
	<!-- <script>
		$(document).ready(function() {
			$('#scroll-to-top').click(function() {
				$("html,body").animate({
					scrollTop: 0
				}, 1000);
				return false;
			});
		});
	</script> -->