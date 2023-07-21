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
            <li><a href="https://www.facebook.com/profile.php?id=100071402461224" target="_blank" ><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.facebook.com/profile.php?id=100071402461224" target="_blank"><i class="fa fa-google"></i></a></li>
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
                          <li ><a href="{{asset('courses')}}">Products</a></li>  
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

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6> All Articles</h6>
          <h2>Posts</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='new')
                  
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
               
                  <a href="{{asset('details')}}" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
             
                       
                <div class="down-content">
                  <a href="{{asset('details')}}"><h4>{{$value->title}}</h4></a>
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
                  <p class="description">
                 
                  {{$value->description}}
                  </p>
                  <div class="col-lg-12">
                      <div class="share">
                      <h5>Visit:</h5>
                        <ul>
                          <li><a href="https://www.facebook.com/groups/psuurdanetasite" target="_blank">Facebook</a></li>
                          <li><a href="https://psu.edu.ph/" target="_blank">Website</a></li>
                        </ul>
                      </div>
                    </div>
                  <div class="col-lg-12">
              <div class="main-button-red">
                <a href="{{asset('home')}}">Back To Homepage</a>
              </div>
                  @endif
                        @endforeach
                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='second_section')
                  
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
               
                  <a href="{{asset('details')}}" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
             
                       
                <div class="down-content">
                  <a href="{{asset('details')}}"><h4>{{$value->title}}</h4></a>
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
                  <p class="description">
                 
                  {{$value->description}}
                  </p>
                  @endif
                        @endforeach
                
                    <div class="col-lg-12">
                      <div class="share">
                      <h5>Visit:</h5>
                        <ul>
                          <li><a href="https://www.facebook.com/groups/psuurdanetasite" target="_blank">Facebook</a></li>
                          <li><a href="https://psu.edu.ph/" target="_blank">Website</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="{{asset('home')}}">Back To Homepage</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="footer">
    <p>Marjon Doping. Project Developer. WST-3B</p>
    </div> -->
  </section>



  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='third_section')
                  
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
               
                  <a href="{{asset('details')}}" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
             
                       
                <div class="down-content">
                  <a href="{{asset('details')}}"><h4>{{$value->title}}</h4></a>
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
                  <p class="description">
                 
                  {{$value->description}}
                  </p>
                  @endif
                        @endforeach
                
                    <div class="col-lg-12">
                      <div class="share">
                      <h5>Visit:</h5>
                        <ul>
                        <li><a href="https://www.facebook.com/groups/psuurdanetasite" target="_blank">Facebook</a></li>
                          <li><a href="https://psu.edu.ph/" target="_blank">Website</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="{{asset('home')}}">Back To Homepage</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="footer">
    <p>Marjon Doping. Project Developer. WST-3B</p>
    </div> -->
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='fourth_section')
                  
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
               
                  <a href="{{asset('details')}}" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
             
                       
                <div class="down-content">
                  <a href="{{asset('details')}}"><h4>{{$value->title}}</h4></a>
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
                  <p class="description">
                 
                  {{$value->description}}
                  </p>
                  @endif
                        @endforeach
                
                    <div class="col-lg-12">
                      <div class="share">
                      <h5>Visit:</h5>
                        <ul>
                        <li><a href="https://www.facebook.com/groups/psuurdanetasite" target="_blank">Facebook</a></li>
                          <li><a href="https://psu.edu.ph/" target="_blank">Website</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="{{asset('home')}}">Back To Homepage</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="footer">
    <p>Marjon Doping. Project Developer. WST-3B</p>
    </div> -->
  </section>
  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='fifth_section')
                  
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
               
                  <a href="{{asset('details')}}" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
             
                       
                <div class="down-content">
                  <a href="{{asset('details')}}"><h4>{{$value->title}}</h4></a>
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
                  <p class="description">
                 
                  {{$value->description}}
                  </p>
                  @endif
                        @endforeach
                
                    <div class="col-lg-12">
                      <div class="share">
                      <h5>Visit:</h5>
                        <ul>
                        <li><a href="https://www.facebook.com/groups/psuurdanetasite" target="_blank">Facebook</a></li>
                          <li><a href="https://psu.edu.ph/" target="_blank">Website</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="{{asset('home')}}">Back To Homepage</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="footer">
    <p>Marjon Doping. Project Developer. WST-3B</p>
    </div> -->
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='sixth_section')
                  
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
               
                  <a href="{{asset('details')}}" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
             
                       
                <div class="down-content">
                  <a href="{{asset('details')}}"><h4>{{$value->title}}</h4></a>
                  <div class="date">
                    <h6>{!! $value->created_at !!}</h6>
                  </div>
                  <p class="description">
                 
                  {{$value->description}}
                  </p>
                  @endif
                        @endforeach
                
                    <div class="col-lg-12">
                      <div class="share">
                      <h5>Visit:</h5>
                        <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100071402461224" target="_blank">Facebook</a></li>
                          <li><a href="https://www.facebook.com/profile.php?id=100071402461224" target="_blank">Website</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="{{asset('home')}}">Back To Homepage</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
    <p>Project Developer</p>
    </div>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
<script src=" {{asset('homes/vendor/jquery/jquery.min.js')}}"></script>
    <script src=" {{asset('vendor/bootstrap/js/bootstrap.bundle.min.js ')}}"></script>

    <script src=" {{asset('js/isotope.min.js')}}"></script>
    <script src=" {{asset('js/owl-carousel.js')}}"></script>
    <script src=" {{asset('js/lightbox.js')}}"></script>
    <script src=" {{asset('js/tabs.js ')}}"></script>
    <script src=" {{asset('js/video.js')}}"></script>
    <script src=" {{asset('js/slick-slider.js')}}"></script>
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
