<?php


class ControlleurAnnonce{
    public $modele="annonce";
    
    function show(){
        $modele= "annonce";
        $unmodele=new $modele();
        $annonces =$this->Modele->show(); 
    }
}