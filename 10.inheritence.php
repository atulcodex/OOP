<?php
	class bharat
	{
		public $name1 = "bharat";
	}

	class atul extends bharat
	{
		public $name2 = "atul";
	}

	$obj = new atul();

	echo $obj->name1." and ";
	echo $obj->name2." are best friends";
?>