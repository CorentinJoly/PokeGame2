<?php
/**
 * Created by PhpStorm.
 * User: Alexis
 * Date: 22/06/2017
 * Time: 15:24
 */
// src/AppBundle/Repository/ProductRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Pokemon;

class PokemonRepository extends EntityRepository
{

    public function getListPokemon()
    {
    	$em = $this->getEntityManager();
    	return $em->createQuery('SELECT p FROM AppBundle:Pokemon p')->getResult();
    }

}