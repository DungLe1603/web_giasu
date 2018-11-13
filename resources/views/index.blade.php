@extends('masterpage')
@section('content')
@include('page.slider')
<div class="Service-section">
	<div class="container">	
		<div class="row">
			<div class="col-md-12">			
				<div class="section-heading-title">
					<h1>Vì sao chọn Trung Tâm Gia Sư Đà Nẵng</h1>
					<p><a href="{!! asset('/')!!}"><strong>Trung Tâm Gia Sư Đà Nẵng</strong></a> là trung tâm gia sư uy tín, lâu đời nhất tại Đà Nẵng. Trung tâm tuyển chọn gia sư giỏi từ các trường Đại học, Phổ thông nổi tiếng tại Đà Nẵng.<br>Gia sư dạy kèm: các môn học lớp 1 đến lớp 12, ngoại ngữ, tin học, năng khiếu, chuyên ngành... </p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa fa fa-users"></i>
						</div>
						<div class="media-body">
							<h3>Phụ huynh / Học viên</h3>
							<p>Phụ huynh, Học viên cần tìm gia sư giỏi, nhấp vào 
								<a href="{!! asset('post/create')!!}/">[Đăng bài tìm gia sư]</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa fa fa-graduation-cap"></i>
						</div>
						<div class="media-body">
							<h3>Sinh viên / Giáo viên</h3>
							<p>Sinh viên, Giáo viên đăng ký làm gia sư, nhấp vào 
								<a href="{!! asset('tutor/create')!!}">[Đăng ký làm gia sư]</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="hidden">-->
			<div class="col-md-4">
				<div class="service-area">
					<div class="media">
						<div class="service-icon">
							<i class="fa fa fa-briefcase"></i>
						</div>
						<div class="media-body">
							<h3>Các suất dạy mới</h3>
							<p>Gia sư chọn các suất dạy phù hợp, nhấp vào 
								<a href="{!! asset('post')!!}">[Các suất dạy mới]</a>.</p>
						</div>
					</div>
				</div>
			</div>			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- /HomePage Service Section -->
