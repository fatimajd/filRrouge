<?php

/**
 * 
 */
require_once 'models/Detail.php';
class AboutController
{
	
	function index()
	{
		if(isset($_SESSION['role'])){
		$obj = new Details;
		$nmbr=$obj->countpanier();}
		require_once 'views/user/AboutUs.php';
	}
}