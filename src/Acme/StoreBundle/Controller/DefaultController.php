<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig');
    }

    public function createAction()
    {
        $product = new Product();
        $product->setName('The First Product');
        $product->setPrice(13.37);
        $product->setDescription('The first description of the product');

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return new Response('Created product id ' . $product->getId());
    }


    public function showAction($id)
    {
        $product = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Product')
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException('No product found for id ' . $id);
        }

        return
            $this->render(
                'AcmeStoreBundle:Entity:show_product.html.twig',
                array(
                    'product' => $product
                )
            );
    }
}
