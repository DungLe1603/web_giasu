@extends('masterpage')
@section('content')
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
		<div class="row">
			<!-- Blog Area -->
			<div class="col-md-8">
				<div class="blog-lg-area-left">
					<p>Trung Tâm Gia Sư Đà Nẵng liên tục&nbsp;đăng&nbsp;các suất dạy mới lên Fanpage.
					<br> Quý thầy, cô và các bạn sinh viên hãy đăng ký nhận các suất dạy một cách nhanh nhất.</p>
					<p>(Đây là phần đăng ký dành cho gia sư)</p>
				</div>
			</div>

			@include('page.sidebar')
		</div>
	</div>
</div>
@endsection