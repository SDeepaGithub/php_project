<?php
	include('connect.php');
	$id=$_GET['id'];
 

	$username=$_POST['username'];
	$rollno=$_POST['rollno'];
	$tamil=$_POST['tamil'];
	$english=$_POST['english'];
	$maths=$_POST['maths'];
 
	mysqli_query($conn,"update `student_marks` set username='$username', roll_no='$rollno',tamil = $tamil , english = $english , maths = $maths where id='$id'");
	header('location:index.php');
?>