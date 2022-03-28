<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StageAlterController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('stage_alter/index.html.twig', [
            'controller_name' => 'StageAlterController',
        ]);
    }

    public function etablir_contrat(): Response
    {
        return $this->render('stage_alter/etablir_contrat.html.twig', [
            'controller_name' => 'StageAlterController',
        ]);
    }
}
