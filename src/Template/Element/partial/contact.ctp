	<!-- Contact Section -->
	<section id="contact">
		<!-- Contact Form-->
		<div id="contact-form-section" class="contact-form-section">
			<div class="white-bg">
				<div class="container">
					<div class="row">
						<h3 class="text-center title">Contact Us</h3>
						<div class="contact-form-container">
							<?= $this->Form->create(null , ['type'=>'post', 'id' => 'contact-form']) ?>
								<div class="col-md-6">
									<div id="name_error" class="error">
										<?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
										お名前をご入力ください。
									</div>
									<input id="name" class="form-control" name="name" type="text" placeholder="お名前 *" required>
									<div id="name1_error" class="error">
										<?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
										フリガナをご入力ください。
									</div>
									<input id="name1" class="form-control" name="name_1" type="text" placeholder="フリガナ *" required>
									<div id="subject_error" class="error">
										<?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
										法人名をご入力ください。
									</div>
									<input id="subject" class="form-control" name="subject" type="text" placeholder="法人名" required>
									<div id="email_error" class="error">
										<?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
										メールアドレスをご入力ください。
									</div>
									<div id="email_invalid_error" class="error">
										<?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
										メールアドレスは有効なメールアドレスではありません。</div>
									<input id="email" class="form-control" name="email" type="email" placeholder="メールアドレス *" required>
									<!-- <div class="g-recaptcha" data-sitekey="6LdFd7kUAAAAALta5GCvL4VEIeVCvox1l1rvEoe9"></div> -->
									<!-- <input hidden name="token" value="<? //echo $_SESSION['token'] ?>"> -->
								</div><!-- /.col-md-6 -->

								<div class="col-md-6">
									<div id="phone_error" class="error">
										<?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
										お電話番号をご入力ください。
									</div>
									<input id="phone" class="form-control" name="phone" type="text" placeholder="お電話番号 *" required>
									<div id="message_error" class="error">
									<?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
										お問い合わせ内容をご入力ください。</div>
									<textarea id="your_message" class="form-control" name="your_message" placeholder="お問い合わせ内容" rows="4" required></textarea>
									<div id="submit">
										<input data-url="<?= $this->Url->build(['action' => 'send']) ?>" type="submit" name="send_message" id="send_message" class="btn btn-sm btn-light-red full-width btn-effect" value="送信する" />
									</div><!-- /#submit -->
								</div><!-- /.col-md-6 -->
								<div class="col-md-12">
									<div id="mail_success" class="success">
										<?php echo $this->Html->image('image/email/success.png', ['alt' => 'Success!'])  ?>
										Your message has been sent successfully.</div>
									<div id='mail_fail' class='error'>
										<?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
											エーラが発生しました。
									</div>
									<div id='mail_token_expired' class='error'>
										<?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
										申し訳ありませんが、セッションがタイムアウトしました。
										サイトの再読み込みを試してください。
									</div>
								</div><!-- /.col-md-12 -->		
							<?= $this->Form->end() ?>
							<!-- /#contact-form -->

						</div><!-- /.contact-form-container -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.white-bg -->
		</div><!-- /#contact-form-section -->
		<!-- Contact Form End-->

		<!-- Contact Details End-->
		<div id="contact-details">
			<div class="gray-bg contact-details">
				<div class="container">
					<div class="row">
						<h3 class="text-center title">Contact Details</h3>
						<div class="contact-info">
								<div class="col-md-3 col-sm-6 contact-info-box wow bounceInDown center animated" data-wow-delay=".4s">
									<span class="icon envelope">
										<i aria-hidden="true" class="li_mail"></i>
									</span>
									<p class="contact-details-title">Email</p>
									<span class="texts"><a href="mailto:sale@pacom-solution.com " class="a-color">sale@pacom-solution.com </a>
									</span>
								</div><!--  /.contact-info-box -->
								
								<div class="col-md-6 col-sm-6 contact-info-box wow bounceInDown center animated" data-wow-delay=".2s">

									<span class="icon map-marker">
										<i aria-hidden="true" class="li_location"> </i>
									</span>
									<p class="contact-details-title">Address</p>
									<span class="texts">1101, N04B2 Building, Thanh Thai Str., Cau Giay District, Hanoi<br>ハノイ市Cau Giay区Thanh Thai町N04B2ビル 1101号
									</span>
								</div> <!-- /.contact-info-box -->

								<div class="col-md-3 col-sm-6 contact-info-box wow bounceInDown center animated" data-wow-delay=".6s">
									<span class="icon phone">
										<i aria-hidden="true" class="li_phone"></i>
									</span>
									<p class="contact-details-title">Phone</p>
									<span class="texts">(+84)368-765-766
									</span>
								</div><!-- /.contact-info-box -->
						</div><!-- /.contact-info -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.gray-bg  /.contact-details -->
		</div><!-- /#contact-details -->
		<!-- Contact Details End-->

	</section><!-- /#contact -->
	<!-- Contact Section End -->