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

        $uri_absolute = $router->generate(
            'article_show',
            array(
                'culture' => 'de',
                'year'    => 1000,
                'title'   => 'generated'
            ),
            true
        );

        $router->getContext()->setHost('anotherhost.com');
        $uri_absolute_host = $router->generate(
            'article_show',
            array(
                'culture' => 'de',
                'year'    => 1000,
                'title'   => 'generated'
            ),
            true
        );

        return new Response(
            "$router_match<br>$uri<br>$uri_absolute<br>$uri_absolute_host"
        );
    }
}
