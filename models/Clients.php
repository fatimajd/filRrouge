<?php 
/**
 * 
 */
require_once 'connection.php';

class Clients
{
	public $nom;
    public $prenom;
    public $telephone;
    public $adresse;
    public $email;
   
    
	static $table="clients";

    
 
    public static function getOneClient(){
    	$cnx = new Connection;
        $id=$_SESSION['id'];
    	$requette="SELECT * FROM `clients` WHERE id=$id";
        $query=$cnx->sql->query($requette);
		return $query;
    }
    public function updateone($id){
        $cnx = new Connection;
        $cnx->update(self::$table,['nom','prenom','telephone','adresse','email'],[$this->nom,
        $this->prenom,
        
        $this->telephone,
        $this->adresse,
        $this->email],$id);
    }
    }