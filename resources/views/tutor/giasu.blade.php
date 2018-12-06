@extends('masterpage')
@section('content')
<link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">

<div class="page-title-section">		
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="page-title"><h1>DANH SÁCH GIA SƯ</h1></div>
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
				@foreach($tutors as $tutor)
				{{-- @dd($tutor); --}}
					@if($tutor->user['role']['name'] == 'User')
						<div class="row" style="margin-bottom:10px;">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<a href="#" class="thumbnail thumbnail-nguoigiupviec">
									<img src="./images/{{$tutor->picture}}" alt="Hình ảnh gia sư">
								</a>
							</div>
							<div class="col-md-8 col-sm-8 col-xs-12">
								<h4><strong>{{ $tutor->name? $tutor->name : ""}}</strong></h4>
								<ul class="post-meta">
									<li><span class="post-meta-key">Năm sinh:</span>{{ $tutor->birthday? date_create($tutor->birthday)->format('Y') : ""}}</li>
									<li><span class="post-meta-key">Hiện là:</span>{{ $tutor->level? $tutor->level : ""}}</li>
									<li><span class="post-meta-key">Trường:</span>{{ $tutor->school? $tutor->school : ""}}</li>
									<li><span class="post-meta-key">Các môn dạy:</span>{{ $tutor->subject? $tutor->subject : ""}}</li>
									<li><span class="post-meta-key">Khu vực dạy:</span>{{ $tutor->areas? $tutor->areas : ""}}</li>
								</ul>
								<div style="color:#999;">
									<button class="btn-post"><a href="tutor/{{$tutor->id}}/" class="link-edit">Chi tiết</a></button>
									<button class="btn-post"><a href="tutor/{{$tutor->id}}/edit" class="link-edit"> Chỉnh sửa</a></button>

									{{ Form::model($tutor, ['url' => ['/tutor', $tutor["id"]], 'method'=> 'DELETE', 'enctype' => 'multipart/form-data', 'style' => 'display: inline-block;',
									 'onsubmit' => "return confirm('Bạn có muốn xóa gia sư này không?');"])}}
										<button type="submit"  class="btn-post">Xóa</button>
									{{ Form::close()}}
								</div>
							</div>
						</div>
						<hr>﻿
					@endif
				@endforeach
				<div lass="row">{{$tutors->links()}}</div>
			</div>
			<!-- /Blog Pagination -->
			<!--Sidebar Area-->
			@include('page.sidebar')
			<!--Sidebar Area-->			
		</div>
	</div>
</div>
@endsection