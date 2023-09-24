@extends('admin.layout')
@section('content')

    <script>
        $(function() {
            $('#transactionsTable').DataTable();
        });
    </script>

	<style>
		.chart {
          width: 100%; 
          min-height: 500px;
        }
	</style>

    <script type="text/javascript">

        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

		$(window).resize(function(){
          drawChart();
        });

        function drawChart() {

			var products = [<?php 
				for($i = 0; $i < count($products); $i++){
					echo "[";
					for($j = 0; $j < count($products[$i]); $j++){
						
						if($i != 0 && $j != 0){
							echo $products[$i][$j];
						}else{
							echo "'".$products[$i][$j]."'";
						}
						if($j != count($products[$i])-1){
							echo ",";
						}
					}
					echo "]";
					if($i != count($products)-1){
						echo ",";
					}
				}
			?>];

            var data = google.visualization.arrayToDataTable(products);

            var options = {
                title: 'Sold Products',
				responsive: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawAxisTickColors);

        function drawAxisTickColors() {
            var prod = google.visualization.arrayToDataTable([<?php 
				for($i = 0; $i < count($prods); $i++){
					echo "[";
					for($j = 0; $j < count($prods[$i]); $j++){
						
						if($i != 0 && $j != 0){
							echo $prods[$i][$j];
						}else{
							echo "'".$prods[$i][$j]."'";
						}
						if($j != count($prods[$i])-1){
							echo ",";
						}
					}
					echo "]";
					if($i != count($prods)-1){
						echo ",";
					}
				}
			?>]);

        var options = {
            title: 'Number of Stocks',
            chartArea: {width: '50%'},
            hAxis: {
            title: 'Stocks',
            minValue: 0,
            textStyle: {
                bold: true,
                fontSize: 14,
                color: '#4d4d4d'
            },
            titleTextStyle: {
                bold: true,
                fontSize: 14,
                color: '#4d4d4d'
            }
            },
            vAxis: {
            title: 'Products',
            textStyle: {
                fontSize: 14,
                bold: true,
                color: '#848484'
            },
            titleTextStyle: {
                fontSize: 14,
                bold: true,
                color: '#848484'
            }
            }
        };
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(prod, options);
    }
    </script>

    <main>
        <div>
            <div class="center">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="/page-add">Home</a>
                    </li>
                </ul>
            </div>


        </div>

        <ul class="box-info">
            <!-- <li>
                <i class='bx '> <i class="fa fa-pencil" aria-hidden="true"></i></i>
                <span class="text">

                    <h6>You can now edit</h6>
                </span>
            </li>
            <li>
                <i class='bx'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></i>
                <span class="text">
                    <h6>You can now create </h6>
                </span>
            </li>
            <li>
                <i class='bx '> <i class="fa fa-trash" aria-hidden="true"></i></i>
                <span class="text">

                    <h6>You can now delete</h6>
                </span>
            </li> -->
            <li>
                <i class='bx '> <i class="fa fa-money" aria-hidden="true"></i></i>
                <span class="text">
                    <h6>Total Earnings</h6>
                    <h6 class="text-muted">P {{$totalearnings}}</h6>
                </span>
            </li>
            <li>
                <i class='bx'><i class="fa fa-birthday-cake" aria-hidden="true"></i></i>
                <span class="text">
                    <h6>Products</h6>
                    <h6 class="text-muted">{{$totalproducts}}</h6>
                </span>
            </li>
            <li>
                <i class='bx '> <i class="fa fa-shopping-cart" aria-hidden="true"></i></i>
                <span class="text">

                    <h6>Orders</h6>
                    <h6 class="text-muted">{{$totalorders}}</h6>
                </span>
            </li>

        </ul>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div class="chart" id="piechart"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    <div id="chart_div"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
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
            </div>
        </div>

    </main>
@endsection

@push('footer-script')
@endpush
