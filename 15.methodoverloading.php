<?php
	class base
	{
		static $a = "hiifriends";

		public function atul()
		{
			return self::$a;
		}
	}
	class derived extends base
	{
		public function bharat()
		{
			return parent::$a;
		}
	}

	$obj = new derived();

	echo $obj->atul()."<br>";
	echo $obj->bharat();
?>