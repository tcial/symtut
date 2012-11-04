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
        $router = $this->get('router');
        $result = $router->match('/articles/fr/2000/title');
        $result = print_r($result, true);

        return new Response(
            "$result"
        );
    }
}
