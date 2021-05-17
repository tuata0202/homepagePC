<div class="row ">
	<div class="col-sm-12">
		<h5 id="border-bottom">Mẫu hợp đồng</h5>
	</div>
	<div class="col-sm-6 col-md-6">
		<div class="list-contract">
			<?= $this->Html->image('image/contract.png') ?>
			<div class="item-contract">
				<h5>Phát triển ủy thác</h5>
				<p>Thực hiện phát triển dựa trên báo giá phù hợp với yêu cầu của quý công ty. Công ty chúng tôi thực hiện toàn bộ cả quản lý dự án và quản lý chất lượng.</p>
				<b>Ưu điểm của phát triển ủy thác</b>
				<ul>
					<li> Có thể đánh giá đối với sản phẩm</li>
					<li>Ngân sách rõ ràng đối với từng nội dung phát triển</li>
					<li>Hướng đến phát triển kiểu waterfall đã xác định spec</li>
					<li>Phù hợp với phát triển của dự án ngắn hạn chỉ đặt hàng phần cần thiết</li>
				</ul>
			</div>
			<div class="tutorial-waterfall">
				<h5 class="text-center">Quy trình</h5>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 1:</span>
						<span>Liên hệ</span>
					</div>
					<div class="content-step">
						<p>Hãy liên hệ với chúng tôi qua form trên WEB hoặc mail, điện thoại. Chúng tôi sẽ lắng nghe nguyện vọng của khách hàng.
							</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 2:</span>
						<span>Định nghĩa yêu cầu</span>
					</div>
					<div class="content-step">
						<p>Lắng nghe yêu cầu và vấn đề hiện tại của khách hàng, xem xét, phân tích chi phí, tổng hợp thành tài liệu. Chúng tôi sẽ trao đổi nhiều lần để không hiểu sai suy nghĩ của khách hàng.</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 3:</span>
						<span>Báo giá - Đề xuất</span>
					</div>
					<div class="content-step">
						<p>Dựa trên định nghĩa yêu cầu và danh sách chức năng chúng tôi sẽ lập báo giá và lịch trình.</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 4:</span>
						<span>Thiết kế hệ thống</span>
					</div>
					<div class="content-step">
						<p>Thiết kế hệ thổng, tổng hợp tài liệu đặc tả kĩ thuật theo định nghĩa yêu cầu. Quyết định cấu trúc tổng thể của hệ thống và layout của màn hình.
							</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 5:</span>
						<span>Phát triển</span>
					</div>
					<div class="content-step">
						<p>Thực hiện lập trình theo tài liệu đặc tả kĩ thuật</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 6:</span>
						<span>Kiểm tra</span>
					</div>
					<div class="content-step">
						<p>Trước khi bàn giao sản phẩm cho khách hàng, chúng tôi sẽ kiểm tra kĩ càng. Thực hiện "Unit test" từng đoạn code, "Test  tích hợp" để xem liên kết của hệ thống, "Test tổng hợp" để xem hoạt động của toàn bộ hệ thống. Vừa  xác nhận lại tài liệu đặc tả kĩ thuật của định nghĩa yêu cầu nếu có lỗi gì sẽ sửa lại.
							</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 7:</span>
						<span>Bàn giao sản phẩm</span>
					</div>
					<div class="content-step">
						<p>Bàn giao hệ thống đã hoàn thành cho khách hàng</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 8:</span>
						<span>Hỗ trợ hoạt động</span>
					</div>
					<div class="content-step">
						<p>Nếu có yêu cầu sau khi bàn giao sản phẩm chúng tôi sẽ cung cấp dịch vụ bảo trì hệ thống, các dịch vụ hỗ trợ</p>
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
				<h5>Phát triển mô hình Labo</h5>
				<p>Là mô hình hợp đồng có thể đảm bảo các kĩ sư dành riêng cho khách hàng trong một thời gian nhất định. Nhờ đảm bảo nguồn nhân lực ưu tú ở công ty của chúng tôi, có thể linh hoạt yêu cầu phát triển và có đặc tính có thể tích lũy thông số kỹ thuật và bí quyết.</p>
				<b>Ưu điểm của phát triển mô hình Labo</b>
				<p style="padding-bottom: 0;margin-bottom:0">Đối với các doanh nghiệp có nhu cầu như sau đây sẽ là mô hình phát triển rất có hiệu quả</p>
				<ul>
					<li>Có dự án định kì và muốn đảm bảo nhân lực ưu tú dành riêng cho công ty mình </li>
					<li>Nguồn nhân lực của công ty đang thiếu và muốn đẩy mạnh phát triển tạm thời</li>
					<li>Muốn  phát triển ở nước ngoài trong tương lai nhưng trước hết muốn tích lũy kinh nghiệm phát triển offshore</li>
				</ul>
			</div>
			<div class="tutorial-waterfall">
				<h5 class="text-center">Nội dung chính</h5>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 1:</span>
						<span>Liên hệ</span>
					</div>
					<div class="content-step">
						<p>Hãy liên hệ với chúng tôi qua form trên WEB hoặc mail, điện thoại. Chúng tôi sẽ lắng nghe nguyện vọng của khách hàng.
							</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 2:</span>
						<span>Báo giá - Đề xuất</span>
					</div>
					<div class="content-step">
						<p>Lắng nghe yêu cầu và vấn đề hiện tại của khách hàng, xem xét, phân tích chi phí, tổng hợp thành tài liệu. Chúng tôi sẽ trao đổi nhiều lần để không hiểu sai suy nghĩ của khách hàng.
							</p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 3:</span>
						<span>Hợp đồng Labo</span>
					</div>
					<div class="content-step">
						<p>Sau khi lập được kế hoạch tối ưu, chúng tôi sẽ tiến hành kí kết hợp đồng cùng khách hàng dựa trên bản kế hoạch đã được thống nhất. </p>
					</div>
				</div>
				<span><i class="fa fa-arrow-down" aria-hidden="true"></i></span>
				<div class="step-item">
					<div class="head-step">
						<span>Bước 4:</span>
						<span>Thực hiện nghiệp vụ </span>
					</div>
					<div class="content-step">
						<p>Sau khi khách hàng và  kỹ sư phụ trách của công ty chúng tôi bàn bạc cùng nhau, quyết định Bản định nghĩa yêu cầu, Tài liệu,... thì các kỹ sư sẽ tiến hành thực hiện chương trình dựa trên tài liệu này. Có thể thay đổi Tài liệu kỹ thuật  trong quá trình phát triển Labo</p>
					</div>
				</div>
				<div class="link-contract show-mobile">
					<?= $this->Html->link('Hãy cùng trao đổi miễn phí ngay với chúng tôi', 'vi/company/contacts?type=' . $type, ['class' => 'btn btn-warning link-contract-right']); ?>
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
			<?= $this->Html->link('Hãy cùng trao đổi miễn phí ngay với chúng tôi', 'vi/company/contacts?type=' . $type, ['class' => 'btn btn-warning link-contract-right']) ?>
		</div>
	</div>
</div>