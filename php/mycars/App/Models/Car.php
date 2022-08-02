<?php 

namespace App\Models;

/**
 * Représente une voiture
 */
class Car 
{
    /** @var int $id Identifiant de la voiture */
    public int $id;

    /** @var string Nom de la voiture */
    public string $name;

    /** @var string $release La date de sortie de la voiture */
    public string $release;


    public int $toto;

    /**
     * Construire une nouvelle voiture par défaut
     */
    public function __construct()
    {
        $this->toto = ($this->id * 2);
    }
}