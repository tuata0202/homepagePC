<?php

/**
 * @var App\View\AppView $this
 */

use Cake\I18n\I18n;

$breadcrumb = [
	[
		'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:message']),
		'text' => __('Thông tin công ty'),
	],
	[
		'url' => '',
		'text' => 'Top Message',
	],
];
?>

<?= $this->element('menu_no_header') ?>
<div class="container-fluid padding0">
	<?= $this->element('banner_tit', ['text' => 'Thông tin công ty']) ?>
</div>
<div id="information">

	<section id="message">
		<div class="container">
			<div class="row">
				<h1 id="title-infor"> Top Message</h1>
				<div class="warap_cotent">
					<div class="row">
						<div class="col-lg-8">
							<p>
								Tôi là Nguyễn Hải Long, đại diện công ty cổ phần phần mềm PACOM SOLUTIONS tại Hà Nội, Việt Nam.<br><br>

								Tôi đã tìm hiểu văn hoá Nhật Bản và học tiếng Nhật. Bắt đầu công việc từ một lập trình viên, tôi đã có kinh nghiệm làm giám đốc kỹ thuật và đại diện một công ty gia công phần mềm của Nhật Bản có trụ sở tại Việt Nam.<br><br>

								PACOM SOLUTIONS lấy phương châm kinh doanh là “Kính Thiên Ái Nhân“, tựa đề của cuốn sách do người sáng lập Kyocera Inamori đã đặt ra làm tiêu chuẩn quản lý.<br><br>

								Với tư cách là một người, tôi muốn làm điều đúng đắn với tư cách là một doanh nghiệp, xây dựng mối quan hệ với những người liên quan và trở thành một công ty được yêu thích và yêu mến.<br><br>

								Trước hết, nếu bạn có một dự án phát triển, xin vui lòng liên hệ với chúng tôi.<br><br>

								Tôi sẽ xử lý nó một cách có trách nhiệm.<br><br>

								Chúng tôi mong muốn có một mối quan hệ tốt với bạn.<br><br>
							</p>
							<div class="row wrap_ceo_signal">
								<strong>CEO </strong><?php echo $this->Html->image('image/ceo_signal.png', ['class' => 'ceo_signal'])  ?>
							</div>
						</div>
						<div class="col-lg-4">
							<?php echo $this->Html->image('image/master.jpg', ['class' => 'img-rounded'])  ?>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>


	<div class="container">
		<div class="divider_line">
			<div class="divider_inner divider_line2">
				<i class="fa fa-circle"></i> </div>
		</div>
	</div>


	<section id="leader" style="display: none;">
		<div class="container">
			<div class="row">
				<h1 id="title-infor">Ban giám đốc</h1>

				<div class="warap_cotent">
					<div class="row">
						<div class="col-sm-6 col-md-6 wrap-leader">
							<div class="row">
								<div class="col-sm-6 col-md-6 avatar-leader">
									<?= $this->Html->image('bods/Long.jpg', ['class' => 'img-rounded']) ?>
									<h5>Nguyễn Hải Long</h5>
									<span>Giám đốc điều hành CEO<br>（Chief Executive Officer)</span>
								</div>
								<div class="col-sm-6 col-md-6 avatar-leader">
									<?= $this->Html->image('bods/Hung.jpg', ['class' => 'img-rounded']) ?>
									<h5>Nguyễn Văn Hưng</h5>
									<span>Đại diện văn phòng Nhật Bản</span>
								</div>


							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-9 col-md-9 wrap-leader">
							<div class="row">

								<div class="col-sm-4 col-md-4 avatar-leader">
									<?= $this->Html->image('bods/Tinh.jpg', ['class' => 'img-rounded']) ?>
									<h5>Đỗ Xuân Tình</h5>
									<span>Giám đôc điều hành COO<br>（Chief Operating Officer)</span>
								</div>
								<div class="col-sm-4 col-md-4 avatar-leader">
									<?= $this->Html->image('bods/Thinh.jpg', ['class' => 'img-rounded']) ?>
									<h5>Phạm Thị Thịnh</h5>
									<span>Giám đốc hành chính nhân sự CAO <br>（Chief Administrative Officer)</span>
								</div>

								<div class="col-sm-4 col-md-4 avatar-leader">
									<?= $this->Html->image('bods/Dinh.jpg', ['class' => 'img-rounded']) ?>
									<h5>Chu Văn Định</h5>
									<span>Giám đốc kĩ thuật CTO <br>（Chief Technology Officer)</span>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</section>

	<section id="manage">
		<div class="container">
			<div class="row">

				<h1 id="title-infor" style="color: #fff;">Triết lý kinh doanh</h1>

				<div class="warap_cotent">
					<div class="col-lg-4 list-content-right">
						<div class="icon-box-s2 s1">
							<div class="icon-main">
								<span class="li_news"></span>
							</div>
							<div class="content-box">
								<h5>Tầm nhìn</h5>
								<p>Chúng tôi luôn hướng tới mục tiêu trở thành công ty hàng đầu được công nhận trên toàn thế giới trong lĩnh vực công nghệ thông tin.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 list-content-right">
						<div class="icon-box-s2 s1">
							<div class="icon-main">
								<span class="li_news"></span>
							</div>
							<div class="content-box">
								<h5>Sứ mệnh</h5>
								<ul>
									<li>Chúng tôi cam kết sẽ cung cấp cho khách hàng dịch vụ chất lượng cao và liên tục cải tiến chất lượng.</li>
									<li>Đào tạo các thành viên đầy nhiệt huyết thành kĩ sư đẳng cấp thế giới.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 list-content-right">
						<div class="icon-box-s2 s1">
							<div class="icon-main">
								<span class="li_news"></span>
							</div>
							<div class="content-box">
								<h5>Giá trị</h5>
								<ul>
									<li>Tính sáng tạo</li>
									<li>Độ tin cậy</li>
									<li>Tôn trọng</li>
									<li>Chất lượng</li>
									<li>Công bằng</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="profile">
		<div class="container">
			<div class="row">
				<h1 id="title-infor">Giới thiệu công ty</h1>
				<div class="col-xs-8 col-sm-8 col-md-8">
					<div class="row profile-item">
						<div class="col-xs-3 col-sm-3 col-md-3">
							<p>Tên công ty</p>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9">
							<p>Công ty cổ phần PACOM<br>
								（Tên tiếng anh：Pacom Solutions Jsc,co）</p>
						</div>
					</div>
					<div class="row profile-item">
						<div class="col-xs-3 col-sm-3 col-md-3">
							<p>Địa chỉ</p>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9">
							<p>1101, N04B2 Building, Thanh Thai Str., Cau Giay District, Hanoi</p>
						</div>
					</div>
					<div class="row profile-item">
						<div class="col-xs-3 col-sm-3 col-md-3">
							<p>Giám đốc điều hành</p>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9">
							<p>Nguyễn Hải Long</p>
						</div>
					</div>
					<div class="row profile-item">
						<div class="col-xs-3 col-sm-3 col-md-3">
							<p>Vốn điều lệ</p>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9">
							<p>1 tỉ đồng</p>
						</div>
					</div>
					<div class="row profile-item">
						<div class="col-xs-3 col-sm-3 col-md-3">
							<p>Số lượng nhân viên</p>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9">
							<p>25 người (Cập nhập:2020/04/01)</p>
						</div>
					</div>
					<div class="row profile-item-last">
						<div class="col-xs-3 col-sm-3 col-md-3 paddingauto">
							<p>Nội dung kinh doanh</p>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9">
							<p>– Ứng dụng nghiệp vụ<br>
								– Hệ thống Web<br>
								– Ứng dụng mobile<br>
								– Dịch vụ cloud</p>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4">
					<?php echo $this->Html->image('news/news10.jpg')  ?>
				</div>
				<div class="warap_cotent">

					<div class="row" style="padding: 10px;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.331048719341!2d105.7912510473938!3d21.028985204505886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4ea90d2b5f%3A0x4d0ad4ecd8944ace!2zUGjhu5EgVGjDoG5oIFRow6FpLCBE4buLY2ggVuG7jW5nLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1577171631226!5m2!1svi!2s" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>

<?= $this->element('contact') ?>