<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ticket";


$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed: ".mysql_connect_error());
}
mysqli_query($conn, 'SET NAMES utf8');
?>
