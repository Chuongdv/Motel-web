<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Trang thuê nhà</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="_token" content="{{csrf_token()}}" />

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-responsive.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery.lightbox-0.5.css')}}">
<link rel="stylesheet" href="{{asset('css/custom-styles.css')}}">
<link rel="stylesheet" href="{{asset('css/fancier.css')}}">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.custom.js')}}"></script>
<script src="{{asset('js/fancier.js')}}"></script>


</head>

<body>
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container main-container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
            <a href="index.htm"><img src="{{asset('img/logocompanysmall.png')}}" alt="" width="100px" height="100px" /></a>
            <h5>Nơi tìm những căn nhà ưng ý cho bạn</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li><a href="/home">Home</a></li>
            <li><a href="<?php echo "/profile/" . $user->id ?>">{{$user->name}}</a></li>
            <li><a href="page-contact.htm">Đăng xuất</a></li>
            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="">Navigate...</option>
                    <option value="index.htm">Home</option>
                        <option value="index.htm">- Full Page</option>
                        <option value="index-gallery.htm">- Gallery Only</option>
                        <option value="index-slider.htm">- Slider Only</option>
                    <option value="features.htm">Features</option>
                    <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                    <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                    <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
                    <option value="page-contact.htm">Contact</option>
                </select>
                </div>
                </form>
                
        </div>

      </div><!-- End Header -->
     
    <!-- Page Content
    ================================================== --> 
    <div class="row"><!--Container row-->
        <form action="/" method="post" accept-charset="utf-8" enctype="multipart/form-data">
           <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
        
        <!-- Page Sidebar
        ================================================== --> 
        <div class="span4 sidebar page-sidebar"><!-- Begin sidebar column -->

            <!--Latest News-->
            <h5 class="title-bg">Bài đăng trước đó</h5>
            <ul class="popular-posts">
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                    <em>Posted on 09/01/15</em>
                </li>
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Nulla iaculis mattis lorem, quis gravida nunc iaculis</a></h6>
                    <em>Posted on 09/01/15</em>
                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                    <em>Posted on 09/01/15</em>
                </li>
                                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                    <em>Posted on 09/01/15</em>
                </li>
                                <li>
                    <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                    <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum maecenas felis</a></h6>
                    <em>Posted on 09/01/15</em>
                </li>
    


            </ul>

                

        </div><!-- End sidebar column -->

        <!-- Page Content
        ================================================== --> 
        <div class="span8"><!--Begin page content column-->

            <h2 class="title-bg">Bài đăng mới</h2>
            <div class="newpost">
                <h5 class="title-bg">Thông tin cơ bản</h5>
                 <ul class="">
                <li>
                <div class="center" class="icon-plus-sign">
                     <select name="sources" id="selectProvince" placeholder="Source Type">
                        <option value="-1">Tỉnh/Thành phố</option>
                        @foreach($province as $pro)
                        <option value="{{$pro->id}}">{{$pro->name}}</option>
                        @endforeach
                     </select>
                </div>
                </li>
                <li>
                    <div class="center">
                         <select name="sources" id="selectDistrict"placeholder="Source Type">
                            <option value="-1">Quận/Huyện</option>
                         </select>
                    </div>
                </li>
                <li>
                    <div class="center">
                     <select name="sources" id="selectWard" placeholder="Source Type">
                        <option value="profile">Phường/Xã</option>
                     </select>
                     </div>
                </li>
                <li>
                    <div class="center">
                        <input type="text" name="particular" placeholder="Đường/Xóm - Ngõ/ngách - Số nhà">
                        <br>
                    </div>
                </li>  
                <li>
                    <div class="center">
                     <select name="sources" placeholder="Source Type">
                        <option value="room">Thuê phòng</option>
                        <option value="house">Thuê căn hộ/ trung cư </option>
                        <option value="roommate">Ở Ghép</option>
                     </select>
                     </div>
                </li>
                <li>
                    <div class="center">
                        <input type="number" name="quantity" min="0" placeholder="Diện tích">
                     </div>
                </li>
                <li>
                    <div class="center">
                        <input type="number" name="quantity" min="0" placeholder="Giá thuê">
                    </div>
                </li>
            </ul>
            </div>


            <h5 class="title-bg">Mô tả</h5>
            <div class="detailpost">
                <textarea name="detailHouse" placeholder="Mô tả về nhà, các điều kiện khác..."></textarea>
            </div>

            <h5 class="title-bg">Ảnh đính kèm</h5>

            <div class="imagehouse">
                <div style="size:20px"> Tối đa 4 ảnh </div>
                <div class="frameimage">
                <div id="imageall" style="height: 320px" hidden>
                 <ul class="gallery-post-grid holder">

                    <!-- Gallery Item 1 -->
                    <li  class="span2 gallery-item" id="previewblock1" data-id="id-1" data-type="illustration" style="margin-left: 0px; " hidden>
                        <img id="preimg1" style="width: 200px; height: 200px" src="img/gallery/gallery-img-1-6col.jpg" alt="Gallery">
                        <span class="project-details" id="deshou1">Chưa có mô tả</span>
                    </li>

                    <!-- Gallery Item 2 -->
                    <li class="span2 gallery-item"id="previewblock2" data-id="id-2" data-type="illustration" hidden>
                        <img id="preimg2" style="width: 200px; height: 200px" src="img/gallery/gallery-img-1-6col.jpg" alt="Gallery">
                        <span class="project-details" id="deshou2">Chưa có mô tả</span>
                    </li>
                <!-- Gallery Item 3 -->
                    <li class="span2 gallery-item" id="previewblock3" data-id="id-3" data-type="web" hidden>
                        <img id="preimg3" style="width: 200px; height: 200px" src="img/gallery/gallery-img-1-6col.jpg" alt="Gallery">
                        <span class="project-details" id="deshou3">Chưa có mô tả</span>
                    </li>

                    <!-- Gallery Item 4 -->
                    <li class="span2 gallery-item" id="previewblock4" data-id="id-4" data-type="video" hidden>
                        <img id="preimg4" style="width: 200px; height: 200px" src="img/gallery/gallery-img-1-6col.jpg" alt="Gallery">
                        <span class="project-details" id="deshou4">Chưa có mô tả</span>
                    </li>
                 
                </ul>
                </div>
                <div >
                    <div id="imageone">
                        <input type="file" name="imageHouse1" accept="image/png, image/jpeg">
                        <div>
                            <input type="text" name="describeHouse1" placeholder="Mô tả ảnh">
                        </div>
                        <button id="uploadimage1">Thêm mô tả</button>
                    </div>

                    <div id="imagetwo" hidden>
                        <input type="file" name="imageHouse2" accept="image/png, image/jpeg">
                        <div>
                            <input type="text" name="describeHouse2" placeholder="Mô tả ảnh">
                        </div>
                        <button id="uploadimage2">Thêm mô tả</button>
                    </div>
   
                    <div id="imagethree" hidden>
                        <input type="file" name="imageHouse3" accept="image/png, image/jpeg">
                        <div>
                            <input type="text" name="describeHouse3" placeholder="Mô tả ảnh">
                        </div>
                        <button id="uploadimage3">Thêm mô tả</button>
                    </div>

                    <div id="imagefour" hidden>
                        <input type="file" name="imageHouse4" accept="image/png, image/jpeg">
                        <div>
                            <input type="text" name="describeHouse4" placeholder="Mô tả ảnh">
                        </div>
                        <button id="uploadimage4">Thêm mô tả</button>
                    </div>
                </div>
            </div> 

             <h5 class="title-bg">Thông tin liên hệ</h5>
             <div>
             <ul>
                <li>
                <div class="">
                    
                    <input class="span4" id="prependedInput" size="16" type="text" placeholder="Name">
                   </div>
                 </li>
                 <li>
                <div>
                    
                    <input class="span4" id="prependedInput" size="16" type="number" placeholder="Số điện thoại">
                </div>
            </li>
            </ul>
            </div>
            <h5 class="title-bg">Hoàn thành</h5> 
                <div style="display:block; height:50px;">
                     <input type="submit" style="display:block; margin:auto;" value="Đăng bài">
                </div>
               

            </div>
        
        </div> <!--End page content column--> 
    </form>

    </div><!-- End container row -->
    
    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
    <div class="footer-container"><!-- Begin Footer -->
        <div class="container">
            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2019 Pink Dream company. All rights reserved.</span></div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 

    <!-- Scroll to Top -->  
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>
  
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
    alert("Bạn hãy chọn một quận huyện thành cụ thể");
   }
 }

