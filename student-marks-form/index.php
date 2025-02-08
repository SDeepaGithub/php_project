<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Marks Form</title>
    <style>
        body {
            text-align: center; 
            font-family: Arial, sans-serif;
        }
        form {
            display: inline-block; 
            text-align: left; 
            padding: 20px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 2px 2px 10px gray;
        }

        #studentDetails{
        	margin-top:20px;
        	padding: 5px;
        }

        #studentDetails th{
        	padding: 10px;
        	background-color: black;
        	color: white;
        }

         #studentDetails td{
         	padding: 5px;
         }

    </style>
</head>
<body>

    <h2>STUDENT MARKS FORM</h2>

    <form action="add.php" method="POST">
        <h3>Enter Your Details</h3>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="rollno">Roll No:</label>
        <input type="text" name="rollno" id="rollno" required><br><br>

        <h3>Enter Your Marks</h3>
        <label for="tamil">Tamil:</label>
        <input type="number" name="tamil" id="tamil" required><br><br>

        <label for="english">English:</label>
        <input type="number" name="english" id="english" required><br><br>

        <label for="maths">Maths:</label>
        <input type="number" name="maths" id="maths" required><br><br>

        <input type="submit"  name="add" style="display: block;margin: auto;">
    </form>

    <br>
	<div>
		<table border="1"  id="studentDetails">
			<thead>
				<th>UserName</th>
				<th>RollNo</th>
				<th>Tamil</th>
				<th>English</th>
				<th>Maths</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					include('connect.php');
					$query=mysqli_query($conn,"select * from `student_marks`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr style="padding: 10px;">
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['roll_no']; ?></td>
							<td><?php echo $row['tamil']; ?></td>
							<td><?php echo $row['english']; ?></td>
							<td><?php echo $row['maths']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>

</body>
</html>
