<?php
$servername="localhost";//server name
$username ="root";// user name 
$password ="";//password
$database="nalin";//db name 
//crea connetion 
$conn=mysqli_connect($servername, $username,$password, $database);
//check connection
if($conn->connect_error) {die("connection  Failed".$conn->connection_error);}
?>