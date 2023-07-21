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
    <!-- <link href="{{asset('admin_theme/vendors/bootstrap/dist/css/bootstrap.min.css?ver=01')}}" rel="stylesheet">
    <link href="{{asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <link href="{{asset('admin_theme/build/css/customize.css?ver=01')}}" rel="stylesheet">
    <link href="{{asset('admin_theme/build/css/custom.min.css?ver=01')}}" rel="stylesheet"> -->
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- My CSS -->
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
	<title>Cletos Bakeshop</title>
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
					<span class="text">Bakeshop Owners</span>
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
            <li>
				<a href="{{route('admin.contact.show')}}">
					<i class='bx bxs-message' ></i>
					<span class="text">Messages</span>
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
                    <h1>System Developers Page</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">About System Developers</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">System Developers</a>
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
		<!-- <th>page</th> -->
		<!-- <th>Section Title</th> -->
		<th>Name of Developer</th>
        <th>Position</th>
		<th>Image</th>
		<th>Action</th>
	</thead>
	<tbody>
		
			@foreach($faculties as $faculty)
			<tr>
			<!-- <td>{{$faculty->page_title}}</td> -->
			<!-- <td>{{$faculty->section_title}}</td> -->
			<td>{{$faculty->title}}</td>
            <td>{{$faculty->description}}</td>
			<td><img src="uploads/{{$faculty->image}}" style="height: 50px;width: 50px;"></td>
			<td>
				<a href="{{route('faculty-edit')}}/{{$faculty->id}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
				<a class="btn btn-danger btn-xs deletepost" image="{{$faculty->image}}" post-id="{{$faculty->id}}"><i class="fa fa-trash"></i></a>
			</td>
			</tr>
			@endforeach
			
	</tbody>
</table>
<!-- <p>{{ $faculties->links() }} -->
    
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