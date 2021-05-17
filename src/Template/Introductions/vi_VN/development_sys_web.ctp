<?php

/**
 * @var App\View\AppView $this
 */
use Cake\I18n\I18n;
$breadcrumb = [
    [
        'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_web']),
        'text' => 'Giới thiệu',
    ],
    [
        'url' => '',
        'text' => 'Phát triển hệ thống web',
    ],
];
$link = [
    'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'developments:development_sys_web']),
    'text' => 'Phát triển hệ thống web'
];
?>


<!-- Menu -->
<?= $this->element('/menu_no_header') ?>
<!-- Menu End -->
<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text'=>'Giới thiệu'])?>
    <?= $this->element('/breadcrumb', ['breadcrumb'=> $breadcrumb]) ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 list-system">
            <p>
            Chúng tôi phát triển với phạm vi rộng từ dịch vụ cloud SaaS, hệ thống matching, website thương mại điện tử đến trang web công ty. Nội dung phát triển bao gồm từ kế hoạch đến thiết kế, tạo dựng, phát triển và ứng dụng. Chúng tôi phát triển và tạo web linh hoạt theo nhu cầu của khách hàng, chẳng hạn như sản xuất nội dung phong phú trong đó trải nghiệm của người dùng cuối là ưu tiên hàng đầu, xem xét kế hoạch và hiệu quả hoạt động để đạt được mục đích. Chúng tôi có nhiều kinh nghiệm không chỉ back end và front end của hệ thống Web, mà còn trong việc xây dựng cơ sở hạ tầng và đề xuất các công nghệ phù hợp để đáp ứng nhu cầu của khách hàng.
            </p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Công nghệ
            </h5>
            <p>Đối ứng kĩ thuật, công cụ được chỉ định theo nhu cầu của khách hàng. Đội ngũ kĩ sư ưu tú cung cấp  các giải pháp đáp ứng tất cả các nhu cầu được chỉ định.</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">Ngôn ngữ phát triển</h5>
            <p>PHP（Cake, Fuel, Laravel）,JAVA（Struts, Spring, Seasar2）,RUBY（Rails）, JavaScript （Angular, NodeJs, JQuery）,...</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">Công cụ quản lý</h5>
            <p>GitHub, GitLab, Bitbucket, SVN</p>
            <p>Redmine, Trello, Backlog, Jira</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">Môi trường phát triển</h5>
            <p>NetBeans, Eclipse, Visual Studio, Sublime</p>
            <p>IIS, Apache, Tomcat</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">OS + Database</h5>
            <p>Linux, CentOS,  WindowsServer, Oracle, MySQL, PostgreSQL, SQLServer</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">Công cụ giao tiếp</h5>
            <p>Slack, Skype, Line, Google Hangoutなど</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">Dịch vụ cloud</h5>
            <p>Sakura Cloud, AWS Cloud, Azure Cloud, Google Cloud,...</p>
        </div>
    </div>
    <?php if($lang == "vi_VN" || $lang =="en_US"):?>
    <?= $this->element('partial/'.$lang.'/intro_common',['link' => $link,'type' => 1]) ?>
    <?php else:?>
        <?= $this->element('partial/intro_common',['link' => $link,'type' => 1]) ?>
    <?php endif;?>

</div>
<?= $this->element('contact') ?>