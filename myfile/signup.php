<?php
 
 include "head.php";

 

 if($_SERVER["REQUEST_METHOD"]=="POST"){
  include "db.php";
 
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql = "INSERT INTO `students` (`fname`, `lname`, `email`, `password`) VALUES ('$fname', '$lname', '$email' ,'$password');";

   $result = mysqli_query($conn , $sql); 
   if(!$result) {

    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"> #'. $lname .' already Taken    
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
   }
   else{
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> Successfully! account created now you  can login to portal <a href="login.php">Login </a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
   }
 

 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up </title>
</head>
<style>
   body{
    background: url(https://source.unsplash.com/1600x650/?nature,birds
    );
  }
</style>
<body>


<div class="container ">

<form action="signup.php" method="POST">
<div class="mb-3 ">
    
    <label for="fname" class="form-label">Full-Name</label>
    <input type="text" name="fname" class="form-control" id="fname">
    
  </div>
  <div class="mb-3">
    
  <label for="lname" class="form-label">User-Name</label>
    <input type="text" name="lname" class="form-control" id="lname">
    </div>
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp"  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php
   include "footer.php";
  ?>
</body>
</html>