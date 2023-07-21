
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('homes/images/cletoslogo.png')}}">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- My CSS -->
    <link href="{{asset('admin_theme/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
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
			<li class="active">
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
			</li>
            <li>
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
                    <h1>Contact Page</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">About Contact</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">contact</a>
                        </li>
                    </ul>
                </div>
                
            </div>

                <div class="order">
                <div class="mb-3">
              
    {!! Form::open(['route' =>'page-create','enctype'=>'multipart/form-data']) !!}
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach   
        </div>
    @endif
  <label  class="form-label">Page :</label>
  {!! Form::text('title','contact',['class'=>'form-control','required'=>'required','readonly'=>'readonly']) !!}
                <span class="hws_error text-right text-danger">
                    {{ $errors->first('title') }}
                </span>
</div>
<div class="mb-3">
  <label class="form-label">Phone Number</label>
  {!! Form::hidden('txt_name[]','pnum') !!}
                @if($total_row)
                @foreach($page as $value)
                    @if($value->section_title=='pnum')
                        {!! Form::text('pnum',$value->data,['class'=>'form-control']) !!}
                    @endif
                @endforeach
                @else
                    {!! Form::text('pnum','',['class'=>'form-control']) !!}
                @endif
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label editor">Email Address:</label>
  {!! Form::hidden('txt_name[]','email') !!}
                @if($total_row)
                @foreach($page as $value)
                    @if($value->section_title=='email')
                        {!! Form::text('email',$value->data,['class'=>'form-control']) !!}
                    @endif
                @endforeach
                @else
                    {!! Form::text('email','',['class'=>'form-control']) !!}
                @endif
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label editor">Address:</label>
  {!! Form::hidden('txt_name[]','address') !!}
                @if($total_row)
                @foreach($page as $value)
                    @if($value->section_title=='address')
                        {!! Form::text('address',$value->data,['class'=>'form-control']) !!}
                    @endif
                @endforeach
                @else
                    {!! Form::text('address','',['class'=>'form-control']) !!}
                @endif
</div>
<div class="mb-3">
  <label  class="form-label">Facebook Page: </label>
  {!! Form::hidden('txt_name[]','facebook') !!}
                @if($total_row)
                @foreach($page as $value)
                    @if($value->section_title=='facebook')
                        {!! Form::text('facebook',$value->data,['class'=>'form-control']) !!}
                    @endif
                @endforeach
                @else
                    {!! Form::text('facebook','',['class'=>'form-control']) !!}
                @endif
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Cleto's Website :</label>
  {!! Form::hidden('txt_name[]','website') !!}
                @if($total_row)
                @foreach($page as $value)
                    @if($value->section_title=='website')
                        {!! Form::text('website',$value->data,['class'=>'form-control']) !!}
                    @endif
                @endforeach
                @else
                    {!! Form::text('website','',['class'=>'form-control']) !!}
                @endif
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