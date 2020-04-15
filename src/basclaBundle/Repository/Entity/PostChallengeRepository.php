<?php

namespace basclaBundle\Repository\Entity;

use Doctrine\ORM\EntityRepository;
use basclaBundle\Entity\PostChallenge;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;

class PostChallengeRepository extends EntityRepository
{


    public function likeme ($id){

        return $this->getEntityManager()
            ->createQuery(
                'UPDATE basclaBundle:PostChallenge u SET u.nmbReaction = u.nmbReaction + 1  WHERE u.idPc  = :id

            ')
            ->setParameter('id' , $id)
        
            ->execute();

    }
    public function count(){

        return $this->getEntityManager()
            ->createQuery(
                'SELECT COUNT(p.idPc)
                FROM basclaBundle:PostChallenge p 
                
                '
            )
            ->getSingleResult();
    }

}
