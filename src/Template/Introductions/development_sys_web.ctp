<?php

/**
 * @var App\View\AppView $this
 */
$breadcrumb = [
    [
        'url' => $this->Url->build('/introductions/sys_web'),
        'text' => '事業紹介',
    ],
    [
        'url' => '',
        'text' => 'WEBシステム開発',
    ],
];
$link = [
    'url' => $this->Url->build('/developments/sys_web'),
    'text' => 'WEBシステム開発実績へ'
];
?>


<!-- Menu -->
<?= $this->element('menu_no_header') ?>
<!-- Menu End -->
<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text'=>'事業紹介'])?>
    <?= $this->element('breadcrumb', ['breadcrumb'=> $breadcrumb]) ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 list-system">
            <p>
                SaaSクラウド型サービス、マッチングシステム、ECサイト、コーポレートサイトまで広い範囲で開発しております。企画からデザイン、制作・開発・運用まで支援致します。目的を達成するための企画、運用効率を考えエンドユーザ体験が第一優先とするリッチコンテンツ制作などお客様の要望に合わせて柔軟なWEB開発・制作を行なっております。
                Webシステムのフロントエンド及びバックエンドだけではなく、インフラ構築などの経験が豊富でお客様のニーズに合わせた適切な技術を提案いたします。
            </p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                テクノロジー
            </h5>
            <p>お客様のニーズを応じて、指定された技術やツールなどを対応しております。優秀なエンジニアは指定されたすべての要件に合致したソリューションを提供致します。</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">開発言語</h5>
            <p>PHP（Cake, Fuel, Laravel）、JAVA（Struts, Spring, Seasar2）、RUBY（Rails）、JavaScript （Angular, NodeJs, JQuery）など</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">管理ツール</h5>
            <p>GitHub、GitLab、Bitbucket、SVN</p>
            <p>Redmine、Trello、Backlog、Jira</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">開発環境</h5>
            <p>NetBeans、Eclipse、Visual Studio、Sublime</p>
            <p>IIS、Apache、Tomcat</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">OS + Database</h5>
            <p>Linux、CentOS、 WindowsServer、Oracle、MySQL、PostgreSQL、SQLServer</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">コミュニケーションツール</h5>
            <p>Slack、Skype、Line、Google Hangoutなど</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 class="big-txt">クラウドサービス</h5>
            <p>さくらクラウド、AWSクラウド、Azureクラウド、Googleクラウドなど</p>
        </div>
    </div>
    <?= $this->element('partial/intro_common',['link' => $link,'type' => 1]) ?>

</div>
<?= $this->element('contact') ?>