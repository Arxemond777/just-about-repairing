<?php

namespace AdminProstooremonteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use SiteProstooremonteBundle\Entity\Menu;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {

        /*$getHierarchyOfMenu = $this->getDoctrine()
            ->getRepository(Menu::class)
            ->getHierarchyOfMenu();

        dump($getHierarchyOfMenu);*/
        return $this->render("@AdminProstooremonteBundle/Default/index.html.twig");
    }
}
