<?php

/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 22/06/2017
 * Time: 11:20
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PokemonRepository")
 * @ORM\Table(name="_pokemon")
 */
class Pokemon implements JsonSerializable
{
    /**
     * @ORM\Column(type="integer", name="numeroPokedex")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $numeroPokedex;

    /**
     * @ORM\Column(type="boolean")
     */
    private $evolution;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $espece;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $courbe;



    public function setNumeroPokedex($numeroPokedex)
    {
        $this->numeroPokedex = $numeroPokedex;

        return $this;
    }


    public function getNumeroPokedex()
    {
        return $this->numeroPokedex;
    }

    public function setEvolution($evolution)
    {
        $this->evolution = $evolution;

        return $this;
    }


    public function getEvolution()
    {
        return $this->evolution;
    }

    public function setEspece($espece)
    {
        $this->espece = $espece;

        return $this;
    }


    public function getEspece()
    {
        return $this->espece;
    }

    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


    public function getDescription()
    {
        return $this->description;
    }

    public function setCourbe($courbeExp)
    {
        $this->courbe = $courbeExp;

        return $this;
    }


    public function getCourbe()
    {
        return $this->courbe;
    }

    public function jsonSerialize() {
        return [
            'Numero' => $this->numeroPokedex,
            'Pokemon' => $this->espece,
            'Description' => $this->description,
            'Courbe' => $this->courbe
        ];
    }
}