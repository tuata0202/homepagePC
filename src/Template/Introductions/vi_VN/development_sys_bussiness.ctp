<?php

/**
 * @var App\View\AppView $this
 */
$breadcrumb = [
    [
        'url' => $this->Url->build($lang . '/introductions/sys_web'),
        'text' => 'Giới thiệu',
    ],
    [
        'url' => '',
        'text' => 'Phát triển hệ thống nghiệp vụ',
    ],
];
$link = [
    'url' => $this->Url->build($lang . '/developments/sys_bussiness'),
    'text' => 'Phát triển hệ thống nghiệp vụ'
];
?>


<!-- Menu -->
<?= $this->element($lang . '/menu_no_header') ?>
<!-- Menu End -->

<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text' => 'Giới thiệu']) ?>
    <?= $this->element($lang . '/breadcrumb', ['breadcrumb' => $breadcrumb]) ?>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 list-system">
                <p>
                    Với đội ngũ kĩ sư giàu kinh nghiệm và những dự án đã được triển khai thành công từ trước đến nay, chúng tôi tự tin có thể cúng cấp cho khách hàng những sản phẩm phát triển đa dạng từ những hệ thống liên kết đơn giản đến phát triển backend.
                    Chúng tôi tự tin có thể đảm nhiệm phát triển hệ thống Web base tối ưu. Chúng tôi có nhiều kinh nghiệm về mảng dịch vụ phát triển các hệ thống quản lí nghiệp vụ, hệ thống server cho khách hàng, các tool,... từ khâu tư vấn phát triển hệ thống quản lí các nghiệp vụ đến khâu hỗ trợ vận hành.
                </p>
            </div>
            <div class="col-md-12 list-system">
                <h5 id="border-bottom">Cắt giảm chi phí nhờ sử dụng Offshore</h5>
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
                <p>PHP（Cake, Fuel, Laravel, JAVA（Struts, Spring, Seasar2), RUBY（Rails), JavaScript （Angular, NodeJs, JQuery),...</p>
            </div>
            <div class="col-md-12 list-system">
                <h5>Công cụ phát triển</h5>
                <p>GitHub, GitLab, Bitbucket, SVN</p>
                <p>Redmine, Trello, Backlog, Jira</p>
            </div>
            <div class="col-md-12 list-system">
                <h5>Môi trường phát triển</h5>
                <p>NetBeans, Eclipse, Visual Studio, Sublime</p>
                <p>IIS, Apache, Tomcat</p>
            </div>
            <div class="col-md-12 list-system">
                <h5 style="font-weight: 600;">OS + Database</h5>
                <p>Linux, CentOS,  WindowsServer, Oracle, MySQL, PostgreSQL, SQLServer</p>
            </div>
            <div class="col-md-12 list-system">
                <h5>Công cụ giao tiếp</h5>
                <p>Slack, Skype, Line, Google Hangout,...</p>
            </div>
            <div class="col-md-12 list-system">
                <h5>Dịch vụ cloud</h5>
                <p>Sakura Cloud, AWS Cloud, Azure Cloud, Google Cloud,...</p>
            </div>

            <?= $this->element('partial/'.$lang.'/intro_common', ['link' => $link, 'type' => 2]) ?>
        </div>
    </div>
    <?= $this->element('contact') ?>
</section>