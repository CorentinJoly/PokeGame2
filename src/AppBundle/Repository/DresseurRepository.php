<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 22/06/2017
 * Time: 15:24
 */
// src/AppBundle/Repository/DresseurRepository.php
namespace AppBundle\Repository;


class DresseurRepository extends EntityRepository
{

    //Ligne 42 de l'index
    function verifMail($mailDresseur)
    {
        include 'bdd.php';

        $req = $pdo->prepare("SELECT mailDress from _pokemonDresseur where mailDress = ?");
        $req->execute([$mailDresseur]);
        $reponse = $req->fetch();

        return $reponse;
    }

    function connexion($username)
    {
        include 'bdd.php';

        $req = $pdo->prepare("SELECT * FROM _pokemonDresseur WHERE (nomDress = :username OR mailDress = :username) AND confirmationDate IS NOT NULL");
        $req->execute(['username' => $username]);
        $reponse = $req->fetch();

        return $reponse;
    }


}