
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('homes/images/site.png')}}">
  <link rel="stylesheet" href="{{asset('homes/css/fontawesome.css ')}}">
	<!-- Boxicons -->
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
			
			<li>
				<a href="{{route('page-add')}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
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
					<span class="text">Contact Page</span>
				</a>
			</li>
      <li >
				<a href="{{route('post-show')}}">
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

			
		
	  <!-- <a href="{{route('admin.contact.show')}}" class="notification">
				<i class='bx bxs-bell' ></i>

				<span class="num">8</span>
			</a> -->
			
			<a href="/home" class="profile">
      <i class="fa fa-user" aria-hidden="true"></i>
			</a>
		</nav>
  
  @yield('content')
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
  <script src="{{asset('dash/script.js')}}"></script>
  @stack('footer-script')
</body>
</html>