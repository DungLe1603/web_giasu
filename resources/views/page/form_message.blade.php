@if (session()->has('message'))
  <div id="alert-message">
    <div class="alert alert-danger">      
      <strong class="alert-message">{{ session('message') }}</strong>
    </div>
  </div>
  <script type="text/javascript">
    setTimeout(function(){
      document.getElementById("alert-message").innerHTML = '';
    }, 4000);
  </script>
@endif
