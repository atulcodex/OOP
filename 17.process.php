<?php
	class conn
	{
		public $server = "localhost";
		public $username = "root";
		public $password = "";
		public $database = "oop";

		public $link;
		public $error;

		public function __construct()
		{
			$this->connect();
		}
		private function connect()
		{
		  $this->link = new mysqli($this->server, $this->username,$this->password,$this->database);

			  if (!$this->link) 
			  {
			  	$this->error = "connection failed :". $this->link->connect_error;
			  }
	    }

			  public function insert($query)
			  {
              	$result = $this->link->query($query);

			    if ($result) 
			    {
			    	echo "registration successfull";
			    }
			    else
			    {
			    	echo "registration failed";
			    }
			  }
		

	}
?>