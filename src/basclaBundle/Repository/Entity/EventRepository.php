<?php

namespace basclaBundle\Repository\Entity;

use Doctrine\ORM\EntityRepository;
use basclaBundle\Entity\Event;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;

class EventRepository extends EntityRepository
{


    public function findEntitiesByString($str){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM basclaBundle:Event p
                WHERE p.title LIKE :str or
                p.description LIKE :str or 
                p.categorie
              LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();
    }

}
