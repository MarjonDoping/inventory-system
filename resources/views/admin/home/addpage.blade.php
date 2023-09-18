@extends('admin.layout')
@section('title', 'Content Management System')
@section('content')

    <main>
        <div class="head-title">
            <div class="left">
                <h1>Homepage</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home Content</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="order">
            <div class="mb-3">
                @if (session()->has('message'))
                    <div class="alert alert-dismissible" style="color:green;">
                        {{ session('message') }}
                    </div>
                @endif

                {!! Form::open(['route' => 'page-create', 'enctype' => 'multipart/form-data']) !!}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <label for="exampleFormControlInput1" class="form-label">Page :</label>
                {!! Form::text('title', 'home', ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) !!}
                <span class="hws_error text-right text-danger">
                    {{ $errors->first('title') }}
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Homepage Title :</label>
                {!! Form::hidden('txt_name[]', 'first_title') !!}
                @foreach ($page as $value)
                    @if ($value->section_title == 'first_title')
                        {!! Form::text('first_title', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                @endforeach
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">First Carousel :</label>
                {!! Form::hidden('txt_name[]', 'first_carousel') !!}
                @foreach ($page as $value)
                    @if ($value->section_title == 'first_carousel')
                        {!! Form::textarea('first_carousel', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                @endforeach
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Second Carousel :</label>
                {!! Form::hidden('txt_name[]', 'second_carousel') !!}
                @foreach ($page as $value)
                    @if ($value->section_title == 'second_carousel')
                        {!! Form::textarea('second_carousel', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                @endforeach
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Third Carousel :</label>
                {!! Form::hidden('txt_name[]', 'third_carousel') !!}
                @foreach ($page as $value)
                    @if ($value->section_title == 'third_carousel')
                        {!! Form::textarea('third_carousel', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                @endforeach
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Fourth Carousel :</label>
                {!! Form::hidden('txt_name[]', 'fourth_carousel') !!}
                @foreach ($page as $value)
                    @if ($value->section_title == 'fourth_carousel')
                        {!! Form::textarea('fourth_carousel', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                @endforeach
            </div>

            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    </main>



@endsection

@push('footer-script')
@endpush
