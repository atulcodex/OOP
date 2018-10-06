<?php
	abstract class definemethod 
	{
		abstract public function method1();
		abstract public function method2();
	}

	class oddeven extends definemethod
	{
		public $n1;

		public function method1()
		{
			$this->n1=$_REQUEST('n');
		}

		public function method2()
		{
			if ($this->n1%2 == 0)
			{
				echo "the no is even.";
			}
			else
			{
				echo "the no is odd";
			}
		}
	}
	if (isset($_REQUEST['submit'])) 
	{
		$obj = new oddeven();
		$obj->method1();
		$obj->method2();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>assignment on abstact class</title>
</head>
<body>
	<form action="" method="post">
		<table>
			<tr>
				<td><input type="text" name="n" value="" placeholder="enter number"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="click"></td>
			</tr>
		</table>
	</form>
</body>
</html>