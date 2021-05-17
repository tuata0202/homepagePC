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
                <h3 id="section-title">サービス</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="elementor-widget-container">
                            <div class="serv-box-2 s2">
                                <div class="content-box">
                                    <?= $this->Html->image('image/icons/ic_server1.png', array('width' => 60, 'height' => 60, 'class' => '')) ?>
                                    <h5>WEBシステム開発</h5>
                                    <div>CSaaSクラウド型サービス、マッチングシステム、ECサイト、コーポレートサイトまで幅広い範囲で開発しております。開発内容は企画からデザイン、制作・開発・運用まで多岐に渡ります。</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elementor-widget-container">
                            <div class="serv-box-2 s2">
                                <div class="content-box">
                                    <?= $this->Html->image('image/icons/ic_server3.png', array('width' => 60, 'height' => 60, 'class' => '')) ?>
                                    <h5>業務システム開発</h5>
                                    <div>業務系システム開発では、クライアント、サーバの開発から基幹システムとの連携まで総合的な開発サービスを提供しております。</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elementor-widget-container">
                            <div class="serv-box-2 s2">
                                <div class="content-box">
                                    <?= $this->Html->image('image/icons/ic_server2.png', array('width' => 60, 'height' => 60, 'class' => '')) ?>
                                    <h5>スマホアプリ開発</h5>
                                    <div>日本市場・ヨーロッバ市場において、一番の実績はスマホアプリ開発でございます。今まで23件のスマホアプリ開発技術を活かし、お客様に最適なソリューションをご提案しております。</div>
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
                                    <h5>人工知能開発</h5>
                                    <div>当社の人工知能開発においては、Google社やIBM社の技術を活用しており、こちらを用いてお客様に最適なソリューションをご提案していきます。</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="elementor-widget-container">
                            <div class="serv-box-2 s2">
                                <div class="content-box">
                                    <?= $this->Html->image('image/icons/ic_server4.png', array('width' => 60, 'height' => 60, 'class' => '')) ?>
                                    <h5>ラボ型開発実績</h5>
                                    <div>お客様専属のエンジニアをある一定期間確保できるという契約形態です。 あらかじめ優秀な人材を自社専用に確保しておくことで、 柔軟に開発を依頼することができ、仕様やノウハウを蓄積できる特徴があります。</div>
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


