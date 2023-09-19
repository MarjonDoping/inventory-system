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
                <h1>Add Expenses</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('expenses-show') }}">Expenses</a>
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
                    {!! Form::open(['route' => ['expenses-create', $expenses->expenses_id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="mb-3">
                        <label class="form-label">Details: </label>
                        @php
                            $class = "form-control";

                            if($errors->any()){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::text('details', $expenses->details, ['class' => $class, 'placeholder' => 'To create details type "new"']) }}

                        @error('details')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Amount: </label>
                        @php
                            $class = "form-control";

                            if($errors->any()){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::number('amount', $expenses->amount, ['class' => $class, 'min'=>"0"]) }}

                        @error('amount')
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
