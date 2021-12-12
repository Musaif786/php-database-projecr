<?php
include "head.php";
?>

<?php
echo "Comment session";

session_start();
if(!isset($_SESSION['loggedin'])){
    header("location: login.php");
}
?>