<?php

/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 22/06/2017
 * Time: 11:20
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DresseurRepository")
 * @ORM\Table(name="_pokemonDresseur")
 */
class PokemonDresseur
{
    /**
     * @ORM\Column(type="integer", name="idDresseur")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idDresseur;

    /**
     * @ORM\Column(type="string", length=250, name="nomDress")
     */
    private $nomDress;

    /**
     * @ORM\Column(type="integer")
     */
    private $pieces;

    /**
     * @ORM\Column(type="string", length=250, name="mailDress")
     */
    private $mailDress;

    /**
     * @ORM\Column(type="string", length=250, name="mdpDress")
     */
    private $mdpDress;

    /**
     * @ORM\Column(type="string", length=250, name="confirmationToken")
     */
    private $confirmationToken;

    /**
     * @ORM\Column(type="string", length=250, name="confirmationDate")
     */
    private $confirmationDate;



    public function setIdDresseur($idDresseur)
    {
        $this->idDresseur = $idDresseur;

        return $this;
    }


    public function getIdDresseur()
    {
        return $this->idDresseur;
    }

    public function setNomDresseur($nomDress)
    {
        $this->nomDress = $nomDress;

        return $this;
    }

    public function getNomDresseur()
    {
        return $this->nomDress;
    }


    public function setNbPieces($nbPiece)
    {
        $this->pieces = $nbPiece;
        return $this;
    }

    public function getNbPiece()
    {
        return $this->pieces;
    }

    public function setMailDress($mailDress)
    {
        $this->mailDress = $mailDress;

        return $this;
    }


    public function getMailDress()
    {
        return $this->mailDress;
    }

    public function setMdpDress($mdpDress)
    {
        $this->mdpDress = $mdpDress;

        return $this;
    }

    public function getMdpDress()
    {
        return $this->mdpDress;
    }

    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    public function getConfirmationDate()
    {
        return $this->confirmationDate;
    }
}