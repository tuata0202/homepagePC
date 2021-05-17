<?php

/**
 * @var App\View\AppView $this
 */

use Cake\I18n\I18n;

$breadcrumb = [
    [
        'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_sys_web']),
        'text' => 'Ví dụ phát triển',
    ],
    [
        'url' => '',
        'text' => 'Phát triển hệ thống web',
    ],
];

?>
<?= $this->element('/menu_no_header') ?>
<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text' => 'Chúng tôi sẽ cung cấp cho khách hàng những dự án tối ưu nhất với đội ngũ nhân viên có hiệu suất làm việc cao nhất.']) ?>
    <?= $this->element('/breadcrumb', ['breadcrumb' => $breadcrumb]) ?>
</div>


<div class="container">

    <div class="row">
        <div class="col-md-12 list-system">
            <h5>Tổng quan về dự án</h5>
            <p>
                Thông qua việc phát triển các dịch vụ về hệ thống đặt vé máy bay và cung cấp một thiết kế UI thân thiện, chúng tôi đã cung cấp cho khách hàng các dịch vụ tôi ưu nhất.
            </p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Chức năng chính
            </h5>
            <p>Xây dựng hệ thống duyệt thông tin chuyến bay và đặt vé máy bay
            </p>
            <ul>
                <li>Duyệt thông tin chuyến bay</li>
                <li>Tìm kiếm chuyến bay</li>
                <li>Đặt vé máy bay</li>
                <li>Quản lý lịch trình chuyến bay</li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Quy trình đối ứng và công số
            </h5>
            <ul>
                <li>Thời gian phát triển: 4 tháng</li>
                <li>Công số để phát triển: 8MM~</li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">Thành phần tham gia</h5>
            <div class="table-responsive">
                <table class="table-bordered">
                    <tr class="table-title">
                        <th>NO</th>
                        <th>Phụ trách </th>
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
                <li>Kỹ thuật Backend: <br>
                    <span>PHP, CakePHP</span>
                </li>
                <li>Kỹ thuật Front-end: <br>
                    <span>HTML, Bootstrap, Javascript, JQuery</span>
                </li>
                <li>Database: <br>
                    <span>MySQL</span>
                </li>
                <li>Quản lý dự án: <br>
                    <span>MS project management, SVN, GIT, Redmine</span>
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