<?php 
include("connect.php");
		$id=$_GET['id'];
		$Delete="delete from crud where id=$id";
		mysqli_query($conn,$Delete);
		header("location:display.php");
?>