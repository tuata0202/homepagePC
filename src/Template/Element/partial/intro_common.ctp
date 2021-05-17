<div class="row ">
	<div class="col-sm-12">
		<h5 id="border-bottom">契約パータン</h5>
	</div>
	<div class="col-sm-6 col-md-6">
		<div class="list-contract">
			<?= $this->Html->image('image/contract.png') ?>
			<div class="item-contract">
				<h5>受託型開発</h5>
				<p>貴社の要件に合わせて、お見積りの上開発/制作を行います。プロジェクト管理、品質管理も すべて当社が行います。</p>
				<b>受託型開発のメリット</b>
				<ul>
					<li>成果物に対して評価できる</li>
					<li>発注内容に対して予算額が明確である</li>
					<li>仕様が確定しているウォーターフォール型の開発向き</li>
					<li>必要な分だけ発注する短期案件の開発に適している</li>
				</ul>
			</div>
			<div class="tutorial-waterfall">
				<h5 class="text-center">主な流れ</h5>
				<div class="step-item">
					<div class="head-step">
						<span>STEP1:</span>
						<span>お問い合わせ</span>
					</div>
					<div class="content-step">
						<p>WEBフォーム・メール・お電話にてお気軽にお問い合わせください。　
							お客様のご要望をヒヤリングいたします。</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>STEP2:</span>
						<span>要件定義</span>
					</div>
					<div class="content-step">
						<p>お客様のご要望、現状の問題点をヒヤリングし、システムの内容、コスト等を調査・分析し、資料にまとめます。お客様との考え方にズレがないように、何度も打ち合わせを行います。</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>STEP3:</span>
						<span>お見積・提案</span>
					</div>
					<div class="content-step">
						<p>要件定義や機能一覧などに基づいて、お見積やスケジュールを確定致します。</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>STEP4:</span>
						<span>システム設計</span>
					</div>
					<div class="content-step">
						<p>要求定義に従って、システムの設計をし、仕様書にまとめます。
							システム全体の構成や画面のレイアウトなどを決めていきます。</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>STEP5:</span>
						<span>制作</span>
					</div>
					<div class="content-step">
						<p>仕様書に従ってコーディングを実装致します。</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>STEP6:</span>
						<span>テスト</span>
					</div>
					<div class="content-step">
						<p>お客様に納品する前には、入念なテストを行います。コーディングごとの「単体テスト」、システム同士のつながりを見る「結合テスト」、システム全体の動きを見る「総合テスト」等を実施します。
							要求定義の仕様書を再確認しながら、もしもミスが見つかったら、修正をしていきます。</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>STEP7:</span>
						<span>納品</span>
					</div>
					<div class="content-step">
						<p>完成したシステムをお客様に納品致します。</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>STEP8:</span>
						<span>運用サポート</span>
					</div>
					<div class="content-step">
						<p>ご要望があれば、納品後のシステム保守、各種サポートサービスをご提案致します。</p>
					</div>
				</div>

				<div class="link-contract show-mobile">
					<?php $link = isset($link) ? $link : []; ?>
					<?= $this->Html->link($link['text'], $link['url'], ['class' => ' btn btn-warning link-contract-left']) ?>
				</div>

			</div>
		</div>
	</div>
	<div class=" col-sm-6 col-md-6">
		<div class="list-contract">
			<?= $this->Html->image('image/security.jpg') ?>
			<div class="item-contract">
				<h5>ラボ型開発</h5>
				<p>お客様専属のエンジニアをある一定期間確保できるという契約形態です。 あらかじめ優秀な人材を自社専用に確保しておくことで、 柔軟に開発を依頼することができ、仕様やノウハウを蓄積できる特徴があります。</p>
				<b>ラボ型開発のメリット</b>
				<p style="padding-bottom: 0;margin-bottom:0">以下のニーズがある企業には大変有効的な開発手法になります。</p>
				<ul>
					<li>定期的に案件があり、自社専用の優秀な人材を確保したい</li>
					<li>自社のリソースが足らないので、一時的に開発ラインを増強したい</li>
					<li>今後自社でも海外に開発ラインを持ちたいと考えているが、まずはオフショア開発のノウハウを蓄積したい</li>
				</ul>
			</div>
			<div class="tutorial-waterfall">
				<h5 class="text-center">主な流れ</h5>
				<div class="step-item">
					<div class="head-step">
						<span>STEP1:</span>
						<span>お問い合わせ</span>
					</div>
					<div class="content-step">
						<p>WEBフォーム・メール・お電話にてお気軽にお問い合わせください。　
							お客様のご要望をヒヤリングいたします。</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>STEP2:</span>
						<span>ご提案・お見積</span>
					</div>
					<div class="content-step">
						<p>お客様のご要望、現状の問題点をヒヤリングし、最適なチームやコストをご提案いたします。
							スクラム</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>STEP3:</span>
						<span>ラボ型契約</span>
					</div>
					<div class="content-step">
						<p>最適なプランをご提案後、お客様がプランを決めることでご契約致します。</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>STEP4:</span>
						<span>業務実装</span>
					</div>
					<div class="content-step">
						<p>お客様と当社の担当エンジニアとやりとりして、要件定義・資料書などを決定してから、プログラマが資料書に従って実装致します。ラボ型開発には途中で仕様書などを変わっても大丈夫です。</p>
					</div>
				</div>
				<div class="link-contract show-mobile">
					<?= $this->Html->link('無料相談今すぐ始めよう', '/company/contacts?type=' . $type, ['class' => 'btn btn-warning link-contract-right']); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row mar-bt-40 hide-mobile">
	<div class="col-sm-6">
		<div class="link-contract">
			<?php $link = isset($link) ? $link : []; ?>
			<?= $this->Html->link($link['text'], $link['url'], ['class' => 'btn btn-warning link-contract-left']) ?>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="link-contract">
			<?= $this->Html->link('無料相談今すぐ始めよう', '/company/contacts?type=' . $type, ['class' => 'btn btn-warning link-contract-right']) ?>
		</div>
	</div>
</div>