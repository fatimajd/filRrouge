<?php

/**
 * 
 */
require_once 'models/Plats.php';
require_once 'models/Restaurant.php';
require_once 'models/Detail.php';
require_once 'models/Contact.php';
class AdminController
{
	
	public function index(){
		if(!isset($_SESSION['role'])){
			header('Location:http://localhost/FileRouge/FileRouge/Login/index');
			exit();
		}else{
		$obj = new Restaurant;
		$nmbr=$obj->countRestaurant();
		$obj = new Contact;
		$nmbrM=$obj->countMessage();
		require_once 'views/admin/AdminPage.php';
	}}
	
	
}