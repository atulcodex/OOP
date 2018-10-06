<?php
	class pens
	{
		private $name = "private class";

		private function ball()
		{
			echo "hello mr. dj";
		}

		public function jell()
		{
			echo $this->ball();
		}
	}

	$p = new pens();

	echo $p->jell();		//in this code or file i am using private variable in same class
?>