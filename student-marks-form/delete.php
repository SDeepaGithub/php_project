<?php
	$id=$_GET['id'];
	include('connect.php');
	mysqli_query($conn,"delete from `student_marks` where id='$id'");
	header('location:index.php');
?>