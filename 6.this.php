<?php
	class tea
	{
		public $assam = "assam tea ";
		public $name = "ctc mamari";
		public $price = 340;

		public function leaves()
		{
			echo "Location :".$this->assam."| Name of tea :".$this->name."| Price of tea :".$this->price;
		}
	}

	$t = new tea();

	$t->leaves();
?>