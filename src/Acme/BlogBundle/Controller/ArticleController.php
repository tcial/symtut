<?php
namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    protected $articles = array(
        array(
            'title'   => 'first title',
            'author'  => 'first author',
            'content' => 'first content'
        ),
        array(
            'title'   => 'second title',
            'author'  => 'second author',
            'content' => 'second content'
        ),
        array(
            'title'   => 'third title',
            'author'  => 'third author',
            'content' => 'third content'
        ),
    );

    public function showAction($_route, $_controller)
    {
        return new Response("show article $_route $_controller");
    }

    public function detailuseAction()
    {
        return $this->render(
            'BlogBundle:Blog:articledetails.html.twig',
            array(
                'article' => $this->articles[0]
            )
        );
    }

    public function listArticlesAction()
    {
        return $this->render(
            'BlogBundle:Blog:articlelist.html.twig',
            array(
                'articles' => $this->articles
            )
        );
    }
}
