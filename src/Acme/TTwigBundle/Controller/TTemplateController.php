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
        return $this->render(
            'TTwigBundle:Default:phptemplate.html.php',
            array(
                'subject' => 'subject from controller',
                'message' => 'message from controller'
            )
        );
    }

    public function baseAction()
    {
        return $this->render('TTwigBundle:Default:base.html.twig');
    }
}
