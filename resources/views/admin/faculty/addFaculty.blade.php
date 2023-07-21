
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('homes/images/1.png')}}">
	<!-- Boxicons -->
	<link href="{{asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('dash/style.css?ver=01')}}">

	<title>Cletos Bakeshop</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
    <img src=" {{asset('homes/images/cletos.png')}}" alt="" class="logos">

		</a>
		<ul class="side-menu top">
			
			<li >
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
            <li>
			<a href="{{route('site-show')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Bakeshop Owners</span>
				</a>
			</li>
            <li class="active" >
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
					<h1>Add Content</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Post</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Add</a>
						</li>
					</ul>
				</div>
				
			</div>

			

		
				<div class="order">
                <div class="mb-3">

                <div class="row">
	{!! Form::open(['route' =>['faculty-store',$faculty->id],'enctype'=>'multipart/form-data']) !!}
	@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach   
    </div>
    @endif

    <div class="mb-3">
  <label class="form-label">Page:</label>
  {{form::select('page_title',['faculty'=>'Faculty'],$faculty->page_title,['class'=>'form-control'])}} 
</div>

<div class="mb-3">
  <label class="form-label">Add Developer: </label>
  {{form::text('section_title',$faculty->section_title,['class'=>'form-control','placeholder'=>'To create developer type "new"'])}}
</div>

<div class="mb-3">
  <label class="form-label">Name of Developer: </label>
  {{form::text('title',$faculty->title,['class'=>'form-control','placeholder'=>'Title'])}}
</div>

   
<div class="mb-3">
  <label class="form-label">Upload Image: </label>
  @if($faculty->image)
                <img src="{{url('uploads')}}/{{$faculty->image}}" style="height: 100px;width: 100px;">
                @endif
                {{Form::hidden('old_image',$faculty->image)}}
                {!! Form::file('image',['class'=>'form-control','id'=>'file']) !!}
</div> 

<div class="mb-3">
  <label class="form-label">Position: </label>
  {{form::textarea('description',$faculty->description,['class'=>'form-control'])}}
</div>
{{Form::submit('Save', ['class'=>'btn btn-primary'])}}
        </div>
    </div>
	{!! Form::close() !!}


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
