<!DOCTYPE html>
<html>
<head>
	<title>opp project</title>
</head>
<body>
	<form action="16.project.php" method="post">
		<table align="center" bgcolor="orange" border="2">
			<tr>
				<th colspan="2" align="center">login form</th>
			</tr>

			<tr>
				<td>username</td>
				<td><input type="text" name="name" value="" required="required" /></td>
			</tr>

			<tr>
				<td>Email id</td>
				<td><input type="email" name="email" value="" required="required" /></td>
			</tr>

			<tr>
				<td>password</td>
				<td><input type="password" name="pass" value="" required="required" /></td>
			</tr>


			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="submit"/></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php
	include '17.process.php';

	$obj = new conn(); 

	if (isset($_POST['submit'])) 
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		$query = "INSERT INTO signup VALUES('','$name','$email','$pass')";

		$obj->insert($query);

	}
?>