<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\EtudiantsRepository;

class StageAlterController extends AbstractController
{
    public function index(): Response
    {

        
        return $this->render('stage_alter/index.html.twig', []);
    }

    public function etablir_contrats(EtudiantsRepository $etudiantsRepository): Response
    {
        $etudiants = $etudiantsRepository->findAll();

        return $this->render('stage_alter/etablir_contrats.html.twig', [
            'etudiants' => $etudiants,
        ]);
    }

    public function creer_contrat(): Response
    {
        return $this->render('stage_alter/creer_contrat.html.twig', []);
    }
}
