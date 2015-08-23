<div id="footer" class="container">
			<div class="wrapper tcenter">
				<div class="nav">
					<ul class="ib innerFloat s12">
						<li class="lfloat"><a href="#">Trang chủ</a></li>
						<li class="lfloat"><a href="#">Công ty</a></li>
						<li class="lfloat"><a href="#">Sản phẩm</a></li>
						<li class="lfloat"><a href="#">Dự án</a></li>
						<li class="lfloat"><a href="#">Hỗ trợ</a></li>
						<li class="lfloat"><a href="#">Tin tức</a></li>
						<li class="lfloat"><a href="#">Tuyển dụng</a></li>
						<li class="lfloat"><a href="#">Webmail</a></li>
					</ul>
				</div>
				<div class="copyright">&copy; 2010 <b>Vinatronic Co., Ltd</b></div>
			</div>
		</div>
	
		<!-- BOOKING -->
		<div id="bookingPopup">
			<!-- ORDERING -->
			<div class="box mcenter">
				<div class="heading tcenter s14 bold upper white ds default"><h2>Yêu cầu</h2> <a title="Thoát" class="sprite close ib"></a></div>
				<div class="content">
					
					<form action="#" method="POST">
						<select name="request">
							<option value="Báo giá">Báo giá</option>
							<option value="Kĩ thuật">Kĩ thuật</option>
							<option value="Tài liệu">Tài liệu</option>
							<option value="Khác (Ghi rõ)">Khác (Ghi rõ)</option>
						</select>
						
						<select name="gender">
							<option value="Anh / Chị">Anh / Chị</option>
							<option value="Anh">Anh</option>
							<option value="Chị">Chị</option>
						</select>
						
						<input placeholder="Họ tên khách hàng" name="fullname" type="text" spellcheck="false">
						<input placeholder="Tên công ty" name="company" type="text" spellcheck="false">
						<input placeholder="Địa chỉ giao hàng" name="address" type="text" spellcheck="false">
						<input placeholder="Số điện thoại liên hệ" name="phone" type="text" spellcheck="false">
						<input placeholder="Email khách hàng" name="email" type="text" spellcheck="false">
						<textarea placeholder="Nội dung yêu cầu" name="content" spellcheck="false"></textarea>
						<input type="submit" value="Gửi yêu cầu">
					</form>
					
				</div>
			</div> <!-- END OF ORDERING -->
			
			<!-- MESSAGE -->
			<div class="box msg mcenter">
				<div class="heading tcenter s14 bold upper white ds default"><h2>Thông báo</h2> <a title="Thoát" class="sprite close ib"></a></div>
				<div class="content">
					<p class="tcenter bold blue s14 upper" style="color: #3ba0c5;">Chúc mừng bạn đã gửi yêu cầu thành công!</p>
				</div>
			</div> <!-- END OF MESSAGE -->
			
		</div>
		
		<!-- RESPONSIVE MENU -->
		<div id="fixed_responsive_menu" class="ds">
			<div class="innerFloat tcenter">
				<a href="#" class="logo ib"><img alt="COMPANY" src="images/logo.png"></a>
				<a data-lang="en" title="Ngôn ngữ" class="language ib s13">English</a>
				<a class="toggle ds"><img alt="Đóng mở menu" src="images/menu-toggle.png"></a>
			</div>
			<div class="expanding tleft innerFloat">
				<ul class="tright">
					<li><a href="#">Trang chủ</a></li>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#">Sản phẩm</a></li>
					<li><a href="#">Dịch vụ</a></li>
					<li><a href="#">Hỏi đáp</a></li>
					<li><a href="#">Hình ảnh</a></li>
					<li><a href="#">Liên hệ</a></li>
					<li><a href="#">Tài liệu</a></li>
				</ul>
			</div>
		</div>
    
       
    <?php wp_footer(); ?>
	</body>
</html>