<?php 
/**
 * 
 */
require_once 'connection.php';

class Plats
{
	public $nom;
    public $date;
    public $heure;
    public $image;
    public $prix;
    public $prixenc;
    public $nmbrplats;
   
    
	static $table="plats";
   
 
 public function insert(){

     	$cnx = new Connection;
        $idR=$_SESSION['id'];
       
     	$cnx->insert(self::$table,['nom','date','heure','image','prix','prixenc','nmbrplats','idR'],[$this->nom,
         $this->date,
         
         $this->heure,
         $this->image,
         $this->prix,
         $this->prixenc,
         $this->nmbrplats,
         $idR]);
         
        }
     public static function getAll(){
    	$cnx = new Connection;
        $idU=$_SESSION['id'];
    	$requette="SELECT plats.*, restaurant.ville FROM `plats`,`restaurant` WHERE plats.idR=restaurant.id and restaurant.id=$idU";
        $query=$cnx->sql->query($requette);
		return $query;
    }
    public static function gallery(){
    	$cnx = new Connection;
        
    	$requette="SELECT plats.*, restaurant.ville FROM `plats`,`restaurant` WHERE plats.idR=restaurant.id";
        $query=$cnx->sql->query($requette);
		return $query;
    }
    public static function getoneplat($id){
    	$cnx = new Connection;
        
    	$requette="SELECT plats.*, restaurant.ville ,restaurant.nom as'nomrest' FROM `plats`,`restaurant` WHERE plats.idR=restaurant.id and plats.id=$id";
        $query=$cnx->sql->query($requette);
		return $query;
    }
    public function edit($id) {
        $cnx = new Connection;
        return $cnx->edit(self::$table,$id);

   }
   public function updateone($id){
       $cnx = new Connection;
       $cnx->update(self::$table,['nom','date','heure','image','prix','prixenc','nmbrplats'],[$this->nom,
       $this->date,
       
       $this->heure,
       $this->image,
       $this->prix,
       $this->prixenc,
       $this->nmbrplats],$id);
   }
   public static function deleteone($id){
    $cnx = new Connection;
    $cnx->delete(self::$table,$id);
}
    public function bestseller(){
        $cnx = new Connection;
        $requette="SELECT * FROM `plats` WHERE nmbrachat >=10";
        $query=$cnx->sql->query($requette);
		return $query;
    }
    public function derniereheure(){
        $cnx = new Connection;
        $requette="SELECT * FROM `plats` WHERE TIMESTAMPDIFF(HOUR,heure, CURRENT_TIME())<=1 and timestampdiff(DAY,date,CURDATE())=0";
        $query=$cnx->sql->query($requette);
		return $query;
    }
    public static function countPlats(){
        $cnx = new Connection;
        $idR=$_SESSION['id'];
        $requette="SELECT COUNT(*)as 'number' FROM `plats` WHERE idR=$idR";
        $query=$cnx->sql->query($requette);
        return $query->fetch();
    }
  
}