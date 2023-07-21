
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('homes/images/site.png')}}">
    <link rel="stylesheet" href="{{ asset('homes/css/styling.css?ver=01') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Login Site Organization</title>

</head>
<body class="body-img">
 

 <div class="center">
            <form action="{{ route('registeruser')}}" method="post" class=" border p-4 bg-light shadow">
	@if(Session::has('success'))
					<div class="alert alert-success">{{Session::get('success')}}</div>
					@endif

					@if(Session::has('fail'))
					<div class="alert alert-danger">{{Session::get('fail')}}</div>
					@endif

					{{csrf_field()}}


                    <h4 class="mb-5 text-secondary">Create Your Account</h4>
                   
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label>First Name<span class="text-danger">*</span></label>
                            <input type="text"class="form-control" name="firstname"  value="{{old('firstname')}}">
		                    <span class="text-danger">@error('firstname') {{$message}}@enderror</span>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Last Name<span class="text-danger">*</span></label>
                            <input type="text"class="form-control" name="lastname"  value="{{old('lastname')}}">
		                    <span class="text-danger">@error('lastname') {{$message}}@enderror</span>
                        </div>

                    

                        <div class="mb-3 col-md-6">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="email"class="form-control" name="email"  value="{{old('email')}}">
		                    <span class="text-danger">@error('email') {{$message}}@enderror</span>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label>Username<span class="text-danger">*</span></label>
                            <input type="text"class="form-control" name="username"  value="{{old('username')}}">
		                    <span class="text-danger">@error('username') {{$message}}@enderror</span>
                        </div>
                        
                      
                        <div class="mb-3 col-md-12">
                            <label>Create Password<span class="text-danger">*</span></label>
                            <input type="password"class="form-control" name="password"  value="{{old('passsword')}}">
		                    <span class="text-danger">@error('password') {{$message}}@enderror</span>
                            <br>
                        </div>

                        <div class="col-md-12">
                       
                           <input type="submit" value="Register" class="submit">
                        </div>
                        
                       <div class="signup_link">
                       <span><br> Already have an account? </span><a href="/admin"> 
                       Login here.</a>
        </div>
                    </div>
                </form>
    </div>


</body>
</html>