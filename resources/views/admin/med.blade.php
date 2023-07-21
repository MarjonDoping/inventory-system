<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard - SB Admin</title>

<link href="assets/img/logs.jpg" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- plugins:css -->
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/css/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="assets/css/vendors/simple-line-icons/css/simple-line-icons.css">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="assets/css/vendors/css/vendor.bundle.base.css"> -->
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/css/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="assets/css/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  
  <link rel="shortcut icon" href="assets/img/logs.jpg" />
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

        <link href="assets/css/styles.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

$(document).ready(function () {
    $('#example').DataTable();
    $('#example1').DataTable();
});

google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  google.charts.setOnLoadCallback(drawChart1);
  google.charts.setOnLoadCallback(drawChart2);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ["Medicine", "Stocks", { role: "style" } ],
        <?php echo $data; ?>
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                    { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                    2]);

    var options = {
        title: "Medicine Stocks",
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
    };
    var chart = new google.visualization.BarChart(document.getElementById("barchart_material"));
    chart.draw(view, options);
}
function drawChart1() {
    var data = google.visualization.arrayToDataTable([
        ["Midicine", "Stocks", { role: "style" } ],
        <?php echo $data1; ?>
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                    { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                    2]);

    var options = {
        title: "Medicine Stocks",
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
    };
    var chart = new google.visualization.BarChart(document.getElementById("barchart_material1"));
    chart.draw(view, options);
}
function drawChart2() {
    var data = google.visualization.arrayToDataTable([
        ["Medicine", "Stocks", { role: "style" } ],
        <?php echo $dtobeexpired; ?>
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                    { calc: "stringify",
                        sourceColumn: 1,
                        type: "string",
                        role: "annotation" },
                    2]);

    var options = {
        title: "Medicine Stocks",
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
    };
    var chart = new google.visualization.BarChart(document.getElementById("barchart_material2"));
    chart.draw(view, options);
}


</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Year", "<?php echo $month.'-'.$lastyear; ?>", { role: "style" } ],
        <?php echo $predictanaslysis ?>
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Predictive Analytics on Most Distributed Medicine in January 2022" ,
        width: 900,
        height: 400,
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

</head>
@if(session('is_login'))
<body>
  
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="/monitoring">
            <img src="assets/img/rhu.png" alt="logo" style="width:250px;height:80px;"/>
          </a>
         
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
          <h1 class="welcome-text text-left">Good Day,  <span class="text-dark fs-4">  {{$usernamess[0]->username}}</span></h1>
           
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <!-- <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left">Select Category</p>
              </a> -->
              <div class="dropdown-divider"></div>
              <a href="/vaccination" class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark"> Vaccination </p>
                  
                </div>
              </a>
              <a href="/medicalrecord" class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Medical Record</p>
                 
                </div>
              </a>
              <a href="/admin" class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">Medicine Inventory</p>
                  
                </div>
              </a>
              <a href="/listofusers" class="dropdown-item preview-item">
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">List of Users</p>
                 
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <!-- <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form> -->
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-mail icon-lg"></i>
              <span class="position-absolute top-0 start-90  translate-middle badge rounded-pill bg-danger ">
                  @foreach($nitification as $i)
                    @if($i -> notification > 0)
                      {{$i -> notification}}
                     
                    @endif
                  @endforeach
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">You have <span class="fs-7 text-danger fw-bold">
                  @foreach($nitification as $i)
                    @if($i -> notification > 0)
                      {{$i -> notification}}
                    @endif
                  @endforeach
                </span> new notifications </p>
              
              </a>
              <a class="dropdown-item preview-item py-3" href="/adminComposeChat">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-telegram m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class=" fw-normal text-dark mb-1">  View <span class="fs-7 text-danger fw-bold">
                  @foreach($nitification as $i)
                    @if($i -> notification > 0)
                      {{$i -> notification}}
                    @endif
                  @endforeach
                </span> Messages</h6>
                 
                </div>
              </a>
             
            </div>
          </li>
         
          <!-- <li class="nav-item dropdown"> 
            <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="icon-bell"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                <span class="badge badge-pill badge-primary float-right">View all</span>
              </a>
            
              </a>
            </div>
          </li> -->
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="profilepic/{{$mydp[0]->imagename}}" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <br>
                <button type="button" style= "border-radius:20px;" class="btn btn-light text-dark m-0" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                  <img class="img-md rounded-circle" src="profilepic/{{$mydp[0]->imagename}}" style="width:100px;" alt="Profile image">
                </button>
                <p class="mb-1 mt-3 font-weight-semibold">{{session('username')}}</p>
                <p class="fw-light text-muted mb-0">{{session('email')}}</p>
              </div>
              <a href="/logout" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-danger me-2"></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
    
    
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include ('pagepart.adminnavbar')     <!-- partial -->
      <!-- partial -->
      <!-- partial -->
      <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                
                    <!-- <div class="btn-wrapper text-end">
                        
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                      <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                      
                    </div> -->
                  </div>
                </div>
                <main>
                
                        <h1 class=" ">Medicine Inventory</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Medicine Stocks</li>
                        </ol>
                @if(Session::get('success'))
                    <div class="row justify-content-center text-center">
                        <div class="alert alert-success col">
                            {{ Session::get('success') }}
                        </div>
                        <script>
                        $('div.alert').delay(3000).fadeOut(350);
                       </script>
                    </div>
                @endif
                @if(Session::get('danger'))
                    <div class="row justify-content-center text-center">
                        <div class="alert alert-danger col">
                            {{ Session::get('danger') }}
                        </div>
                        <script>
                        $('div.alert').delay(3000).fadeOut(350);
                       </script>
                    </div>
                @endif
                @if(Session::get('bn'))
                    <script type="text/javascript">
                        $(window).on('load', function() {
                            $('#viewmedicine').modal('show');
                        });
                    </script>
                @endif
                @if(Session::get('abn'))
                    <script type="text/javascript">
                        $(window).on('load', function() {
                            $('#viewmedicine1').modal('show');
                        });
                    </script>
                @endif
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-12">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Most Common Medicine Distributed in a Year
                            </div>
                           <div id="columnchart_values" style="width: 800px;"></div>
                        </div>
                    </div>
                    <div> <br><br> </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-12">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Medicine Stocks
                            </div>
                            <div id="barchart_material1" style="width: 800px;"></div>
                        </div>
                    </div>
                    <div> <br><br> </div>
                    <div class="col-xl-6">
                        <div class="card mb-6">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Medicine Expiration Date This Month
                            </div>
                            <div id="barchart_material2" style="width: 400px;"></div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-6">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Short of Medicine Stocks
                            </div>
                            <div id="barchart_material" style="width: 400px; "></div>
                        </div>
                    </div>
                </div>
                <div> <br><br> </div>
                <div class="col">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmedicine">
                        Add Medicine <i class="fa fa-plus"></i>
                    </button>
                </div>
                   <div> <br></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Most Distributed Medicine This Year
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="display " >
                                        <thead>
                                            <tr>
                                                <th>Brand Name</th>
                                                <th>Generic Name</th>
                                                <th>NO. of pieces Distributed</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($predmed as $app)
                                            <tr>
                                                <td>{{$app ->brandname}}</td>
                                                <td>{{$app ->genericname}}</td>
                                                <td>{{$app -> totalsales}}</td>
                                            </tr>
                                            @endforeach
                                           
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    All Medicine Stocks
                                </div>
                                <div class="card-body">
                                    <table id="example" class="display " >
                                        <thead>
                                            <tr>
                                                <th>Brand Name</th>
                                                <th>Generic Name</th>
                                                <th>Stocks</th>
                                                <th>Grams</th>
                                                <th>Lot Number</th>
                                                <th>Batch Number</th>
                                                <th>Critical Level</th>
                                                <th>Expiration Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($med_inventory as $app)
                                            <tr>
                                                <td>{{$app ->brand_name}}</td>
                                                <td>{{$app ->generic_name}}</td>
                                                <td>{{$app -> Stock}}</td>
                                                <td>{{$app -> grams}}</td>
                                                <td>{{$app -> batchno}}</td>
                                                <td>{{$app -> lotno}}</td>
                                                <td>{{$app -> criticallevel}}</td>
                                                <td>{{$app -> expdate}}</td>
                                                <td>
                                                    <a class="btn btn-primary mdi mdi-eye px-2 py-2 m-1" href="viewmedicine/{{$app -> med_ID }}/{{$app -> brand_name}}/{{$app -> generic_name}}/{{$app -> Stock}}/{{$app -> batchno}}/{{$app -> lotno}}/{{$app -> criticallevel}}/{{$app -> expdate}}/{{$app -> description}}/{{$app -> grams}}" role="button"></a>
                                                    <a class="btn btn-warning mdi mdi-basket px-2 py-2 m-1" href="viewmedicine1/{{$app -> med_ID }}/{{$app -> brand_name}}/{{$app -> generic_name}}/{{$app -> Stock}}/{{$app -> batchno}}/{{$app -> lotno}}/{{$app -> criticallevel}}/{{$app -> expdate}}/{{$app -> description}}/{{$app -> grams}}" role="button"></a>
                                                    <a class="btn btn-danger mdi mdi-delete px-2 py-2 m-1" onclick="return confirm('Are you sure to delete medicine {{$app -> brand_name}}?')" href="delmedicine/{{$app -> med_ID }}" role="button"></a>                                                
                                                </td>
                                            </tr>
                                            @endforeach
                                           
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  
              
            </div>
        </div>

        <form action="addmedicine" method="post">
            @csrf
            <div class="modal fade" id="addmedicine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5 p-0 m-0 mdi mdi-plus" id="staticBackdropLabel">  Add Medicine</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">Generic Name</span>
                                    <input type="text" class="form-control" name="gn" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                @error('gn')
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#addmedicine').modal('show');
                                        });
                                    </script>
                                    <p class="text-danger"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Generic Name field is Required</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Brand Name</span>
                                    <input type="text" class="form-control" name="bn" aria-label="Username" aria-describedby="basic-addon1" >
                                </div>
                                @error('bn')
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#addmedicine').modal('show');
                                        });
                                    </script>
                                    <p class="text-danger"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Brand Name field is Required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Lot Number</span>
                                    <input type="text" class="form-control" name="ln"  aria-describedby="basic-addon1" >
                                </div>
                                @error('ln')
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#addmedicine').modal('show');
                                        });
                                    </script>
                                    <p class="text-danger"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lot Number field is Required</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Batch Number</span>
                                    <input type="text" class="form-control" name="bno"  aria-describedby="basic-addon1">
                                </div>
                                @error('bno')
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#addmedicine').modal('show');
                                        });
                                    </script>
                                    <p class="text-danger"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Batch Number field is Required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Number of Stocks</span>
                                    <input type="number" class="form-control" name="stocks"  aria-describedby="basic-addon1" >
                                </div>
                                @error('stocks')
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#addmedicine').modal('show');
                                        });
                                    </script>
                                    <p class="text-danger"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Stocks field is Required</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Grams</span>
                                    <input type="number" class="form-control" name="grams"  aria-describedby="basic-addon1" >
                                </div>
                                @error('stocks')
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#addmedicine').modal('show');
                                        });
                                    </script>
                                    <p class="text-danger"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Grams field is Required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Exp. Date</span>
                                    <input type="date" class="form-control" name="expdate"  aria-describedby="basic-addon1">
                                </div>
                                @error('expdate')
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#addmedicine').modal('show');
                                        });
                                    </script>
                                    <p class="text-danger"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Expiration Date field is Required</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Critical Level</span>
                                    <input type="number" class="form-control" name="cl"  aria-describedby="basic-addon1">
                                </div>
                                @error('cl')
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#addmedicine').modal('show');
                                        });
                                    </script>
                                    <p class="text-danger"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Critical Level field is Required</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                        <span class="input-group-text" name="des" id="basic-addon1">Description</span>
                            <textarea id="w3review" name="des" rows="4" cols="50">
                            </textarea>
                            @error('des')
                                    <script type="text/javascript">
                                        $(window).on('load', function() {
                                            $('#addmedicine').modal('show');
                                        });
                                    </script>
                                    <p class="text-danger"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Description field is Required</p>
                                @enderror
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info" data-bs-dismiss="modal">Add</button>
                    </div>
                </div>
                </div>
            </div>
        </form>
        <form action="givingmedicine" method="post">
            @csrf
            <div class="modal fade" id="viewmedicine1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header ">
                    <h5 class="modal-title  fs-5  m-0 mdi mdi-basket" id="exampleModalLabel"> Disbursement of Medicine </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="updateid" value="{{Session::get('aid')}}">
                        <input type="hidden" class="form-control" name="stocks"  aria-describedby="basic-addon1"value = "{{Session::get('astocks')}}" >
                        <input type="hidden" class="form-control" name="gn" aria-label="Username" aria-describedby="basic-addon1" value = "{{Session::get('agn')}} ">
                        <input type="hidden" class="form-control"  name="bn" aria-label="Username" aria-describedby="basic-addon1" value = "{{Session::get('abn')}}">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Generic Name</span>
                                    <input type="text" class="form-control" disabled name="gn" aria-label="Username" aria-describedby="basic-addon1" value = "{{Session::get('agn')}} ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Brand Name</span>
                                    <input type="text" class="form-control" disabled name="bn" aria-label="Username" aria-describedby="basic-addon1" value = "{{Session::get('abn')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Lot Number</span>
                                    <input type="text" class="form-control" disabled name="ln"  aria-describedby="basic-addon1"value = "{{Session::get('aln')}} " >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Batch Number</span>
                                    <input type="text" class="form-control" disabled name="bno"  aria-describedby="basic-addon1" value = "{{Session::get('abno')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Number of Stocks</span>
                                    <input type="text" class="form-control" disabled aria-describedby="basic-addon1"value = "{{Session::get('astocks')}}" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Grams</span>
                                    <input type="text" class="form-control" name="grams" disabled aria-describedby="basic-addon1" value = "{{Session::get('agrams')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Expiration Date</span>
                                    <input type="text" disabled class="form-control" disabled name=""  aria-describedby="basic-addon1" value = "{{Session::get('aexpdate')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Critical Level</span>
                                    <input type="text" class="form-control" name="cl" disabled  aria-describedby="basic-addon1" value = "{{Session::get('acl')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <span class="input-group-text" name="des" id="basic-addon1">Description</span>
                            <textarea id="w3review" name="des" disabled rows="4" cols="50">
                            {{Session::get('ades')}}
                            </textarea>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text text-white bg-warning" id="basic-addon1">Number of Pieces of Medicine to Distribute</span>
                                    <input type="number" class="form-control" name="givingmed"  aria-describedby="basic-addon1">
                                </div>
                            </div>
                            @error('givingmed')
                                <script type="text/javascript">
                                    $(window).on('load', function() {
                                        $('#viewmedicine1').modal('show');
                                    });
                                </script>
                                <p class="text-danger text-center"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;This field is Required</p>
                                <?php
                                header('refresh:1;url=/admin')
                                ?>
                            @enderror
                        </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning" data-bs-dismiss="modal">Finish</button>
                    </div>
                </div>
                </div>
            </div>
        </form>
        <form action="updatemedicine" method="post">
            @csrf
            <div class="modal fade" id="viewmedicine" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header ">
                    <h5 class="modal-title  mdi mdi-eye fs-5" id="exampleModalLabel"> View Medicine</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="updateid" value="{{Session::get('id')}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Generic Name</span>
                                    <input type="text" class="form-control" name="gn" aria-label="Username" aria-describedby="basic-addon1" value = "{{Session::get('gn')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Brand Name</span>
                                    <input type="text" class="form-control" name="bn" aria-label="Username" aria-describedby="basic-addon1" value = "{{Session::get('bn')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Lot Number</span>
                                    <input type="text" class="form-control" name="ln"  aria-describedby="basic-addon1"value = "{{Session::get('ln')}}" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Batch Number</span>
                                    <input type="text" class="form-control" name="bno"  aria-describedby="basic-addon1" value = "{{Session::get('bno')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Number of Stocks</span>
                                    <input type="text" class="form-control" name="stocks"  aria-describedby="basic-addon1"value = "{{Session::get('stocks')}}" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Grams</span>
                                    <input type="text" class="form-control" name="grams"  aria-describedby="basic-addon1" value = "{{Session::get('grams')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Old Expiration Date</span>
                                    <input type="text" disabled class="form-control" name=""  aria-describedby="basic-addon1" value = "{{Session::get('expdate')}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Critical Level</span>
                                    <input type="text" class="form-control" name="cl"  aria-describedby="basic-addon1" value = "{{Session::get('cl')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">New Expiration Date</span>
                                    <input type="date" class="form-control" name="expdate2"  aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <span class="input-group-text" name="des" id="basic-addon1">Description</span>
                            <textarea id="w3review" name="des" rows="4" cols="50">
                            {{Session::get('des')}}
                            </textarea>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save Changes</button>
                    </div>
                </div>
                </div>
            </div>
        </form>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    @if(!session('is_login'))
    @include('notAdmin')
    @endif
                   
            
      
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
      
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  
  <!-- container-scroller -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- plugins:js -->
  <!-- <script src="assets/css/vendors/js/vendor.bundle.base.js"></script> -->
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/css/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/css/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="assets/css/vendors/progressbar.js/progressbar.min.js"></script>
   <!-- MODAL UPLOAD IMAGE -->
   <form action="updatemyinfo" method = "post" enctype="multipart/form-data" >
      @csrf
      <div class="modal top fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered text-center d-flex justify-content-center">
        <div class="modal-content w-1000" style="margin-bottom: 30%">
        
            <div class="card-header">Profile Picture</div>
            <div class="card-body text-center">
                <!-- Profile picture image-->
                <img class="img-account-profile rounded-circle mb-2" style="height: 40%; width: 40%" src="profilepic/{{$mydp[0]->imagename}}" alt="">
                <!-- Profile picture help block-->
                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                <!-- Profile picture upload button-->
                <input type="file" name = "image" class ="form-control">
                <div class="form-group mt-4">
                    <label for="">New Password</label><br>
                    <input type="password" name="npassword" class ="form-control" >
                    @error('npassword')
                        <script type="text/javascript">
                            $(window).on('load', function() {
                                $('#exampleModal1').modal('show');
                            });
                        </script>
                     <p class="text-danger">
                     {{$message}}
                     </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Re-enter Password</label><br>
                    <input type="password" name="npassword_confirmation" class ="form-control"   1 >
                </div>
                <button class="btn btn-primary mt-2" type="submit">Save Changes</button>
            </div>
   
                </form>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/css/js/off-canvas.js"></script>
  <script src="assets/css/js/hoverable-collapse.js"></script>
  <script src="assets/css/js/template.js"></script>
  <script src="assets/css/js/settings.js"></script>
  <script src="assets/css/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/css/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="assets/css/js/dashboard.js"></script>
  <script src="assets/css/js/Chart.roundedBarCharts.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  <!-- End custom js for this page-->
  @include('sweetalert::alert')
</body>
@endif
</html>
