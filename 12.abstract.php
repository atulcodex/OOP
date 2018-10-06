<?php
	abstract class player
	{
		abstract public function play1();

		abstract public function play2();
	}

	class players extends player
	{
		public function play1()
		{
			echo "i am player 1<br>";
		}

		public function play2()
		{
			echo "i am player 2";
		}
	}

	$obj = new players();

	echo $obj->play1();
	echo $obj->play2();
?>