@extends('masterpage')
@section('content')

<div class="page-title-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="page-title"><h1>ĐĂNG BÀI TÌM GIA SƯ</h1></div>
				</div>
			</div>
		</div>	
	</div>
</div>
<!-- /Page Title Section -->
<div class="clearfix"></div><!-- Blog Section with Sidebar -->
<div class="page-builder">
	<div class="container">
		@include('form-error')
		<div class="row">
			<!-- Blog Area -->
			<div class="col-md-8">
				<div class="blog-lg-area-left">
					<p style="text-align: center;"> Quý phụ huynh, học viên cần tìm gia sư vui lòng điền thông tin vào form bên dưới và bấm nút “Gửi đi”.<br> Gia sư bạn cần sẽ sớm dược tìm thấy!</p>
					<div role="form" class="wpcf7" id="wpcf7-f433-p432-o1" lang="en-US" dir="ltr">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<form class="form-post" action="{{ asset( 'post')}} " method="post" enctype = 'multipart/form-data' style="color: #727272;">
								  <div class="form-group">
								    <label for="parent_name">Tên phụ huynh (vd: Nguyễn Văn A):</label>
								    <input required type="text" class="form-control" name="parent_name">
								  </div>
								  <div class="form-group">
								    <label for="address">Địa chỉ (vd: 54 Nguyễn Lương Bằng, Hòa Khánh, Liên Chiểu, Đà Nẵng):</label>
								    <input required type="text" class="form-control" name="address">
								  </div>
								  <div class="form-group">
								    <label for="phone">Số điện thoại (vd: 0987654312):</label>
								    <input required type="text" class="form-control" name="phone">
								  </div>
								  <div class="form-group">
								    <label for="subject">Môn học, lớp (Vd: Toán, Lý, Hóa lớp 10):</label>
								    <input required type="text" class="form-control" name="subject">
								  </div>
								  <div class="form-group">
								    <label for="number_student">Số hoc sinh (vd: 2):</label>
								    <input required type="text" class="form-control" name="number_student">
								  </div>
								  <div class="form-group">
								    <label for="number_time">Số buổi / tuần (vd: 3):</label>
								    <input required type="text" class="form-control" name="number_time">
								  </div>
								  <div class="form-group">
								    <label for="time">Thời gian (vd: Tối thứ 2/4/6):</label>
								    <input required type="text" class="form-control" name="time">
								  </div>
								  <div class="form-group">
								    <label for="payment">Mức lương (vd: 100000Đ):</label>
								    <input required type="text" class="form-control" name="payment">
								  </div>
								  <div class="form-group">
								    <label for="requirement">Yêu cầu (vd: Sinh viên nữ, có kinh nghiệm):</label>
								    <input type="text" class="form-control" name="requirement">
								  </div>
								  <button type="submit" class="wpcf7-form-control wpcf7-submit">Gửi đi</button>
								  {{ csrf_field() }}
								</form>
							</div>
						</div>
					</div>
					<p>&nbsp;</p>
				</div>
			</div>
			<!-- /Blog Area -->			
			<!--Sidebar Area-->
			@include('page.sidebar')
			<!--Sidebar Area-->
		</div>
	</div>
</div>
<!-- /Blog Section with Sidebar -->
@endsection