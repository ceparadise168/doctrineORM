<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
                'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
                ]);
    }
}

public function createAction()
{
    $product = new Product();
    $product->setName('Keyboard');
    $product->setPrice(19.99);
    $product->setDescription('Ergonomic and stylish!');

    $em = $this->getDoctrine()->getManager();

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($product);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();

    return new Response('Saved new product with id '.$product->getId());
}
