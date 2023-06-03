<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ServicosController extends AbstractController
{
    /**
     * @Route("/servicos", name="servicos_page")
     * @return Response
     */
    public function showIndex()
    {
        return $this->render('servicos/index.html.twig');
    }

    /**
     * @Route("/servicos/abertura-de-empresa", name="servico_abretura_empresa_page")
     * @return Response
     */
    public function showAberturaEmpresa()
    {
        return $this->render('servicos/abertura-empresa.index.html.twig');
    }

    /**
     * @Route("/servicos/contabilidade", name="servico_contabilidade_page")
     * @return Response
     */
    public function showContabilidade()
    {
        return $this->render('servicos/contabilidade.index.html.twig');
    }

    /**
     * @Route("/servicos/contablidade-importacao-exportacao", name="servico_contabilidade_importacao_exportacao_page")
     * @return Response
     */
    public function showContabilidadeImportacaoExportacao()
    {
        return $this->render('servicos/contabilidade-importacao-exportacao.index.html.twig');
    }

    /**
     * @Route("/servicos/certificado-digital", name="servico_certificado_digital_page")
     * @return Response
     */
    public function showCertificadoDigital()
    {
        return $this->render('servicos/certificado-digital.index.html.twig');
    }
}