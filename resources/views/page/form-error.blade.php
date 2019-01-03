@if ($errors->any())
  <div  id="alert-message">
     <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>    
  </div>   
  <script type="text/javascript">
    setTimeout(function(){
      document.getElementById("alert-message").innerHTML = '';
    }, 5000);
  </script>
@endif
