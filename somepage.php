<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header("location: index.php");
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Php Class</title>
</head>
<body>
	<?php 
		if(isset($_SESSION['username'])){
			echo $_SESSION['username'] . '<br>';
			echo $_SESSION['name'] . '<br>';

		}

	 ?>

	 <form method="GET" action="private/logout.php">
	 	
	 	<input type="submit" name="logout" value="Logout">
	 </form>

	 <a href="user_info.php"><p>Show User</p></a>
</body>
</html>