<?php

/**
 * @var App\View\AppView $this
 */
$breadcrumb = [
    [
        'url' => $this->Url->build('/company/intellect/message'),
        'text' => '企業情報',
    ],
    [
        'url' => '',
        'text' => '代表メッセージ',
    ],
];
?>

<?= $this->element('menu_no_header') ?>
<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text'=>'企業情報'])?>
    <?= $this->element('breadcrumb', ['breadcrumb'=> $breadcrumb]) ?>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3 padding-top10">
            <?= $this->element('partial/company_left_menu', ['active'=> 'message']) ?>
		</div>
		<div class="col-md-9 padding-bottom300 padding-top10">
			<p>
				nội dung tiếng anh--------
				ベトナムにて開発しており、お客様に世界最高水準の開発技術をご提供しております。<br>
				Pacom Solutionsは2017年07月07日に設立し、社長をはじめ、メンバー全員が若く、意欲的に仕事をしています。<br>
				お客様からの要望・課題を私たちの技術力、開発力で実現し、お客様と一緒に成長できたという達成感、喜びを分かち合うことができます。<br>
				そして、これら経験の一つ一つが、私たちに自信を付け、お客様からの信頼構築に寄与しております。<br>
				私たちは、IT業界において、世界中で認められるリーディングカンパニーを目指していきます。<br>
				お客様へ、高品質なサービスを提供し、継続的に価値提供することをお約束します。<br>
			</p>
			
		</div>
		<!-- <?= $this->Html->image('image/message.png')?> -->
	</div>
</div>
<?= $this->element('contact') ?>