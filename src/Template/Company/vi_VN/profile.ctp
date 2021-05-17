<?php

/**
 * @var App\View\AppView $this
 */
use Cake\I18n\I18n;
$breadcrumb = [
    [
        'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:profile']),
        'text' => 'Thông tin công ty',
    ],
    [
        'url' => '',
        'text' => 'Giới thiệu công ty',
    ],
];
?>
<?= $this->element('/menu_no_header') ?>
<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text'=>'Thông tin công ty'])?>
    <?= $this->element('/breadcrumb', ['breadcrumb'=> $breadcrumb]) ?>
</div>
<div class="container">
    <div class="row ">
        <div class="col-sm-3 col-md-3 padding-top10">
            <?= $this->element('partial/company_left_menu', ['active'=> 'profile']) ?>
        </div>
        <div class=" col-sm-9 col-sm-9 col-md-9 padding-top10" style="padding-bottom: 10px">
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
                    <p>Điện thoại</p>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9">
                    <p>(+84)368-765-766</p>
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
                    <p>Ngày thành lập</p>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9">
                    <p>Ngày 7 tháng 7 năm 2017</p>
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
                    <p>25 người (Cập nhập:2019/09/01)</p>
                </div>
            </div>
            <div class="row profile-item-last">
                <div class="col-xs-3 col-sm-3 col-md-3 paddingauto">
                    <p>Nội dung kinh doanh</p>
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9">
                    <p>–  Ứng dụng nghiệp vụ<br>
                        – Hệ thống Web<br>
                        – Ứng dụng mobile<br>
                        – Dịch vụ cloud</p>
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