@extends('masterpage')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">

<div class="page-title-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="page-title"><h1>THÔNG TIN GIA SƯ</h1></div>
				</div>
			</div>
		</div>	
	</div>
</div>
<div class="page-builder">
	<div class="container">
		<div class="row">
			<!-- Blog Area -->
			<div class="col-md-8">
				@if($tutor->user['role']['name'] == 'User')
				{{-- @dd($tutor);  --}}
					<div class="row" style="margin-bottom:10px;">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<a href="#" class="thumbnail thumbnail-nguoigiupviec">
								<img src="/images/{{ $tutor->picture ? $tutor->picture : 'default-image.jpg'}}" alt="Hình ảnh gia sư">
							</a>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<h4><strong>{{ $tutor->name? $tutor->name : ""}}</strong></h4>
							<ul class="post-meta">
								<li><span class="post-meta-key">Ngày sinh: </span>{{ $tutor->birthday? date_create($tutor->birthday)->format('d-m-Y') : ""}}</li>
								<li><span class="post-meta-key">Giới tính: </span>{{ $tutor->gender?  $tutor->gender['name'] : ""}}</li>
								<li><span class="post-meta-key">Địa chỉ: </span>{{ $tutor->address?  $tutor->address : ""}}</li>
								<li><span class="post-meta-key">Số điện thoại: </span>{{ $tutor->phone?  $tutor->phone : ""}}</li>
								<li><span class="post-meta-key">Hiện là: </span>{{ $tutor->level? $tutor->level : ""}}</li>
								<li><span class="post-meta-key">Trường: </span>{{ $tutor->school? $tutor->school : ""}}</li>
								<li><span class="post-meta-key">Các môn dạy: </span>{{ $tutor->subject? $tutor->subject : ""}}</li>
								<li><span class="post-meta-key">Khu vực dạy: </span>{{ $tutor->areas? $tutor->areas : ""}}</li>
								<li><span class="post-meta-key">Thời gian có thể dạy: </span>{{ $tutor->time? $tutor->time : ""}}</li>
								<li><span class="post-meta-key">Mức lương tối thiểu: </span>{{ $tutor->salary? $tutor->salary : ""}}</li>
							</ul>
							<div style="color:#999;">
								<button class="btn-post"><a href="/tutor" class="link-edit">Trở về</a></button>
							</div>
						</div>
					</div>
					<hr>﻿
				@endif
			</div>
			<!-- /Blog Pagination -->
			<!--Sidebar Area-->
			@include('page.sidebar')
			<!--Sidebar Area-->			
		</div>
	</div>
</div>
@endsection