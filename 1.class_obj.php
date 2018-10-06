<?php
	class house
	{
		public $name = "Atul Prajapati"; //it's called properties in php
		public $age = 18;

		public function hello() //it's  called method in oop
		{
			echo "Hello World";
		}
	}

	$h = new house();  	//it's called instance in oop

	$g = new house();

	echo $h -> name." is ".$h -> age." years old.<br>";

	echo $g -> hello();
?>