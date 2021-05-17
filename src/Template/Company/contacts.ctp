<?php

/**
 * @var App\View\AppView $this
 */

use App\Controller\HomesController;
use PhpParser\Node\Stmt\Label;

use Cake\Core\Configure;


$breadcrumb = [
    [
        'url' => '',
        'text' => 'お問い合わせ',
    ],
];

$typeList = Configure::read('CONTACT_TYPE.LIST');
$url = $this->request->getRequestTarget();
$type = explode('=',$url);
$id = $this->request->getQuery('type');
?>
<?= $this->element('menu_no_header') ?>
<div class="container-fluid padding0">
    <div class=" padding-top80 banner-top4">
        <h1 class="text-center">お問い合わせ</h1>
        <div class="frost-banner"></div>
    </div>
    <?= $this->element('breadcrumb', ['breadcrumb' => $breadcrumb]) ?>
</div>
<div class="container mar-bt-40">
    <div class="row padding10">
        <div class="col-md-12">
            <p>当社へのお問い合わせは、下記お問い合わせフォームにてお寄せください。内容を確認後、担当者よりご連絡させていただきます。<br>
                ２営業日以内にご返答させていただきます。</p>
            <p>携帯電話で、ドメイン指定受信を設定している場合は「pacom-solution.com」の設定解除をお願いいたします。</p>
        </div>
    </div>
    <div class="col-md-12">
        <?= $this->Form->create(null, ['url' => ['controller' => 'Homes', 'action' => 'sendMail'], 'class' => 'form-horizontal', 'id' => 'contact-form']) ?>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2   control-label">お問い合わせ種別</label>
            <div class="col-xs-4 col-sm-1 notice-note">
                <span>必須</span>
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
                <div id='choosen_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    お問い合わせ種別をご選択ください
                </div>
                <?php foreach ($typeList as $key => $row) : ?>
                <div class="radio">
                    <label>
                        <input type="radio" name="type" value="<?php echo $key ?>" <?php echo ($id == $key)? 'checked' : ''?>>
                        <?php echo __($row) ?>
                    </label>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-12 col-sm-2 control-label">会社・組織名</label>
            <div class="col-xs-4 col-sm-1 notice-note">
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
                <!-- <div id='name_company_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    name-company is not empty!
                </div> -->
                <?= $this->Form->text('name_company', ['class' => 'form-control', 'id' => 'name_company', 'required']) ?>
            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-12 col-sm-2 control-label">部署</label>
            <div class="col-xs-4 col-sm-1 notice-note">
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
                <!-- <div id='department_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    department is not empty!
                </div> -->
                <?= $this->Form->text('department', ['class' => 'form-control', 'id' => 'department']) ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">氏名</label>
            <div class="col-xs-4 col-sm-1 notice-note">
                <span>必須</span>
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
                <div id='name_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    氏名をご入力ください。
                </div>
                <?= $this->Form->text('name', ['class' => 'form-control', 'id' => 'name']) ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">フリガナ</label>
            <div class="col-xs-4 col-sm-1 notice-note">
                <span>必須</span>
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
                <div id='furikana_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    フリガナをご入力ください。
                </div>
                <?= $this->Form->text('furikana', ['class' => 'form-control', 'id' => 'furikana']) ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">メールアドレス</label>
            <div class="col-xs-4 col-sm-1 notice-note">
                <span>必須</span>
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
                <div id='email_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    メールアドレスをご入力ください。
                </div>
                <div id='email_invalid_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    メールアドレスは有効なメールアドレスではありません。
                </div>
                <?= $this->Form->control('email', ['type' => 'email', 'label' => false, 'class' => 'form-control', 'id' => 'email']); ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">電話番号</label>
            <div class="col-xs-4 col-sm-1 notice-note">
                <span>必須</span>
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
                <div id='phone_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    電話番号をご入力ください。
                </div>
                <?= $this->Form->text('phone', ['class' => 'form-control', 'id' => 'phone']) ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-12 col-sm-2 control-label">FAX番号</label>
            <div class="col-xs-4 col-sm-1 notice-note">
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
                <!-- <div id='fax_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    お問い合わせ内容をご入力ください。
                </div> -->
                <?= $this->Form->text('fax', ['class' => 'form-control', 'id' => 'fax']) ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">お問い合わせ内容</label>
            <div class="col-xs-4 col-sm-1 notice-note">
                <span>必須</span>
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
                <div id='your_message_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    お問い合わせ内容をご入力ください。
                </div>
                <?= $this->Form->textarea('your_message', ['class' => 'form-control', 'id' => 'your_message']) ?>

            </div>
        </div>

        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">個人情報の取扱規程</label>
            <div class="col-xs-4 col-sm-1 notice-note">
                <span>必須</span>
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
                <label style="font-weight: normal">
                    <input id="check_agree" type="checkbox"> 個人情報の取扱規程に同意する<br>
                    <span>当社の個人情報の取扱規程について同意される方のみ送信できます。</span>
                </label>
                <div id='check_agree_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    個人情報の取扱規程をご入力ください。
                </div>
            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-12 col-sm-2 control-label"></label>
            <div class="col-xs-4 col-sm-1 notice-note">
            </div>
            <div class="col-xs-12 col-sm-9 contact-left">
            <?= $this->Recaptcha->display() ?>

            </div>
        </div>

        <div class="form-group submit-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label"></label>
            <div class="col-xs-4 col-sm-1 notice-note">
            </div>
            <div class="col-xs-12 col-sm-9 contact-left text-left">
                <button type="submit" data-url="<?= $this->Url->build(['controller' => 'Homes', 'action' => 'sendMail']) ?>" class="btn btn-warning" id="send_message">送信</button>
            </div>
        </div>
        <?= $this->Form->end(); ?>
        <div id="mail_success" class="success">
            <?php echo $this->Html->image('image/email/success.png', ['alt' => 'Success!'])  ?>
            メッセージは送信されました。</div>
        <div id='mail_fail' class='error'>
            <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
            エーラが発生しました。
        </div>
    </div>
</div>
<?= $this->Html->script('email-validation') ?>