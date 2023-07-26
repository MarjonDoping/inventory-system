@extends('admin.layout')
@section('content')
    <main>

        <div class="container"  >
            <div class="row">
                <div class="col-md-10 mx-auto" id="printableArea" >
                    <div class="container mt-5">
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="text-center py-2" style="background-color: #F67211;"> Order Details</h5>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col-10 mx-auto">
                                    <div class="row my-3">
                                        <div class="col-12">Customer Name: {{$customer_name}}</div>
                                        <div class="col-12">Date: {{$date}}</div>
                                    </div>
                                        @foreach ($userorders as $userorder)
                                            <div class="card w-100 p-4 my-1">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img src="/uploads/{{$userorder->prod_image}}" class="img-thumbnail img-fluid"
                                                            alt="....">
                                                    </div>
                                                    <div class="col-5">
                                                        <span class="product-title">{{$userorder->prod_name}}</span>
                                                        <p><span class="text-muted">Pre Order </span></p>
                                                        <p><span class="text-muted">₱ {{$userorder->prod_price}}</span></p>
                                                    </div>
                                                    <div class="col-3 text-center">
                                                        <span> x{{$userorder->quantity}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                        <div class="col my-3">
                                            <div class="row d-flex justify-content-between align-items-center">

                                                <hr class="page-hr2 mb-2">
                                                <div class="col-6 text-start">
                                                    <span class="product-title">Order Total ({{count($userorders)}}
                                                        item/s):</span>
                                                </div>
                                                <div class="col-6  text-end">
                                                    <span class="product-price">₱ {{number_format((float)$sum, 2, '.', '')}}</span>
                                                </div>
                                                <hr class="page-hr2 mt-2">
                                            </div>
                                            
                                        </div>
                                </div>

                            </div>
                            <div class="row" id="hideButtons">
                                <div class="col text-end mb-3 me-5">
                                    <a href="{{route('orders-show')}}" class="btn btn-secondary">Back</a>
                                    <input type="button" 
                                        onclick="printDiv('printableArea')" 
                                        value="Print" 
                                        class="btn btn-warning"
                                    />
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </main>

    <script>


        function printDiv(divName) {
            document.getElementById('hideButtons').style.display = 'none';


            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;


            document.body.innerHTML = printContents;


            window.print();

            document.body.innerHTML = originalContents;

            document.getElementById('hideButtons').style.display = '';
        }
    </script>


@endsection

@push('footer-script')
@endpush
