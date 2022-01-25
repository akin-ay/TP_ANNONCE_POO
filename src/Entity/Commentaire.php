<?php
require_once('./../src/base.php');
require_once('./../src/Entity/Modele.php');

class Commentaire extends Modele{
   

    function findAllbyAnnonce($id){
        $sql = "SELECT * from annoncepoo.commentaire where `annonce_id` = :id ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt ->execute();
        $commentaires = $stmt->fetch();
        return $commentaires;
    }
   
}
