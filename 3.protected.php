<?php
	class home
	{
		protected $name = "Atul Prajapati";
		protected $age = 19;

		protected function hello()
		{
			echo "Hello world ";
		}
	}

	class home2 extends home
	{
		public function house()
		{
			echo $this->name;
		}
	}

	$h = new home2;				//In this code or file i am using protected variable in child class
	echo $h->house();
?>