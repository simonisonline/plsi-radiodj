<?php
namespace PlsiRadiodjBundle\Entity;

use Doctrine\ORM\EntityRepository;

class GenreRepository extends EntityRepository
{
    public function findAllOrderedByName(){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM PlsiRadiodjBundle:Genre c ORDER BY c.id ASC'
            )
            ->getResult();
    }
}
