@extends('layouts')
@section('title', 'Products')

@section('content')
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
                @foreach ($post as $value)
                    @if ($value->section_title == 'course-1')
                        <img class="card-img-top" src="{{ asset('uploads') }}/{{ $value->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $value->title }}</h5>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="card">
                @foreach ($post as $value)
                    @if ($value->section_title == 'course-2')
                        <img class="card-img-top" src="{{ asset('uploads') }}/{{ $value->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $value->title }}</h5>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="card">
                @foreach ($post as $value)
                    @if ($value->section_title == 'course-3.1')
                        <img class="card-img-top" src="{{ asset('uploads') }}/{{ $value->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center"> {{ $value->description }}</h5>
                        </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>
@endsection
