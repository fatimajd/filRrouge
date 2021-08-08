<?php 
/**
 * 
 */
require_once 'connection.php';

class Contact
{
	public $nom;
    public $sujet;
    public $message;
   
    
	static $table="contact";

    public function insert(){

     	$cnx = new Connection;
     	$cnx->insert(self::$table,['nom','sujet','message'],[$this->nom,$this->sujet,$this->message]);


     }
     public static function getAll(){
    	$cnx = new Connection;
    	return $cnx->select(self::$table);
    }
    public static function deleteone($id){
        $cnx = new Connection;
        $cnx->delete(self::$table,$id);
    }
    public static function countMessage(){
        $cnx = new Connection;
        $requette="SELECT COUNT(*)as 'number' FROM `contact`";
        $query=$cnx->sql->query($requette);
        return $query->fetch();
    }
    }