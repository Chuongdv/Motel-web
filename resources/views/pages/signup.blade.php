<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Đăng kí tài khoản</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href='{{asset("css/style.css")}}'>
      <link rel="stylesheet" href="{{asset('css/fancier.css')}}">

  
</head>

<body>

  
<div class="container">
                  @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach()  
                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
  <form action="/signup" method="POST" enctype="multipart/form-data" >
    <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
    <div class="row">
      <h4>Đăng kí</h4>
      <div class="input-group input-group-icon">
        <input type="text" name="name" placeholder="Full Name"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" name="email" placeholder="Email Adress"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" name="password" placeholder="Password"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Ngày tháng năm sinh</h4>
        <div class="input-group input-group-icon">
            <input class="dateadd"type="date" name="bday" max="2100-01-02"><br><br>
        </div>
      </div>
      <div class="col-half">
        <h4>Giới tính</h4>
        <div class="input-group">
          <input type="radio" name="gender" value="Nam" id="gender-male"/>
          <label for="gender-male">Nam</label>
          <input type="radio" name="gender" value="Nữ" id="gender-female"/>
          <label for="gender-female">Nữ</label>
        </div>
      </div>
    </div>

    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
    <input class="submitbutton" type="submit" value="Đăng kí">
  </form>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src='{{asset("js/index.js")}}'></script>




</body>

</html>
