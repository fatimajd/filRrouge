<?php

/**
 * 
 */
require_once 'models/Plats.php';
require_once 'models/Clients.php';
class ProfileController
{
	

	function index()
	{
        if(!isset($_SESSION['role'])){
			header('Location:http://localhost/FileRouge/FileRouge/Login/index');
			exit();
		}else{
        $obj= new Clients;
        $profile=$obj->getOneClient();
 
		require_once 'views/user/profile.php';
    }

    } 
    public function update($id){
	 	
		$obj = new Clients;
		$obj->nom = $_POST["nom"];
		$obj->prenom = $_POST["prenom"];
		$obj->telephone = $_POST["telephone"];
		$obj->adresse = $_POST["adresse"];
		$obj->email=$_POST["email"];
		
		$obj->updateone($id);
		header("location:http://localhost/FileRouge/FileRouge/");
	}
}