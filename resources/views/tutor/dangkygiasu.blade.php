@extends('masterpage')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">


<div class="page-title-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="page-title"><h1>ĐĂNG KÝ LÀM GIA SƯ</h1></div>
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
				<form class="form-post" action="{{ asset('tutor')}} " method="post" enctype = 'multipart/form-data' style="color: #727272;">
					<div class="row">
						<div class="col-md-6">
							<h4><strong class="text-uppercase profile-title">Thông tin gia sư</strong></h4>
						  <div class="form-group">
						    <label for="name">Họ và tên (vd: Nguyễn Văn A):</label>
						    <input required type="text" class="form-control" name="name">
						  </div>
						  <div class="form-group">
						    <label for="gender">Giới tính:</label>
						  
						    <select class="form-control" name="gender_id">
						    	@foreach($genders as $g)
						    	<option value="{{$g->id}}" >{{$g->name}}</option>
						    	@endforeach
						    </select>
						    
						  </div>
						  <div class="form-group">
						    <label for="birthday">Ngày sinh:</label>
						    <input required type="date" class="form-control" name="birthday">
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
						    <label for="level">Hiện là (vd: Sinh viên khoa Toán):</label>
						    <input required type="text" class="form-control" name="level">
						  </div>
						  <div class="form-group">
						    <label for="school">Trường (vd: ĐH Sư Phạm Đà Nẵng):</label>
						    <input required type="text" class="form-control" name="school">
						  </div>
						  <div class="form-group">
						    <label for="subject">Khả năng dạy (Vd: Toán, Lý, Hóa lớp 10):</label>
						    <input required type="text" class="form-control" name="subject">
						  </div>
						  <div class="form-group">
						    <label for="time">Thời gian có thể dạy (vd: Tối thứ 2/4/6):</label>
						    <input required type="text" class="form-control" name="time">
						  </div>
						  <div class="form-group">
						    <label for="salary">Mức lương tối thiểu (vd: 100000Đ):</label>
						    <input type="text" class="form-control" name="salary">
						  </div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-5">
							<h4><strong class="text-uppercase profile-title">Thông tin đăng nhập</strong></h4>							
						  <div class="form-group">
						    <label for="username">Tên đăng nhập:</label>
						    <input required type="text" class="form-control" name="username">
						  </div>
						  <div class="form-group">
						    <label for="password">Mật khẩu:</label>
						    <input required type="password" class="form-control" name="password">
						  </div>
						  <div class="form-group">
						    <label for="repassword">Xác nhận mật khẩu:</label>
						    <input required type="password" class="form-control" name="repassword">
						  </div>
						  <div class="profile-image">
						  	<img height="300px" width="250px" name="picture" alt="Hình ảnh của bạn" class="block-center" src="/images/default-image.jpg" id="output" >
						  	<input type="file" name="filename" id="filename" accept="image/gif, image/jpeg, image/png" onchange="loadFile(event)">
						  	<script>
  								var loadFile = function(event) {
    								var output = document.getElementById('output');
    								output.style.height = '274px';
    								output.style.width = '200px';
    								output.src = URL.createObjectURL(event.target.files[0]);
  								};
							</script>
				  			<!-- <button type="file" name="filename" class="block-center wpcf7-form-control wpcf7-submit" accept="image/gif, image/jpeg, image/png">Chọn ảnh</button> -->
						  </div>
						</div>						
					</div>
				  <button type="submit" class="block-center wpcf7-form-control wpcf7-submit">Gửi đi</button>
				  {{ csrf_field() }}
				</form>
			</div>
			
			

			@include('page.sidebar')
		</div>
	</div>
</div>
@endsection