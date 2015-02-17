<?php
namespace PlsiRadiodjBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function findAllOrderedByName(){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM PlsiRadiodjBundle:Category c ORDER BY c.id ASC'
            )
            ->getResult();
    }
    
}
