<?php


abstract class Modele{
    public $pdo;
    public $table;
    function __construct()
    {
        $this->pdo = Base::getPDO();
    }



    function show(){
        $sql = "SELECT * from $this->table";
        $stmt = $this->pdo->query($sql);
        
        $resultat = $stmt->fetchAll();
        require_once('../../templates/annonce/index.php');
    }
    function showByID($id){
        $sql = "SELECT * from $this->table where `id` = :id ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt ->execute();
        $resultat = $stmt->fetch();
        $comm = new Commentaire();
       $commentaires = $comm->findAllbyAnnonce($id);
        require_once('../../templates/annonce/show.php');
    }
}