<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>enter radious :</td>
				<td><input type="text" name="rad" value="" /></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="click" /></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	class circle_area
	{
		public function calc($rad)
		{
			$pi = 3.14;
			$area = $pi * $rad * $rad;
			echo "Area of circle :".$area;
		}
	}

	if (isset($_REQUEST['rad'])) 
	{
		$r = $_REQUEST['rad'];
		$obj = new circle_area();
		$obj -> calc($r);
	}
?>
