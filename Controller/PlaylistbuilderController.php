<?php

namespace PlsiRadiodjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use PlsiRadiodjBundle\Form\SearchType;

class PlaylistbuilderController extends Controller {

    /**
     * @Route("playlistbuilder", name="playlistbuider")
     * @Template()
     */
    public function indexAction(){
        $allCategory = $this->get('doctrine')
                ->getRepository('PlsiRadiodjBundle:Category')
                ->findAllOrderedByName();
        $allGenre = $this->get('doctrine')
                ->getRepository('PlsiRadiodjBundle:Genre')
                ->findAllOrderedByName();
        $options['catData'] = $allCategory;
        $options['genData'] = $allGenre;
        
        $form = $form = $this->createForm(new SearchType(),$options);
        return array(
                'form' => $form->createView(),
            'Genre' => $allGenre
        );
    }
    
//    private function buildChoices($Category){
//        $all = $this->get('doctrine')
//                ->getRepository('PlsiRadiodjBundle:' . $Category)
//                ->findAllOrderedByName();
//
//        $choices = [];
//        $choices[] = 'all';
//        foreach($all as $table2Obj){
//            $choices[$table2Obj->getId()] = $table2Obj->getId() . ' - ' . $table2Obj->getName();
//        }
//        return $choices;
//    }

}
