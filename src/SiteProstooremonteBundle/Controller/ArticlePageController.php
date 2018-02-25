<?php

namespace SiteProstooremonteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use SiteProstooremonteBundle\Entity\Menu;
use SiteProstooremonteBundle\Resources\config\routing\MainRoutingConst;

/**
 * @Route(MainRoutingConst::ARTICLE_PART_OF_URI)
 */
class ArticlePageController extends Controller
{
    /**
     * @Route("{url}")
     */
    public function indexAction($url)
    {
        // TODO 404 if not exist
        dump($url);die;

        $number = mt_rand(0, 100);
        return $this->render(
            "@SiteProstooremonteBundle/Templates/index.html.twig",
            ["number" => $number, "menu" => $getHierarchyOfMenu]
        );
    }
}
