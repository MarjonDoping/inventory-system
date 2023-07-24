@extends('admin.layout')
@section('content')

    <main>
        <div class="head-title">
            <div class="left">
                <h1>About Page</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">About Content</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">About</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="order">
            <div class="mb-3">

                {!! Form::open(['route' => 'page-create', 'enctype' => 'multipart/form-data']) !!}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <!-- <label  class="form-label">Page :</label> -->
                {!! Form::hidden('title', 'our_company', [
                    'class' => 'form-control',
                    'required' => 'required',
                    'readonly' => 'readonly',
                ]) !!}
                <span class="hws_error text-right text-danger">
                    {{ $errors->first('title') }}
                </span>
            </div>
            <div class="mb-3">
                <label class="form-label">What is Cleto's Bakeshop:</label>
                {!! Form::hidden('txt_name[]', 'about_it') !!}
                @foreach ($page as $value)
                    @if ($value->section_title == 'about_it')
                        {!! Form::textarea('about_it', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                @endforeach
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label editor">About our Products:</label>
                {!! Form::hidden('txt_name[]', 'about_site') !!}
                @foreach ($page as $value)
                    @if ($value->section_title == 'about_site')
                        {!! Form::textarea('about_site', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                @endforeach
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label editor">Mission :</label>
                {!! Form::hidden('txt_name[]', 'mission') !!}
                @foreach ($page as $value)
                    @if ($value->section_title == 'mission')
                        {!! Form::textarea('mission', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                @endforeach
            </div>
            <div class="mb-3">
                <label class="form-label">Vision</label>
                {!! Form::hidden('txt_name[]', 'vision') !!}
                @foreach ($page as $value)
                    @if ($value->section_title == 'vision')
                        {!! Form::textarea('vision', $value->data, ['class' => 'form-control', 'required' => 'required']) !!}
                    @endif
                @endforeach
            </div>

            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    </main>



@endsection

@push('footer-script')
@endpush