function selectWard(){
    var id = $(this).find(":checked").val();
    if(id == -1){
        alert("Bạn hãy chọn một phường, xã cụ thể");
    }
}


//xu li hinh anh

/* Selected File has changed */
$("input[name='imageHouse1']").change(preview1);
$("input[name='imageHouse2']").change(preview2);
$("input[name='imageHouse3']").change(preview3);
$("input[name='imageHouse4']").change(preview4);
$("#uploadimage1").click(adddescribe1);
$("#uploadimage2").click(adddescribe2);
$("#uploadimage3").click(adddescribe3);
$("#uploadimage4").click(adddescribe4);

var _PREVIEW_URL;

function preview1(){
    var file = this.files[0];

    // validate file size
    if(file.size > 2*1024*1024) {
        alert('Error : Kích thước ảnh quá lớn 2MB');
        return;
    }

    if(file.size < 1024) {
        alert('Error : Kích thước ảnh quá nhỏ 1kB');
        return;
    }
    
  
      // object url
    _PREVIEW_URL = URL.createObjectURL(file);

    $("#preimg1").attr('src', _PREVIEW_URL);
    $('#imageall').attr('hidden', false);
    $("#previewblock1").attr('hidden', false);
   
//*/
}

function adddescribe1(){
    $('#deshou1').html($("input[name='describeHouse1']").val());
    $('#imageone').attr('hidden', true);
    $('#imagetwo').attr('hidden', false);
    
}

