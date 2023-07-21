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

  

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
        
<br>
    <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-1')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
              
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
    <br>
   
    
    @foreach($post as $value)
     @if($value->section_title=='course-2')  
    <div class="meeting-single-item">
                <div class="thumb"> 
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>               
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 
                 <br>
                 <br>
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
     <br>
  

     <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-3')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
         
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach

     

     

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
        
<br>
    <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-3.1')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
               
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
    <br>
   
    
    @foreach($post as $value)
     @if($value->section_title=='course-3.2')  
    <div class="meeting-single-item">
                <div class="thumb"> 
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>               
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 
                 
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
     <br>
  

     <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-4')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
              
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach

     

     

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
                    @if($value->section_title=='course-5')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
             
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
    <br>
   
    
    @foreach($post as $value)
     @if($value->section_title=='course-6')  
    <div class="meeting-single-item">
                <div class="thumb"> 
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>               
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 
                 
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
     <br>
 
     <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-7')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
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
        
<br>
    <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-8')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
              
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
    <br>
 
    
    @foreach($post as $value)
     @if($value->section_title=='course-9')  
    <div class="meeting-single-item">
                <div class="thumb"> 
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>               
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 
                
                 <br>
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
     <br>
   

     <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-10')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
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
        
<br>
    <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-11')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
    <br>

    
    @foreach($post as $value)
     @if($value->section_title=='course-12')  
    <div class="meeting-single-item">
                <div class="thumb"> 
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>               
                  <p class="text-center">
                  {{$value->description}}
                  </p>
               
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach

    <br>

     <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-13')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
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
                    @if($value->section_title=='course-14')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 <br>
                 <br>
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
    <br>
 
    
    @foreach($post as $value)
     @if($value->section_title=='course-15')  
    <div class="meeting-single-item">
                <div class="thumb"> 
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>               
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 
                 
                
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
     <br>
  

     <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-16')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
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
                    @if($value->section_title=='course-17')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 <br>
                 <br>
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
    
    
    @foreach($post as $value)
     @if($value->section_title=='course-18')  
    <div class="meeting-single-item">
                <div class="thumb"> 
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>               
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                 
           
               
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
    


     <div class="meeting-single-item">
                <div class="thumb">
                  
                @foreach($post as $value)
                    @if($value->section_title=='course-19')       
                <div class="down-content text-center">
                  <a href="meeting-details.html"><h4>{{$value->title}}</h4></a>
                  <p class="text-center">
                  {{$value->description}}
                  </p>
                
                  <a href="meeting-details.html" class="img_detail"><img src="{{asset('uploads')}}/{{$value->image}}" alt=""></a>
                </div>
               
                </div>    
      </div>
    </div>
    </div>
    @endif
     @endforeach
    <div class="footer">
    <p>Project Developer</p>
    </div>
  </section>
  


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
