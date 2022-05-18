<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="50%">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Phone No. </td>
				<td><input type="text" name="phoneno"></td>
			</tr>
			<tr> 
				<td>Subject Name</td>
				<td><input type="text" name="subjectname"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$phoneno = $_POST['phoneno'];
		$subjectname = $_POST['subjectname'];

		
		include_once("config.php");
				
		
		$result = mysqli_query($mysqli, "INSERT INTO `users`(`name`, `age`, `phoneno`, `subjectname`) VALUES ('$name','$age','$phoneno','$subjectname')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>
