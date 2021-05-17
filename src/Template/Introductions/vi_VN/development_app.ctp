<?php

/**
 * @var App\View\AppView $this
 */

use Cake\I18n\I18n;

$breadcrumb = [
    [
        'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_app']),
        'text' => 'Giới thiệu',
    ],
    [
        'url' => '',
        'text' => 'Phát triển ứng dụng điện thoại thông minh',
    ],
];
$link = [
    'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_app']),
    'text' => 'Phát triển ứng dụng điện thoại thông minh'
];
?>


<!-- Menu -->
<?= $this->element('/menu_no_header') ?>
<!-- Menu End -->
<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text' => 'Giới thiệu']) ?>
    <?= $this->element('/breadcrumb', ['breadcrumb' => $breadcrumb]) ?>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-12 list-system">
            <p>
                Chúng tôi chú trọng việc phát triển ứng dụng smart phone tại thị trường Nhật Bản và Châu Âu. Chúng tôi luôn vận dụng linh hoạt các kinh nghiệm trong việc phát triển ứng dụng dành cho điện thoại thông minh để cung cấp những giải pháp tối ưu cho khách hàng. Chúng tôi đặt sự quan tâm hàng đầu để có thể cung cấp cho khách hàng những giải pháp tối ưu nhất trong việc phát triển các ứng dụng cho điện thoại. Các kỹ sư của chúng tôi luôn cố gắng hết mình để hài hòa giữ nhu cầu của khách hàng và nhu cầu của người dùng cuối. Tôn chỉ làm việc của công ty chúng tôi là chung cấp những ứng dụng điện thoại dễ sử dụng nhất không chỉ dành cho khách hàng mà cả với người dùng cuối.
            </p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Cắt giảm chi phí nhờ sử dụng Offshore
            </h5>
            <p>Cung cấp dịch vụ phát triển offshore với chi phí thấp. Nhờ Offshore với phong cách độc lập dựa trên cơ sở tiếng nhật chúng tôi thực hiện dịch vụ mà khách hàng có thể yên tâm giao phó dù về mặt chất lượng hay bảo mật.</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Công nghệ
            </h5>
            <p>Đối ứng kĩ thuật, công cụ được chỉ định theo nhu cầu của khách hàng. Đội ngũ kĩ sư ưu tú cung cấp các giải pháp đáp ứng tất cả các nhu cầu được chỉ định.</p>
        </div>
        <div class="col-md-12 list-system">
            <h5>Ngôn ngữ phát triển</h5>
            <p>Android（Java, Kotlin), iOS（Objective-C, Swift）, C#（Windows Phone）</p>
        </div>
        <div class="col-md-12 list-system">
            <h5>Công cụ quản lý</h5>
            <p>GitHub, GitLab, Bitbucket, SVN</p>
            <p>Redmine, Trello, Backlog, Jira</p>
        </div>
        <div class="col-md-12 list-system">
            <h5>Môi trường phát triển</h5>
            <p>NetBeans, Eclipse, Visual Studio</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 style="font-weight: 600;">Database</h5>
            <p>SQLite, Realm</p>
        </div>
        <div class="col-md-12 list-system">
            <h5>Công cụ giao tiếp</h5>
            <p>Slack, Skype, Line, Google Hangout,...</p>
        </div>
        <div class="col-md-12 list-system">
            <h5>Dịch vụ cloud</h5>
            <p>Sakura Cloud, AWS Cloud, Azure Cloud, Google Cloud,...</p>
        </div>
    </div>
    <?php if ($lang == "vi_VN" || $lang == "en_US") : ?>
        <?= $this->element('partial/' . $lang . '/intro_common', ['link' => $link, 'type' => 3]) ?>
    <?php else : ?>
        <?= $this->element('partial/intro_common', ['link' => $link, 'type' => 3]) ?>
    <?php endif; ?>
</div>
<?= $this->element('contact') ?>