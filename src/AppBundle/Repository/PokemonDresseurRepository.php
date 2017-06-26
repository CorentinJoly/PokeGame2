<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 22/06/2017
 * Time: 15:24
 */
// src/AppBundle/Repository/PokemonDresseurRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class PokemonDresseurRepository extends EntityRepository
{    

    public function getDetailPokemon($idPokemon)
    {
        return $this->createQueryBuilder('m')
                    ->where("m.idPokemonConcerne = ?1")
                    ->setParameter(1, $idPokemon)
                    ->getQuery()
                    ->getResult();
    }

    function miseEnVente($prix, $idPokemon)
    {
        return $this->getEntityManager()->createQuery('UPDATE _pokemonAssoDresseur SET enVente =1, prix = '.$prix.' WHERE idPkm = '.$idPokemon)->getResult();
    }

    function retirerVente($idPokemon)
    {
        return $this->getEntityManager()->createQuery('UPDATE _pokemonAssoDresseur SET enVente =0, prix = 0 WHERE idPkm = '.$idPokemon)->getResult();


    }

    function getCourbe($idPokemon)
    {
        return $this->getEntityManager()->createQuery('SELECT courbe FROM _pokemon P, _pokemonAssoDresseur A WHERE P.numeroPokedex = A.idPokemonConcerne and A.idPkm = '.$idPokemon)->getResult();
    }


    public function getNbPokemonDresseur($idDresseur)
    {
        return $this->getEntityManager()->createQuery('SELECT COUNT(idPkm) as nbPokemon FROM _pokemonAssoDresseur WHERE idDresseurConcerne = '.$idDresseur)->getResult();
    }



}