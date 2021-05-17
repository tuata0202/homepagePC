<?php

/**
 * @var App\View\AppView $this
 */
use Cake\I18n\I18n;
$breadcrumb = [
    [
        'url' => $this->Url->build(['language' => I18n::getLocale(), 'controller' => 'Contents', 'action' => 'index', 'introductions:development_ai']),
        'text' => 'Ví dụ phát triển',
    ],
    [
        'url' => '',
        'text' => 'Phát triển trí tuệ nhân tạo',
    ],
];
?>
<?= $this->element('/menu_no_header') ?>
<div class="container-fluid padding0">
    <?= $this->element('banner_tit', ['text' => 'Hiệu suất nghiệp vụ bằng trí tuệ nhân tạo và RPA']) ?>
    <?= $this->element('/breadcrumb', ['breadcrumb' => $breadcrumb]) ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 list-system">
            <h5>Tổng quan về dự án</h5>
            <p>
            Chúng tôi đảm nhận phát triển dịch vụ liên quan đến hệ thống thương mại điện tử. Đây là hệ thống chuyên mua bán trên mạng. Sau khi sử dụng hệ thống này, có thể cải thiện nghiệp vụ của khách hàng và cải thiện hiệu suất công việc. Đây là hệ thống có thể quản lý các sản phẩm mà người dùng cuối đã mua với thời gian thực và có thể quản lý thanh toán và quản lý điểm cùng 1 lúc.
            </p>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Chức năng chính
            </h5>
            <p>Hệ thống thương mại điện tử có các chức năng chính như sau:</p>
            <ul>
                <li>Tìm kiếm sản phẩm</li>
                <li>Mua sản phẩm trực tuyến</li>
                <li>Thanh toán trực tuyến</li>
                <li>Quản lý đơn hàng</li>
            </ul>
        </div>
        <div class="col-md-12 list-system">
            <h5 id="border-bottom">
                Quy trình đối ứng và công số
            </h5>
            <ul>
                <li>Quy trình: Thực hiện từ phân tích đặc tả kĩ thuật, thiết kế màn hình, hệ thống, thiết kế cơ sở dữ liệu, tạo chương trình, kiểm thử cho đến deploy.</li>
                <li>Thời gian phát triển: 6 tháng</li>
                <li>Công số phát triển: 20 MM</li>
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
                        <td>Nhà thiết kế</td>
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
                <li>Môi trường phát triển:<br>
                    <span>XCode, Objective C</span>
                </li>
                <li>Kết nối với server:<br>
                    <span>AFNetworking と JSON</span>
                </li>
                <li>Hiển thị thông tin:<br>
                    <span>UIKit Framework</span>
                </li>
                <li>Quản lý dự án:: <br>
                    <span>GIT, SVN, Redmine, Backlog</span>
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