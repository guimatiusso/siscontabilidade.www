<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContatoController extends AbstractController
{
    /**
     * @Route("/contato", name="contato_page")
     * @return Response
     */
    public function show()
    {
        return $this->render('contato/index.html.twig');
    }
}