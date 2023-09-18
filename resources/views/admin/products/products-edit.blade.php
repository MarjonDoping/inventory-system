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
                <h1>Edit Products</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('category-show') }}">Products</a>
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
                    {!! Form::open(['route' => ['products-save', $products->prod_id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="mb-3">
                        <label class="form-label">Category: </label>
                        @php
                            $class = "form-select";

                            if($errors->has('cat_id')){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::select('cat_id', $categories, $products->cat_id, ['class' => $class]) }}

                        @error('cat_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name: </label>
                        @php
                            $class = "form-control";

                            if($errors->has('prod_name')){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::text('prod_name', $products->prod_name, ['class' => $class, 'placeholder' => 'To create product type "new"', 'id' => 'prod_name']) }}

                        @error('prod_name')
                            <p class="text-danger" id='m-prod_name'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Price: </label>
                        @php
                            $class = "form-control";

                            if($errors->has('prod_price')){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::number('prod_price', $products->prod_price, ['class' => $class, 'placeholder' => '100.00', 'id' => 'prod_price']) }}

                        @error('prod_price')
                            <p class="text-danger" id="m-prod_price">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        @php
                            $class = "form-control";

                            if($errors->has('prod_image')){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        <div class="mb-3">
                            <label class="form-label">Upload Image: </label>
                            @if ($products->prod_image)
                                <img src="{{ url('uploads') }}/{{ $products->prod_image }}" style="height: 100px;width: 100px;">
                            @endif
                            {{ Form::hidden('old_image', $products->prod_image) }}
                            {!! Form::file('prod_image', ['class' => $class, 'id' => 'file']) !!}
                        </div>

                        @error('prod_image')
                            <p class="text-danger" id='m-file'>{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stock: </label>
                        @php
                            $class = "form-control";

                            if($errors->has('stock')){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::number('stock', $products->stock, ['class' => $class, 'placeholder' => '100.00', 'id' => 'stock']) }}

                        @error('stock')
                            <p class="text-danger" id='m-stock'>{{ $message }}</p>
                        @enderror
                    </div>

                   
                    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                </div>
            </div>
            {!! Form::close() !!}
        </div>

    </main>
    <script>
        var doc = document;

        doc.getElementById('prod_name').addEventListener('click', function(e){
            e.preventDefault();
            this.classList.remove('is-invalid');
        });

        doc.getElementById('prod_price').addEventListener('click', function(e){
            e.preventDefault();
            this.classList.remove('is-invalid');
        });

        doc.getElementById('file').addEventListener('click', function(e){
            this.classList.remove('is-invalid');
        });

        doc.getElementById('stock').addEventListener('click', function(e){
            e.preventDefault();
            this.classList.remove('is-invalid');
        });

        doc.getElementById('prod_name').addEventListener('change', function (ev) { 
            clear(ev, 'm-prod_name');
        });

        doc.getElementById('prod_price').addEventListener('change', function (ev) { 
            clear(ev, 'm-prod_price');
        });

        doc.getElementById('file').addEventListener('change', function (ev) { 
            clear(ev, 'm-file');
        });

        doc.getElementById('stock').addEventListener('change', function (ev) { 
            clear(ev, 'm-stock');
        });

        function clear(ev, id){
            ev.preventDefault();
            doc.getElementById(id).style.display = 'none';
        }

    </script>
@endsection

@push('footer-script')
@endpush
