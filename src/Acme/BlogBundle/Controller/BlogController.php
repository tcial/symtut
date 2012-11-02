<?php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function indexAction($page)
    {
        return new Response("page $page");
    }

    public function showAction($slug)
    {
        return $this->render(
            'BlogBundle:Blog:show.html.twig',
            array('slug' => $slug)
        );
    }

    public function homepageAction($culture)
    {
        return new Response("homepage with culture $culture");
    }
}
