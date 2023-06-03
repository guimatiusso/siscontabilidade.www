<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SobreController extends AbstractController
{
    /**
     * @Route("sobre", name="sobre_page")
     * @return Response
     */
    public function show()
    {
        return $this->render('sobre/index.html.twig');
    }
}