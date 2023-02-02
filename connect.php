<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "jewel_db";

$con = mysqli_connect($servername,$username,$password,$db);

if($con){
    // echo 'connected';
}
else{
    echo 'not connected';
}
?>