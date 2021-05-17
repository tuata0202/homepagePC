<?php

/**
 * @var App\View\AppView $this
 */
use Cake\I18n\I18n;
$breadcrumb = [
    [
        'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_business']),
        'text' => 'Ví dụ phát triển',
    ],
    [
        'url' => '',
        'text' => 'Phát triển hệ thống nghiệp vụ',
    ],
];
?>
<?= $this->element('/menu_no_header') ?>
<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text' => 'Thành công của khách hàng là thành công của công ty chúng tôi.']) ?>
    <?= $this->element('/breadcrumb', ['breadcrumb' => $breadcrumb]) ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 list-system">
            <h5>Tổng quan về dự án</h5>
            <p>
                Phát triển dịch vụ liên quan đến hệ thống thương mại điện tử.
                Đối với hệ thống này chúng tôi xây dựng công cụ làm trung gian bán hàng, đăng quảng cáo của ứng dụng và cung cấp noi mua sắm miễn phí.
            </p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Chức năng chính
            </h5>
            <p>Hệ thống thương mại điện tử có các chức năng chính như sau:</p>
            <ul>
                <li>Quản lý người dùng</li>
                <li>Quản lý sản phẩm</li>
                <li>Mua sản phẩm online</li>
                <li>Thu thập điểm, trao đổi sản phẩm</li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Quy trình đối ứng và công số
            </h5>
            <ul>
                <li>Quy trình: Thực hiện từ phân tích hệ thống, thiết kế cơ sở dữ liệu, tạo chương trình, cho đến deploy.</li>
                <li>Thời gian phát triển: 3 tháng</li>
                <li>Công số phát triển: 10 MM</li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Thành phần tham gia
            </h5>
            <div class="table-responsive">
                <table class="table-bordered">
                    <tr class="table-title">
                        <th>NO</th>
                        <th>Phụ trách</th>
                        <th>Vai trò</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Quản lý dự án</td>
                        <td>Quản lý tổng thể dự án - Thiết kế cơ bản </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Kỹ sư</td>
                        <td>Phát triển - Kiểm thử</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Nhà thiết kế </td>
                        <td>Thiết kế</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Kỹ thuật đã sử dụng
            </h5>
            <ul>
                <li> Kỹ thuật Backend: <br>
                    <span>PHP, CakePHP</span>
                </li>
                <li>Kỹ thuật Front-end: <br>
                    <span>HTML, Bootstrap, Javascript, JQuery</span>
                </li>
                <li>Database: <br>
                    <span>MySQL</span>
                </li>
                <li>Quản lý dự án: <br>
                    <span>Google docs, MS project management, GIT, SVN, Redmine, Backlog</span>
                </li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Khác
            </h5>
            <p>Ngoài hệ thống đặt vé máy bay thì công ty chúng tôi cũng có kinh nghiệm trong việc phát triển các hệ thống khác.</p>
        </div>
        <div class="col-md-12 list-system" id="link-advisory">
        <?php echo $this->Html->link(__('exchange'), ['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'company:contacts'], ['class' => 'btn btn-warning', 'escape' => false]); ?>
        </div>
    </div>
</div>
<?= $this->element('contact') ?>