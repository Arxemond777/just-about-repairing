<?php

namespace AdminProstooremonteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminProstooremonteBundle:Default:index.html.twig');
    }
}
