<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

    protected $calculator;

    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $tva = $this->calculator->calcul(200);
        dd($tva);
        dd("Ca fonctionne");
    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test")
     */
    public function test($age)
    {
        return new Response("Vous avez $age ans.");
    }
}
