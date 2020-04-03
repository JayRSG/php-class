<?php 
session_start();
include_once 'private/db.php';

if(!isset($_SESSION['username'])){
	header("location: index.php");
}

$sql = "SELECT * from user";
$result = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html>
<head>
	<title>PhP Class</title>
</head>
<body>
	<?php  if($_SESSION['username'] != 'joy123'){ ?>
		<table>
			<thead>
				<th>id</th>
				<th>Name</th>
				<th>User Name</th>
				<th>Password</th>
				<th>Creation Date</th>
			</thead>

			<tbody>
				<?php while($row = mysqli_fetch_assoc($result)){ ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td><?php echo $row['creation_date']; ?></td>

					</tr>
				<?php } ?>
			</tbody>

		</table>
	<?php } ?>
</body>
</html>