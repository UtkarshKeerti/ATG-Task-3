<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<style>
body{
    background-color: #f4f9f9;
}
.btn a{
    text-decoration: none;
    background-color: #212529;
    color:white;
    padding: 8px;
    border-radius: 8px;
}
.btn a:hover{
    background-color: white;
    color: black;
    font-weight: 600;
}
.container h2{
    margin-top: 20px;
}
</style>
<body>
<!-- As a heading -->
<nav class="navbar navbar-light d-flex align-items-center bg-dark" style="height: 100px">
  <span class="navbar-brand h1" style="color:white; padding-left: 200px;">Dashboard</span>
  <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline" style="margin-right: 200px;"><a href="logout">Logout</a> </button>
    </form>
</nav>
    <div class="container d-flex justify-content-center">
    <h2 >Hello, {{ $LoggedUserInfo->name }}</h2>
    </div>
</body>
</html>