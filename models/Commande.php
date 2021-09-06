<?php 
/**
 * 
 */
require_once 'connection.php';

class Commande
{
	public $idP;
    public $date;
    public $quantite;
    public $prixtotal;
    public $total;
    public $idL=1;
   
    
	static $table="commande";
   
 
 public function insert(){

     	$cnx = new Connection;
        $idC=$_SESSION['id'];
        $cnx->insert(self::$table,['Date','idC','idP','idL','total','sousTotal','quantite'],[$this->date,
        $idC,
        $this->idP,
        $this->idL,
        $this->total,
        $this->prixtotal,
        $this->quantite]);
        
    }
    public function getAll(){
        $cnx = new Connection;
        $idR=$_SESSION['id'];
        $requette="SELECT plats.nom as'nomP',plats.prix as'prix',plats.image as'imageP',clients.nom as'nomC',clients.adresse,
        clients.telephone,clients.email,
        commande.total,commande.quantite ,commande.date as'dateC' 
        FROM `plats`,`clients`,`commande` WHERE plats.id=commande.idP 
        and clients.id=commande.idC and plats.idR=$idR ORDER BY dateC DESC";
        $query=$cnx->sql->query($requette);
        return $query->fetchAll();
    }
    public static function countCommande(){
        $cnx = new Connection;
        $idR=$_SESSION['id'];
        $requette="SELECT COUNT(*)as'number' FROM `commande`,`plats` WHERE commande.idP=plats.id AND  plats.idR=$idR";
        $query=$cnx->sql->query($requette);
        return $query->fetch();
    }
   
   
        
    
}