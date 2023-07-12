<h1>construct and destruct</h1>
<?php

class par
	{

		function __construct()
		{
			echo "This is constructor function <br>";
			$this->name = "root ";
		}
    
		function __destruct()
		{
			echo "Destroying tha function <br>" . $this->name . "\n";
		}
	}
$obj = new par();



?>
