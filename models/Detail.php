<?php 
/**
 * 
 */
require_once 'connection.php';

class Details
{

    public $quantite;
   
   
    
	static $table="lignecommande";
   
 
 public function insert($id){

     	$cnx = new Connection;
         $idC=$_SESSION['id'];
         $idP=$id;
       
     	$cnx->insert(self::$table,['idP','idC','quantite'],[$idP,$idC,$this->quantite]);
 }
//  public function nmbrachat($id){
//     $cnx = new Connection;
//     $requette="UPDATE `plats` SET nmbrachat=nmbrachat+1 WHERE id=$id";
//     $query=$cnx->sql->query($requette);
//     return $query;
// }
 public function countpanier(){
    $cnx = new Connection;
    $idC=$_SESSION['id'];
    $requette="SELECT COUNT(*)as 'number' FROM `lignecommande` WHERE idC=$idC";
    $query=$cnx->sql->query($requette);
    return $query->fetch();
}
public function getAll(){
    $cnx = new Connection;
    $idC=$_SESSION['id'];
    $requette="SELECT plats.*, lignecommande.quantite,lignecommande.id as'idl' FROM `plats`,`lignecommande` WHERE plats.id=lignecommande.idP and lignecommande.idC=$idC";
    $query=$cnx->sql->query($requette);
    return $query->fetchAll();
}

public static function deleteone($id){
    $cnx = new Connection;
    $cnx->delete(self::$table,$id);
}
public static function delete(){
    $cnx = new Connection;
    $idC=$_SESSION['id'];
    $requette="DELETE FROM `lignecommande` WHERE idC=$idC";
    $query=$cnx->sql->query($requette);
    return $query;
}
}