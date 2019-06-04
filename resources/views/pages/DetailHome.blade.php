@extends('layout.blueprint')
@section('body')

            <?php 
                    $province = DB::table('province')->where('id', '=', $home->province)->get();
                     $district = DB::table('district')->where('id', '=', $home->district)->get();
                     $ward = DB::table('ward')->where('id', '=', $home->ward)->get();
                     $addr = $home->location .", " . $ward[0]->name .", " . $district[0]->name .", " . $province[0]->name;
                    $display = $addr;
                        
                    
             ?>



            <!-- Blog Post 1 -->
            <article>
                <h3 class="title-bg"> {{$display}}</h3>
                <div class="post-content">
                    <div class="slideshow-container">
                        
                        <div class="mySlides ">
                          <div class="numbertext">1 / 4</div>
                          @if(is_null($home->image1))
                          <img class="imageshow"style="width: 770px; height: 500px" src="{{asset('img/gallery/post-img-1.jpg')}}" >
                          @else
                           <img class="imageshow" style="width: 770px; height: 500px" src="../image/house/{{$home->image1}}" >
                          @endif
                          @if(is_null($home->describe1))
                          <div class="text">Không có mô tả</div>
                          @else
                          <div class="text">{{$home->describe1}}</div>
                          @endif
                        </div>

                        <div class="mySlides ">
                          <div class="numbertext">2 / 4</div>
                          @if(is_null($home->image2))
                          <img class="imageshow" style="width: 770px; height: 500px" src="{{asset('img/gallery/post-img-1.jpg')}}" >
                          @else
                          <img class="imageshow" style="width: 770px; height: 500px" src="../image/house/{{$home->image2}}" >
                          @endif
                          @if(is_null($home->describe2))
                          <div class="text">Không có mô tả</div>
                          @else
                          <div class="text">{{$home->describe2}}</div>
                          @endif
                        </div>

                        <div class="mySlides ">
                          <div class="numbertext">3 / 4</div>
                          @if(is_null($home->image3))
                          <img class="imageshow" style="width: 770px; height: 500px" src="{{asset('img/gallery/post-img-1.jpg')}}" >
                          @else
                          <img class="imageshow" style="width: 770px; height: 500px" src="../image/house/{{$home->image3}}" >
                          @endif
                          @if(is_null($home->describe3))
                          <div class="text">Không có mô tả</div>
                          @else
                          <div class="text">{{$home->describe3}}</div>
                          @endif
                        </div>

                        <div class="mySlides ">
                          <div class="numbertext">4 / 4</div>
                          @if(is_null($home->image4))
                          <img class="imageshow" style="width: 770px; height: 500px" src="{{asset('img/gallery/post-img-1.jpg')}}" >
                          @else
                          <img class="imageshow"style="width: 770px; height: 500px"  src="../image/house/{{$home->image4}}" >
                          @endif
                          @if(is_null($home->describe4))
                          <div class="text">Không có mô tả</div>
                          @else
                          <div class="text">{{$home->describe4}}</div>
                          @endif
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        <br>

                        <div style="text-align:center">
                          <span class="dot" onclick="currentSlide(1)"></span> 
                          <span class="dot" onclick="currentSlide(2)"></span> 
                          <span class="dot" onclick="currentSlide(3)"></span> 
                          <span class="dot" onclick="currentSlide(4)"></span> 
                        </div>
                    
                    <div class="post-body" style="font-size: 16px">
                        <p>Địa chỉ: {{$display}}</p>

                       <p>Diện tích: {{$home->areas}} m2</p>
                       <p>Giá thành: {{$home->cost}} vnd </p>
                       <?php 
                       $methode = DB::table('category')->where('id', '=', $home->type)->get();
                       ?>
                       <p>Hình thức: {{$methode[0]->description}} vnd </p>

                       <p>
                            Mô tả: 
                        <br>
                        {{$home->description}}
                       </p>

                        <p class="well">Liên hệ:
                        <br> {{$home->hostName}} : {{$home->hostPhone}}
                        </p>
                    </div>

                    <div class="post-summary-footer">
                        <ul class="post-data">
                            <li><i class="icon-calendar"></i>Thời gian đăng {{$home->time}} </li>
                        </ul>
                    </div>
                </div>
            </article>
            
        </section><!-- Close comments section-->

<script>
    
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#selectProvince").change(selectProvince);
    $('#selectDistrict').change(selectDistrict);
    $('#selectWard').change(selectWard);

    function selectProvince(){
    var id = $(this).find(":checked").val();
   if(id != -1){
    //goi server lay cac quan/huyen
      $.ajaxSetup({
          headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
      });

      $.ajaxSetup({ cache: false });

      $.ajax({
          url : "/getDistrict/" + id,
          type : "get",
          dataType:"json",
          data : {
          },
          success : function (result){
            $("#selectDistrict").html("<option value=\"-1\">Quận/Huyện</option>");
            $("#selectWard").html("<option value=\"-1\">Phường/Xã</option>");
            $.each (result, function (key, item){
                var tmp = "<option value=\"" + item['id'] + "\">" + item['name'] + "</option>";
                $("#selectDistrict").append(tmp);
            });
          }
      });

   }
   else{
    $("#selectDistrict").html("<option value=\"-1\">Quận/Huyện</option>");
    $("#selectWard").html("<option value=\"-1\">Phường/Xã</option>");
    alert("Bạn hãy chọn một tỉnh thành cụ thể");
   }

    }



 function selectDistrict(){
    var id = $(this).find(":checked").val();
   if(id != -1){
    //goi server lay cac quan/huyen
      $.ajaxSetup({
          headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
      });

      $.ajaxSetup({ cache: false });

      $.ajax({
          url : "/getWard/" + id,
          type : "get",
          dataType:"json",
          data : {
          },
          success : function (result){
            $("#selectWard").html("<option value=\"-1\">Phường/Xã</option>");
            $.each (result, function (key, item){
                var tmp = "<option value=\"" + item['id'] + "\">" + item['name'] + "</option>";
                $("#selectWard").append(tmp);
            });
          }
      });
    }
    else{
    $("#selectWard").html("<option value=\"-1\">Phường/Xã</option>");
    alert("Bạn hãy chọn một quận huyện thành cụ thể");
   }
 }

function selectWard(){
    var id = $(this).find(":checked").val();
    if(id == -1){
        alert("Bạn hãy chọn một phường, xã cụ thể");
    }
}




});


</script>


@endsection