@extends('masterpage')
@section('content')
<div class="page-title-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
											<div class="page-title"><h1>ĐĂNG BÀI TÌM GIA SƯ</h1></div>
										</div>
				<div class="col-md-6 col-sm-6">
					<ul class="page-breadcrumb">
						<li><a class="fa fa-home fa-2" href="https://trungtamgiasudanang.vn/"></a> <i class="fa fa-angle-right" style="margin: 0 5px;"></i></li><li class="active">ĐĂNG BÀI TÌM GIA SƯ</li>					</ul>
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
						<div class="blog-lg-area-left">
			<p>– Quý phụ huynh, học viên cần tìm gia sư vui lòng gọi số <a href="tel:0905999437"><strong>0905.999.437</strong></a>&nbsp;– <a href="tel:0977195595"><strong>0977.195.595</strong></a> (nhấp vào để gọi).<br>
– Hoặc điền thông tin vào form bên dưới và bấm nút “Gửi đi”. Chúng tôi sẽ liên lạc lại ngay để tư vấn miễn phí.</p>
<div role="form" class="wpcf7" id="wpcf7-f433-p432-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="https://trungtamgiasudanang.vn/dang-ky-tim-gia-su/#wpcf7-f433-p432-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="433">
<input type="hidden" name="_wpcf7_version" value="5.0.5">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f433-p432-o1">
<input type="hidden" name="_wpcf7_container_post" value="432">
</div>
<p><label> Điện thoại<br>
    <span class="wpcf7-form-control-wrap dien-thoai"><input type="text" name="dien-thoai" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> Địa chỉ (Tên đường)<br>
    <span class="wpcf7-form-control-wrap dia-chi"><input type="text" name="dia-chi" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
<p><label> Cần tìm gia sư dạy Lớp mấy? Môn gì?<br>
    <span class="wpcf7-form-control-wrap lop-mon"><input type="text" name="lop-mon" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
<p><label> Số buổi, thời gian dạy (vd: 3 buổi/tuần, tối thứ 2-4-6 từ 7h-8h30)<br>
    <span class="wpcf7-form-control-wrap buoi-thoigian"><input type="text" name="buoi-thoigian" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
<p><label> Thông tin khác (vd: học sinh nữ, yêu cầu gia sư nữ...)<br>
    <span class="wpcf7-form-control-wrap tong-tin-khac"><input type="text" name="tong-tin-khac" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
<p><input type="submit" value="Gửi đi" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
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