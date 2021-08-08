<?php
/**
 * 
 */
require_once 'connection.php';

class Login 
{
	private $email;
	private $motdepasse;
	public $tableradio;
	public function setemail($email)
	{
		$this->email = $email;
	}
	public function setpassword($motdepasse)
	{
		$this->motdepasse = $motdepasse;
	}

	public function log (){
		$cnx = new Connection;
		$requette="SELECT * FROM `$this->tableradio` Where email='$this->email' AND motdepasse='$this->motdepasse'";
		$query=$cnx->sql->query($requette);
		return $query;


	}
}
?>