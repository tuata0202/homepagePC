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
        'text' => 'スマホアプリ開発',
    ],
];
$link = [
    'url' => $this->Url->build('/developments/app'),
    'text' => 'スマホアプリ開発実績へ'
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
                日本市場及びヨーロッバ市場において、スマホアプリ開発の強みでございます。スマホアプリ開発ノウハウを活かし、お客様に最適なソリューションをご提案しております。当社ではお客様のご要望に合わせて、スマホアプリ開発を提供するよう一番に心がけております。お客様目線とエンドユーザー目線を持ってお客様と向き合うことを常に心がけております。お客様だけでなく、エンドユーザーが継続利用しやすいようなスマホアプリの提供を目指しております。
            </p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                オフショア導入によるコスト削減
            </h5>
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
            <p>Android（Java、 Kotlin）、iOS（Objective-C、Swift）、C#（Windows Phone）</p>
        </div>
        <div class="col-md-12 list-system">
            <h5>管理ツール</h5>
            <p>GitHub、GitLab、Bitbucket、SVN</p>
            <p>Redmine、Trello、Backlog、Jira</p>
        </div>
        <div class="col-md-12 list-system">
            <h5>開発環境</h5>
            <p>NetBeans、Eclipse、Visual Studio</p>
        </div>
        <div class="col-md-12 list-system">
            <h5 style="font-weight: 600;">Database</h5>
            <p>SQLite、Realm</p>
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
    <?= $this->element('partial/intro_common',['link' => $link,'type' => 3]) ?>
</div>
<?= $this->element('contact') ?>