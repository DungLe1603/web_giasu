@extends('masterpage')
@section('content')
<div class="page-title-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="page-title"><h1>ĐĂNG KÝ LÀM GIA SƯ</h1></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<ul class="page-breadcrumb">
						<li><a class="fa fa-home fa-2" href="https://trungtamgiasudanang.vn/"></a> <i class="fa fa-angle-right" style="margin: 0 5px;"></i></li><li class="active">ĐĂNG KÝ LÀM GIA SƯ</li>					</ul>
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
					<p>Trung Tâm Gia Sư Đà Nẵng liên tục&nbsp;đăng&nbsp;các suất dạy mới lên Fanpage. Các bạn sinh viên LIKE Fanpage để theo dõi&nbsp;và đăng ký nhận các suất dạy một cách nhanh nhất.</p>
					<p><iframe style="border: none; overflow: hidden;" src="./template/page.html" width="340" height="500" frameborder="0" scrolling="no" data-mce-fragment="1"></iframe></p>
				</div>
			</div>

			@include('page.sidebar')
		</div>
	</div>
</div>
@endsection