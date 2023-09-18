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
                <h1>Edit Ingredient</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('ingredients-show') }}">Ingredients</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Edit</a>
                    </li>
                </ul>
            </div>

        </div>




        <div class="order">
            <div class="mb-3">

                <div class="row">
                    {!! Form::open(['route' => ['ingredients-save', $ingredients->ingredient_id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="mb-3">
                        <label class="form-label">Ingredient: </label>
                        @php
                            $class = "form-control";

                            if($errors->has('ingredient_name')){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::text('ingredient_name', $ingredients->ingredient_name, ['class' => $class, 'placeholder' => 'To create ingredient type "new"']) }}

                        @error('ingredient_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stocks: </label>
                        @php
                            $class = "form-control";

                            if($errors->has('stocks')){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::number('stocks', $ingredients->stocks, ['class' => $class, 'min'=>"0"]) }}

                        @error('stocks')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Amount: </label>
                        @php
                            $class = "form-control";

                            if($errors->has('amount')){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::number('amount', $ingredients->amount, ['class' => $class, 'min'=>"0", 'step'=>"any"]) }}

                        @error('amount')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                </div>
            </div>
            {!! Form::close() !!}


    </main>
@endsection

@push('footer-script')
@endpush
