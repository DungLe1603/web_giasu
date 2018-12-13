<!-- ToanHN: Thêm phần số điện thoại -->
    <section class="top-header-widget">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-7 top-header">
                    <div id="top-header-sidebar-left" class="top-header-sidebar">
                       <i class="fa fa-globe" "=""></i> giasudanang.udn.vn - Uy tín, Chất lượng, Hiệu quả
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-5 top-header">
                    <div id="top-header-sidebar-right" class="top-header-sidebar">
                        <i class="fa fa-phone-square">ảnh đại diện</i>
                        <a href="#">Tên User</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ToanHN: end Thêm phần số điện thoại -->
<!--Logo & Menu Section-->	
<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<h1><a class="navbar-brand" href="{!! asset('/') !!}" title="Appointment">
					<img class="img-responsive" src="{!! asset('template/logo-trung-tam-gia-su-da-nang.jpg') !!}" style="height:px; width:px;">
				</a>
			</h1>
					
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul id="menu-menu-header" class="nav navbar-nav navbar-right">
				<li id="menu-item-157" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-157"><a href="{!! asset('/') !!}">TRANG CHỦ</a></li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1573 dropdown">
					<a href="#">DÀNH CHO GIA SƯ</a>
					<ul class="dropdown-menu">
						<li id="menu-item-1593" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1593">
							<a href="{!! asset('/post') !!}">XEM SUẤT DẠY</a></li>	
						<li id="menu-item-1571" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1571">
							<a href="{!! asset('/tutor/create') !!}">ĐĂNG KÝ LÀM GIA SƯ</a></li>
					</ul>
				</li>
				<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1573 dropdown">
					<a href="#">DÀNH CHO PHỤ HUYNH/ HỌC SINH</a>
					<ul class="dropdown-menu">
						<li id="menu-item-1572" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1572">
							<a href="{!! asset('/tutor') !!}">XEM GIA SƯ</a></li>
						<li id="menu-item-1592" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1593">
							<a href="{!! asset('/post/create') !!}">ĐĂNG BÀI TÌM GIA SƯ</a></li>
					</ul>
				</li>				
				<li id="menu-item-1573" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
					<a href="{!! asset('/introduce') !!}">GIỚI THIỆU<b class="caret"></b></a>
				</li>
				<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
					<a href="{!! asset('/contact') !!}">LIÊN HỆ</a></li>
				<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20">
					<a href="{!! asset('/log-in') !!}">ĐĂNG NHẬP</a></li>
			</ul>		
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>	
<!--/Logo & Menu Section-->	
