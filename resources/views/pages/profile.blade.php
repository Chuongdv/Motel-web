<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Thông tin cá nhân</title>
  
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
  <form action="/profile/{{$user->id}}" method="POST" enctype="multipart/form-data" >
    <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
    <div class="row">
      <h4>Thông tin cá nhân</h4>
      <div class="input-group input-group-icon">
        <input type="text" id="name" name="name" value="{{$user->name}}" disabled />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" id="email" name="email" value="{{$user->email}}" disabled/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" name="password" id="password" value="" disabled/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Ngày tháng năm sinh</h4>
        <div class="input-group input-group-icon">
            <input class="dateadd"type="date" id="bday" name="bday" max="2100-01-02" value={{$user->birthday}} disabled><br><br>
        </div>
      </div>
      <div class="col-half">
        <h4>Giới tính</h4>
        <div class="input-group">
          @if($user->gender == "Nam")
          <input type="radio" name="gender" value="Nam" id="gender-male" disabled checked />
          <label for="gender-male">Nam</label>
          <input type="radio" name="gender" value="Nữ" id="gender-female" disabled />
          <label for="gender-female">Nữ</label>
          @else
          <input type="radio" name="gender" value="Nam" id="gender-male" disabled />
          <label for="gender-male">Nam</label>
          <input type="radio" name="gender" value="Nữ" id="gender-female" disabled checked />
          <label for="gender-female">Nữ</label>
          @endif
        </div>
      </div>
    </div>

    <div class="row">
      <div class="input-group">
        <input type="checkbox" id="terms" name="policy" value="agree"/>
        <label for="terms">Thay đổi thông tin cá nhân</label>
      </div>
    </div>
    <input class="submitbutton" type="submit" value="Thay đổi">
  </form>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src='{{asset("js/index.js")}}'></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
   $("#terms").change(function(){
      if(this.checked){
      $("#name").removeAttr('disabled');
      $("#email").removeAttr('disabled');
      $('#bday').removeAttr('disabled');
      $('#gender-male').removeAttr('disabled');
      $('#password').removeAttr('disabled');
      $('#gender-female').removeAttr('disabled');
      }
      else{
        $("#name").attr('disabled', 'true');
        $("#email").attr('disabled', 'true');
        $('#bday').attr('disabled', 'true');
        $('#gender-male').attr('disabled', 'true');
        $('#password').attr('disabled', 'true');
        $('#gender-female').attr('disabled', 'true');
      }
   });
});
</script>


</body>

</html>
