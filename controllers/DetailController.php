<?php

/**
 * 
 */
require_once 'models/Plats.php';
require_once 'models/Detail.php';
class DetailController
{
	

	function index($id)
	{
        $obj = new Plats;
	    $plats=$obj->getoneplat($id);
		if(!isset($_SESSION['role'])){
			header('Location:http://localhost/FileRouge/FileRouge/Login/index');
			exit();
		}else{
			$obj = new Details;
			$nmbr=$obj->countpanier();
		require_once 'views/user/detail.php';
	  }
	}
	function save($id){
		$obj = new Details;
		if(isset($_POST['submit'])){
		$obj->quantite=$_POST["quantite"];
			
		$obj->insert($id);
		header('Location:http://localhost/FileRouge/FileRouge/Panier/index');
		}else if(isset($_POST['submit2'])){
			$obj->quantite=$_POST["quantite"];	
			$obj->insert($id);
			header('Location:http://localhost/FileRouge/FileRouge/Gallery/index');
			}
	}
	public function delete($id){
		$obj = new Details;
		
		$obj->deleteone($id);
	
		header("location:http://localhost/FileRouge/FileRouge/Panier/index");
	}
	public function deleteAll(){
		$obj = new Details;
		
		$obj->delete($id);
	
		header("location:http://localhost/FileRouge/FileRouge/Panier/index");
	}
	public function update($id){
	 	
		$obj = new Details;
		$obj->quantite = $_POST["qtt"];
	
		$obj->updateone($id);
		header("location:http://localhost/FileRouge/FileRouge/Panier/index");
	}
}