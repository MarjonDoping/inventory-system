@extends('admin.layout')
@section('title', 'Inventory Management System')

@section('content')

    <div class="left">
        @if (session()->has('message'))
            <div class="alert alert-dismissible" style="color:green;">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <main>
        
        <div class="head-title">
            
            <div class="left">
                <h1>Add Category</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('category-show') }}">Category</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Add</a>
                    </li>
                </ul>
            </div>

        </div>




        <div class="order">
            <div class="mb-3">

                <div class="row">
                    {!! Form::open(['route' => ['category-create', $category->cat_id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="mb-3">
                        <label class="form-label">Category Name: </label>
                        @php
                            $class = "form-control";

                            if($errors->any()){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::text('cat_name', $category->cat_name, ['class' => $class, 'placeholder' => 'To create category type "new"']) }}

                        @error('cat_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                   
                    {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}
                </div>
            </div>
            {!! Form::close() !!}


    </main>
@endsection

@push('footer-script')
@endpush
