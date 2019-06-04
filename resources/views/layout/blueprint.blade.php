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
        	<a href="/"><img src="{{asset('img/logocompanysmall.png')}}" alt="" width="100px" height="100px" /></a>
            <h5>Nơi tìm những căn nhà ưng ý cho bạn</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            
            <a class="large blue button" href="/">Trang chủ</a>
            <a class="large blue button" href="/signin">Đăng Tin</a>
            <!--<li><a href="page-contact.htm">Liên hệ</a></li>-->
            
           
            </div>             
        </div>

      </div><!-- End Header -->
     
    <!-- Blog Content
    ================================================== --> 
    <div class="row">

        <!-- Blog Posts
        ================================================== --> 
        <div class="span8 blog">
            @yield('body')
        </div>

        <!-- Blog Sidebar
        ================================================== --> 
        <div class="span4 sidebar">
            <form action="/" method="post" accept-charset="utf-8" enctype="multipart/form-data">
           <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
            <!--Categories-->
            <h5 class="title-bg" style="margin-top: 0px">Danh Mục Tìm Kiếm</h5>
            <!--
            <ul class="post-category-list">
                <li><a href="#"><i class="icon-plus-sign"></i>Design</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Illustration</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>Tutorials</a></li>
                <li><a href="#"><i class="icon-plus-sign"></i>News</a></li>
            </ul>
        -->
        <?php $province = DB::table('province')->get(); 
        ?>
            <ul class="post-category-list">
                <li>
                <div class="center" class="icon-plus-sign">
                     <select name="provinceform" id="selectProvince" placeholder="Source Type">
                        <option value="-1">Tỉnh/Thành phố</option>
                        @foreach($province as $pro)
                        <option value="{{$pro->id}}">{{$pro->name}}</option>

                        @endforeach

                     </select>
                </div>
                </li>
                <li>
                    <div class="center">
                         <select name="districtform" id="selectDistrict"placeholder="Source Type">
                            <option value="-1">Quận/Huyện</option>
                         </select>
                    </div>
                </li>
                <li>
                    <div class="center">
                     <select name="wardform" id="selectWard" placeholder="Source Type">
                        <option value="-1">Phường/Xã</option>
                     </select>
                     </div>
                </li>
                <li>
                    <div class="center">
                     <select name="method" placeholder="Source Type">
                        <option value="-1">Hình thức thuê</option>
                        <option value="1">Thuê phòng</option>
                        <option value="3">Thuê căn hộ/ trung cư </option>
                        <option value="2">Ở Ghép</option>
                     </select>
                     </div>
                </li>
                <li>
                    <div class="center">
                     <select name="areaform" placeholder="Source Type">
                        <option value="-1">Diện tích</option>
                        <option value="1">10 - 20 m2</option>
                        <option value="2">20 - 30 m2</option>
                        <option value="3">30m2 - 50m2</option>
                        <option value="4">Lớn hơn 50m2</option>
                     </select>
                     </div>
                </li>
                <li>
                    <div class="center">
                     <select name="costform" placeholder="Source Type">
                        <option value="-1">Khoảng giá</option>
                        <option value="1">1 - 3 triệu</option>
                        <option value="2">3- 5 triệu</option>
                        <option value="3">Lớn hơn 5 triệu</option>
                     </select>
                     </div>
                </li>

                <li>
                    <div class="center">
                       <input type="submit"  class="large green button" value="Tìm kiếm">
                     </div>
                </li>

            </ul>

            <!--Search-->
        </form>
                             
        </div>

    </div>
    
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







</body>
</html>
