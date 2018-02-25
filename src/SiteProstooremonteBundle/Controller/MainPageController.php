<?php

namespace SiteProstooremonteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use SiteProstooremonteBundle\Entity\Menu;

class MainPageController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $getHierarchyOfMenu = $this->getDoctrine()
            ->getRepository(Menu::class)
            ->getHierarchyOfMenu();

        $number = mt_rand(0, 100);
        return $this->render(
            "@SiteProstooremonteBundle/Templates/index.html.twig",
            ["number" => $number, "menu" => $getHierarchyOfMenu]
        );
    }
}
