@extends('admin.layout')
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
                <h1>Add Order</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('orders-show') }}">Orders</a>
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
                    {!! Form::open(['route' => ['orders-add', $order_id], 'enctype' => 'multipart/form-data']) !!}

                    <div class="mb-3">
                        <label class="form-label">Products: </label>
                        @php
                            $class = "form-select";
                            if($errors->has('prod_id')){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::select('prod_id', $products, '', ['class' => $class]) }}

                        @error('prod_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Quantity: </label>
                        @php
                            $class = "form-control";

                            if($errors->has('quantity')){
                                $class = $class . " is-invalid";
                            }
                        @endphp
                        {{ Form::number('quantity', '1', ['class' => $class, 'placeholder' => '100', 'id' => 'quantity']) }}

                        @error('quantity')
                            <p class="text-danger" id="m-quantity">{{ $message }}</p>
                        @enderror
                    </div>

                    {{ Form::submit('Add', ['class' => 'btn btn-primary']) }}
                </div>
            </div>
            {!! Form::close() !!}
        </div>


    </main>

    <script>
        var doc = document;

        doc.getElementById('quantity').addEventListener('click', function(e){
            e.preventDefault();
            this.classList.remove('is-invalid');
        });

        doc.getElementById('quantity').addEventListener('change', function (ev) { 
            clear(ev, 'm-quantity');
        });

        function clear(ev, id){
            ev.preventDefault();
            doc.getElementById(id).style.display = 'none';
        }

    </script>
@endsection

@push('footer-script')
@endpush
