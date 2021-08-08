<?php

/**
 * 
 */
require_once 'models/Plats.php';
require_once 'models/Restaurant.php';
require_once 'models/Detail.php';

class GalleryController
{
	
	function index()
	{
		$obj = new Plats;
	    $plats=$obj->gallery();
		$obj = new Restaurant;
		$restaurants=$obj->getAll();
		if(isset($_SESSION['role'])){
		$obj = new Details;
		$nmbr=$obj->countpanier();	
		}
		
		require_once 'views/user/gallery.php';
	
	}
	// function countt()
	// {
    //     $obj = new Details;
	// 	$countt=$obj->countpanier();	
	// 	return $countt('count');
	  
	// }
}