
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
    <title>Cletos</title>

</head>
<body class="body-img">

 <div class="center">

    <center><img class="pet" src= "{{asset('homes/images/cletos.png')}}"/>
   
    
    <!-- <h4><strong>Admin Login</strong</h3> -->

    <br>
            </center>
      
             <form action="{{asset('admin')}}" method="post">   
            <input type = "hidden" name = "_token" value = "{{ csrf_token() }}">

           
            @if (count($errors) > 0)
            <div class = "alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>   
                                    @endforeach
                     </ul>
                </div>@endif
            @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif


        <div class="txt_field">
        <input type="text" name="username"  class="form-control" >
             <label>Enter Username</label>
            </div>
        <div class="txt_field">
            <input type="password" name="password"  class="form-control" >
             <label>Enter Password</label>
        </div>

        <input type="submit" value="Login"class="btn w-100">
    
        <div class="signup_link">
            <span>Create an Account? Sign up </span><a href="/register" class="signup_link">here.</a>
        </div>
        <div class="signup_link">
            <span>Go back to </span><a href="/home" class="signup_link">Website.</a>
        </div>
      </form>
    </div>


</body>
</html>