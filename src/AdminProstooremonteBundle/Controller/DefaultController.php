<?php

namespace AdminProstooremonteBundle\Controller;

//use general\DB\ConnectDB;
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

        $b = $this->getDoctrine()
            ->getRepository(Menu::class)
            ->findAll();

        dump($b);
        return $this->render('@AdminProstooremonteBundle/Default/index.html.twig');
    }
}
