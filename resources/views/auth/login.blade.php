<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<style>
body{
    background-color: black;
    color: white;
}
.container .style-class{
    border: 2px solid white;
    padding: 10px;
    border-radius: 8px;
}
</style>
<body>
    <div class="container " >
    <div class="row d-flex justify-content-center" style="margin-top: 45px">
    <div class="style-class col-md-6 col-md-offset-4">
    <h4>User Login</h4>
    <hr>
    <form action="{{route('auth.check')}}" method="post">
    @csrf

    <div class="results">
    @if(Session::get('fail'))
    <div class="alert alert-danger">
    {{Session::get('fail')}}
    </div>
    @endif
    </div>
    <div class="form-group" style="margin: 10px">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ old('email') }}">
    <span class="text-danger">@error('email'){{$message}}@enderror</span>
    </div>
    <div class="form-group" style="margin: 10px">
    <label for="" >Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter Password">
    <span class="text-danger">@error('password'){{$message}}@enderror</span>
    </div>
    <div class="form-group d-flex justify-content-center" style="margin-top: 20px">
    <button type="submit" class="btn btn-block btn-primary">Login</button>
    </div>
    <br>
    <p>Don't have an account? <br><a href="login" style="text-decoration: none">Create Account!</a></p>
    </form>
    </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>