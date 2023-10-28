<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/{name?World}", name="hello")
     */
    public function hello($name)
    {
        $html = $this->render('hello.html.twig', [
            'prenom' => $name
        ]);
        return new Response($html);
    }

    /**
     * @Route("/example", name="example")
     */
    public function example()
    {
        return $this->render('example.html.twig', [
            'age' => 28
        ]);
    }
}
