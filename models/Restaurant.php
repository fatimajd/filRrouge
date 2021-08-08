<?php 
/**
 * 
 */
require_once 'connection.php';

class Restaurant
{
	public $nom;
    public $adresse;
    public $specialite;
    public $ville;
    public $image;
    public $email;
    public $motdepasse;
    
	static $table="restaurant";

    public function insert(){

     	$cnx = new Connection;
     	$cnx->insert(self::$table,['nom','adresse','specialite','ville','image','email','motdepasse'],[$this->nom,
         $this->adresse,
         
         $this->specialite,
         $this->ville,
         $this->image,
         $this->email,
         $this->motdepasse]);


     }
     public static function getAll(){
    	$cnx = new Connection;
    	return $cnx->select(self::$table);
    }
    public function edit($id) {
        $cnx = new Connection;
        return $cnx->edit(self::$table,$id);

   }
   public function updateone($id){
       $cnx = new Connection;
       $cnx->update(self::$table,['nom','adresse','specialite','ville','image'],[$this->nom,
       $this->adresse,
       
       $this->specialite,
       $this->ville,
       $this->image],$id);
   }
   public static function deleteone($id){
    $cnx = new Connection;
    $cnx->delete(self::$table,$id);
}
public static function countRestaurant(){
    $cnx = new Connection;
    $requette="SELECT COUNT(*)as 'number' FROM `restaurant`";
    $query=$cnx->sql->query($requette);
    return $query->fetch();
}

}