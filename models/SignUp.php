<?php 
/**
 * 
 */
require_once 'connection.php';

class SignUp
{
	public $nom;
    public $prenom;
    public $telephone;
    public $adresse;
    public $email;
    public $motdepasse;
    public $role="user";
	static $table="clients";

    public function insert(){

     	$cnx = new Connection;
     	$cnx->insert(self::$table,['nom','prenom','role','telephone','adresse','email','motdepasse'],[$this->nom,
         $this->prenom,
         $this->role,
         $this->telephone,
         $this->adresse,
         $this->email,
         $this->motdepasse]);


     }
}