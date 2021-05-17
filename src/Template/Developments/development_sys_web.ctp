<?php

/**
 * @var App\View\AppView $this
 */

?>
<?= $this->element('menu_no_header') ?>
<div class="container-fluid padding0">
    <div class="banner-top padding-top80">
        <h1 class="banner-top-title text-center">高生産性チームで最適な提案を提供します。</h1>
        <div class="frost-banner"></div>
    </div>
   
    <div class="breadcrumb-header">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">ホーム</a></li>
            <li class="breadcrumb-item"><a href="#">開発事例</a></li>
            <li class="breadcrumb-item active" aria-current="page">WEBシステム開発</li>
        </ol>
    </div>
</div>


<div class="container">

    <div class="row">
        <div class="col-md-12 list-system">
            <h5>プロジェクト概要</h5>
            <p>
                航空チケット予約システム関連のサービスを開発。親切なUI設計を提供することで、お客様に最適なサービスを届けることができました。
            </p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                主要な機能
            </h5>
            <p>航空券予約、フライト情報閲覧システム構築</p>
            <ul>
                <li>フライト情報閲覧</li>
                <li>フライト検索</li>
                <li>航空券予約</li>
                <li>フライトスケジュール管理</li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                対応工程と工数
            </h5>
            <ul>
                <li>開発期間：4月</li>
                <li>開発の工数：8人月〜</li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">メンバー構成</h5>
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
                    <span>MSプロジェクト管理、SVN、GIT、Redmine</span>
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