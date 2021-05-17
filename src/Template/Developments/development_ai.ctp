<?php

/**
 * @var App\View\AppView $this
 */
?>
<?= $this->element('menu_no_header') ?>
<div class="container-fluid padding0">
    <div class="padding-top80 banner-top">
        <h1 class="banner-top-title text-center">人工知能やRPAで業務効率にしましょう。</h1>
        <div class="frost-banner"></div>
    </div>
    <div class="breadcrumb-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">ホーム</a></li>
            <li class="breadcrumb-item"><a href="#">開発事例</a></li>
            <li class="breadcrumb-item active" aria-current="page">人工知能開発</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 list-system">
            <h5>プロジェクト概要</h5>
            <p>
                電子商取引システム関連のサービス開発を担当させていただきました。通販業界に特化したシステムでございます。このシステムを導入したあと、お客様の業務が改善できており、効率的が改善できました。エンドユーザが購入した商品などをリアルタイムで管理でき、支払い管理やポイント管理なども一貫性に管理できたシステムでございます。
            </p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                主要な機能
            </h5>
            <p>電子商取引テシステムは以下の主要な機能がございます。</p>
            <ul>
                <li>商品検索</li>
                <li>オンライン商品購入</li>
                <li>オンライン決済</li>
                <li>注文管理</li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                対応工程と工数
            </h5>
            <ul>
                <li>工程：仕様提案・画面設計・システム分析、データーベース設計、プログラム作成、テスト、デプロイまでの作業を行いました。</li>
                <li>開発期間：6ヶ月</li>
                <li>開発の工数：20人月</li>
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
                <li>開発環境:<br>
                    <span>XCode、 Objective C</span>
                </li>
                <li>サーバーと接続：<br>
                    <span>AFNetworking と JSON</span>
                </li>
                <li>情報表示： <br>
                    <span>UIKit Framework</span>
                </li>
                <li>プロジェクト管理: <br>
                    <span>GIT、SVN、Redmine、Backlog</span>
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