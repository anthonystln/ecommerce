<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController extends AbstractController
{
    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
    /**
     * @Route("/hello/{name?World}", name="hello")
     */
    public function hello($name, LoggerInterface $logger, Environment $twig)
    {
        dd($twig);

        $logger->info("Mon message de log !");

        $tva = $this->calculator->calcul(230);

        dd($tva);

        return new Response("Hello $name");
    }
}
