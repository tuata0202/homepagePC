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
        'text' => '業務システム開発',
    ],
];
$link = [
    'url' => $this->Url->build('/developments/sys_bussiness'),
    'text' => '業務システム開発実績へ'
];
?>


<!-- Menu -->
<?= $this->element('menu_no_header') ?>
<!-- Menu End -->

<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text'=>'事業紹介'])?>
    <?= $this->element('breadcrumb', ['breadcrumb'=> $breadcrumb]) ?>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 list-system">
                <p>
                    豊富な開発経験とこれまでの実績により、簡単なシステム連携からバックエンド開発まで総合的な開発サービスを提供しております。<br/>
					一番の強みはWebベースの開発だと自負しております。各種業務管理システムの開発をコンサルティング段階からサポートすることもでき、クライアントサーバ系開発やツール開発など業務系システム全般に係る開発サービスの提供実績がございます。<br/>
					弊社の 「業務要件分析力」「開発技術力」、および「プロジェクトマネジメント力」を駆使し、ニーズ分析から設計・製造・導入までを一貫して行い、お客様のご要望に合ったシステムを実現させていただいております。<br/>
                </p>
            </div>
            <div class="col-md-12 list-system">
                <h5 id="border-bottom">オフショア導入によるコスト削減</h5>
                <p>低価格でのオフショア開発サービスをご提供しています。 日本語をベースとした独自スタイルのオフショアにより、品質やセキュリティ面でも安心してお任せ頂けるサービスを実現しました。</p>
            </div>
            <div class="col-md-12 list-system">
                <h5 id="border-bottom">
                    テクノロジー
                </h5>
                <p>お客様のニーズを応じて、指定された技術やツールなどを対応しております。優秀なエンジニアは指定されたすべての要件に合致したソリューションを提供致します。</p>
            </div>
            <div class="col-md-12 list-system">
                <h5>開発言語</h5>
                <p>PHP（Cake, Fuel, Laravel）、JAVA（Struts, Spring, Seasar2）、RUBY（Rails）、JavaScript （Angular, NodeJs, JQuery）など</p>
            </div>
            <div class="col-md-12 list-system">
                <h5>管理ツール</h5>
                <p>GitHub、GitLab、Bitbucket、SVN</p>
                <p>Redmine、Trello、Backlog、Jira</p>
            </div>
            <div class="col-md-12 list-system">
                <h5>開発環境</h5>
                <p>NetBeans、Eclipse、Visual Studio、Sublime</p>
                <p>IIS、Apache、Tomcat</p>
            </div>
            <div class="col-md-12 list-system">
                <h5 style="font-weight: 600;">OS + Database</h5>
                <p>Linux、CentOS、 WindowsServer、Oracle、MySQL、PostgreSQL、SQLServer</p>
            </div>
            <div class="col-md-12 list-system">
                <h5>コミュニケーションツール</h5>
                <p>Slack、Skype、Line、Google Hangoutなど</p>
            </div>
            <div class="col-md-12 list-system">
                <h5>クラウドサービス</h5>
                <p>さくらクラウド、AWSクラウド、Azureクラウド、Googleクラウドなど</p>
            </div>
        </div>
        <?= $this->element('partial/intro_common',['link' => $link,'type' => 2]) ?>
    </div>
    <?= $this->element('contact') ?>
</section>