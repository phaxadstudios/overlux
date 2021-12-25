<?php 

ob_start();
session_start();

$con = mysqli_connect("localhost", "root","bloomonlineshop","rusley");

if (mysqli_connect_errno()){
	echo "failed to connect".mysqli_connect_errno();
}
else{
	echo "connected";
}
?>