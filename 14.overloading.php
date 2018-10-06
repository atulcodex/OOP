<?php
	class over
	{
		public function add($data,$value)
		{
			echo "data is ".$data;
			echo "data is ".$value;
		}
	}

	$obj = new over();
	$obj->add(12,14);
?>