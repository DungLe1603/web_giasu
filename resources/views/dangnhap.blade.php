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

          <h2 class="text-center">Ðang nhap</h2>
          <form class="login-form" action="{{route('login')}}" method="post">
            @if(Session::has('flag'))
              <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
            @endif
            <div class="form-group">
              <label for="exampleInputEmail1" >Tên dang nhap</label>
              <input type="text" name="text" class="form-control" placeholder="" required> 
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" >Mat khau</label>
              <input type="password" name="password" class="form-control" placeholder="" required>
            </div>
            
            
              <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                <small>Nho mat khau</small>
              </label>
              <button type="submit" class="btn btn-login float-right">Ðang nhap</button>
            </div>
            
          </form>
  <div class="copy-text">Ðo án<i class="fa fa-heart"></i> <a href="http://grafreez.com">Thuc tap công nhân</a></div>
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
                  <h2>GIA SU ÐÀ N?NG</h2>
                  <p>Trung tâm gia su uy tín, chat luong
                  <br> Chúng tôi tu hào là dia chi tin cay 
                  <br>cua các bac phu huynh, hoc sinh và gia su tai Ðà Nang! </p>
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
