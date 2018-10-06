<?php
	class base
	{
		public function basename()
		{
			echo "I am base";
		}
	}

	class derived extends base
	{
		public function basename()
		{
			echo "I am derived";
		}
	}

	$obj = new derived();
	echo $obj->basename();
?>