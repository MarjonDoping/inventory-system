<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('homes/images/site.png') }}">
    <title>Site Organization</title>

    <!-- Bootstrap core CSS -->
    <link href="  {{ asset('homes/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('homes/css/fontawesome.css ') }}">
    <link rel="stylesheet" href="{{ asset('homes/css/styl.css?ver=01') }}">
    <link rel="stylesheet" href="{{ asset('homes/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('homes/css/lightbox.css ') }}">

</head>

<body>

    <!-- Sub Header -->
    <div class="sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="left-content">
                        <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Urdaneta City, Pangasinan, Philippines
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="right-icons">
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100071402461224" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100071402461224" target="_blank"><i
                                        class="fa fa-google"></i></a></li>

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
                            <img src=" {{ asset('homes/images/cletoslogo.png') }}" alt="" class="logos">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ asset('home') }}" class="active">Home</a></li>
                            <li><a href="{{ asset('about') }}">About</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">News</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ asset('company') }}">Announcements</a></li>
                                    <li><a href="{{ asset('details') }}">All Articles</a></li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Teams</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ asset('teams') }}">Shop Owners</a></li>
                                    <li><a href="{{ asset('board') }}">System Programmers</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ asset('courses') }}">Products</a></li>
                            <li><a href="{{ asset('contact') }}">Contact Us</a></li>
                            <li> <a href="/admin"><i class="fa fa-user" aria-hidden="true"></i></a></li>

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

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <!-- <video autoplay muted loop id="bg-video">
          <source src=" {{ asset('homes/images/psu-vid.mp4') }} " type="video/mp4" />
      </video> -->
        <img src=" {{ asset('homes/images/bg bread.png') }}" alt="">

        <div class="video-overlay header-text text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption text-center">
                            <center>
                                <h2>
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6>Cletos bakery shop is a trusted and fully registered business in the heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </center>
    </section>
    <!-- ***** Main Banner Area End ***** -->

    <section class="our-courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Best Products We Offer Here in Cleto's Bakeshop</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="owl-courses-item owl-carousel">
                        <div class="item">
                            <img src=" {{ asset('homes/images/cake.png') }}" alt="Course One">
                            <div class="down-content">
                                <h4>Customize Cakes</h4>

                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('homes/images/cupcake.png') }}" alt="Course Two">
                            <div class="down-content">
                                <h4>Cupcakes</h4>

                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('homes/images/ensaymada.png') }}" alt="Course Two">
                            <div class="down-content">
                                <h4>Ensaymada</h4>

                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('homes/images/pandesal.png') }}" alt="Course Two">
                            <div class="down-content">
                                <h4>Pandesal</h4>

                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('homes/images/sbread.png') }}" alt="Course Two">
                            <div class="down-content">
                                <h4>Spanish Bread</h4>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <section class="upcoming-meetings" id="meetings">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Cletos Bakery shop offers</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories">
                        <h4>Latest Offers</h4>
                        <ul>
                            @if ($post)
                                @foreach ($post as $value)
                                    @if ($value->section_title == 'new')
                                        <li><a href="{{ asset('detail') }}">* {{ $value->title }}</a></li>
                                    @endif
                                @endforeach
                            @endif

                            @if ($post)
                                @foreach ($post as $value)
                                    @if ($value->section_title == 'second_section')
                                        <li><a href="{{ asset('details') }}">* {{ $value->title }}</a></li>
                                    @endif
                                @endforeach
                            @endif

                            @if ($post)
                                @foreach ($post as $value)
                                    @if ($value->section_title == 'third_section')
                                        <li><a href="{{ asset('details1') }}">* {{ $value->title }}</a></li>
                                    @endif
                                @endforeach
                            @endif

                            @if ($post)
                                @foreach ($post as $value)
                                    @if ($value->section_title == 'fourth_section')
                                        <li><a href="{{ asset('details2') }}">* {{ $value->title }}</a></li>
                                    @endif
                                @endforeach
                            @endif

                            @if ($post)
                                @foreach ($post as $value)
                                    @if ($value->section_title == 'fifth_section')
                                        <li><a href="{{ asset('details3') }}">* {{ $value->title }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                            @if ($post)
                                @foreach ($post as $value)
                                    @if ($value->section_title == 'sixth_section')
                                        <li><a href="{{ asset('details4') }}">* {{ $value->title }}</a></li>
                                    @endif
                                @endforeach
                            @endif

                        </ul>
                        <div class="main-button-red">
                            <a href="{{ asset('company') }}">View News and Updates</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        @if ($post)
                            @foreach ($post as $value)
                                @if ($value->section_title == 'new')
                                    <div class="col-lg-6">
                                        <div class="meeting-item">
                                            <div class="thumb">

                                                <a href="{{ asset('detail') }}"><img
                                                        src="{{ asset('uploads') }}/{{ $value->image }}"
                                                        alt="Welcome image"></a>
                                            </div>
                                            <div class="down-content text-center">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('detail') }}">
                                                    <h4>{{ $value->title }}</h4>
                                                </a>
                                                <div class="main-button-red">
                                                    <a href="{{ asset('detail') }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                        @if ($post)
                            @foreach ($post as $value)
                                @if ($value->section_title == 'second_section')
                                    <div class="col-lg-6">
                                        <div class="meeting-item">
                                            <div class="thumb">

                                                <a href="{{ asset('details') }}"><img
                                                        src="{{ asset('uploads') }}/{{ $value->image }}"
                                                        alt="Welcome image"></a>
                                            </div>
                                            <div class="down-content text-center">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('details') }}">
                                                    <h4>{{ $value->title }}</h4>
                                                </a>
                                                <div class="main-button-red">
                                                    <a href="{{ asset('details') }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif


                        @if ($post)
                            @foreach ($post as $value)
                                @if ($value->section_title == 'third_section')
                                    <div class="col-lg-6">
                                        <div class="meeting-item">
                                            <div class="thumb">

                                                <a href="{{ asset('details1') }}"><img
                                                        src=" {{ asset('uploads') }}/{{ $value->image }}"
                                                        alt="Online Teaching"></a>
                                            </div>
                                            <div class="down-content text-center">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('details1') }}">
                                                    <h4>{{ $value->title }}</h4>
                                                </a>
                                                <div class="main-button-red">
                                                    <a href="{{ asset('details1') }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif


                        @if ($post)
                            @foreach ($post as $value)
                                @if ($value->section_title == 'fourth_section')
                                    <div class="col-lg-6">
                                        <div class="meeting-item">
                                            <div class="thumb">

                                                <a href="{{ asset('details2') }}"><img
                                                        src=" {{ asset('uploads') }}/{{ $value->image }}"
                                                        alt="Online Teaching"></a>
                                            </div>
                                            <div class="down-content text-center">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('details2') }}">
                                                    <h4>{{ $value->title }}</h4>
                                                </a>
                                                <div class="main-button-red">
                                                    <a href="{{ asset('details2') }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif



                        @if ($post)
                            @foreach ($post as $value)
                                @if ($value->section_title == 'fifth_section')
                                    <div class="col-lg-6">
                                        <div class="meeting-item">
                                            <div class="thumb">

                                                <a href="{{ asset('details3') }}"><img
                                                        src=" {{ asset('uploads') }}/{{ $value->image }}"
                                                        alt="Online Teaching"></a>
                                            </div>
                                            <div class="down-content text-center">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('details3') }}">
                                                    <h4>{{ $value->title }}</h4>
                                                </a>
                                                <div class="main-button-red">
                                                    <a href="{{ asset('details3') }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif


                        @if ($post)
                            @foreach ($post as $value)
                                @if ($value->section_title == 'sixth_section')
                                    <div class="col-lg-6">
                                        <div class="meeting-item">
                                            <div class="thumb">

                                                <a href="{{ asset('details4') }}"><img
                                                        src=" {{ asset('uploads') }}/{{ $value->image }}"
                                                        alt="Online Teaching"></a>
                                            </div>
                                            <div class="down-content text-center">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('details4') }}">
                                                    <h4>{{ $value->title }}</h4>
                                                </a>
                                                <div class="main-button-red">
                                                    <a href="{{ asset('details4') }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif



                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



    <section class="apply-now" id="apply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item">
                                <h3>If you have Queries Feel free to message us </h3>
                                <p>If you want to order customize cakes and other products we offer you can message us
                                    here by clicking the button below</p>
                                <div class="main-button-red">
                                    <div><a href="{{ asset('contact') }}">Message us Here!</a></div>
                                </div>
                            </div>
                            <div>
                                <iframe style="border:0; width: 100%; height: 350px;"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.739230805907!2d120.5689265290526!3d15.97498865545702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913fadef6bddc7%3A0xd432f6acee88724d!2sCleto&#39;s%20Bakeshop!5e0!3m2!1sen!2sph!4v1689515755299!5m2!1sen!2sph"
                                    frameborder="0" allowfullscreen></iframe>

                            </div>
                        </div>

                    </div>
                </div>

                </article>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- <section class="services">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-service-item owl-carousel">

                        <div class="item">
                            <div class="icon">
                                <img src=" {{ asset('homes/images/1.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Excellence</h4>
                                <p>
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_carousel')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src=" {{ asset('homes/images/1.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Artistry</h4>
                                <p>
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'second_carousel')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src=" {{ asset('homes/images/1.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Freshness</h4>
                                <p>
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'third_carousel')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src=" {{ asset('homes/images/1.png') }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>Variety</h4>
                                <p>
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'fourth_carousel')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <section class="our-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2> Facts About Cleto's bakery Shop</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content ">
                                        <div class="count-digit">5th</div>
                                        <div class="count-title">Best bakeshop in urdaneta City</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">500</div>
                                        <div class="count-title">Customers in a Day</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">10500</div>
                                        <div class="count-title">Monthly Customers</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">50</div>
                                        <div class="count-title">Employees in Shop</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="video">
                        <img src="assets/images/play-icon.png" alt=""></a>
                    </div>

                </div>
            </div>

        </div>

        <!-- <div class="footer">
    <p> Project Developer</p>
    </div> -->
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
          <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
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

    <script src=" {{ asset('homes/vendor/jquery/jquery.min.js') }}"></script>
    <script src=" {{ asset('homes/vendor/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>

    <script src=" {{ asset('homes/js/isotope.min.js') }}"></script>
    <script src=" {{ asset('homes/js/owl-carousel.js') }}"></script>
    <script src=" {{ asset('homes/js/lightbox.js') }}"></script>
    <script src=" {{ asset('homes/js/tabs.js ') }}"></script>
    <script src=" {{ asset('homes/js/video.js') }}"></script>
    <script src=" {{ asset('homes/js/slick-slider.js') }}"></script>
    <script src="{{ asset('homes/js/custom.js') }}"></script>
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
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
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

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
</body>

</body>

</html>
