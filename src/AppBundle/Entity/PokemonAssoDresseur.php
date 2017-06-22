<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 22/06/2017
 * Time: 11:18
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pokemon")
 */
class PokemonAssoDresseur
{
        /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPkm;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateLastTrain;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enVente;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="integer")
     */
    private $idDresseurConcerne;

    /**
     * @ORM\Column(type="integer")
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
}