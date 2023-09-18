@extends('admin.layout')
@section('title', 'Content Management System')
@section('content')

    <main>
        <div class="head-title">
            <div class="left">
                <h1>Contact Page</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">About Contact</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">contact</a>
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
                <label class="form-label">Page :</label>
                {!! Form::text('title', 'contact', [
                    'class' => 'form-control',
                    'required' => 'required',
                    'readonly' => 'readonly',
                ]) !!}
                <span class="hws_error text-right text-danger">
                    {{ $errors->first('title') }}
                </span>
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                {!! Form::hidden('txt_name[]', 'pnum') !!}
                @if ($total_row)
                    @foreach ($page as $value)
                        @if ($value->section_title == 'pnum')
                            {!! Form::text('pnum', $value->data, ['class' => 'form-control']) !!}
                        @endif
                    @endforeach
                @else
                    {!! Form::text('pnum', '', ['class' => 'form-control']) !!}
                @endif
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label editor">Email Address:</label>
                {!! Form::hidden('txt_name[]', 'email') !!}
                @if ($total_row)
                    @foreach ($page as $value)
                        @if ($value->section_title == 'email')
                            {!! Form::text('email', $value->data, ['class' => 'form-control']) !!}
                        @endif
                    @endforeach
                @else
                    {!! Form::text('email', '', ['class' => 'form-control']) !!}
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label editor">Address:</label>
                {!! Form::hidden('txt_name[]', 'address') !!}
                @if ($total_row)
                    @foreach ($page as $value)
                        @if ($value->section_title == 'address')
                            {!! Form::text('address', $value->data, ['class' => 'form-control']) !!}
                        @endif
                    @endforeach
                @else
                    {!! Form::text('address', '', ['class' => 'form-control']) !!}
                @endif
            </div>
            <div class="mb-3">
                <label class="form-label">Facebook Page: </label>
                {!! Form::hidden('txt_name[]', 'facebook') !!}
                @if ($total_row)
                    @foreach ($page as $value)
                        @if ($value->section_title == 'facebook')
                            {!! Form::text('facebook', $value->data, ['class' => 'form-control']) !!}
                        @endif
                    @endforeach
                @else
                    {!! Form::text('facebook', '', ['class' => 'form-control']) !!}
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Cleto's Website :</label>
                {!! Form::hidden('txt_name[]', 'website') !!}
                @if ($total_row)
                    @foreach ($page as $value)
                        @if ($value->section_title == 'website')
                            {!! Form::text('website', $value->data, ['class' => 'form-control']) !!}
                        @endif
                    @endforeach
                @else
                    {!! Form::text('website', '', ['class' => 'form-control']) !!}
                @endif
            </div>


            {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
    </main>



@endsection

@push('footer-script')
@endpush
