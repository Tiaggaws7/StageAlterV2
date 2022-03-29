<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Etudiants;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $prenoms = array("Yanis","Elias", "Angel", "Swann", "Bastien", "Mathilde", "Lucas", "Julien" , "Tristan", "Madiane", "Alexandre");
        $noms = array("ABDELHAK", "BERHIL", "GEZAT", "BOURGEOIS", "CAZAJOUS", "CAZENAVE", "DARRAILLAN", "DERAMAIX", "GONCALVES", "GONNEL", "PIAU");
        $formations = array("initiale", "continue");

        for ($i = 0; $i < count($prenoms); $i++){
            $data = new Etudiants();

            $data->setNumeroEtudiant(rand(100000, 999999));
    
            $data->setNom($noms[$i]);
    
            $data->setPrenom($prenoms[$i]);
    
            $dateNaissance = rand(1, 30) . "/" . rand(1, 12) . "/" . rand(1999, 2003);

            $data->setDateNaiss($dateNaissance);
    
            $data->setRegimeInscription($formations[rand(0,1)]);
            
            $manager->persist($data);
        }

        $manager->flush();
    }
}