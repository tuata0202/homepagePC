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
        'text' => '人工知能開発',
    ],
];
$link = [
    'url' => $this->Url->build('/developments/ai'),
    'text' => '人工知能開発実績へ'
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
                当社では人工知能開発において、グーグルクラウドやIBMのWastonなどの開発経験やノウハウをお持ちしており、お客様に最適なソリューションをご提案しております。経験豊富な技術者がお客様の様々なご要望に柔軟に応えられる開発サービスをご提供しております。当社が提供する開発サービスをご採用いただくことにより、お客様は以下のメリットを受けることができます。
            </p>
            <ul>
                <li>開発の期間短縮および低コスト化</li>
                <li>高品質・高信頼性の実現</li>
                <li>最新技術の提案・実現</li>
                <li>高生産性なチーム</li>
            </ul>
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
            <p>Python、Java、C/C++など</p>
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
            <p>SQL、MySQL</p>
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
    <?= $this->element('partial/intro_common',['link' => $link,'type' => 4]) ?>
</div>
<?= $this->element('contact') ?>