
<?php 	
include_once 'private/db.php';


if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO user (name, username, password) VALUES('$name', '$username', '$password')";
	mysqli_query($con, $sql);

	if(mysqli_affected_rows($con)){

		?>
		<script type="text/javascript">
			alert('User Created');
		</script>
		<?php 
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP class</title>
</head>
<body>
	<h3>Create User</h3>
	<form method="POST" action="create_user.php">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name"><br>
			
			<label for="username">Username</label>
			<input type="text" name="username"><br>
			
			<label for="password">password</label>
			<input type="password" name="password"><br>
			
			<input type="submit" name="submit" value="submit">
		</div>
	</form>
</body>
</html>