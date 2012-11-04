<?php
namespace Acme\TTwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TTemplateController extends Controller
{
    public function indexAction()
    {
        return new Response('twigcontroller');
    }
}
