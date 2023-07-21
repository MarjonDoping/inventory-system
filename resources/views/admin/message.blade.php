<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('homes/images/1.png')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
   <link rel="icon" href="images/favicon.ico" type="image/ico" />
   <link href="{{asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="{{asset('dash/style.css?ver=01')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<script>
$(function(){
  $('#myTable').DataTable();
  
});

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
	<title>Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
    <img src=" {{asset('homes/images/cletos.png')}}" alt="" class="logos">
		</a>
		<ul class="side-menu top">
			
			<li>
				<a href="{{route('page-add')}}">
				<i class='bx ' > <i class="fa fa-home" aria-hidden="true"></i></i>
					<span class="text">Home Page</span>
				</a>
			</li>
			<li >
				<a href="{{route('company.page.add')}}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">About Page</span>
				</a>
			</li>
			<li >
				<a href="{{route('contact.page.add')}}">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Contact Page</span>
				</a>
			</li>
            <li >
            <a href="{{route('site-show')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Bakeshop Onwers</span>
				</a>
			</li >
            	<li class="active">
			<a href="{{route('faculty-show')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">System Developers</span>
				</a>
			</li>
			<li >
				<a href="{{route('post-show')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Post</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
		
			<li>
            <a href="/logout" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Admin Logout</span>
				</a>
			</li>
		</ul>
	</section>
    <section id="content">

        <!-- NAVBAR -->
  
        <nav>
            <i class='bx bx-menu ' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                   
                </div>
            </form>
           
            <a href="/logout" class="profile">
            <i class="fa fa-user" aria-hidden="true"></i>
            </a>
        </nav>

<main>
            <div class="head-title">
                <div class="left">
                    <h1>Faculty Page</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">About Faculty</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">faculty</a>
                        </li>
                    </ul>
                </div>
                
            </div>

			<div class="order">
			@if (session()->has('message'))
<div class="alert alert-dismissible" style="color:green;">
    {{ session('message') }}
</div>
@endif
                <div class="mb-3">
                <div class=" justify-content-end">
      
    <a href="{{route('faculty-add')}}" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
</div>
<br>
<table id='myTable' class='display' style='width:100%'>

<thead>
                  <th>Name</th>
                  <th>Contact Num.</th>
                  <th>Type of Car</th>
                  <th>Days of rent</th>
                  <th>Date Today</th>
                  <th>Message</th>
                  <th>Action</th>
                </thead>
                <tbody>
<tr>


@foreach ($mess as $feed)

<tr>
    
    <td>{{$feed->name}}</td>
    <td>{{$feed->num}}</td>
    
    <td>{{$feed->car}}</td>
    <td>{{$feed->date}}</td>
    <td>{{$feed->cal}}</td>
    <td>{{$feed->mess}}</td>
   

    <td>
        
              <a class="btn btn-danger btn-md" href="delFeedback/{{ $feed->id }}">
              <i class="fa fa-trash" aria-hidden="true">
              </i> Delete</a>

          
    </td>
</tr>
@endforeach  
                </tbody>
</table>

    
</p>
</div>
		</main>
	
	</section>
    <!-- <script src="{{asset('admin_theme/vendors/jquery/dist/jquery.min.js')}}"></script> -->
    <!-- Bootstrap -->
    <!-- <script src="{{asset('admin_theme/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script> -->
    
  <script src="{{asset('admin_theme/vendors/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('admin_theme/vendors/ckeditor/ckeditor.js.map')}}"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/<version>/classic/ckeditor.js"></script>
    <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
  <script src="{{asset('dash/script.js')}}"></script>
<script>
    $(document).ready(function(){
         $(document).on("click",".deletepost",function(){
            var id     = $(this).attr('post-id');
            var image = $(this).attr('image');
            if (confirm('Are you sure you want to remove this Post and all of its contents?')) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                    },
                    url: '{{ route('faculty-delete') }}',
                    data: {"id":id,"image":image},
                    type: "post",
                    success: function(data){
                        if(data==true){
                            alert("Post deleted successfully..!!");
                        }else{
                            alert(data);
                        }
                        window.location.reload();
                    }
                });
            }
        });
        
    });
</script>

</body>
</html>	