<?php 
include_once 'private/db.php';
session_start();

if(isset($_POST['submit'])){

	$sql = "SELECT * from user";
	$result = mysqli_query($con, $sql);

	$username = $_POST['username'];
	$password = $_POST['password'];

	while($row = mysqli_fetch_assoc($result)){

		if($row['username'] == $username && $row['password'] == $password){
			$_SESSION['username'] = $username;
			$_SESSION['name'] = $row['name'];
			
			header("location: somepage.php");
		}else{
			continue;
		}
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP class</title>
</head>
<body>
	<form method="POST" action="index.php">
		<div>
			<label for="username">Username</label><input type="text" name="username"><br>
			<label for="username">password</label><input type="password" name="password"><br>
			<input type="submit" name="submit">
		</div>
	</form>
</body>
</html>