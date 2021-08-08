<?php

/**
 * 
 */
require_once 'models/Plats.php';
require_once 'models/Detail.php';
require_once 'models/Commande.php';
class CommandeController
{
	

	function index()
	{
        $commande = new Commande;
        $commandes=$commande->getAll();

        require_once 'views/restaurant/NosCommande.php';
    }
    public function save()
    {
            $commande = new Commande;
            $i=0;
            while(isset($_POST['quantite'.$i]) && !empty($_POST['quantite'.$i]))
            {
         
            $commande->idP=$_POST['id'.$i];
            $commande->quantite=$_POST['quantite'.$i];
            $commande->prixtotal=$_POST['prixtotal'];
            $commande->total=$_POST['total'];
            $date = date('Y-m-d H:i:s');
            $commande->date=$date;
            $commande->insert();
            $i++;
            }
      
        header('location:http://localhost/FileRouge/FileRouge/Detail/deleteAll');

    }
}