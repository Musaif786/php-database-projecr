<?php



 $hostname = "localhost";
 $username = "root";
 $password = "";
 $database = "crud1";

 $conn = mysqli_connect($hostname,$username,$password,$database);
 if($conn){
     echo " "; 
 }else{
     echo ' not connected to db';
 }

?>