function preview2(){
    var file = this.files[0];

    // validate file size
    if(file.size > 2*1024*1024) {
        alert('Error : Kích thước ảnh quá lớn 2MB');
        return;
    }

    if(file.size < 1024) {
        alert('Error : Kích thước ảnh quá nhỏ 1kB');
        return;
    }
    
  
      // object url
    _PREVIEW_URL = URL.createObjectURL(file);

    $("#preimg2").attr('src', _PREVIEW_URL);
    $("#previewblock2").attr('hidden', false);
   
//*/
}

function adddescribe2(){
    $('#deshou2').html($("input[name='describeHouse2']").val());
    $('#imagetwo').attr('hidden', true);
    $('#imagethree').attr('hidden', false);
    
}

function preview3(){
    var file = this.files[0];

    // validate file size
    if(file.size > 2*1024*1024) {
        alert('Error : Kích thước ảnh quá lớn 2MB');
        return;
    }

    if(file.size < 1024) {
        alert('Error : Kích thước ảnh quá nhỏ 1kB');
        return;
    }
    
  
      // object url
    _PREVIEW_URL = URL.createObjectURL(file);

    $("#preimg3").attr('src', _PREVIEW_URL);
    $('#imageall').attr('hidden', false);
    $("#previewblock3").attr('hidden', false);
   
//*/
}

function adddescribe3(){
    $('#deshou3').html($("input[name='describeHouse3']").val());
    $('#imagethree').attr('hidden', true);
    $('#imagefour').attr('hidden', false);
    
}

function preview4(){
    var file = this.files[0];

    // validate file size
    if(file.size > 2*1024*1024) {
        alert('Error : Kích thước ảnh quá lớn 2MB');
        return;
    }

    if(file.size < 1024) {
        alert('Error : Kích thước ảnh quá nhỏ 1kB');
        return;
    }
    
  
      // object url
    _PREVIEW_URL = URL.createObjectURL(file);

    $("#preimg4").attr('src', _PREVIEW_URL);
    $('#imageall').attr('hidden', false);
    $("#previewblock4").attr('hidden', false);
   
//*/
}

function adddescribe4(){
    $('#deshou4').html($("input[name='describeHouse4']").val());
    $('#imagefour').attr('hidden', true);

}

});






</script>


</body>
</html>
