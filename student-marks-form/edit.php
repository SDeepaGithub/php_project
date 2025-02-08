<?php
	include('connect.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `student_marks` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<head>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">


		<label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>"><br><br>

        <label for="rollno">Roll No:</label>
        <input type="text" name="rollno" id="rollno" value="<?php echo $row['roll_no']; ?>"><br><br>

        <h3>Enter Your Marks</h3>
        <label for="tamil">Tamil:</label>
        <input type="number" name="tamil" id="tamil" value="<?php echo $row['tamil']; ?>"><br><br>

        <label for="english">English:</label>
        <input type="number" name="english" id="english" value="<?php echo $row['english']; ?>"><br><br>

        <label for="maths">Maths:</label>
        <input type="number" name="maths" id="maths" value="<?php echo $row['maths']; ?>"><br><br>

		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
