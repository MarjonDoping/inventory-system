@extends('layouts')
@section('title', 'All Articles')

@section('content')
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

                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'new')
                                            <div class="date">
                                                <h6>{!! $value->created_at !!}</h6>
                                            </div>

                                            <!-- <a href="{{ asset('details') }}" class="img_detail"><img src="{{ asset('uploads') }}/{{ $value->image }}" alt=""></a> -->
                                </div>


                                <div class="down-content">
                                    <a href="{{ asset('details') }}">
                                        <h4>{{ $value->title }}</h4>
                                    </a>
                                    <div class="date">
                                        <h6>{!! $value->created_at !!}</h6>
                                    </div>
                                    <p class="description">

                                        {{ $value->description }}
                                    </p>
                                    <div class="col-lg-12">
                                        <div class="share">
                                            <h5>Visit:</h5>
                                            <ul>
                                                <li><a href="https://www.facebook.com/profile.php?id=100071402461224"
                                                        target="_blank"><i class="fa fa-facebook text-primary"></i></a></li>
                                                <li><a href="https://www.facebook.com/profile.php?id=100071402461224"
                                                        target="_blank"><i class="fa fa-google text-danger"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="main-button-red">
                                            <a href="{{ asset('home') }}">Back To Homepage</a>
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

                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'second_section')
                                            <div class="date">
                                                <h6>{!! $value->created_at !!}</h6>
                                            </div>

                                            <!-- <a href="{{ asset('details') }}" class="img_detail"><img src="{{ asset('uploads') }}/{{ $value->image }}" alt=""></a> -->
                                </div>


                                <div class="down-content">
                                    <a href="{{ asset('details') }}">
                                        <h4>{{ $value->title }}</h4>
                                    </a>
                                    <div class="date">
                                        <h6>{!! $value->created_at !!}</h6>
                                    </div>
                                    <p class="description">

                                        {{ $value->description }}
                                    </p>
                                    @endif
                                    @endforeach

                                    <div class="col-lg-12">
                                        <div class="share">
                                            <h5>Visit:</h5>
                                            <ul>
                                                <li><a href="https://www.facebook.com/profile.php?id=100071402461224"
                                                        target="_blank"><i class="fa fa-facebook text-primary"></i></a></li>
                                                <li><a href="https://www.facebook.com/profile.php?id=100071402461224"
                                                        target="_blank"><i class="fa fa-google text-danger"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="{{ asset('home') }}">Back To Homepage</a>
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

                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'third_section')
                                            <div class="date">
                                                <h6>{!! $value->created_at !!}</h6>
                                            </div>

                                            <!-- <a href="{{ asset('details') }}" class="img_detail"><img src="{{ asset('uploads') }}/{{ $value->image }}" alt=""></a> -->
                                </div>


                                <div class="down-content">
                                    <a href="{{ asset('details') }}">
                                        <h4>{{ $value->title }}</h4>
                                    </a>
                                    <div class="date">
                                        <h6>{!! $value->created_at !!}</h6>
                                    </div>
                                    <p class="description">

                                        {{ $value->description }}
                                    </p>
                                    @endif
                                    @endforeach

                                    <div class="col-lg-12">
                                        <div class="share">
                                            <h5>Visit:</h5>
                                            <ul>
                                                <li><a href="https://www.facebook.com/profile.php?id=100071402461224"
                                                        target="_blank"><i class="fa fa-facebook text-primary"></i></a></li>
                                                <li><a href="https://www.facebook.com/profile.php?id=100071402461224"
                                                        target="_blank"><i class="fa fa-google text-danger"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="{{ asset('home') }}">Back To Homepage</a>
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

                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'fourth_section')
                                            <div class="date">
                                                <h6>{!! $value->created_at !!}</h6>
                                            </div>

                                            <!-- <a href="{{ asset('details') }}" class="img_detail"><img src="{{ asset('uploads') }}/{{ $value->image }}" alt=""></a> -->
                                </div>


                                <div class="down-content">
                                    <a href="{{ asset('details') }}">
                                        <h4>{{ $value->title }}</h4>
                                    </a>
                                    <div class="date">
                                        <h6>{!! $value->created_at !!}</h6>
                                    </div>
                                    <p class="description">

                                        {{ $value->description }}
                                    </p>
                                    @endif
                                    @endforeach

                                    <div class="col-lg-12">
                                        <div class="share">
                                            <h5>Visit:</h5>
                                            <ul>
                                                <li><a href="https://www.facebook.com/profile.php?id=100071402461224"
                                                        target="_blank"><i class="fa fa-facebook text-primary"></i></a>
                                                </li>
                                                <li><a href="https://www.facebook.com/profile.php?id=100071402461224"
                                                        target="_blank"><i class="fa fa-google text-danger"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="{{ asset('home') }}">Back To Homepage</a>
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

                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'fifth_section')
                                            <div class="date">
                                                <h6>{!! $value->created_at !!}</h6>
                                            </div>

                                            <!-- <a href="{{ asset('details') }}" class="img_detail"><img src="{{ asset('uploads') }}/{{ $value->image }}" alt=""></a> -->
                                </div>


                                <div class="down-content">
                                    <a href="{{ asset('details') }}">
                                        <h4>{{ $value->title }}</h4>
                                    </a>
                                    <div class="date">
                                        <h6>{!! $value->created_at !!}</h6>
                                    </div>
                                    <p class="description">

                                        {{ $value->description }}
                                    </p>
                                    @endif
                                    @endforeach

                                    <div class="col-lg-12">
                                        <div class="share">
                                            <h5>Visit:</h5>
                                            <ul>
                                                <li><a href="https://www.facebook.com/profile.php?id=100071402461224"
                                                        target="_blank"><i class="fa fa-facebook text-primary"></i></a>
                                                </li>
                                                <li><a href="https://www.facebook.com/profile.php?id=100071402461224"
                                                        target="_blank"><i class="fa fa-google text-danger"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="{{ asset('home') }}">Back To Homepage</a>
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

                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'sixth_section')
                                            <div class="date">
                                                <h6>{!! $value->created_at !!}</h6>
                                            </div>

                                            <a href="{{ asset('details') }}" class="img_detail"><img
                                                    src="{{ asset('uploads') }}/{{ $value->image }}" alt=""></a>
                                </div>


                                <div class="down-content">
                                    <a href="{{ asset('details') }}">
                                        <h4>{{ $value->title }}</h4>
                                    </a>
                                    <div class="date">
                                        <h6>{!! $value->created_at !!}</h6>
                                    </div>
                                    <p class="description">

                                        {{ $value->description }}
                                    </p>
                                    @endif
                                    @endforeach

                                    <!-- <div class="col-lg-12">
                        <div class="share">
                        <h5>Visit:</h5>
                          <ul>
                          <li><a href="https://www.facebook.com/profile.php?id=100071402461224" target="_blank">Facebook</a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100071402461224" target="_blank">Website</a></li>
                          </ul>
                        </div>
                      </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-12">
                <div class="main-button-red">
                  <a href="{{ asset('home') }}">Back To Homepage</a>
                </div>
              </div> -->
                </div>
            </div>
        </div>
        </div>

    </section>
@endsection
