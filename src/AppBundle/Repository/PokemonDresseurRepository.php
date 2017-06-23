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
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Product p ORDER BY p.name ASC'
            )
            ->getResult();
       // $query=
       // $query->setParameter
    }

    public function getListPokemon($idDresseur)
    {
        include 'bdd.php';

        $req = $pdo->prepare("SELECT idPkm, numeroPokedex, espece, description, sexe FROM _pokemon, _pokemonAssoDresseur WHERE _pokemon.numeroPokedex=_pokemonAssoDresseur.idPokemonConcerne AND idDresseurConcerne = ?");
        $req->execute([$idDresseur]);
        $reponses = $req->fetchAll();

        return $reponses;
    }

    function miseEnVente($prix, $idPokemon)
    {
        include 'bdd.php';

        $req = $pdo->prepare("UPDATE _pokemonAssoDresseur SET enVente =1, prix = ? WHERE idPkm = ?");
        $req->execute([$prix, $idPokemon]);
    }

    function retirerVente($idPokemon)
    {
        include 'bdd.php';

        $req = $pdo->prepare("UPDATE _pokemonAssoDresseur SET enVente =0, prix = 0 WHERE idPkm = ?");
        $req->execute([$idPokemon]);
    }

    function getCourbe($idPokemon)
    {
        include 'bdd.php';

        $req = $pdo->prepare("SELECT courbe FROM _pokemon P, _pokemonAssoDresseur A WHERE P.numeroPokedex = A.idPokemonConcerne and A.idPkm = ?");
        $req->execute([$idPokemon]);
        $reponse = $req->fetch();

        return $reponse;
    }


    public function getNbPokemonDresseur($idDresseur)
    {
        include 'bdd.php';

        $req = $pdo->prepare("SELECT COUNT(idPkm) as nbPokemon FROM _pokemonAssoDresseur WHERE idDresseurConcerne = ?");
        $req->execute([$idDresseur]);
        $reponse = $req->fetch();

        return $reponse;
    }



}