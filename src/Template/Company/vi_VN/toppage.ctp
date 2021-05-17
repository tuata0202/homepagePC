<?php

/**
 * @var  App\View\AppView $this
 */

use Cake\I18n\I18n;
?>

<!-- Menu -->
<?= $this->element('/menu_header') ?>
<!-- Menu End -->
<?= $this->element('header') ?>

<section class="wrap-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center intro-head">
                <h3 id="section-title">Dịch vụ</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="elementor-widget-container">
                            <div class="serv-box-2 s2">
                                <div class="content-box">
                                    <?= $this->Html->image('image/icons/ic_server1.png', array('width' => 60, 'height' => 60, 'class' => '')) ?>
                                    <h5>PHÁT TRIỂN HỆ THỐNG WEB</h5>
                                    <div>Chúng tôi phát triển với phạm vi rộng từ dịch vụ cloud SaaS, hệ thống matching, website thương mại điện tử đến trang web công ty...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elementor-widget-container">
                            <div class="serv-box-2 s2">
                                <div class="content-box">
                                    <?= $this->Html->image('image/icons/ic_server3.png', array('width' => 60, 'height' => 60, 'class' => '')) ?>
                                    <h5>PHÁT TRIỂN HỆ THỐNG NGHIỆP VỤ</h5>
                                    <div>Đối với phát triển hệ thống nghiệp vụ chúng tôi cung cấp dịch vụ phát triển tổng hợp từ phát triển người dùng, server đến divên kết....</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elementor-widget-container">
                            <div class="serv-box-2 s2">
                                <div class="content-box">
                                    <?= $this->Html->image('image/icons/ic_server2.png', array('width' => 60, 'height' => 60, 'class' => '')) ?>
                                    <h5>PHÁT TRIỂN ỨNG DỤNG SMARTPHONE</h5>
                                    <div>Thành tựu lớn nhất của chúng tôi khi phát triển ở thị trường Nhật Bản và châu Âu là phát triển ứng dụng smartphone. Với kĩ năng phát triển...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="elementor-widget-container">
                            <div class="serv-box-2 s2">
                                <div class="content-box">
                                    <?= $this->Html->image('image/icons/ic_server5.png', array('width' => 60, 'height' => 60, 'class' => '')) ?>
                                    <h5>PHÁT TRIỂN TRÍ TUỆ NHÂN TẠO</h5>
                                    <div>Phát triển trí tuệ nhân tạo của công ty chúng tôi sử dụng kĩ thuật của công ty Google và IBM, sẽ cung cấp giải pháp tốt nhất cho khách hàng.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elementor-widget-container">
                            <div class="serv-box-2 s2">
                                <div class="content-box">
                                    <?= $this->Html->image('image/icons/ic_server4.png', array('width' => 60, 'height' => 60, 'class' => '')) ?>
                                    <h5>THÀNH TỰU PHÁT TRIỂN LABO</h5>
                                    <div>Là mô hình hợp đồng có thể đảm bảo các kĩ sư dành riêng cho khách hàng trong một thời gian nhất định. Nhờ đảm bảo nguồn nhân lực ưu tú ...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Html->image('ic_job.png', array('width' => "100%", 'height' => 300, 'class' => '')) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="wrap-service">
    <div class="container elementor-row">
        <div class="col-md-12 text-center mt-3">
            <h3 id="section-title">Tại sao bạn nên chọn Pacom?</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="icon-box-s2 s1">
                    <div class="icon-main">
                        <span class="li_display"></span> </div>
                    <div class="content-box">
                        <h5>Dịch vụ chất lượng cao</h5>
                        <p>Mỗi sản phẩm tạo ra đều được thiết kế dành riêng không pha trộn. Khách hàng có thể theo dõi mọi hoạt động, tiến độ, chất lượng trong suốt quá trình triển khai, cùng với đó là sự cam kết tuyệt đối về bảo mật thông tin khiến khách hàng luôn an tâm.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="icon-box-s2 s1">
                    <div class="icon-main">
                        <span class="li_news"></span> </div>
                    <div class="content-box">
                        <h5>Hiệu suất - Năng suất công việc</h5>
                        <p>Dựa theo kinh nghiệm và các thành tích thực tế, các kỹ sư sẽ đề xuất cho quý khách các giải pháp tối ưu nhất. Ngoài ra, BrSE biết tiếng Nhật sẽ trực tiếp trao đổi nên công việc phát triển có thể thực hiện trôi chảy.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="icon-box-s2 s1">
                    <div class="icon-main">
                        <span class="fa fa-folder-open-o"></span> </div>
                    <div class="content-box">
                        <h5>Khả năng giao tiếp, trao đổi bằng ngôn ngữ bản địa</h5>
                        <p>Kỹ sư của chúng tôi ngoài trình độ kĩ thuật cao còn thành thạo cả các ngoại ngữ như tiếng Anh và tiếng Nhật. Khoảng 1 nửa nhân viên đều có trình độ năng lực tiếng Nhật từ N1~N3 và có thể xử lý tất cả các nghiệp vụ bằng tiếng Nhật.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="icon-box-s2 s1">
                    <div class="icon-main">
                        <span class="li_camera"></span> </div>
                    <div class="content-box">
                        <h5>Người Pacom ưu tú</h5>
                        <p>Với lực lượng nhân sự phát triển vững chắc, chúng tôi đang phát triển tại Hà Nội và Tokyo. Không chỉ các nhân viên đã có kinh nghiệm du học tại Nhật, chúng tôi cũng có rất nhiều nhân viên đã từng làm việc ngắn hạn hoặc dài hạn tại Nhật.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="solution-slider">
    <div class="container">
        <div class="col-md-12 text-center">
            <h3 id="section-title">Chúng tôi cung cấp giải pháp với Mục tiêu của Mối quan hệ Tin cậy</h3>
        </div>
        <div class="container">
            <div class="col-md-2">
                <a class="tech-box  text-center" href="#" target="_blank">
                    <div class="icon-main">
                        <span class="li_world"></span>
                    </div>
                    <h5>WEB</h5>
                </a>
            </div>
            <div class="col-md-2">
                <a class="tech-box  text-center" href="#" target="_blank">
                    <div class="icon-main">
                        <span class="fa fa-android"></span>
                    </div>
                    <h5>ANDROID</h5>
                </a>
            </div>
            <div class="col-md-2">
                <a class="tech-box  text-center" href="#" target="_blank">
                    <div class="icon-main">
                        <span class="fa fa-apple"></span>
                    </div>
                    <h5>IOS</h5>
                </a>
            </div>
            <div class="col-md-2">
                <a class="tech-box  text-center" href="#" target="_blank">
                    <div class="icon-main">
                        <span class="fa fa-gamepad"></span>
                    </div>
                    <h5>GAME</h5>
                </a>
            </div>
            <div class="col-md-2">
                <a class="tech-box  text-center" href="#" target="_blank">
                    <div class="icon-main">
                        <span class="fa fa-cubes"></span>
                    </div>
                    <h5>IOT</h5>
                </a>
            </div>
            <div class="col-md-2">
                <a class="tech-box  text-center" href="#" target="_blank">
                    <div class="icon-main">
                        <span class="fa fa-television"></span>
                    </div>
                    <h5>TV</h5>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="project-slider">
    <div class="col-md-12 text-center">
        <h3 id="section-title">Dự án nổi bật</h3>
    </div>
    <div class="row elementor-row projects-style-1">
        <ul id="project-slider" class="col-md-12 owl-carousel">
            <li>
                <div class="project-item projects-style-2">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="#" tabindex="0">
                                <?= $this->Html->image('product/product_1.png', array('width' => 300, 'height' => 300, 'class' => 'img-thumbnail')) ?>
                            </a>
                        </div>
                        <div class="portfolio-info ">
                            <div class="portfolio-info-inner">
                                <a class="btn-link" href="<?= $this->Url->build(['action' => 'project', 1]) ?>" tabindex="0"><i class="fa fa-long-arrow-right"></i></a>
                                <p class="portfolio-cates">Ứng dụng nhắn tin xã hội là một ứng dụng nhắn tin trên điện thoại thông minh...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="project-item projects-style-2">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="#" tabindex="0">
                                <?= $this->Html->image('product/product_2.png', array('width' => 300, 'height' => 300, 'class' => 'img-thumbnail')) ?>
                            </a>
                        </div>
                        <div class="portfolio-info ">
                            <div class="portfolio-info-inner">
                                <a class="btn-link" href="<?= $this->Url->build(['action' => 'project', 2]) ?>" tabindex="0"><i class="fa fa-long-arrow-right"></i></a>
                                <p class="portfolio-cates">Ứng dụng cho phép người dùng kết nối với các cuộc gọi chất lượng cao...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="project-item projects-style-2">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="#" tabindex="0">
                                <?= $this->Html->image('product/product_3.png', array('width' => 300, 'height' => 300, 'class' => 'img-thumbnail')) ?>
                            </a>
                        </div>
                        <div class="portfolio-info ">
                            <div class="portfolio-info-inner">
                                <a class="btn-link" href="<?= $this->Url->build(['action' => 'project', 3]) ?>" tabindex="0"><i class="fa fa-long-arrow-right"></i></a>
                                <p class="portfolio-cates">Ứng dụng cho phép người dùng đọc các tạp chí chất lượng cao từ các nhà cung cấp...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="project-item projects-style-2">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="#" tabindex="0">
                                <?= $this->Html->image('product/product_4.png', array('width' => 300, 'height' => 300, 'class' => 'img-thumbnail')) ?>
                            </a>
                        </div>
                        <div class="portfolio-info ">
                            <div class="portfolio-info-inner">
                                <a class="btn-link" href="<?= $this->Url->build(['action' => 'project', 4]) ?>" tabindex="0"><i class="fa fa-long-arrow-right"></i></a>
                                <p class="portfolio-cates">Ứng dụng này cho phép người dùng đọc những cuốn sách tiếng Nhật yêu thích.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="project-item projects-style-2">
                    <div class="projects-box">
                        <div class="projects-thumbnail">
                            <a href="#" tabindex="0">
                                <?= $this->Html->image('product/product_5.png', array('width' => 300, 'height' => 300, 'class' => 'img-thumbnail')) ?>
                            </a>
                        </div>
                        <div class="portfolio-info ">
                            <div class="portfolio-info-inner">
                                <a class="btn-link" href="<?= $this->Url->build(['action' => 'project', 5]) ?>" tabindex="0"><i class="fa fa-long-arrow-right"></i></a>
                                <p class="portfolio-cates">Trò chơi kết hợp giữa trò chơi truy tìm kho báu và trò chơi hành động. Người chơi có thể đạt 100 độ khó.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="advantage line">
    <div class="bg-advisory">
        <div class="img-advisory"></div>
        <div class="overlay-advisory"></div>
    </div>
    <div class="container">
        <div class="row " style="position: relative">
            <div class="col-md-12 text-center">
                <h3 id="section-title">Điểm mạnh của Pacom Solution</h3>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="advantage-item row">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                    <h5>Hiệu quả hoạt động vượt trội</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="advantage-item row">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <h5> An toàn - An tâm</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="advantage-item row">
                    <i class="fa fa-usd" aria-hidden="true"></i>
                    <h5> Chi phí thấp</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="advantage-item row">
                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    <h5> Kĩ sư ưu tú</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="advantage-item row">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                    <h5> Bảo đảm thời hạn</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="advantage-item row">
                    <i class="fa fa-product-hunt" aria-hidden="true"></i>
                    <h5>Chất lượng cao</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="toppage-profile line">
    <div class="container">
        <div class="row text-center">
            <div class="container d-flex flex-wrap">
                <div class="service_bg_item text-center col-md-3">
                    <div class="service_bg_item_sp">
                        <h5 class="service_bg_number count">33</h5>
                    </div>
                    <span class="service_bg_text">Số công ty trao đổi</span>
                </div>
                <div class="service_bg_item text-center col-md-3">
                    <div class="service_bg_item_sp">
                        <h5 class="service_bg_number count">40</h5>
                    </div>
                    <span class="service_bg_text">Số dự án</span>
                </div>
                <div class="service_bg_item text-center col-md-3">
                    <div class="service_bg_item_sp">
                        <h5 class="service_bg_number count">25</h5>
                    </div>
                    <span class="service_bg_text">Số nhân viên</span>
                </div>
                <div class="service_bg_item text-center col-md-3">
                    <div class="service_bg_item_sp">
                        <h5 class="service_bg_number count">97</h5>
                    </div>
                    <span class="service_bg_text">Mức độ hài lòng</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="advisory line">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-6 col-md-6 advisory-left">
                <p class="big">Trước tiên hãy thảo luận với chúng tôi</p>
                <p>Thảo luận về yêu cầu tài liệu chi tiết hay những lo lắng là hoàn toàn miễn phí. Những lo lắng về nhân lực phát triển trong công ty tất cả sẽ được giải quyết khi đến với chúng tôi.
                </p>
            </div>
            <div class="col-sm-6 col-md-6 advisory-right">
                <?php echo $this->Html->link(__('exchange'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:contacts'], ['class' => '', 'escape' => false]); ?>
            </div>
        </div>
    </div>
</section>
<?php if (false) : ?>
    <section class="donor line">
        <div class="container">
            <div class="row text-center">
                <h3 id="section-title">お取引先</h3>
                <div class="list-donnor">
                    <div class="item-donor">
                        <?= $this->Html->image('image/logo/logo1.png') ?>
                    </div>
                    <div class="item-donor">
                        <?= $this->Html->image('image/logo/logo2.png') ?>
                    </div>
                    <div class="item-donor">
                        <?= $this->Html->image('image/logo/logo3.png') ?>
                    </div>
                    <div class="item-donor">
                        <?= $this->Html->image('image/logo/logo4.png') ?>
                    </div>
                    <div class="item-donor">
                        <?= $this->Html->image('image/logo/logo5.png') ?>
                    </div>
                    <div class="item-donor">
                        <?= $this->Html->image('image/logo/logo6.png') ?>
                    </div>
                    <div class="item-donor">
                        <?= $this->Html->image('image/logo/logo7.png') ?>
                    </div>
                    <div class="item-donor">
                        <?= $this->Html->image('image/logo/logo8.png') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (true) : ?>
    <?php
    $news = array(
        'news1.jpg',
        'news2.jpg',
        'news3.jpg',
        'news4.jpg',
        'news5.jpg',
        'news6.jpg',
        'news7.jpg',
        'news8.jpg',
        'news9.jpg',
        'news10.jpg'
    );
    ?>
    <section id="section-news" class="toppage-new project-slider">
        <div class="container">
            <div class="col-md-12 text-center">
                <h3 id="section-title">Tin tức</h3>
            </div>
            <div class="row elementor-row projects-style-1">
                <div class="col-md-12">
                    <?php
                    foreach ($news as $key => $value) {
                    ?>
                        <div class="col-md-3">
                            <div class="img-thumbnail img-news">
                                <a href="<?= Cake\Routing\Router::url('/', true) . '/img/news/' . $value ?>" class="group1">
                                    <?php
                                    echo $this->Html->image('news/' . $value);
                                    ?>
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?= $this->element('contact') ?>
<section class="partner">
    <div class="container">
        <div class="col-md-12 text-center intro-head">
            <h3 id="section-title">Công nghệ</h3>
        </div>
        <div class="row">
            <ul id="owl-slider" class="col-md-12 owl-carousel">
                <li>
                    <div class="row">
                        <h4 class="text-center">
                            Web
                        </h4>
                        <p class="text-center">
                            Sử dụng những framework phổ biến nhất, cùng với những kỹ thuật tiên tiến nhất để tăng chất lượng dịch vụ.
                        </p>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/cakephp.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/laravel.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/nodejs.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/vuejs.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/yii.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/fuel.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/reactjs.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/javaweb.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/spring.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/django.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/rails.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/struts.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="row">
                        <h4 class="text-center">
                            Mobile
                        </h4>
                        <p class="text-center">
                            Xây dựng ứng dụng trên điện thoại bằng ngôn ngữ native cũng như Cross flatform.
                        </p>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/android.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/ios.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/swift.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/kotlin.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/flutter.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/react-native.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/xamarin.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="row">
                        <h4 class="text-center">
                            Kiến trúc hạ tầng
                        </h4>
                        <p class="text-center">
                            Lựa chọn giữa Agile, V-Model, Waterfall cho các dự án phù hợp, giúp khả năng thành công của dự án cao và hiệu quả hơn.
                        </p>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/aws.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/google-cloud.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/azure.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/conoha.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/ansible.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/firebase.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/docker.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/twilio.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/z.com.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <h4 class="text-center">
                            Quy trình phát triển
                        </h4>
                        <p class="text-center">
                            Lựa chọn giữa Agile, V-Model, Waterfall cho các dự án phù hợp, giúp khả năng thành công của dự án cao và hiệu quả hơn.
                        </p>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/agile.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/scrum.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/scrum-ban.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/dsdm.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/v-model.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/waterfall.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/xp.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                            <div class="col-md-3">
                                <?= $this->Html->image('/img/image/partner/pmi.png', array('class' => 'img-thumbnail imv-partner')); ?>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--- MAP --->
<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.331048719341!2d105.7912510473938!3d21.028985204505886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4ea90d2b5f%3A0x4d0ad4ecd8944ace!2zUGjhu5EgVGjDoG5oIFRow6FpLCBE4buLY2ggVuG7jW5nLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1577171631226!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<?= $this->Html->script('jquery.colorbox-min') ?>
<?php echo $this->Html->css('colorbox') ?>
<script>
    (function($) {
        $(document).ready(function() {
            $(".group1").colorbox({
                rel: 'group1',
                transition: "none",
                width: "50%",
                height: "75%"
            });
        })
    })(jQuery)
</script>