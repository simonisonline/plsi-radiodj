<?php

namespace PlsiRadiodjBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

//use PlsiRadiodjBundle\Form\SearchType;

class SongsController extends Controller {

    public function indexAction(Request $request){
        $form = $this->createFormBase();
        $data = $request->query->all();
        $repo = $this->getDoctrine()->getRepository('PlsiRadiodjBundle:Songs');

        if(isset($data['form'])){
            if(isset($data['form']['search'])){
                if($data['form']['category']){
                    $query = $repo->findSearchBySub($data['form']['search'], $data['form']['subcategory']);
                }else{
                    $query = $repo->findSearch($data['form']['search']);
                }
            }
        }else{
            $query = $repo->findAll();
        }

        $pagination = $this->pag($query, $request->query->get('page', 1));

        return $this->render('PlsiRadiodjBundle:Songs:index.html.twig', array(
                    'form' => $form->createView(),
                    'pagination' => $pagination,
                    'data' => $data
        ));
    }
    
    private function pag($query, $page){
        $paginator = $this->get('knp_paginator');
        return $paginator->paginate(
                $query, //get the results here
                $page, //$request->query->get('page', 1), // page
                $this->container->getParameter('plsi_radiodj.search_limit') //limit per page
        );
    }

    public function showAction($id){
        $repository = $this->getDoctrine()->getRepository('PlsiRadiodjBundle:Songs');
        $songs = $repository->find($id);
        return $this->render('PlsiRadiodjBundle:Songs:show.html.twig', array(
                    'id' => $id,
                    'songs' => $songs
        ));
    }

    public function editAction(){
        return $this->render('PlsiRadiodjBundle:Songs:edit.html.twig', array(
                        // ...
        ));
    }

    public function ajaxformAction(Request $request){

        $allParam = $request->query->all();
        $subId = $request->query->get('subId');

        $all = $this->get('doctrine')
                ->getRepository('PlsiRadiodjBundle:Subcategory')
                ->findByCat($subId);

        $return = array(
            "responseCode" => 200,
            "subId" => $subId,
            'allParam' => $allParam,
            'allOrder' => $all
        );
        $return1 = json_encode($return); //jscon encode the array
        return new Response($return1, 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
    }

    private function createFormBase(){
        return $this->createFormBuilder()
                        ->setMethod('GET')
                        ->add('search', 'text')
                        ->add('category', 'choice', array(
                            'mapped' => false,
                            'choices' => $this->buildChoices('Category')
                        ))
                        ->add('subcategory', 'choice', array(
                            'mapped' => false,
                            'choices' => array('0' => 'all')// $this->buildChoices('Subcategory')
                        ))
                        ->add('save', 'submit', array('label' => 'Search'))
                        ->getForm();
    }

//CategoryRepository
    private function buildChoices($Category){
        $all = $this->get('doctrine')
                ->getRepository('PlsiRadiodjBundle:' . $Category)
                ->findAllOrderedByName();

        $choices = [];
        $choices[] = 'all';
        foreach($all as $table2Obj){
            $choices[$table2Obj->getId()] = $table2Obj->getId() . ' - ' . $table2Obj->getName();
        }
        return $choices;
    }

}
