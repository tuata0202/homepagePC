<?php

/**
 * @var App\View\AppView $this
 */
$url      = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// $url1 =;
?>
<div class="main-menu-continer">
    <!-- id="main-menu" -->
    <div id="main-menu-header" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <!-- Responsive Navigation -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button> <!-- /.navbar-toggle -->
                <!-- Logo -->
                <a style="display: none;" id="logo-second-load" class="navbar-brand" href="<?= $this->Url->build($lang.'/') ?>">
                    <?= $this->Html->image('images/logo/logo-sm.png', ['style' => 'width: 20%', 'alt' => ''])  ?>
                    <span>PA</span>COM
                </a>
                <a style="color: #fff" id="logo-first-load" class="navbar-brand" href="<?= $this->Url->build($lang.'/') ?>">
                    <?= $this->Html->image('images/logo/logo-white.png', ['style' => 'width: 20%', 'alt' => ''])  ?>

                    PACOM
                </a>
                
                <!-- /.navbar-brand -->
            </div> <!-- /.navbar-header -->

            <nav class="collapse navbar-collapse" role="navigation">
                <!-- Main navigation -->
                <ul id="headernavigation" class="nav navbar-nav pull-right padding14">
                    <li class="<?= (strpos($url, $lang.'/company/information') !== false) ? 'active' : '' ?>">
                        <a href="<?= $this->Url->build($lang.'/company/information') ?>">Thông tin công ty</a>
                    </li>
                    <li class="<?= (strpos($url, $lang.'/introductions') !== false) ? 'active' : '' ?>">
                        <a href="<?= $this->Url->build($lang.'/introductions/sys_web') ?>">Giới thiệu</a>
                        <?php if (true) : ?>
                            <ul class="sub-menu menu-child">
                                <li class="<?= ($url == '/'.$lang.'/introductions/sys_web') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/introductions/sys_web') ?>">Phát triển hệ thống web </a></li>
                                <li class="<?= ($url == '/'.$lang.'/introductions/sys_bussiness') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/introductions/sys_bussiness') ?>">Phát triển hệ thống nghiệp vụ </a></li>
                                <li class="<?= ($url == '/'.$lang.'/introductions/app') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/introductions/app') ?>">Phát triển ứng dụng điện thoại thông minh </a></li>
                                <li class="<?= ($url == '/'.$lang.'/introductions/ai') ? 'active' : '' ?>"><a href="<?= $this->Url->build($lang.'/introductions/ai') ?>">Phát triển trí tuệ nhân tạo </a></li>
                            </ul>
                        <?php endif; ?></li>
                    <li class="">
                        <a href="<?= $this->Url->build($lang.'/developments/sys_web') ?>">Ví dụ phát triển</a>
                        <?php if (true) : ?>
                            <ul class="sub-menu menu-child">
                                <li><a href="<?= $this->Url->build($lang.'/developments/sys_web') ?>">Phát triển hệ thống web </a></li>
                                <li><a href="<?= $this->Url->build($lang.'/developments/sys_bussiness') ?>">Phát triển hệ thống nghiệp vụ </a></li>
                                <li><a href="<?= $this->Url->build($lang.'/developments/app') ?>">Phát triển ứng dụng điện thoại thông minh </a></li>
                                <li><a href="<?= $this->Url->build($lang.'/developments/ai') ?>">Phát triển trí tuệ nhân tạo </a></li>
                            </ul>
                        <?php endif; ?>
                    </li>
                    <li class=""><a href="<?= $this->Url->build($lang.'/news') ?>">Tin tức</a></li>
                    <?php if (false) : ?>
                        <li class=""><a href="<?= $this->Url->build($lang.'/company/recruitment') ?>">採用情報</a></li>
                    <?php endif; ?>

                    <?php if (false) : ?>
                        <li class=""><a href="<?= $this->Url->build($lang.'/company/testimonial') ?>">お客様の声</a></li>
                    <?php endif; ?>

                    <li class=""><a href="<?= $this->Url->build($lang.'/company/contacts') ?>">Liên hệ</a></li>
                    <li class="lang ">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="/img/image/flag/jp.png"><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu show-flag">
                            <li><a href="#" class="changelanguage" data-value="vi"><img src="/img/image/flag/vi.png"></a></li>
                            <!-- <li><a href="#" class="changelanguage" data-value="en"><img src="/img/image/flag/en.png"></a></li> -->
                        </ul>
                    </li>
                    <?php echo $url;?>
                </ul> <!-- /.nav .navbar-nav -->
            </nav> <!-- /.navbar-collapse  -->

        </div> <!-- /.container -->

    </div><!-- /#main-menu -->
</div><!-- /.main-menu-continer -->