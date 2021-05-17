<?php

/**
 * @var App\View\AppView $this
 */
use Cake\I18n\I18n;
$breadcrumb = [
    [
        'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:profile']),
        'text' => '企業情報',
    ],
    [
        'url' => '',
        'text' => '会社概要',
    ],
];
?>
<?= $this->element('menu_no_header') ?>
<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text'=>'企業情報'])?>
    <?= $this->element('breadcrumb', ['breadcrumb'=> $breadcrumb]) ?>
</div>
<div class="container">
    <div class="row ">
        <div class="col-sm-3 col-md-3 padding-top10">
            <?= $this->element('partial/company_left_menu', ['active'=> 'profile']) ?>
        </div>
        <div class=" col-sm-9 col-sm-9 col-md-9 padding-top10" style="padding-bottom: 10px">
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
                    <p>電話</p>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9">
                    <p>(+84)368-765-766</p>
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
                    <p>設立</p>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9">
                    <p>2017年07月07日</p>
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
                    <p>25人 (更新日:2019/09/01)</p>
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
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.331048719341!2d105.7912510473938!3d21.028985204505886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4ea90d2b5f%3A0x4d0ad4ecd8944ace!2zUGjhu5EgVGjDoG5oIFRow6FpLCBE4buLY2ggVuG7jW5nLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1577171631226!5m2!1svi!2s" 
                        width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</div>
<?= $this->element('contact') ?>