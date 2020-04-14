<?php

namespace basclaBundle\Repository\Entity;

use Doctrine\ORM\EntityRepository;
use basclaBundle\Entity\Challenge;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;

class ChallengeRepository extends EntityRepository
{


    public function weeklypost(){

        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM basclaBundle:Challenge p
              ORDER BY p.idCh 
            ')
        
            ->getSingleResult();

    }


}
