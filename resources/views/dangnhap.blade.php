<!DOCTYPE html>
<html>
<head>
  <title></title>  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" type="text/css" href="{!! asset('login/login.css') !!}">
</head>
<body>
  <section class="login-block">
      <div class="container">
    <div class="row">
      <div class="col-md-4 login-sec">
          <h2 class="text-center">Đăng nhập</h2>
          <form class="login-form" action="{!! asset('/') !!}">
            <div class="form-group">
              <label for="exampleInputEmail1" >Tên đăng nhập</label>
              <input type="text" class="form-control" placeholder="">
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" >Mật khẩu</label>
              <input type="password" class="form-control" placeholder="">
            </div>
            
            
              <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                <small>Nhớ mật khẩu</small>
              </label>
              <button type="submit" class="btn btn-login float-right">Đăng nhập</button>
            </div>
            
          </form>
  <div class="copy-text">Đồ án<i class="fa fa-heart"></i> <a href="http://grafreez.com">Thực tập công nhân</a></div>
      </div>
      <div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <div class="banner-text">
                  <h2>GIA SƯ ĐÀ NẴNG</h2>
                  <p>Trung tâm gia sư uy tín, chất lượng
                  <br> Chúng tôi tự hào là địa chỉ tin cậy 
                  <br>của các bậc phụ huynh, học sinh và gia sư tại Đà Nẵng! </p>
              </div>  
        </div>
      </div>
      
    </div>
              </div>     
          
      </div>
    </div>
  </div>
  </section>
</body>
</html>
