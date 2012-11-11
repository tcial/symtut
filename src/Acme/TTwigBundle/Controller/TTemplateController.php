<?php
namespace Acme\TTwigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TTemplateController extends Controller
{
    public function indexAction()
    {
        return $this->render('TTwigBundle:Default:index.html.twig');
    }

    public function phptemplateAction()
    {
        return $this->render('TTwigBundle:Default:phptemplate.php');
    }

    public function baseAction()
    {
        return $this->render('TTwigBundle:Default:base.html.twig');
    }
}
