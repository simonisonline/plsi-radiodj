<?php
namespace PlsiRadiodjBundle\Entity;

use Doctrine\ORM\EntityRepository;

class SubcategoryRepository extends EntityRepository{
    public function findAllOrderedByName(){
        return $this->getEntityManager()
            ->createQuery(
//                'SELECT c FROM PlsiRadiodjBundle:Subcategory c ORDER BY c.id ASC WHERE c.parentid = 1'
                'SELECT c FROM PlsiRadiodjBundle:Subcategory c WHERE c.parentid = 1 ORDER BY c.name ASC '
            )
            ->getResult();
    }
    
    public function findByCat($id){
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM PlsiRadiodjBundle:Subcategory c WHERE c.parentid = '.$id.' ORDER BY c.name ASC'
            )->getArrayResult();
//            ->getResult();
        
    }
}
