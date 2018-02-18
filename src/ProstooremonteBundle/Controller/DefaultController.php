<?php

namespace ProstooremonteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $number = mt_rand(0, 100);
        return $this->render('@ProstooremonteBundle/Templates/index.html.twig', ['number' => $number,]);
    }
}