<<section class="wrap-service">
    <div class="container elementor-row">
        <div class="col-md-12 text-center mt-3">
            <h3 id="section-title">Pacom Solutionsが信頼される理由</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="icon-box-s2 s1">
                    <div class="icon-main">
                        <span class="li_display"></span> </div>
                    <div class="content-box">
                        <h5>高品質なサービス</h5>
                        <p>お客様は各工程を通じてプロジェクトすべての活動、進捗、品質を確認することができます。情報セキュリティへの対策も万全で安心してご依頼を頂けます。</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="icon-box-s2 s1">
                    <div class="icon-main">
                        <span class="li_news"></span> </div>
                    <div class="content-box">
                        <h5>パフォーマンス・生産性</h5>
                        <p>今までの経験とノウハウを生かし御社に最高のソリューションを提供します。<br>BrSEはN1相当ですので日本語で問題なくコミュニケーションがとれスムーズに開発が可能です。<br>速さと品質を両立させております。</p>
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
                        <h5>現地の言語でのコミュニケーション能力</h5>
                        <p>弊社のエンジニアは、技術だけではなく、英語や日本語などの外国語を習得しております。 従業員の約半数は日本語能力レベルがN1〜N3であり、日本語を理解しております。</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="icon-box-s2 s1">
                    <div class="icon-main">
                        <span class="li_camera"></span> </div>
                    <div class="content-box">
                        <h5>優秀な人材</h5>
                        <p>Pacom Solutionsは、豊かな人材と確かな技術力をもってお客様から厚い信頼を得て来ました。<br>ハノイとホーチミンと東京で開発を行っています。弊社のスタッフは日本語の学習経験があるだけではなく日本で短期または長期の就労経験のあるスタッフが多く在籍しております。ですので日系企業との仕事の仕方を心得ております。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>


    <section class="solution-slider">
        <div class="container">
            <div class="col-md-12 text-center">
                <h3 id="section-title">信頼関係の目標でソリューションを供給しています</h3>
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
            <h3 id="section-title">プロジェクト一覧</h3>
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
                                    <a class="btn-link" href="#" tabindex="0"><i class="fa fa-long-arrow-right"></i></a>
                                    <p class="portfolio-cates">チャットアプリは無料でユーザーの趣味、位置によってのスマホのアプリです。</p>
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
                                    <a class="btn-link" href="#" tabindex="0"><i class="fa fa-long-arrow-right"></i></a>
                                    <p class="portfolio-cates">VoIP技術のアドバンテージを生かして、ユーザーが友達と家族にハイクオリティな通話で連絡できるアプリです。</p>
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
                                    <a class="btn-link" href="#" tabindex="0"><i class="fa fa-long-arrow-right"></i></a>
                                    <p class="portfolio-cates">ユーザーがサプライヤーからハイクオリティな雑誌を読めるアプリです。スムーズに読めて、綺麗で、ユーザーに優しい機能があります。</p>
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
                                    <a class="btn-link" href="#" tabindex="0"><i class="fa fa-long-arrow-right"></i></a>
                                    <p class="portfolio-cates">ユーザーが好きな日本語の本を読めるアプリです。</p>
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
                                    <a class="btn-link" href="#" tabindex="0"><i class="fa fa-long-arrow-right"></i></a>
                                    <p class="portfolio-cates">金庫を探すゲームとアクションゲームを合わせるゲームです。100レベルの難しさがあります。</p>
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
                    <h3 id="section-title">株式会社パコムソリューションの強み</h3>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="advantage-item row">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                        <h5>優れた運用効率</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="advantage-item row">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <h5>安心・安全</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="advantage-item row">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        <h5>低価格なコスト</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="advantage-item row">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        <h5>優秀なエンジニア</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="advantage-item row">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <h5>納期厳守</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="advantage-item row">
                        <i class="fa fa-product-hunt" aria-hidden="true"></i>
                        <h5>高品質</h5>
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
                        <span class="service_bg_text">コンサルティング</span>
                    </div>
                    <div class="service_bg_item text-center col-md-3">
                        <div class="service_bg_item_sp">
                            <h5 class="service_bg_number count">40</h5>
                        </div>
                        <span class="service_bg_text">プロジェクト</span>
                    </div>
                    <div class="service_bg_item text-center col-md-3">
                        <div class="service_bg_item_sp">
                            <h5 class="service_bg_number count">25</h5>
                        </div>
                        <span class="service_bg_text">従業員</span>
                    </div>
                    <div class="service_bg_item text-center col-md-3">
                        <div class="service_bg_item_sp">
                            <h5 class="service_bg_number count">97</h5>
                        </div>
                        <span class="service_bg_text">満足度</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advisory line">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-6 col-md-6 advisory-left">
                    <p class="big">まずはお気軽にご相談ください</p>
                    <p>詳しい資料請求やお悩みでの相談も、全て無料です。
                        社内の開発人材のお悩みは当社で全て解決！</p>
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
                    <h3 id="section-title">PACOMニュース</h3>
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
                <h3 id="section-title">技術</h3>
            </div>
            <div class="row">
                <ul id="owl-slider" class="col-md-12 owl-carousel">
                    <li>
                        <div class="row">
                            <h4 class="text-center">
                                ウェブ
                            </h4>
                            <p class="text-center">
                                最も一般的なフレームワーク、最も高度な技術を用いて、サービスの質を向上。
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
                                モバイル
                            </h4>
                            <p class="text-center">
                                モバイルアプリ(ネイティブとクロスプラットフォーム)
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
                                インフラ
                            </h4>
                            <p class="text-center">
                                最も効率で高度なDevops技術とクラウドサービスを利用。
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
                                開発プロセス
                            </h4>
                            <p class="text-center">
                                Agile、V-Model、Waterfallのいずれかを適切に選び、プロジェクトの成功と効率を向上。
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