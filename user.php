<?php 
if(isset($_POST['submit'])){
  include "connect.php";
  $name=$_POST['username']; 
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="insert into `crud`(name,email,mobile,password) values('$name','$email','$mobile','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Database Created";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}




?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>User Form</title>
  </head>
  <body>
    <h1 class="text-center mt-5">User Form</h1>
    <div class="container">
    <form action="user.php" method="POST">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" name="username" placeholder="Name Here">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email Here">
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Mobile Here">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" name="password" placeholder="Password Here">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </div>

    
  </body>
</html>