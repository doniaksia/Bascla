<?php

namespace basclaBundle\Repository\Entity;

use Doctrine\ORM\EntityRepository;
use basclaBundle\Entity\Participant;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\Query;

class ParticipantRepository extends EntityRepository
{


    public function annulation($str,$ev){
        return $this->getEntityManager()
            ->createQuery(
                'DELETE basclaBundle:Participant p
                WHERE p.idClient = :str and
                p.idEvent = :ev  
               '
            )
            ->setParameters(array('str' => $str , 'ev'=> $ev))
            ->execute();
    }


}
