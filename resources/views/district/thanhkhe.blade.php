@extends('masterpage')
@section('content')

<div class="page-title-section">
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="page-title"><h1>Gia sư dạy kèm tại quận Thanh Khê</h1></div>
        </div>
      </div>
    </div>  
  </div>
</div>
<!-- /Page Title Section -->
<div class="page-builder">
  <div class="container">
    <div class="row">    
      <!-- Blog Area -->
      <div class="col-md-8" >
        <div id="post-4210" class="blog-lg-area-left post-4210 post type-post status-publish format-standard hentry category-dich-vu">
          <div class="media">           
            <div class="media-body">
              <p>Gia sư dạy kèm tại quận Thanh Khê &#8211; trực thuộc Trung Tâm Gia Sư Đà Nẵng với đội ngũ gia sư dạy kèm tại nhà ở quận Thanh Khê được tuyển chọn kỹ càng, có kinh nghiệm giảng dạy, có trình độ chuyên môn và khả năng sư phạm tốt. Trung tâm cam kết chất lượng dạy kèm của đội ngũ gia sư, đảm bảo tốt yêu cầu của phụ huynh, học sinh.</p>
              <p>Gia sư dạy kèm tại quận Thanh Khê:<br />
              &#8211; Toán, Lý, Hóa, Sinh học, Ngữ văn, Tiếng Anh&#8230; từ lớp 1 đến lớp 12<br />
              &#8211; Anh văn cơ bản, IELTS, TOELF, TOEIC&#8230;<br />
              &#8211; Các ngoại ngữ: Hoa, Hàn, Nhật &#8211; Pháp&#8230;<br />
              &#8211; Các môn năng khiếu: Vẽ, Đàn, Nhạc, Thể thao&#8230;<br />
              &#8211; Luyện viết chữ đẹp&#8230;<br />
              &#8211; Tin học văn phòng: Word, Excel, Powerpoint, Đồ họa&#8230;<br />
              &#8211; Dạy các môn học bằng tiếng Anh, Pháp&#8230;<br />
              &#8211; Tiếng Việt cho người nước ngoài.<br />
              &#8211; Các môn chuyên ngành: kinh tế, xây dựng, cơ khí&#8230;</p>
              <p>* Quý phụ huynh, học viên có nhu cầu tìm gia sư vui lòng gọi số <a href="tel:0905999437"><strong>090.599.9437</strong></a> | <a href="tel:0987654321"><strong>0987.654.321</strong></a> (nhấp vào để gọi).<br />
              * Hoặc điền thông tin theo link bên dưới và bấm nút &#8220;Gửi đi&#8221;. Gia sư của bạn sẽ sớm được tìm thấy.</p>
              <div role="form" class="wpcf7" id="wpcf7-f433-p4210-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
              </div>
              <div style="color:#999;">
                <button class="btn-post"><a href="{{ route('post.create') }}">Đăng bài tìm gia sư</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Blog Area -->

      <!--Sidebar Area-->
      @include('page.sidebar')
      <!--Sidebar Area-->
    </div>
  </div>
</div>
@endsection
