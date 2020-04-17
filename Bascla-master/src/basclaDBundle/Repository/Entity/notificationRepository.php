<?php

namespace basclaDBundle\Repository\Entity;

use Doctrine\ORM\EntityRepository;
use basclaDBundle\Entity\Notification;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;

class notificationRepository extends EntityRepository
{


    public function findbydate(){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM basclaDBundle:notification p
                WHERE p.date >= CURRENT_DATE()'
            )
            ->getResult();
    }
    public function deletenotif($nom){
        return $this->getEntityManager()
            ->createQuery(
                'Delete  basclaDBundle:notification p
                WHERE p.title = :nom'
            )->setParameter('nom', '%'.$nom.'%')
            ->execute();
    }


}
