@extends('layouts')
@section('title', 'System Programmers')

@section('content')


    <section class="heading-page-c header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6> This is Team Page</h6>
                    <h2>System Programmers</h2>
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

                        <div class="col-lg-12">
                            <div class="row grid">
                                <div class="col-lg-4 templatemo-item-col ">
                                    <div class="meeting-item">
                                        <div class="thumb">

                                            @if ($post)
                                                @foreach ($post as $value)
                                                    @if ($value->section_title == 'leader')
                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                        </div>
                                        <div class="down-content text-center">

                                            <a href="{{ asset('details') }}">
                                                <h4>
                                                    @if ($post)
                                                        @if ($value->section_title == 'leader')
                                                            {{ $value->title }}
                                                        @endif
                                                    @endif
                                                </h4>

                                                <a><br>
                                                    @if ($post)
                                                        @if ($value->section_title == 'leader')
                                                            {{ $value->description }}
                                                        @endif
                                                    @endif
                                                </a>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endif




                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'programmer1')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'programmer1')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'programmer1')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'programmer2')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'programmer2')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'programmer2')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'programmer3')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'programmer3')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'programmer3')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'programmer4')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'programmer4')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'programmer4')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'programmer5')
                                            <div class="col-lg-12 templatemo-item-col all">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'programmer5')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'programmer5')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'teams-au')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'teams-au')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'teams-au')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'teams-au2')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'teams-au2')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'teams-au2')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif


                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'teams-se')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'teams-se')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'teams-se')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'teams-gd1')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'teams-gd1')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'teams-gd1')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'teams-gd2')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'teams-gd2')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'teams-gd2')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'teams-exe')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'teams-exe')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'teams-exe')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'teams-ad')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'teams-ad')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'teams-ad')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'teams-muse')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'teams-muse')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @foreach ($post as $value)
                                                                    @if ($value->section_title == 'teams-muse')
                                                                        {{ $value->description }}
                                                                    @endif
                                                                @endforeach
                                                            @endif
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if ($post)
                                    @foreach ($post as $value)
                                        @if ($value->section_title == 'new')
                                            <div class="col-lg-12 templatemo-item-col all ">
                                                <div class="meeting-item">
                                                    <div class="thumb">


                                                        <a href="{{ asset('details') }}"><img
                                                                src="{{ asset('uploads') }}/{{ $value->image }}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="down-content text-center">

                                                        <a href="{{ asset('details') }}">
                                                            <h4>
                                                                @if ($post)
                                                                    @if ($value->section_title == 'new')
                                                                        {{ $value->title }}
                                                                    @endif
                                                                @endif
                                                            </h4>
                                                        </a>

                                                        <a><br>
                                                            @if ($post)
                                                                @if ($value->section_title == 'new')
                                                                    {{ $value->description }}
                                                                @endif
                                                            @endif
                                                        </a>

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
@endsection
