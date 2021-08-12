<?php

/**
 * 
 */
require_once 'models/Plats.php';
require_once 'models/Detail.php';
require_once 'models/Restaurant.php';
class Home
{
	
	function index($page)
	{
		$obj = new Plats;
	    $bestseller=$obj->bestseller();
		$obj = new Restaurant;
	    $restaurant=$obj->getAll();
		$obj = new Plats;
	    $dheure=$obj->derniereheure();
	
		if(isset($_SESSION['role'])){
			$obj = new Details;
		$nmbr=$obj->countpanier();
		}
		
		require __DIR__."/../views/user/".$page.'.php';
	}
	
}