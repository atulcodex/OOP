<?php

	function __autoload($class)		//autoload function
	{
		include "cdata/$class.php";
	}

	$atul = new atul();     //it is object of class
	$bharat = new bharat();
	$abdul = new abdul();

	echo $atul->name;		//for printing output
	echo $atul->email;


	echo $bharat->name;		//for printing output
	echo $bharat->email;


	echo $abdul->name;		//for printing output
	echo $abdul->email;
?>