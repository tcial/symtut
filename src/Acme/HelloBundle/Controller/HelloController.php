<?php
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller {
	public function indexAction(Request $request, $first_name, $last_name, $color) {
		return $this->render(
					'AcmeHelloBundle:Hello:index.html.twig',
					array('name' => $first_name)
				);
	}
}
