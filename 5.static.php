<?php
	class menu
	{
		public static $soup = "tomato soup with gravi";
		public static $noodles = "fried rice noodels";
		public static $tikka = "chicken tikka";

		public static function veg()
		{
			return self::$soup."<br>";
		}
	}

	echo menu::$noodles="only fried rice<br>";

	echo menu::veg();

	class submenu extends menu
	{
		public static function nonveg()
		{
			return parent::$tikka;         //same execution on use of self and parent
		}
	}

	echo submenu::nonveg();			//Note:scope resolution operator(::)
?>