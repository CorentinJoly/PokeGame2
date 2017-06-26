<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 22/06/2017
 * Time: 11:18
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PokemonDresseurRepository")
 * @ORM\Table(name="_pokemonAssoDresseur")
 */
class PokemonAssoDresseur implements JsonSerializable
{
        /**
     * @ORM\Column(type="integer", name="idPkm")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPkm;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="datetime", name="dateLastTrain")
     */
    private $dateLastTrain;

    /**
     * @ORM\Column(type="boolean", name="enVente")
     */
    private $enVente;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity="PokemonDresseur")
     * @ORM\JoinColumn(name="idDresseurConcerne", referencedColumnName="idDresseur")
     */
    private $idDresseurConcerne;

    /**
     * @ORM\ManyToOne(targetEntity="Pokemon")
     * @ORM\JoinColumn(name="idPokemonConcerne", referencedColumnName="numeroPokedex")
     */
    private $idPokemonConcerne;

    /**
     * @ORM\Column(type="float")
     */
    private $experience;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sexe;


    public function setidPkmUnique($idUnique)
    {
        $this->idPkm = $idUnique;

        return $this;
    }

    public function getIdPkmUnique()
    {
        return $this->idPkm;
    }

    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setDateLastTrain($dateLastTrain)
    {
        $this->dateLastTrain = $dateLastTrain;

        return $this;
    }

    public function getDateLastTrain()
    {
        return $this->dateLastTrain;
    }

    public function setEnVente($envente)
    {
        $this->enVente = $envente;

        return $this;
    }

    public function getEnVente()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPrix()
    {
        return $this->idDresseur;
    }

    public function setIdDresseurConcerner($idDresseur)
    {
        $this->idDresseurConcerne = $idDresseur;

        return $this;
    }

    public function getIdDresseurConcerner()
    {
        return $this->idDresseurConcerne;
    }

    public function setPkmConcerner($pkmConcerner)
    {
        $this->idPokemonConcerne = $pkmConcerner;

        return $this;
    }

    public function getPkmConcerner()
    {
        return $this->idPokemonConcerne;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function jsonSerialize() {
        return [
            'idPkm' => $this->idPkm,
            'level' => $this->level,
            'dateLastTrain' => $this->dateLastTrain,
            'enVente' => $this->enVente,
            'prix' => $this->prix,
            'idDresseurConcerne' => $this->idDresseurConcerne,
            'idPokemonConcerne' => $this->idPokemonConcerne,
            'experience' => $this->experience,
            'sexe' => $this->sexe,
        ];
    }

}