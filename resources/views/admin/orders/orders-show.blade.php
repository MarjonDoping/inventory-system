@extends('admin.layout')
@section('title', 'Inventory Management System')


@section('content')
    <script>
        $(function() {
            $('#ordersTable').DataTable();
            $('#userOrdersTable').DataTable();
            $('#transactionsTable').DataTable();

        });
    </script>


    <main>

        <div class="container mt-3">
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

                    <div class="row mb-2">
                        <div class="col-6">
                            <h1>Orders Page</h1>
                        </div>
                        <div class="col-6 mt-2 text-end">
                            <a href="{{ route('orders-add', $order_id) }}" class="btn btn-primary text-right"><i
                                    class="fa fa-plus" aria-hidden="true"></i> Add New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="order">

            <div class="mb-5">
                <div class="container mx-auto">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="card p-3 shadow">
                                <div class="card-body mb-4">

                                    @if ($userorders->isEmpty())
                                        <center class="mt-5">
                                            <img class="w-25 img-fluid" src="/icons/emptycart.svg" alt="">
                                            <p class="pt-5 fw-bold">Order is Empty</p>
                                        </center>
                                    @else
                                        @foreach ($userorders as $userorder)
                                            <div class="card p-4">
                                                <div class="row d-flex justify-content-between align-items-center">

                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="/uploads/{{ $userorder->prod_image }}"
                                                            class="img-thumbnail" alt="....">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3s">
                                                        <span class="product-title">{{ $userorder->prod_name }}</span>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2 col-xl-2 d-flex">
                                                        <h5 class="mb-0">₱ {{ $userorder->prod_price }} </h5>
                                                    </div>
                                                    <div class="col-md-1 col-lg-1 col-xl-1 d-flex text-end">
                                                        x
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-2">

                                                        <input 
                                                        onchange="updateQty('{{ $userorder->userorders_id }}',this.value);" 
                                                        id="{{ $userorder->userorders_id }}"
                                                        name="{{ $userorder->userorders_id }}"
                                                        type="number" 
                                                        class="form-control"
                                                        value="{{ $userorder->quantity }}" max="{{ $userorder->stock }}"
                                                        min="1" />
                                                    </div>

                                                    


                                                    <div class="col-md-1 col-lg-1 col-xl-1 d-flex text-end">
                                                        <a href="{{ route('orders-delete-useorder', $userorder->userorders_id) }}"
                                                            class="text-danger"><i class="fa fa-trash"
                                                                style="font-size: 20px;" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach


                                        <div class="card p-1" style="background-color: gainsboro;">
                                            <span class="text-end">
                                                <b> Total: ₱ <span id="totalsum"></span></b>
                                                <a class="btn btn-warning ml-2"
                                                    href="{{route('orders-checkout-useorder', $order_id)}}">Checkout</a>
                                                <!-- <button type="button" data-toggle="modal" data-target="#myModal"
                                                                class="btn btn-warning ml-2">Checkout</button></p> -->
                                            </span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-5">
                <div class="row">
                    <div class="col-6">
                        <h1>Transactions</h1>
                    </div>
                </div>
                <br>

                <div class="card p-3 shadow">
                    <table id='transactionsTable' class='display' style='width:100%' class="table">
                        <thead>
                            <th>Transaction ID</th>
                            <th>Customer Name</th>
                            <th>Total Price</th>
                            <th>Date</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->transaction_id }}</td>
                                    <td>{{ $transaction->customer_name }}</td>
                                    <td>{{ $transaction->totalprice }}</td>
                                    <td>{{ $transaction->date }}</td>
                                    <td>
                                        <a href="{{ route('orders-vieworder', $transaction->order_id) }}"
                                            class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>


            </div>

            
    </main>

    

    @if ($userorders)
        <script>
            function updateQty(userOrders_id, qty) {
                
                fetch("/orders-updateqty/"+userOrders_id+"/"+qty,{
                        method: 'PUT',
                        credentials: 'include',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    })
                    .then(res => res.json())
                    .then(jsonRes => {
                        // get the element with the number of votes
                        // element.innerText = jsonRes.data;

                    });

                $.ajax({
                    type: "GET",
                    url: "/orders-getsum/<?php echo $order_id;?>",
                    data: "data",
                    success: function(data) {
                        $("#totalsum").html(parseFloat(data).toFixed(2));
                    }
                });
            }

            $(document).ready(function () {
                $.ajax({
                    type: "GET",
                    url: "/orders-getsum/<?php echo $order_id;?>",
                    data: "data",
                    success: function(data) {
                        $("#totalsum").html(parseFloat(data).toFixed(2));
                    }
                });
            });


            
        </script>
    @endif
@endsection

@push('footer-script')
@endpush
