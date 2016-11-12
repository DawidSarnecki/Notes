<?

//constructor inside Connection php class

	public function __construct()
	{
	// Connect to a MySQL database using driver invocation using Data Source Name (dsn)
		$dsn = 'mysql:host='. $this->dbhost .  ';dbname='. $this->dbname;

	// Create new PDO connection
		try 
		{
			$this->conn = new PDO($dsn, $this->dbuser, $this->dbpass);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			
			//THE MOST IMPORTANT PLACE !!!
			$this->conn->query ('SET NAMES utf8');

		}catch(PDOException $e)
		{
			$this->error = $e ->getMessage();
			echo $this->error;
		}
	}



$this->conn = new PDO($dsn, $this->dbuser, $this->dbpass);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			//add utf8 charset
			$this->conn->query ('SET NAMES utf8');
			
		
###########################################################		
		
		
//usuing classic statements:		
<?php
    mysql_connect($DBhost,$DBuser,$DBpass);
    mysql_query("SET NAMES utf8");
    mysql_select_db($DBname);
 ?>