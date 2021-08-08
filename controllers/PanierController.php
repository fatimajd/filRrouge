<?php

/**
 * 
 */
require_once 'models/Detail.php';
require_once 'models/Plats.php';
class PanierController
{
	function index()
	{
		$prix=0;
		$total=0;
		$obj = new Details;
		$nmbr=$obj->countpanier();
		$obj = new Details;
		$plats=$obj->getAll();
		for($i=0;$i<count($plats);$i++){
		$prix +=(float)($plats[$i]['prix'])*(int)($plats[$i]['quantite']);
	}
		$total=$prix+10;
		require_once 'views/user/Panier.php';
	}
	
	
}