<div class="top-contact-detail-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="contact-area">
					<div class="media">
						<div class="contact-icon">
							<i class="fa fa fa-phone"></i>
						</div>
						<div class="media-body">
							<h6>Điện Thoại</h6>
							<h4>0972193396</h4>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>			
			</div>
			
			<div class="col-md-4">
				<div class="contact-area">
					<div class="media">
						<div class="contact-icon">
							<i class="fa fa-info-circle"></i>
						</div>
						<div class="media-body">
							<h6>Tư vấn</h6>
							<h4>Chuyên nghiệp, hiệu quả</h4>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>				
			</div>
			
			<div class="col-md-4">
				<div class="contact-area">
					<div class="media">
						<div class="contact-icon">
							<i class="fa fa-pencil-square "></i>
						</div>
						<div class="media-body">
							<h6>Gia sư</h6>
							<h4>Chất lượng, dạy giỏi</h4>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>			
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="blog-section">
	<div class="container">
	
		<!-- Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading-title">
					<h1>Gia sư tại Đà Nẵng</h1>
					<p>Trung Tâm Gia Sư Đà Nẵng với đội ngụ gia sư dạy kèm tại tất cả các quận huyện thành phố Đà Nẵng</p>
				</div>
			</div>
		</div>
		<!-- /Section Title -->
		
		<div class="row">
			<div class="col-md-6">
				<div class="blog-sm-area">
					<div class="media">
						<div class="blog-sm-box">
						</div>
						<div class="media-body">
							<h3><a href="#">Gia sư dạy kèm tại quận Hải Châu</a></h3>
							<p>Gia sư dạy kèm tại quận Hải Châu – trực thuộc Trung Tâm Gia Sư Đà Nẵng với đội ngũ gia sư dạy kèm tại nhà ở quận Hải Châu được tuyển chọn kỹ càng, […]</p>
							<!---->
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="blog-sm-area">
					<div class="media">
						<div class="blog-sm-box">
						</div>
						<div class="media-body">
							<h3><a href="#">Gia sư dạy kèm tại quận Thanh Khê</a></h3>
							<p>Gia sư dạy kèm tại quận Thanh Khê – trực thuộc Trung Tâm Gia Sư Đà Nẵng với đội ngũ gia sư dạy kèm tại nhà ở quận Thanh Khê được tuyển chọn kỹ càng, […]</p>
							<!---->
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>			
			<div class="col-md-6">
				<div class="blog-sm-area">
					<div class="media">
						<div class="blog-sm-box">
						</div>
						<div class="media-body">
							<h3><a href="#">Gia sư dạy kèm tại quận Liên Chiểu</a></h3>
							<p>Gia sư dạy kèm tại quận Liên Chiểu – trực thuộc Trung Tâm Gia Sư Đà Nẵng với đội ngũ gia sư dạy kèm tại nhà ở quận Liên Chiểu được tuyển chọn kỹ càng, […]</p>
							<!---->
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="blog-sm-area">
					<div class="media">
						<div class="blog-sm-box">
						</div>
						<div class="media-body">
							<h3><a href="#">Gia sư dạy kèm tại quận Sơn Trà</a></h3>
							<p>Gia sư dạy kèm tại quận Sơn Trà – trực thuộc Trung Tâm Gia Sư Đà Nẵng với đội ngũ gia sư dạy kèm tại nhà ở quận Sơn Trà được tuyển chọn kỹ càng, […]</p>
							<!---->
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>			
			<div class="col-md-6">
				<div class="blog-sm-area">
					<div class="media">
						<div class="blog-sm-box">
						</div>
						<div class="media-body">
							<h3><a href="#">Gia sư dạy kèm tại quận Ngũ Hành Sơn</a></h3>
							<p>Gia sư dạy kèm tại quận Ngũ Hành Sơn – trực thuộc Trung Tâm Gia Sư Đà Nẵng với đội ngũ gia sư dạy kèm tại nhà ở quận Ngũ Hành Sơn được tuyển chọn […]</p>
							<!---->
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="blog-sm-area">
					<div class="media">
						<div class="blog-sm-box">
						</div>
						<div class="media-body">
							<h3><a href="#">Gia sư dạy kèm tại quận Cẩm Lệ</a></h3>
							<p>Gia sư dạy kèm tại quận Cẩm Lệ – trực thuộc Trung Tâm Gia Sư Đà Nẵng với đội ngũ gia sư dạy kèm tại nhà ở quận Cẩm Lệ được tuyển chọn kỹ càng, […]</p>
							<!---->
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>			
			<div class="col-md-6">
				<div class="blog-sm-area">
					<div class="media">
						<div class="blog-sm-box">
						</div>
						<div class="media-body">
							<h3><a href="#">Gia sư dạy kèm tại huyện Hòa Vang</a></h3>
							<p>Gia sư dạy kèm tại huyện Hòa Vang – trực thuộc Trung Tâm Gia Sư Đà Nẵng với đội ngũ gia sư dạy kèm tại nhà ở huyện Hòa Vang được tuyển chọn kỹ càng, […]</p>
							<!---->
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="blog-sm-area">
					<div class="media">
						<div class="blog-sm-box">
						</div>
						<div class="media-body">
							<h3><a href="#">Trung tâm dạy kèm tại Đà Nẵng</a></h3>
							<p>Trung Tâm Dạy Kèm Tại Đà Nẵng trực thuộc Trung Tâm Gia Sư Đà Nẵng là trung tâm dạy kèm uy tín, lâu đời nhất tại Đà Nẵng. Trung tâm tuyển chọn gia sư giỏi […]</p>
							<!---->
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>		
		</div>
	</div>
</div>
@endsection