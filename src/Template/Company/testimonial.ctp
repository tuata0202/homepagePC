<?php

/**
 * @var App\View\AppView $this
 */
$breadcrumb = [
    [
        'url' => '',
        'text' => 'お客様の声',
    ],
];
?>
<?= $this->element('menu_no_header') ?>
<div class="container-fluid padding0">
    <div class="padding-top80 banner-top3">
        <h1 class="text-center">お客様の声
            お客様に成功体験は当社の成功体験でございます。</h1>
    </div>
    <?= $this->element('breadcrumb', ['breadcrumb'=> $breadcrumb]) ?>
</div>
<section class="reviews">
    <div class="container">
        <div class="row pad-t-30 " oncopy="return false">
            <div class="col-sm-3 ">
                <div class="item-review">
                    <div class="img-customer">
                        <?= $this->Html->image('image/customer/matsuzawa.jpg') ?>
                    </div>
                    <div class="info-customer">
                        <span>代表取締役 松澤隆之</span>
                        <span id="company">株式会社やどかり</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="content-review right">
                    <blockquote>
                        <p>ベトナムはとても暑くてエネルギッシュな若者にあふれている国です。
                            その中でもPACOMは技術に関して常に学習意欲が高く、
                            また日本人に対しても親切丁寧な対応を行ってくれるのが特徴だと思います。
                            私も様々なプロジェクトで相談・協業はしてきましたが
                            長期のプロジェクトでは長くメンバーを固定して対応してくれたり、
                            短期のプロジェクトに対しても最適なメンバーを選出して真摯な対応を行ってくれて、
                            いつも柔軟な姿勢で協力いただける大事なパートナーです。
                            今後もお互いに切磋琢磨できる良きパートナーとして長くお付き合いしていきたいと考えております。
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="row pad-t-30 pad-b-30" oncopy="return false">
            <div class="col-sm-9 hide-mobile">
                <div class="content-review left">
                    <blockquote>
                        <p>株式会社パコムソリューション - システム受託開発及びラボ型開発、ITコンサルテイング: 日本語、英語も話せる社員たくさんいますので、プロジェクト進行中にコミュニケーションは困っていませんでした。対応は早く、親切で長くお付き合いしたいと思います。</p>
                    </blockquote>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12">
                <div class="item-review">
                    <div class="img-customer">
                        <?= $this->Html->image('image/user.png') ?>
                    </div>
                    <div class="info-customer">
                        <span>John</span>
                        <span>Microsoft</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 show-mobile">
                <div class="content-review left">
                    <blockquote>
                        <p>株式会社パコムソリューション - システム受託開発及びラボ型開発、ITコンサルテイング: 日本語、英語も話せる社員たくさんいますので、プロジェクト進行中にコミュニケーションは困っていませんでした。対応は早く、親切で長くお付き合いしたいと思います。</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>


<?= $this->element('contact') ?>