<?php

namespace SiteProstooremonteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $number = mt_rand(0, 100);
        return $this->render('@SiteProstooremonteBundle/Templates/index.html.twig', ['number' => $number,]);
    }
}
