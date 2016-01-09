<?php
class DBC {
	// DataBase Connection
	private $host = DB_HOST;
	private $user = DB_USER;
	private $password = DB_PASSWORD;
	private $name = DB_NAME;
	private $dbc;

	
	public function connect(){
		$this->dbc = mysqli_connect($this->host, $this->user, $this->password, $this->name) or die('Error connecting to server');
		return $this->dbc;
	}
	
	public function disconnect(){
		mysqli_close($this->dbc);
	}
}

?>