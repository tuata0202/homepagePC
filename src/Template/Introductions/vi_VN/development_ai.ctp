<?php

/**
 * @var App\View\AppView $this
 */

use Cake\I18n\I18n;

$breadcrumb = [
    [
        'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_ai']),
        'text' => 'Giới thiệu',
    ],
    [
        'url' => '',
        'text' => 'Phát triển trí tuệ nhân tạo',
    ],
];
$link = [
    'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_ai']),
    'text' => 'Phát triển trí tuệ nhân tạo'
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
                Công ty chúng tôi có kinh nghiệm và kỹ năng để phát triển về vấn đề trí tuệ nhân tạo như Google cloud và Watson IBM và sẽ cung cấp cho khách hàng nhưng giải pháp tối ưu nhất. Những kỹ sư giàu kinh nghiệm của chúng tôi có thê cung cấp những giải pháp phát triển đáp ứng linh hoạt được với những yêu cầu đa dạng của khách hàng. Khi sử dụng các sản phẩm được phát triển bởi công ty chúng tối, khách hàng có thể nhận được những lợi ích to lớn như sau:
            </p>
            <ul>
                <li>Giảm thời gian và chi phí phát triển</li>
                <li>Chất lượng sản phẩm tốt và độ tin cậy cao</li>
                <li>Đề án - Hiện thực hóa những công nghệ mới nhất</li>
                <li>Team với năng suất làm việc cao</li>
            </ul>
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
            <p>Python, Java, C/C++,...</p>
        </div>
        <div class="col-md-12 list-system">
            <h5>Công cụ phat triển</h5>
            <p>GitHub, GitLab, Bitbucket, SVN</p>
            <p>Redmine, Trello, Backlog, Jira</p>
        </div>
        <div class="col-md-12 list-system">
            <h5>Môi trường phát triển</h5>
            <p>NetBeans, Eclipse, Visual Studio</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 style="font-weight: 600;">Database</h5>
            <p>SQL, MySQL</p>
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
        <?= $this->element('partial/' . $lang . '/intro_common', ['link' => $link, 'type' => 4]) ?>
    <?php else : ?>
        <?= $this->element('partial/intro_common', ['link' => $link, 'type' => 4]) ?>
    <?php endif; ?>
</div>
<?= $this->element('contact') ?>