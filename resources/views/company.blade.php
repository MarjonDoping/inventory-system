@extends('layouts')
@section('title', 'Announcements')

@section('content')

    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Latest Updates</h6>
                    <h2>Announcements</h2>
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

                        </div>
                        @if ($post)
                            @foreach ($post as $value)
                                @if ($value->section_title == 'new')
                                    <div class="col-lg-12 templatemo-item-col all imp">
                                        <div class="meeting-item">
                                            <div class="thumb">


                                                <a href="{{ asset('detail') }}"><img
                                                        src="{{ asset('uploads') }}/{{ $value->image }}" alt=""></a>
                                            </div>
                                            <div class="down-content">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('detail') }}">
                                                    <h4>
                                                        @if ($post)
                                                            @if ($value->section_title == 'new')
                                                                {{ $value->title }}
                                                            @endif
                                                        @endif
                                                    </h4>
                                                </a>

                                                <!-- <p>
                            @if ($post)
    @foreach ($post as $value)
    @if ($value->section_title == 'second_section')
    {{ $value->description }}
    @endif
    @endforeach
    @endif
                            </p> -->
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
                                    <div class="col-lg-12 templatemo-item-col all imp">
                                        <div class="meeting-item">
                                            <div class="thumb">


                                                <a href="{{ asset('details') }}"><img
                                                        src="{{ asset('uploads') }}/{{ $value->image }}" alt=""></a>
                                            </div>
                                            <div class="down-content">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('details') }}">
                                                    <h4>
                                                        @if ($post)
                                                            @foreach ($post as $value)
                                                                @if ($value->section_title == 'second_section')
                                                                    {{ $value->title }}
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </h4>
                                                </a>

                                                <!-- <p>
                            @if ($post)
    @foreach ($post as $value)
    @if ($value->section_title == 'second_section')
    {{ $value->description }}
    @endif
    @endforeach
    @endif
                            </p> -->
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
                                    <div class="col-lg-4 templatemo-item-col all soon">
                                        <div class="meeting-item">
                                            <div class="thumb">

                                                <a href="{{ asset('details') }}"><img
                                                        src="{{ asset('uploads') }}/{{ $value->image }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="down-content">
                                                <!-- <div class="date">
                                              <h6>Nov <span>16</span></h6>
                                            </div> -->
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('details') }}">
                                                    <h4>
                                                        @if ($post)
                                                            @foreach ($post as $value)
                                                                @if ($value->section_title == 'third_section')
                                                                    {{ $value->title }}
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </h4>
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
                                    <div class="col-lg-12 templatemo-item-col all imp">
                                        <div class="meeting-item">
                                            <div class="thumb">


                                                <a href="{{ asset('details') }}"><img
                                                        src="{{ asset('uploads') }}/{{ $value->image }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="down-content">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('details') }}">
                                                    <h4>
                                                        @if ($post)
                                                            @foreach ($post as $value)
                                                                @if ($value->section_title == 'fourth_section')
                                                                    {{ $value->title }}
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </h4>
                                                </a>

                                                <!-- <p>
                            @if ($post)
    @foreach ($post as $value)
    @if ($value->section_title == 'second_section')
    {{ $value->description }}
    @endif
    @endforeach
    @endif
                            </p> -->
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
                                    <div class="col-lg-12 templatemo-item-col all ">
                                        <div class="meeting-item">
                                            <div class="thumb">


                                                <a href="{{ asset('details') }}"><img
                                                        src="{{ asset('uploads') }}/{{ $value->image }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="down-content">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('details') }}">
                                                    <h4>
                                                        @if ($post)
                                                            @foreach ($post as $value)
                                                                @if ($value->section_title == 'fifth_section')
                                                                    {{ $value->title }}
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </h4>
                                                </a>

                                                <!-- <p>
                            @if ($post)
    @foreach ($post as $value)
    @if ($value->section_title == 'second_section')
    {{ $value->description }}
    @endif
    @endforeach
    @endif
                            </p> -->
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
                                    <div class="col-lg-12 templatemo-item-col all ">
                                        <div class="meeting-item">
                                            <div class="thumb">


                                                <a href="{{ asset('details') }}"><img
                                                        src="{{ asset('uploads') }}/{{ $value->image }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="down-content">
                                                <div class="date">
                                                    <h6>{!! $value->created_at !!}</h6>
                                                </div>
                                                <a href="{{ asset('details') }}">
                                                    <h4>
                                                        @if ($post)
                                                            @foreach ($post as $value)
                                                                @if ($value->section_title == 'sixth_section')
                                                                    {{ $value->title }}
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    </h4>
                                                </a>

                                                <!-- <p>
                            @if ($post)
    @foreach ($post as $value)
    @if ($value->section_title == 'second_section')
    {{ $value->description }}
    @endif
    @endforeach
    @endif
                            </p> -->
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

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="card text-start">
                        <div class="card-body px-5">
                            <hr>
                            @foreach ($feedbacks as $feedback)

                            @php
                                if($feedback->name == "NULL" || $feedback->name === NULL){
                                    $feedback->name = "Anonymous";
                                }
                            @endphp
                                <figure>
                                    <blockquote class="blockquote">
                                        <p>{{ $feedback->message }}</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer"><cite title="Source Title">{{ $feedback->name }}</cite>
                                    </figcaption>
                                </figure>
                                <hr>
                            @endforeach

                            <figure>
                                <blockquote class="blockquote">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus vel veritatis
                                        dignissimos animi commodi, placeat error earum nulla sequi voluptates corrupti fuga
                                        nesciunt necessitatibus aspernatur quo recusandae laborum eum pariatur!</p>
                                </blockquote>
                                <figcaption class="blockquote-footer"><cite title="Source Title">Anonymous</cite>
                                </figcaption>
                            </figure>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card w-100 mx-auto">
                        <div class="card-body p-5">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form action="{{ route('announcement.feedback') }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label class="form-label" for="name">Name</label>
                                    <input type="text" name="name" class="form-control">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="row mb-3">
                                    <label class="form-label" for="message">Message<span
                                            class="text-danger">*</span></label>
                                    <textarea name="message" id="" cols="30" rows="5" class="form-control"></textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <div class="row mt-4">
                                    <button class="btn btn-primary">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
