@extends('layout.blueprint')
@section('body')
            <!-- Blog Post 1 -->
            <article>
                <h3 class="title-bg"><a href="#">A subject that is beautiful in itself</a></h3>
                <div class="post-content">
                    <div class="slideshow-container">

                        <div class="mySlides ">
                          <div class="numbertext">1 / 3</div>
                          <img class="imageshow" src="img/logocompany.PNG" >
                          <div class="text">Caption Text</div>
                        </div>

                        <div class="mySlides ">
                          <div class="numbertext">2 / 3</div>
                          <img class="imageshow" src="img/logocompany.PNG" >
                          <div class="text">Caption Two</div>
                        </div>

                        <div class="mySlides">
                          <div class="numbertext">3 / 3</div>
                          <img class="imageshow" src="img/sample.jpg" >
                          <div class="text">Caption Three</div>
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        <br>

                        <div style="text-align:center">
                          <span class="dot" onclick="currentSlide(1)"></span> 
                          <span class="dot" onclick="currentSlide(2)"></span> 
                          <span class="dot" onclick="currentSlide(3)"></span> 
                        </div>
                    
                    <div class="post-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

                        <p class="well"><a href="#" rel="tooltip" title="An important message">Proin tristique</a> tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

                       <p> Nam sit amet felis non lorem faucibus rhoncus vitae id dui. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>

                       <blockquote>
                            Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat.
                       </blockquote>

                       <p>Nam sit amet felis non lorem faucibus rhoncus vitae id dui.Nulla iaculis mattis lorem, quis gravida nunc iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.</p>
                    </div>

                    <div class="post-summary-footer">
                        <ul class="post-data">
                            <li><i class="icon-calendar"></i> 09/04/15</li>
                            <li><i class="icon-user"></i> <a href="#">Admin</a></li>
                            <li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>
                            <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a></li>
                        </ul>
                    </div>
                </div>
            </article>

            <!-- About the Author -->
            <section class="post-content">
                <div class="post-body about-author">
                    <img src="img/author-avatar.jpg" alt="author">
                    <h4>About Nathan Brown</h4>
                    Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna. Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus rhoncus vitae id dui.
                </div>
            </section>

        <!-- Post Comments
        ================================================== --> 
            <section class="comments">
                <h4 class="title-bg"><a name="comments"></a>5 Comments so far</h4>
               <ul>
                    <li>
                        <img src="img/user-avatar.jpg" alt="Image" />
                        <span class="comment-name">John Doe</span>
                        <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                        <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                        <!-- Reply -->
                        <ul>
                            <li>
                                <img src="img/user-avatar.jpg" alt="Image" />
                                <span class="comment-name">Jason Doe</span>
                                <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                                <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                                </li>
                             <li>
                                <img src="img/user-avatar.jpg" alt="Image" />
                                <span class="comment-name">Jason Doe</span>
                                <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                                <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                                </li>
                         </ul>
                    </li>
                    <li>
                        <img src="img/user-avatar.jpg" alt="Image" />
                        <span class="comment-name">John Doe</span>
                        <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                        <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                    </li>
                    <li>
                        <img src="img/user-avatar.jpg" alt="Image" />
                        <span class="comment-name">John Doe</span>
                        <span class="comment-date">March 15, 2015 | <a href="#">Reply</a></span>
                        <div class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis, ligula quis sagittis euismod, odio ante molestie tortor, eget ullamcorper lacus nunc a ligula. Donec est lacus, aliquet in interdum id, rutrum ac tellus. Ut rutrum, justo et lobortis commodo, est metus ornare tortor, vitae luctus turpis leo sed magna. In leo dolor, suscipit non mattis in.</div>
                    </li>
                    
               </ul>
            
                <!-- Comment Form -->
                <div class="comment-form-container">
                    <h6>Leave a Comment</h6>
                    <form action="#" id="comment-form">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input class="span4" id="prependedInput" size="16" type="text" placeholder="Name">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span>
                            <input class="span4" id="prependedInput" size="16" type="text" placeholder="Email Address">
                        </div>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-globe"></i></span>
                            <input class="span4" id="prependedInput" size="16" type="text" placeholder="Website URL">
                        </div>
                        <textarea class="span6"></textarea>
                        <div class="row">
                            <div class="span2">
                                <input type="submit" class="btn btn-inverse" value="Post My Comment">
                            </div>
                        </div>
                    </form>
                </div>
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


@endsection