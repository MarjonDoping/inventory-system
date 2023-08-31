<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('homes/images/site.png')}}">
    <title>SITE Organization</title>

    <!-- Bootstrap core CSS -->
    <link href="  {{asset('homes/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('homes/css/fontawesome.css ')}}">
    <link rel="stylesheet" href="{{asset('homes/css/styl.css')}}">
    <link rel="stylesheet" href="{{asset('homes/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('homes/css/lightbox.css ')}}">


  </head>

<body>

   

  <!-- Sub Header -->
  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
          <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Urdaneta City, Pangasinan, Philippines</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
            <li><a href="https://www.facebook.com/profile.php?id=100071402461224" target="_blank" ><i class="fa fa-facebook text-primary"></i></a></li>
              <li><a href="https://www.facebook.com/profile.php?id=100071402461224" target="_blank"><i class="fa fa-google text-danger"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                      <img src=" {{asset('homes/images/cletoslogo.png')}}" alt="" class="logos">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                      <li><a href="{{asset('home')}}">Home</a></li>
                          <li><a href="{{asset('about')}}">About</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">News</a>
                              <ul class="sub-menu">
                              <li><a href="{{asset('company')}}">Announcements</a></li>
                              <li><a href="{{asset('details')}}">All Articles</a></li>
                              </ul>
                          </li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Teams</a>
                              <ul class="sub-menu">
                              <li><a href="{{asset('teams')}}">Shop Owners</a></li>
                                  <li><a href="{{asset('board')}}">System Programmers</a></li>
                              </ul>
                          </li>
                          <li ><a href="{{asset('courses')}}" class="active">Products</a></li>  
                          <li ><a href="{{asset('contact')}}">Contact Us</a></li>  
                          <li > <a href="/admin"><i class="fa fa-user" aria-hidden="true"></i></a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class="heading-page-c header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Products Page</h6>
          <h2>Our Products</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="p-5 meetings-page">
  <div class="card-group">
  <div class="card">
  @foreach($post as $value)
                    @if($value->section_title=='course-1')       
    <img class="card-img-top" src="{{asset('uploads')}}/{{$value->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center">{{$value->title}}</h5>
    </div>
    @endif
     @endforeach
  </div>
  <div class="card">
  @foreach($post as $value)
     @if($value->section_title=='course-2') 
    <img class="card-img-top" src="{{asset('uploads')}}/{{$value->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center">{{$value->title}}</h5>
    </div>
    @endif
     @endforeach
  </div>
  <div class="card">
  @foreach($post as $value)
                    @if($value->section_title=='course-3.1')       
    <img class="card-img-top" src="{{asset('uploads')}}/{{$value->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title text-center"> {{$value->description}}</h5>
    </div>
  </div>
  @endif
     @endforeach
</div>
  </section>

  <footer class="bg-dark text-light p-5" >

<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-12 footer-info">
      <img src=" {{asset('homes/images/cletoslogo.png')}}" alt="" height="150px" width="5px">
      </div>

      <div class="col-lg-3 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('home') }}">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('about') }}">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('company') }}">News</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('teams') }}">Teams</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('courses') }}">Products</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="{{ asset('contact') }}">Contact Us</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a >Content Management</a></li>
          <li><i class="bi bi-chevron-right"></i> <a >Inventory Management</a></li>
          <li><i class="bi bi-chevron-right"></i> <a >Product Sales</a></li>
          <li><i class="bi bi-chevron-right"></i> <a >Marketing</a></li>
          <li><i class="bi bi-chevron-right"></i> <a >Web Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start text-light" style="color:white;">
        <h4>Contact Us</h4>
        <a>
          Urdaneta City <br>
          Pangasinan 2440<br>
          Philippines<br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
</a>

      </div>

    </div>
  </div>
</div>

<div class="container text-center pt-4">
  <div class="copyright">
    &copy; Copyright <strong><span>Capstone</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by Ryan Julian</a>
  </div>
</div>
</footer>
  
  <!-- <section class="p-5 meetings-page">
  <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
  </section> -->

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src=" {{asset('homes/vendor/jquery/jquery.min.js')}}"></script>
    <script src=" {{asset('homes/vendor/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>

    <script src=" {{asset('homes/js/isotope.min.js')}}"></script>
    <script src=" {{asset('homes/js/owl-carousel.js')}}"></script>
    <script src=" {{asset('homes/js/lightbox.js')}}"></script>
    <script src=" {{asset('homes/js/tabs.js ')}}"></script>
    <script src=" {{asset('homes/js/video.js')}}"></script>
    <script src=" {{asset('homes/js/slick-slider.js')}}"></script>
    <script src="{{asset('homes/js/custom.js')}}"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>

</html>
