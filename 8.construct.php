<?php
	class atul
	{
		public function __construct()		//construtor function
		{
			echo "its constuctor function<br>";
		}

		public function __destruct()
		{
			echo "destrudtor function<br>";
		}


		public function road()
		{
			echo "its normal function<br>";
		}
	}

	$a = new atul();

	echo $a->road();
?>