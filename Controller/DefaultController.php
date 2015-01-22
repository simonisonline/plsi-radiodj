<?php

namespace PlsiRadiodjBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PlsiRadiodjBundle:Default:index.html.twig', array('name' => $name));
    }
}
