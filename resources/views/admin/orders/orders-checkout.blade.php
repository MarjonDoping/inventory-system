@extends('admin.layout')
@section('content')
    <main>

        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-12">
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-10 mx-auto">
                    <div class="container">
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-center py-2" style="background-color: #F67211;"> Checkout</h5>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-10 mx-auto">
                                    <form action="{{ route('orders-placeorder-useorder') }}" method="post">
                                        @csrf
                                        @foreach ($userorders as $userorder)
                                            <div class="card w-100 p-4 my-1">
                                                <div class="row">
                                                    <div class="col-md-2 col-lg-2 col-xl-3">
                                                        <img src="/uploads/{{$userorder->prod_image}}" class="img-thumbnail"
                                                            alt="....">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-7 ">
                                                        <span class="product-title">{{$userorder->prod_name}}</span>
                                                        <p><span class="text-muted">Pre Order </span></p>
                                                        <p><span class="text-muted">₱ {{$userorder->prod_price}}</span></p>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 d-flex text-end">
                                                        <span> x{{$userorder->quantity}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                        <div class="col">
                                            <div class="row d-flex justify-content-between align-items-center">

                                                <hr class="page-hr2 mb-2">
                                                <div class="col-md-2 col-lg-2 col-xl-6 text-start">
                                                    <span class="product-title">Order Total ({{count($userorders)}}
                                                        item/s):</span>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-6  text-end">
                                                    <span class="product-price">₱ {{number_format((float)$sum, 2, '.', '')}}</span>
                                                </div>
                                                <hr class="page-hr2 mt-2">
                                            </div>
                                            <div class="row">
                                                <input type="hidden" name="order_id" value="{{$order_id}}">
                                                <input type="hidden" name="totalprice" value="{{number_format((float)$sum, 2, '.', '')}}">

                                                <div class="col-12 p-3" style="background-color:whitesmoke;">
                                                    <label class="form-label" for="">Customer Name</label>
                                                    <input type="text" class="form-control" name="customer_name">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col text-end mb-3 me-5">
                                    <a href="{{route('orders-show')}}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-warning">Place Order</button>
                                </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </main>


@endsection

@push('footer-script')
@endpush
