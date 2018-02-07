<?php
namespace App\Model;
class Contact
{
    private $nom;
    private $prenom;
    private $mail;
    private $tel;
    private $mobile;
    /**
     * Contact constructor.
     * @param $nom
     * @param $prenom
     * @param $mail
     * @param $tel
     * @param $mobile
     */

    public function __construct(String $nom, String $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    /**
     * @return string
     */
    public function getNom() : string
    {
        return $this->nom;
    }
    /**
     * @return string
     */
    public function getPrenom() : string
    {
        return $this->prenom;
    }
    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }
    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}