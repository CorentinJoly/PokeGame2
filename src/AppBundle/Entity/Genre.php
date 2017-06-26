<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 22/06/2017
 * Time: 11:21
 */


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="_genre")
 */
class Genre
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idGenre;

    /**
     * @ORM\Column(type="string" length=50)
     */
    private $libelleGenre;


    public function setIdGenre($idGenre)
    {
        $this->idGenre = $idGenre;

        return $this;
    }


    public function getIdGenre()
    {
        return $this->idGenre;
    }

    public function setLibelleGenre($libelleGenre)
    {
        $this->libelleGenre = $libelleGenre;

        return $this;
    }


    public function getLibelleGenre()
    {
        return $this->libelleGenre;
    }



}

