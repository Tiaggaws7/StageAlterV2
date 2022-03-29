<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Etudiants;

class EtudiantsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data = new Etudiants();

        $data->setNumeroEtudiant(123456);

        $data->setNom("buil");

        $data->setPrenom("Tiago");

        $data->setDateNaiss("30/07/2002");

        $data->setRegimeInscription("initiale");
        
        $manager->persist($data);

        $manager->flush();
    }
}
