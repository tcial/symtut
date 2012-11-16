<?php
namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    public function showAction($_route, $_controller)
    {
        return new Response("show article $_route $_controller");
    }

    public function detailuseAction()
    {
        return $this->render(
            'BlogBundle:Blog:articledetails.html.twig',
            array(
                'article' => array(
                    'title'   => 'articletitle',
                    'author'  => 'articleauthor',
                    'content' => 'articlecontent'
                )
            )
        );
    }
}
