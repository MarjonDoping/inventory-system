
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('homes/images/site.png')}}">
	<!-- Boxicons -->
	<link href="{{asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('dash/style.css?ver=01')}}">

	<title>Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
    <img src=" {{asset('homes/images/cletos.png')}}" alt="" class="logos">
			
		</a>
		<ul class="side-menu top">
			
			<li class="active">
				<a href="{{route('page-add')}}">
				<i class='bx ' > <i class="fa fa-home" aria-hidden="true"></i></i>
					<span class="text">Home Page</span>
				</a>
			</li>
			<li>
				<a href="{{route('company.page.add')}}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">About Page</span>
				</a>
			</li>
			<li>
				<a href="{{route('contact.page.add')}}">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Contact page</span>
				</a>
			</li>
            <li >
			<a href="{{route('site-show')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Bakeshop Owners</span>
				</a>
			</li>
            <li >
			<a href="{{route('faculty-show')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">System Developers</span>
				</a>
			</li>
			<li>
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
					<h1>Homepage</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Home Content</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			

		
				<div class="order">
                <div class="mb-3">
                @if (session()->has('message'))
<div class="alert alert-dismissible" style="color:green;">
    {{ session('message') }}
</div>
@endif
              
	{!! Form::open(['route' =>'page-create','enctype'=>'multipart/form-data']) !!}
		@if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach   
        </div>
    @endif
  <label for="exampleFormControlInput1" class="form-label">Page :</label>
  {!! Form::text('title','home',['class'=>'form-control','required'=>'required','readonly'=>'readonly']) !!}
                <span class="hws_error text-right text-danger">
                    {{ $errors->first('title') }}
                </span>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Homepage Title :</label>
  {!! Form::hidden('txt_name[]','first_title') !!}
                @foreach($page as $value)
                    @if($value->section_title=='first_title')
                        {!! Form::text('first_title',$value->data,['class'=>'form-control','required'=>'required']) !!}
                    @endif
                @endforeach
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">First Carousel :</label>
  {!! Form::hidden('txt_name[]','first_carousel') !!}
                @foreach($page as $value)
                    @if($value->section_title=='first_carousel')
                        {!! Form::textarea('first_carousel',$value->data,['class'=>'form-control','required'=>'required']) !!}
                    @endif
                @endforeach
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Second Carousel :</label>
  {!! Form::hidden('txt_name[]','second_carousel') !!}
                @foreach($page as $value)
                    @if($value->section_title=='second_carousel')
                        {!! Form::textarea('second_carousel',$value->data,['class'=>'form-control','required'=>'required']) !!}
                    @endif
                @endforeach
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Third Carousel :</label>
  {!! Form::hidden('txt_name[]','third_carousel') !!}
                @foreach($page as $value)
                    @if($value->section_title=='third_carousel')
                        {!! Form::textarea('third_carousel',$value->data,['class'=>'form-control','required'=>'required']) !!}
                    @endif
                @endforeach
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Fourth Carousel :</label>
  {!! Form::hidden('txt_name[]','fourth_carousel') !!}
                @foreach($page as $value)
                    @if($value->section_title=='fourth_carousel')
                        {!! Form::textarea('fourth_carousel',$value->data,['class'=>'form-control','required'=>'required']) !!}
                    @endif
                @endforeach
</div>

{{Form::submit('Save', ['class'=>'btn btn-primary'])}}	
</main>

</section>
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

<script>
    $(function(){
                if($("#editor").length){
                    CKEDITOR.replace('editor',{});
                }
                $('.editor').each(function(){
                    CKEDITOR.replace($(this).attr('id') );
                });
            });
</script>

  <script src="{{asset('dash/script.js')}}"></script>
  @stack('footer-script')
</body>
</html>	
