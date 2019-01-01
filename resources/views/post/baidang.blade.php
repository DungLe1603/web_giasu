@extends('masterpage')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
<link rel="stylesheet" type="text/css" href="{!! asset('css/search_form.css') !!}">

<div class="page-title-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="page-title"><h1>CÁC SUẤT DẠY MỚI</h1></div>
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
				<!--Search form Area-->
				<div class="sidebar-widget" style="margin: 0 15px;">			
					<form class="appointment-search" action="" method="get">
						<input type="text" class="search_widget_input" name="s" id="s" placeholder="Tìm kiếm">
		      	<button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<!--Search form Area-->	

				<div class="blog-lg-area-left">
					@if (session()->has('success'))
				    <div id="alert-message">
			        <strong class="alert-success">{{ session('success') }}</strong>
				    </div>
						<script type="text/javascript">
							setTimeout(function(){
								document.getElementById("alert-message").innerHTML = '';
							}, 2000);
						</script>
					@endif
					<ul class="post-list row">
						@foreach($posts as $post)
							<li class="post-item col-md-6">
								<p><strong>Mã Lớp: {{$post->id}}</strong></p>
								<p><strong>Môn học: </strong> {{$post->subject? $post->subject : '-'}}</p>
								<p><strong>Số học sinh: </strong> {{$post->number_student? $post->number_student : '-'}}</p>
								<P><strong>Số buổi: </strong> {{$post->number_time? $post->number_time : '-'}}</P>
								<p><strong>Thời gian: </strong> {{$post->time? $post->time : '-'}}</p>
								<p><strong>Mức lương: </strong> {{$post->payment? $post->payment : '-'}}</p>
								<p><strong>Tên phụ huynh: </strong> {{$post->parent_name ? $post->parent_name : '-'}}</p>
								<p><strong>Số điện thoại: </strong> {{$post->phone? $post->phone : '-'}}</p>
								<p><strong>Địa chỉ: </strong> {{$post->address? $post->address : '-'}}</p>
								<p><strong>Yêu cầu: </strong> {{$post->requirement? $post->requirement : '-'}}</p>
								@if(Auth::user())
									@if(Auth::user()->roleAdmin())
										<button class="btn-post"><a href="post/{{$post->id}}/edit" class="link-edit"> Chỉnh sửa</a></button>

										{{ Form::model($post, ['url' => ['/post', $post["id"]], 'method'=> 'DELETE', 'enctype' => 'multipart/form-data', 'style' => 'display: inline-block;',
										 'onsubmit' => "return confirm('Bạn có muốn xóa suất dạy này không?');"])}}
											<button type="submit"  class="btn-post">Xóa</button>
										{{ Form::close()}}
									@endif
								@endif
								<hr>
							</li>
						@endforeach
					</ul>
					<div lass="row">{{$posts->links()}}</div>
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