<?php

/**
 * @var App\View\AppView $this
 */
?>
<?= $this->element('menu_no_header') ?>
<div class="container-fluid padding0">
    <div class="padding-top80 banner-top">
        <h1 class="banner-top-title text-center">お客様に成功体験は当社の成功体験でございます。</h1>
        <div class="frost-banner"></div>
    </div>
    <div class="breadcrumb-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">ホーム</a></li>
            <li class="breadcrumb-item"><a href="#">開発事例</a></li>
            <li class="breadcrumb-item active" aria-current="page">業務システム開発事例</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 list-system">
            <h5>プロジェクト概要</h5>
            <p>
                電子商取引システム関連のサービスを開発。<br/>
				本システムでは販売の仲介、アプリの広告出稿、モールの無料提供のツールを実装。
            </p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                主要な機能
            </h5>
            <p>電子商取引テシステムは以下の主要な機能がございます。</p>
            <ul>
                <li>ユーザー管理</li>
                <li>商品管理</li>
                <li>オンライン商品購入</li>
                <li>ポイント集約、商品交換</li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                対応工程と工数
            </h5>
            <ul>
                <li>工程：システム分析、データーベース設計、プログラム作成、テスト、デプロイまでの作業を行いました。</li>
                <li>開発期間：3ヶ月</li>
                <li>開発の工数：10人月</li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                メンバー構成
            </h5>
            <div class="table-responsive">
                <table class="table-bordered">
                    <tr class="table-title">
                        <th>NO</th>
                        <th>担当</th>
                        <th>役割</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>プロジェクトマネジャー</td>
                        <td>ロジェクト全体管理・ 基本設計</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>開発者（エンジニア）</td>
                        <td>開発・テスト</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>デザイナー</td>
                        <td>素材作成</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                利用された技術
            </h5>
            <ul>
                <li>バックエンド技術: <br>
                    <span>PHP、CakePHP</span>
                </li>
                <li>フロントエンド技術: <br>
                    <span>HTML、Bootstrap、Javascript、JQuery</span>
                </li>
                <li>Database: <br>
                    <span>MySQL</span>
                </li>
                <li>プロジェクト管理: <br>
                    <span>Google docs、MSプロジェクト管理、GIT、SVN、Redmine、Backlog</span>
                </li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                その他
            </h5>
            <p>航空券予約システム以外には他のシステムを開発した実績がございます。</p>
        </div>
        <div class="col-md-12 list-system" id="link-advisory">
            <?= $this->Html->link('無料相談今すぐ始めよう', '/company/contacts', ['class' => 'btn btn-warning']) ?>
        </div>
    </div>
</div>
<?= $this->element('contact') ?>