@extends('admin.layout')
@section('content')


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

    <main>
        <div class=" text-center">
            <div class="center">
                <h1>Hello Admin Welcome<br> to Dashboard</h1>
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
            <li>
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
            </li>
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

    </main>
@endsection

@push('footer-script')
@endpush
