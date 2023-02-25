<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\Routing\Annotation\Route;

class TesteController extends AbstractController
{
    /**
     * @Route("/teste", name="teste")
     * @Template()
     */
    public function index() : Response
    {
        return new Response("<h1>Teste</h1>");
    }
}