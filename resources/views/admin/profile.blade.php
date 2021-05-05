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
    background-color: black;
    color: white;
}
.container h2{
    margin-top: 20px;
}
</style>
<body>
<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-2 h1" style="color:black">Dashboard</span>
</nav>
    <div class="container d-flex justify-content-center">
    <h2 >Hello, {{ $LoggedUserInfo->name }}</h2>
    </div>
</body>
</html>