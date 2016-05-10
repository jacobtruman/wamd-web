<?php

class DBConn extends MySqli
{
	public function __construct($dbname = "wamd")
	{
		parent::__construct('localhost', 'web_user', '######', $dbname);
	}
	
	public function query($query)
	{
		$result = parent::query($query);
		
		if(strlen($this->error))
			throw new Exception($this->error);
		
		return $result;
	}
}

?>
