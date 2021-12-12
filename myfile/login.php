<?php
 include "head.php"
 

?>
<?php
  if($_SERVER['REQUEST_METHOD']== 'POST'){
     
    include "db.php";

    $lname = $_POST['lname'];
    $password = $_POST['password'];

    $sql = " SELECT * FROM students WHERE lname='$lname'";

    $result = mysqli_query($conn , $sql);

    if($result){
        echo " ";
        //header('Location: welcome.php');
    }
    else{
        echo "try again query fail";
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">  Fail to connect Query <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

    $num = mysqli_num_rows($result);

    if($num > 0){
        $row = mysqli_fetch_assoc($result);
        if($password==$row['password']){
         echo "logined";
          session_start();
          $_SESSION['loggedin']= true;
          $_SESSION['username']=$lname;
          
            header('Location: welcome.php');
        }
        else{
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"> Check Your Password and Try Again!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
          ';
        }
        
    }
    else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"> UserName Mismatch  
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
    background: url(https://source.unsplash.com/1600x650/?nature,water);
  }
  .container{
    margin-top: 50px;
  }
  #text{
    color: #000;
  }
</style>
<body>


<div class="container ">

<form action="login.php" method="POST">
  
   <div class="mb-3">
    
  <label for="lname" id="text" class="form-label">User-Name</label>
    <input type="text" name="lname" class="form-control" id="lname">
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" id="text" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<button  class="btn btn-primary mt-2"> <a class="text-white  text-decoration-none" href="signup.php">Signup</a></button>
</div>
    
<?php
   include "footer.php";
  ?>
</body>
</html>