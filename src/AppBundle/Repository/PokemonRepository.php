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

class PokemonRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Product p ORDER BY p.name ASC'
            )
            ->getResult();
    }


}