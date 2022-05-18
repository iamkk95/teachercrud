<?php
include_once("config.php");

if(isset($_POST['update']))
{	
		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$phoneno = $_POST['phoneno'];
		$subjectname = $_POST['subjectname'];
		
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',phoneno='$phoneno',subjectname='$subjectname' WHERE id=$id");

	if ($mysqli->query($result) === TRUE) {
		echo "Record updated successfully";
	  } else {
		echo "Error updating record: " . $conn->error;
	  }
		header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$age = $user_data['age'];
	$phoneno = $user_data['phoneno'];
	$subjectname = $user_data['subjectname'];

}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value=<?php echo $age;?>></td>
			</tr>
			<tr> 
				<td>Phone No</td>
				<td><input type="text" name="phoneno" value=<?php echo $phoneno;?>></td>
			</tr>
			<tr> 
				<td>Subject Name</td>
				<td><input type="text" name="subjectname" value=<?php echo $subjectname;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

