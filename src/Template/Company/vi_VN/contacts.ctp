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
        'text' => __('contact'),
    ],
];

$typeList = Configure::read('CONTACT_TYPE.LIST');
$url = $this->request->getRequestTarget();
$type = explode('=', $url);
$id = $this->request->getQuery('type');
?>

<?= $this->element('/menu_no_header') ?>
<div class="container-fluid padding0">
    <div class=" padding-top80 banner-top4">
        <h1 class="text-center">Liên hệ</h1>
        <div class="frost-banner"></div>
    </div>
    <?= $this->element('/breadcrumb', ['breadcrumb' => $breadcrumb]) ?>
</div>
<div class="container mar-bt-40">
    <div class="row padding10">
        <div class="col-md-12">
            <p>Trường hợp có câu hỏi dành cho công ty chúng tôi, xin hãy gửi bằng form câu hỏi dưới đây. Sau khi tiến hành xác nhận nội dung, chúng tôi sẽ liên hệ với quý vị.
                Chúng tôi sẽ liên hệ lại trong hai vòng hai ngày làm việc.</p><br>
            <p>Nếu số điện thoại di động của bạn được cài đặt để nhận tên miền cụ thể, xin hãy hủy cài đặt "pacom-solution.com".</p>
        </div>
    </div>
    <div class="col-md-12">
        <?= $this->Form->create(null, ['url' => ['controller' => 'Homes', 'action' => 'sendMail'], 'class' => 'form-horizontal', 'id' => 'contact-form']) ?>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2   control-label">Phân loại câu hỏi</label>
            <div class="col-xs-4 col-sm-2 notice-note">
                <span>Bắt buộc</span>
            </div>
            <div class="col-xs-12 col-sm-8 contact-left">
                <div id='choosen_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    Vui lòng chọn một loại yêu cầu
                </div>
                <?php foreach ($typeList as $key => $row) : ?>
                    <div class="radio">
                        <label>
                            <input type="radio" name="type" value="<?php echo $key ?>" <?php echo ($id == $key) ? 'checked' : '' ?>>
                            <?php echo __($row) ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-12 col-sm-2 control-label">Tên công ty/tổ chức</label>
            <div class="col-xs-4 col-sm-2 notice-note">
            </div>
            <div class="col-xs-12 col-sm-8 contact-left">
                <!-- <div id='name_company_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    name-company is not empty!
                </div> -->
                <?= $this->Form->text('name_company', ['class' => 'form-control', 'id' => 'name_company', 'required']) ?>
            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-12 col-sm-2 control-label">Bộ phận</label>
            <div class="col-xs-4 col-sm-2 notice-note">
            </div>
            <div class="col-xs-12 col-sm-8 contact-left">
                <!-- <div id='department_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    department is not empty!
                </div> -->
                <?= $this->Form->text('department', ['class' => 'form-control', 'id' => 'department']) ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">Tên</label>
            <div class="col-xs-4 col-sm-2 notice-note">
                <span>Bắt buộc</span>
            </div>
            <div class="col-xs-12 col-sm-8 contact-left">
                <div id='name_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                   Vui lòng nhập tên của bạn
                </div>
                <?= $this->Form->text('name', ['class' => 'form-control', 'id' => 'name']) ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">Furigana</label>
            <div class="col-xs-4 col-sm-2 notice-note">
                <span>Bắt buộc</span>
            </div>
            <div class="col-xs-12 col-sm-8 contact-left">
                <div id='furikana_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    Vui lòng nhập furigana
                </div>
                <?= $this->Form->text('furikana', ['class' => 'form-control', 'id' => 'furikana']) ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">Địa chỉ mail </label>
            <div class="col-xs-4 col-sm-2 notice-note">
                <span>Bắt buộc</span>
            </div>
            <div class="col-xs-12 col-sm-8 contact-left">
                <div id='email_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    Vui lòng nhập đại chỉ email của bạn
                </div>
                <div id='email_invalid_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    Địa chỉ email không phải địa chỉ email hợp lệ
                </div>
                <?= $this->Form->control('email', ['type' => 'email', 'label' => false, 'class' => 'form-control', 'id' => 'email']); ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">Điện thoại</label>
            <div class="col-xs-4 col-sm-2 notice-note">
                <span>Bắt buộc</span>
            </div>
            <div class="col-xs-12 col-sm-8 contact-left">
                <div id='phone_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    Vui lòng nhập số điện thoại của bạn
                </div>
                <?= $this->Form->text('phone', ['class' => 'form-control', 'id' => 'phone']) ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-12 col-sm-2 control-label">Số fax</label>
            <div class="col-xs-4 col-sm-2 notice-note">
            </div>
            <div class="col-xs-12 col-sm-8 contact-left">
                <!-- <div id='fax_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    お問い合わせ内容をご入力ください。
                </div> -->
                <?= $this->Form->text('fax', ['class' => 'form-control', 'id' => 'fax']) ?>

            </div>
        </div>
        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">Liên hệ</label>
            <div class="col-xs-4 col-sm-2 notice-note">
                <span>Bắt buộc</span>
            </div>
            <div class="col-xs-12 col-sm-8 contact-left">
                <div id='your_message_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    Vui lòng nhập yêu cầu của bạn
                </div>
                <?= $this->Form->textarea('your_message', ['class' => 'form-control', 'id' => 'your_message']) ?>

            </div>
        </div>

        <div class="form-group list-item-contact">
            <label for="" class="col-xs-8 col-sm-2 control-label">Quy định sử dụng thông tin cá nhân</label>
            <div class="col-xs-4 col-sm-2 notice-note">
                <span>Bắt buộc</span>
            </div>
            <div class="col-xs-12 col-sm-8 contact-left">
                <label style="font-weight: normal">
                    <input id="check_agree" type="checkbox"> Đồng ý với Quy định truy cập thông tin cá nhân<br>
                    <span>Chỉ gửi cho những người đồng ý với Quy định sử dụng thông tin cá nhận của công ty chúng tôi</span>
                </label>
                <div id='check_agree_error' class='error'>
                    <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
                    Vui lòng nhập các quy tắc để xử lý thông tin cá nhân
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
            <div class="col-xs-4 col-sm-2 notice-note">
            </div>
            <div class="col-xs-12 col-sm-8 contact-left text-left">
                <button type="submit" data-url="<?= $this->Url->build(['controller' => 'Homes', 'action' => 'sendMail']) ?>" class="btn btn-warning" id="send_message">Gửi</button>
            </div>
        </div>
        <?= $this->Form->end(); ?>
        <div id="mail_success" class="success">
            <?php echo $this->Html->image('image/email/success.png', ['alt' => 'Success!'])  ?>
            Tin nhắn của bạn đang được gửi đi</div>
        <div id='mail_fail' class='error'>
            <?php echo $this->Html->image('image/email/error.png', ['alt' => 'Error!'])  ?>
            Một area đã xảy ra
        </div>
    </div>
</div>
<?= $this->Html->script('email-validation') ?>