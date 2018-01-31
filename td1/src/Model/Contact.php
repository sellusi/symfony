<?php
namespace  App\Model;

class Contact{
    private $nom;
    
    public function __construct(){
        $this->nom="SMITH";
    }
    
    public function getNom(){
        return $this->nom;
    }
}