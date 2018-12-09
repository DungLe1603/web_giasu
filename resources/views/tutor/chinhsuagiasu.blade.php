@extends('masterpage')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">


<div class="page-title-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="page-title"><h1>Chỉnh sửa thông tin</h1></div>
				</div>
			</div>
		</div>	
	</div>
</div>
<!-- /Page Title Section -->
<div class="clearfix"></div><!-- Blog Section with Sidebar -->
<div class="page-builder">
	<div class="container">
		<div class="row">
			<!-- Blog Area -->
			<div class="col-md-8">
				{{ Form::model($tutor, ['url' => ['/tutor', $tutor["id"]],'class' => 'form-post','method'=>isset($tutor["id"])?'PUT':'POST','enctype' => 'multipart/form-data', 'style' => 'color: #727272;'])}}
				{{-- @dd($tutor); --}}
					<div class="row">
						<div class="col-md-6">
							<h4><strong class="text-uppercase profile-title">Thông tin gia sư</strong></h4>
							
						  <div class="form-group">
						    <label for="name">Họ và tên:</label>
						    <input required type="text" value="{{ isset($tutor->name) ? $tutor->name : ""}}" class="form-control" name="name">
						  </div>
						  <div class="form-group">
						    <label for="gender">Giới tính:</label>
						  
						    <select class="form-control" name="gender_id">
						    	@if($tutor->gender->id == 1)
						    	<option selected value="1">Nam</option>
						    	<option value="2">Nữ</option>
						    	<option value="3">Khác</option>
						    	@endif

						    	@if($tutor->gender->id == 2)
						    	<option value="1">Nam</option>
						    	<option selected value="2">Nữ</option>
						    	<option value="3">Khác</option>
						    	@endif

						    	@if($tutor->gender->id == 3)
						    	<option value="1">Nam</option>
						    	<option value="2">Nữ</option>
						    	<option selected value="3">Khác</option>
						    	@endif
						    	
						    </select>
						    
						  </div>
						  <div class="form-group">
						    <label for="birthday">Ngày sinh:</label>
						    <input required type="date" value="{{ isset($tutor->birthday) ? $tutor->birthday : ""}}" class="form-control" name="birthday">
						  </div>
						  <div class="form-group">
						    <label for="address">Địa chỉ:</label>
						    <input required type="text" value="{{ isset($tutor->address) ? $tutor->address : ""}}" class="form-control" name="address">
						  </div>
						  <div class="form-group">
						    <label for="phone">Số điện thoại:</label>
						    <input required type="text" value="{{ isset($tutor->phone) ? $tutor->phone : ""}}" class="form-control" name="phone">
						  </div>
						  <div class="form-group">
						    <label for="level">Hiện là:</label>
						    <input required type="text" value="{{ isset($tutor->level) ? $tutor->level : ""}}" class="form-control" name="level">
						  </div>
						  <div class="form-group">
						    <label for="school">Trường:</label>
						    <input required type="text" value="{{ isset($tutor->school) ? $tutor->school : ""}}" class="form-control" name="school">
						  </div>
						  <div class="form-group">
						    <label for="subject">Khả năng dạy:</label>
						    <input required type="text" value="{{ isset($tutor->subject) ? $tutor->subject : ""}}" class="form-control" name="subject">
						  </div>
						  <div class="form-group">
						    <label for="time">Thời gian có thể dạy:</label>
						    <input required type="text" value="{{ isset($tutor->time) ? $tutor->time : ""}}" class="form-control" name="time">
						  </div>
						  <div class="form-group">
						    <label for="salary">Mức lương tối thiểu:</label>
						    <input type="text" value="{{ isset($tutor->salary) ? $tutor->salary : ""}}" class="form-control" name="salary">
						  </div>
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-5">
							<h4><strong class="text-uppercase profile-title">Thông tin đăng nhập</strong></h4>							
						  <div class="form-group">
						    <label for="username">Tên đăng nhập:</label>
						    <input required type="text" value="{{$tutor->user->username}}" class="form-control" name="username">
						  </div>
						  <div class="form-group">
						    <label for="password">Mật khẩu:</label>
						    <input type="password" class="form-control" name="password">
						  </div>
						  <div class="form-group">
						    <label for="repassword">Xác nhận mật khẩu:</label>
						    <input type="password" class="form-control" name="repassword">
						  </div>
						  <div class="profile-image">
						  	<img name="picture" alt="Hình ảnh của bạn" class="block-center" src="/images/{{$tutor->picture}}" id="output" >
						  	<input type="file" name="filename" id="filename" accept="image/gif, image/jpeg, image/png" onchange="loadFile(event)">
						  	<script>
  								var loadFile = function(event) {
    								var output = document.getElementById('output');
    								output.style.height = '274px';
    								output.style.width = '200px';
    								output.src = URL.createObjectURL(event.target.files[0]);
    								output.name = "filename_1";
  								};
							</script>
				  			<!-- <button type="file" name="filename" class="block-center wpcf7-form-control wpcf7-submit" accept="image/gif, image/jpeg, image/png">Chọn ảnh</button> -->
						  </div>
						</div>					
					</div>
{{-- 
					<button class="btn-post"><a href="/tutor" class="link-edit">Trở về</a></button>
				  	<button type="submit" class="block-center wpcf7-form-control wpcf7-submit">Lưu</button> --}}

				 	<table border="0">
				 		<td><button class="block-center wpcf7-form-control wpcf7-submit"><a href="/tutor" class="link-edit">Trở về </a></button></td>
				 		
				 		<td><button type="submit" class="block-center wpcf7-form-control wpcf7-submit">Lưu</button></td>
				 	</table>
				  {{-- {{ csrf_field() }} --}}
				</form>
			</div>
			
			

			@include('page.sidebar')
		</div>
	</div>
</div>
@endsection