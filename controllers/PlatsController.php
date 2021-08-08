<?php

/**
 * 
 */
require_once 'models/Plats.php';
class PlatsController
{
	function index()
	{
		$obj = new Plats;
	    $plats=$obj->getAll();
		require_once 'views/restaurant/NosPlats.php';
	}
	
	public function save(){

		$obj = new Plats;
		$obj->nom = $_POST["nom"];
		$obj->date = $_POST["date"];
		$obj->heure = $_POST["heure"];
		$obj->image = $_POST["image"];
		$obj->prix=$_POST["prix"];
		$obj->prixenc = $_POST["prixenc"];
		$obj->nmbrplats = $_POST["nmbrplats"];
		
		$obj->insert();
		
		header("location:http://localhost/FileRouge/FileRouge/Plats/index");
	}
	function edit($id){
		$obj = new Plats;
		$plats = $obj->edit($id);
		require_once 'views/restaurant/platsUpdate.php';
	}
	 
	 public function update($id){
	 	
		$obj = new Plats;
		$obj->nom = $_POST["nom"];
		$obj->date = $_POST["date"];
		$obj->heure = $_POST["heure"];
		$obj->image = $_POST["image"];
		$obj->prix=$_POST["prix"];
		$obj->prixenc = $_POST["prixenc"];
		$obj->nmbrplats = $_POST["nmbrplats"];
		$obj->updateone($id);
		header("location:http://localhost/FileRouge/FileRouge/Plats/index");
	}
	public function delete($id){
		$obj = new Plats;
		$obj->deleteone($id);
		header("location:http://localhost/FileRouge/FileRouge/Plats/index");
	}
	

}