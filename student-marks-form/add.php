<?php
	include('connect.php');
 
	$username=$_POST['username'];
	$rollno=$_POST['rollno'];
	$tamil=$_POST['tamil'];
	$english=$_POST['english'];
	$maths=$_POST['maths'];
 
	mysqli_query($conn,"insert into `student_marks` (username,roll_no,tamil,english,maths) values ('$username','$rollno',$tamil,$english,$maths)");
	header('location:index.php');
 
?>
