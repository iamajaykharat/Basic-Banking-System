<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "bank";
$con = mysqli_connect($servername,$username,$password,$database);
if($con){
    // echo "connection successful";
}
else{
die("sorry we failed to connect:" .mysqli_connect_error());
} 
?>