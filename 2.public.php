<?php
	class home
	{
		public $name = "Atul Prajapati";
		public $age = 19;

		public function hello()
		{
			echo "Hello world ";
			echo $this->name."<br>";   //we can use public variable In the class
		}

	}
    $obj = new home();

	echo $obj -> hello();   // In this line i am using public variable outside the class

	echo $obj -> name."<br><br>";		// In this line i am using public variable outside the class


	class ghar extends home
	{
		public function boll()
		{
			echo "Hii Bollywood";
		}
	} 

	$h = new ghar();

	echo $h -> boll()."<br>";
	echo $h -> name;            //In this line i am using public variable in the sub class of the php
?>