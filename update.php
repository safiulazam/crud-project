<?php 
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where `id`='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];





if(isset($_POST['submit'])){
  
  $name=$_POST['username']; 
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="update `crud` set `id`='$id',`name`='$name',`email`='$email',`mobile`='$mobile',`password`='$password' where `id`='$id'";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Database Updated";
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

    <title>Update Form</title>
  </head>
  <body>
    <h1 class="text-center mt-5">Update Form</h1>
    <div class="container">
    <form action="" method="POST">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" name="username" placeholder="Name Here"value="<?php echo $name;?>" >
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="text" class="form-control" name="email" placeholder="Email Here" value="<?php echo $email;?>">
  </div>
  <div class="mb-3">
    <label>Mobile</label>
    <input type="text" class="form-control" name="mobile" placeholder="Mobile Here" value="<?php echo $mobile;?>">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" name="password" placeholder="Password Here" value="<?php echo $password;?>">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary w-100">Update</button>
</form>
    </div>

    
  </body>
</html>