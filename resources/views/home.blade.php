@extends('layouts')
@section('title', 'Home')

@section('content')

    <section class="main-banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"
                    aria-label="Slide 8"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"
                    aria-label="Slide 9"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"
                    aria-label="Slide 10"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="vh-100 img-fluid" style="object-fit: cover;" src="{{ asset('homes/images/bg bread.png') }}"
                        alt="...">
                    <div class="carousel-caption">
                        <div class="caption">
                            <center>
                                <h2 class="my-5">
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6 class="my-5">Cletos bakery shop is a trusted and fully registered business in the
                                    heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red my-5">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="vh-100 img-fluid" style="object-fit: cover;" src="{{ asset('homes/images/pandesal.png') }}"
                        alt="...">
                    <div class="carousel-caption">
                        <div class="caption">
                            <center>
                                <h2 class=" my-5">
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6 class=" my-5">Cletos bakery shop is a trusted and fully registered business in the
                                    heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red my-5">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="vh-100 img-fluid" style="object-fit: cover;" src="{{ asset('homes/images/sbread.png') }}"
                        alt="...">
                    <div class="carousel-caption">
                        <div class="caption">
                            <center>
                                <h2 class=" my-5">
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6 class="my-5">Cletos bakery shop is a trusted and fully registered business in the
                                    heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red my-5">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>

                            </center>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="vh-100 img-fluid" style="object-fit: cover;" src="{{ asset('homes/images/carousel4.jpg') }}"
                        alt="...">
                    <div class="carousel-caption">
                        <div class="caption">
                            <center>
                                <h2 class=" my-5">
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6 class=" my-5">Cletos bakery shop is a trusted and fully registered business in the
                                    heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red my-5">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="vh-100 img-fluid" style="object-fit: cover;"
                        src="{{ asset('homes/images/carousel5.jpg') }}" alt="...">
                    <div class="carousel-caption">
                        <div class="caption">
                            <center>
                                <h2 class=" my-5">
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6 class=" my-5">Cletos bakery shop is a trusted and fully registered business in the
                                    heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red my-5">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="vh-100 img-fluid" style="object-fit: cover;"
                        src="{{ asset('homes/images/carousel6.jpg') }}" alt="...">
                    <div class="carousel-caption">
                        <div class="caption">
                            <center>
                                <h2 class=" my-5">
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6 class=" my-5">Cletos bakery shop is a trusted and fully registered business in the
                                    heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red my-5">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="vh-100 img-fluid" style="object-fit: cover;"
                        src="{{ asset('homes/images/carousel7.jpg') }}" alt="...">
                    <div class="carousel-caption">
                        <div class="caption">
                            <center>
                                <h2 class=" my-5">
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6 class=" my-5">Cletos bakery shop is a trusted and fully registered business in the
                                    heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red my-5">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="vh-100 img-fluid" style="object-fit: cover;"
                        src="{{ asset('homes/images/carousel8.jpg') }}" alt="...">
                    <div class="carousel-caption">
                        <div class="caption">
                            <center>
                                <h2 class=" my-5">
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6 class=" my-5">Cletos bakery shop is a trusted and fully registered business in the
                                    heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red my-5">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="vh-100 img-fluid" style="object-fit: cover;"
                        src="{{ asset('homes/images/carousel9.jpg') }}" alt="...">
                    <div class="carousel-caption">
                        <div class="caption">
                            <center>
                                <h2 class=" my-5">
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6 class=" my-5">Cletos bakery shop is a trusted and fully registered business in the
                                    heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red my-5">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="vh-100 img-fluid" style="object-fit: cover;"
                        src="{{ asset('homes/images/carousel10.jpg') }}" alt="...">
                    <div class="carousel-caption">
                        <div class="caption">
                            <center>
                                <h2 class=" my-5">
                                    @if ($home)
                                        @foreach ($home as $value)
                                            @if ($value->section_title == 'first_title')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </h2>
                                <h6 class=" my-5">Cletos bakery shop is a trusted and fully registered business in the
                                    heart of
                                    Urdaneta City </h6>

                                <div class="main-button-red my-5">
                                    <div><a href="{{ asset('contact') }}">Message Us!</a></div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>



    <!-- ***** Main Banner Area Start ***** -->
    {{-- <section class="section main-banner" id="top" data-section="section1">
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
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ***** Main Banner Area End ***** -->





    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner mt-0">
        <!-- <video autoplay muted loop id="bg-video">
                                                              <source src=" {{ asset('homes/images/psu-vid.mp4') }} " type="video/mp4" />
                                                          </video> -->
        <img src=" {{ asset('homes/images/blight2.png') }}" alt="">

        <div class="video-overlay header-text text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="caption text-center">
                            <video width="90%" controls>
                                <source src="{{ asset('homes/videos/bakery.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

            <!-- <div class="row">
                                                                                                    <div class="col-lg-12">
                                                                                                        <div class="section-heading">
                                                                                                            <h2>Cletos Bakery shop offers</h2>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-lg-12">
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
                                                                                                    </div> -->

            <div class="col-lg-12">
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



@endsection
