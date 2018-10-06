<?php
	interface atul 		//interface class
	{
		public function a1();	//declare function
	}

	interface bharat	//interface class
	{
		public function a2();	//declare function
	}


	class demo implements atul,bharat	//implementing (extend) interface class
	{
		public function a1()
		{
			echo "function 1 ";
		}

		public function a2()
		{
			echo "function 2";
		}
	}

	$obj = new demo();

	echo $obj->a1();
	echo $obj->a2();
?>