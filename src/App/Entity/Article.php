<?php

namespace App\Entity;

class Article
{

    /**
     * @var string  $reference  reference du produit
     */
    private $reference;

     /**
     * @var string  $tradeName  nom commercial du produit
     */
    private $tradeName;

     /**
     * @var string  $description  description du produit
     */
    private $description;

    public function setReference($reference){
        $this->reference = $reference;

    }
}