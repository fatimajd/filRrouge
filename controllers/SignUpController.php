<?php

/**
 * 
 */
require_once 'models/SignUp.php';
class SignUpController
{
	
	function index()
	{
		require_once 'views/user/signUp.php';
	}
	public function save(){

		$obj = new SignUp;
		$obj->nom = $_POST["nom"];
		$obj->prenom = $_POST["prenom"];
		$obj->telephone = $_POST["telephone"];
		$obj->adresse = $_POST["adresse"];
		$obj->email = $_POST["email"];
		$obj->motdepasse = $_POST["motdepasse"];
		$obj->insert();
		// header("location:http://localhost/brief5/matiere/index");
	}

}