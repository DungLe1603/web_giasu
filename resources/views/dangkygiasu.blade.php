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
					<br>Quý thầy, cô và các bạn sinh viên hãy đăng ký nhận các suất dạy một cách nhanh nhất.</p>
					<p>(Đây là phần đăng ký dành cho gia sư)</p>
				</div>
				<div>
				<form method="post" action="" class="wpcf7-form" novalidate="novalidate">
					<p>
						<label> Họ và tên<br>
							<span class="wpcf7-form-control-wrap ho-ten">
								<input type="text" name="ho-ten" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
							</span>
						</label>
					</p>

					<p>
						<label> Mật khẩu<br>
							<span class="wpcf7-form-control-wrap mat-khau">
								<input type="password" name="password" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
							</span>
						</label>
					</p>


					<p>
						<label> Xác nhận mật khẩu<br>
							<span class="wpcf7-form-control-wrap xac-minh-mat-khau">
								<input type="password" name="repassword" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
							</span>
						</label>
					</p>

					<p>
						<label> Số điện thoại<br>
							<span class="wpcf7-form-control-wrap so-dien-thoai">
								<input type="text" name="so-dien-thoai" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
							</span>
						</label>
					</p>

					<p>
						<label> Email<br>
							<span class="wpcf7-form-control-wrap email">
								<input type="text" name="mail" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
							</span>
						</label>
					</p>

					<p>
						<label> Số chứng minh nhân dân<br>
							<span class="wpcf7-form-control-wrap so-chung-minh-nhan-dan">
								<input type="text" name="cmnd" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
							</span>
						</label>
					</p>



					<p>
						<label> Năm sinh <br>
							
						</label>
						<span class="wpcf7-form-control-wrap nam-sinh" >
								<select class="wpcf7-form-control wpcf7-select" aria-invalid="false" >
									<option>1972</option>
									<option>1973</option>
									<option>1974</option>
									<option>1975</option>
									<option>1976</option>
									<option>1977</option>
									<option>1978</option>
									<option>1979</option>
									<option>1980</option>
									<option>1981</option>
									<option>1982</option>
									<option>1983</option>
									<option>1984</option>
									<option>1985</option>
									<option>1986</option>
									<option>1987</option>
									<option>1988</option>
									<option>1989</option>
									<option>1990</option>
									<option>1991</option>
									<option>1992</option>
									<option>1993</option>
									<option>1994</option>
									<option>1995</option>
									<option>1996</option>
									<option>1997</option>
									<option>1998</option>
									<option>1999</option>
									<option>2000</option>
								</select>
							</span>
						
					</p>
					<p>
						<label>Hiện là(vd: Giáo viên trường THCS Ngô Thì Nhậm, Sinh viên DHBK Đà Nẵng)
							<span class="wpcf7-form-control-wrap">
								<input type="text" name="nghe-nghiep" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
							</span>
						</label>
					</p>
					
						<label>Khu vực dạy(vd: Hòa Vang, Cẩm Lệ, Liên Chiểu, Thanh Khê, Hải Châu)
							<span class="wpcf7-form-control-wrap">
								<input type="text" name="khu-vuc-day" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false">
							</span>
						</label>
					</p>

					<p>
						<div>
							<label>Có thể dạy <br>
								<span>
									<input type="checkbox" name="cap-1" value="1"> Cấp 1 - tiểu học <br>
									<input type="checkbox" name="cap-2" value="2"> Cấp 2 - trung học cơ sở<br>
									<input type="checkbox" name="cap-3" value="3"> Cấp 3 - trung học phổ thông<br>
									<input type="checkbox" name="luyen-thi-dai-hoc" value="3"> Luyện thi đại học<br>
									<input type="checkbox" name="lin-vuc-khac" value="4"> Lĩnh vực khác<br>
								</span>
							</label>
						</div>
						<p>
							<div>
								<label>Môn học<br>
									<span>
										<input type="checkbox" name="toan" value="toan"> Toán<br>
										<input type="checkbox" name="ly" value="ly"> Lý<br>
										<input type="checkbox" name="hoa" value="hoa"> Hóa<br>
										<input type="checkbox" name="van" value="van"> Văn<br>
										<input type="checkbox" name="tieng-anh" value="tieng-anh"> Tiếng anh<br>
										<input type="checkbox" name="kich-su" value="lich-su"> Lịch sử<br>
										<input type="checkbox" name="dia-ly" value="dia-ly"> Địa lý<br>
										<input type="checkbox" name="piano" value="piano"> Đàn Pinao<br>
										<input type="checkbox" name="violin" value="violin"> Đàn Violin<br>
										<input type="checkbox" name="guitar" value="guitar"> Đàn guitar<br>
										


									</span>
								</label>
							</div>
						</p>

						<p>
							<input type="submit" name="" class="wpcf7-form-control wpcf7-submit" value="Đăng kí">
							<span class="ajax-loader"></span>
						</p>

					</p>

					
					
				</form>
			</div>
			</div>
			
			

			@include('page.sidebar')
		</div>
	</div>
</div>
@endsection