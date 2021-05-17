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
    <?= $this->element('banner_tit', ['text' => '企業情報']) ?>
</div>
<div id="information">

    <section id="message">
        <div class="container">
            <div class="row">
                <h1 id="title-infor"> 代表メッセージ</h1>
                <div class="warap_cotent">
                    <div class="row">
                        <div class="col-lg-8">
                            <p>
                                ベトナムのハノイに社を構えるPACOM SOLUTIONSの代表のロンと申します。<br><br>
                                私は、日本の文化に興味を持ち、日本語を学びました。プログラマーからキャリアが始め、取締役CTO、ベトナムで日本社のソフトウェア開発の代表を経験してきました。<br><br>
                                PACOM SOLUTIONSは、京セラの創業者の稲盛さんが経営の基準に掲げた「敬天愛人」を社是にしています。<br><br>
                                人として、ビジネスとして正しい事を行い、関わった方々と長く関係を築き、愛し愛される会社にしていきたいです。<br><br>

                                先ずは、開発案件がございましたら、お気軽にご連絡頂けましたら幸いです。<br><br>

                                私が責任を持って対応させて頂きます。<br><br>

                                皆様との良いご縁をお待ちしております。
                            </p>
                            <div class="wrap_ceo_signal row">
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
                <h1 id="title-infor"> 役員紹介</h1>

                <div class="warap_cotent">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 wrap-leader">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 avatar-leader">
                                    <?= $this->Html->image('bods/Long.jpg', ['class' => 'img-rounded']) ?>
                                    <h5>Nguyen Hai Long</h5>
                                    <span>代表取締役CEO<br>（Chief Executive Officer)</span>
                                </div>
                                <div class="col-sm-6 col-md-6 avatar-leader">
                                    <?= $this->Html->image('bods/Hung.jpg', ['class' => 'img-rounded']) ?>
                                    <h5>Nguyen Van Hung</h5>
                                    <span>日本駐在員事務所の代表者</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-9 col-md-9 wrap-leader">
                            <div class="row">

                                <div class="col-sm-4 col-md-4 avatar-leader">
                                    <?= $this->Html->image('bods/Tinh.jpg', ['class' => 'img-rounded']) ?>
                                    <h5>Do Xuan Tinh</h5>
                                    <span>取締役COO<br>（Chief Operating Officer)</span>

                                </div>
                                <div class="col-sm-4 col-md-4 avatar-leader">
                                    <?= $this->Html->image('bods/Thinh.jpg', ['class' => 'img-rounded']) ?>
                                    <h5>Pham Thi Thinh</h5>
                                    <span>取締役CAO <br>（Chief Administrative Officer)</span>

                                </div>

                                <div class="col-sm-4 col-md-4 avatar-leader">
                                    <?= $this->Html->image('bods/Dinh.jpg', ['class' => 'img-rounded']) ?>
                                    <h5>Chu Van Dinh</h5>
                                    <span>取締役CTO <br>（Chief Technology Officer)</span>

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

                <h1 id="title-infor" style="color: #fff;">経営理念</h1>

                <div class="warap_cotent">
                    <div class="col-lg-4 list-content-right">
                        <div class="icon-box-s2 s1">
                            <div class="icon-main">
                                <span class="li_news"></span>
                            </div>
                            <div class="content-box">
                                <h5>ビジョン</h5>
                                <p>私たち、IT業界において、世界中で認め られるリーディングカンパニーを目指してい ます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 list-content-right">
                        <div class="icon-box-s2 s1">
                            <div class="icon-main">
                                <span class="li_news"></span>
                            </div>
                            <div class="content-box">
                                <h5>ミッション</h5>
                                <ul>
                                    <li>• お客様に、高品質なサービスを提供し、品質については継続的に改善していくことをお約束します。</li>
                                    <li>• 情熱を持って仕事に向き合うメンバーたち を、世界で通用するレベル􏰀開発者へと育 成します。</li>
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
                                <h5>バリュー</h5>
                                <ul>
                                    <li>• 創造性</li>
                                    <li>• 信頼性</li>
                                    <li>• 敬意</li>
                                    <li>• 品質</li>
                                    <li>• 公正</li>
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
                <h1 id="title-infor">会社概要</h1>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <div class="row profile-item">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <p>社名</p>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <p>株式会社PACOM<br>
                                （英字：Pacom Solutions Jsc,co）</p>
                        </div>
                    </div>
                    <div class="row profile-item">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <p>住所</p>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <p>1101, N04B2 Building, Thanh Thai Str., Cau Giay District, Hanoi</p>
                        </div>
                    </div>
                    <div class="row profile-item">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <p>代表取締役社長</p>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <p>Nguyen Hai Long</p>
                        </div>
                    </div>
                    <div class="row profile-item">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <p>資本金</p>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <p>500万円</p>
                        </div>
                    </div>
                    <div class="row profile-item">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <p>従業員数</p>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <p>25人 (更新日:2020/04/01)</p>
                        </div>
                    </div>
                    <div class="row profile-item-last">
                        <div class="col-xs-3 col-sm-3 col-md-3 paddingauto">
                            <p>事業内容</p>
                        </div>
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <p>– 業務アプリケーション<br>
                                – WEBシステム<br>
                                – モバイルアプリケーション<br>
                                – クラウドサービス</p>
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