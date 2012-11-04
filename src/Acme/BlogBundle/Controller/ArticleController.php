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

    public function genUrlAction()
    {
        $router       = $this->get('router');
        $router_match = $router->match('/articles/fr/2000/title');
        $router_match = print_r($router_match, true);

        $uri = $router->generate(
            'article_show',
            array(
                'culture' => 'de',
                'year'    => 1000,
                'title'   => 'generated'
            )
        );

        return new Response(
            "$router_match <br>$uri"
        );
    }
}
