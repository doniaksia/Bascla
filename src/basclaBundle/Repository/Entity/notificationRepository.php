<?php

namespace basclaBundle\Repository\Entity;

use Doctrine\ORM\EntityRepository;
use basclaBundle\Entity\Notification;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;

class notificationRepository extends EntityRepository
{


    public function findbydate(){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p
                FROM basclaBundle:notification p
                WHERE p.date >= CURRENT_DATE()'
            )
            ->getResult();
    }
    public function deletenotif($nom){
        return $this->getEntityManager()
            ->createQuery(
                'Delete  basclaBundle:notification p
                WHERE p.title = :nom'
            )->setParameter('nom', '%'.$nom.'%')
            ->execute();
    }


}
