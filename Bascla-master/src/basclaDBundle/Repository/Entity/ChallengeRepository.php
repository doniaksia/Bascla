<?php

namespace basclaDBundle\Repository\Entity;

use Doctrine\ORM\EntityRepository;
use basclaDBundle\Entity\Challenge;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;

class ChallengeRepository extends EntityRepository
{


    public function weeklypost(){

        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM basclaDBundle:Challenge p
              ORDER BY p.idCh 
            ')
        
            ->getSingleResult();

    }


}
