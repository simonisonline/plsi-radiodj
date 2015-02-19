<?php

namespace PlsiRadiodjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller {

    /**
     * @Route("/baseAjax",name="baseAjax")
     * @Template()
     */
    public function baseAction(Request $request){
        if($request->isXmlHttpRequest()){
            $sub = $request->get('sub');
            $search = $request->get('search');
            $genre = $request->get('genre');
            $repo = $this->getDoctrine()->getRepository('PlsiRadiodjBundle:Songs');
            if($genre){
                if($sub === 0){
                    $sub = 1;
                }
                $query = $repo->findSearchByGerne($search, $sub, $genre);
//                echo 'search: ' . $search . '<br>sub: ' . $sub . '<br>' . 'gerne: ' . $genre . '<br>';
//                exit('dood');
            }elseif($sub){
//                $query = $repo->findBySub($sub);
                $query = $repo->findSearchBySub($search, $sub);
            }else{
                $query = $repo->findSearch($search);//$repo->findAll();
            }
            $pagination = $this->pag($query, $request->query->get('page', 1));

            return array(
                'pagination' => $pagination,
                'page' => $request->query->all()
            );
        }else{
            return $this->redirect($this->generateUrl('playlistbuider'));
        }
    }

    public function _ajaxformAction(Request $request){
//           $request->isXmlHttpRequest()

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

    private function pag($query, $page){
        $paginator = $this->get('knp_paginator');

        $pagination = $paginator->paginate(
                $query, //get the results here
                $page, //$request->query->get('page', 1), // page,
                $this->container->getParameter('plsi_radiodj.search_limit') //limit per page
        );
        $pagination->setUsedRoute('playlistbuider');
        return $pagination;
    }

}
