<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Etudiants;



class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = \Faker\Factory::create('fr-FR');

        $prenoms = array("Yanis","Elias", "Angel", "Swann", "Bastien", "Mathilde", "Lucas", "Julien" , "Tristan", "Madiane", "Alexandre");
        $noms = array("ABDELHAK", "BERHIL", "GEZAT", "BOURGEOIS", "CAZAJOUS", "CAZENAVE", "DARRAILLAN", "DERAMAIX", "GONCALVES", "GONNEL", "PIAU");
        $formations = array("initiale", "continue");

        $nationalite = array("français", "Ressortissant de l’Union européenne", " Étranger hors Union européenne");
        $regime = array("URSSAF", "MSA");




        for ($i = 0; $i < count($prenoms); $i++){
            $fixturesEtudiants = new Etudiants();

            $fixturesEtudiants->setNumeroEtudiant(rand(100000, 999999));
    
            $fixturesEtudiants->setNom($noms[$i]);
    
            $fixturesEtudiants->setPrenom($prenoms[$i]);
    
            $dateNaissance = rand(1, 30) . "/" . rand(1, 12) . "/" . rand(1999, 2003);

            $fixturesEtudiants->setDateNaiss($dateNaissance);

            $fixturesEtudiants->setRegimeInscription($formations[rand(0,1)]);
            
            $fixturesEtudiants->setAdresse($faker->streetAddress);

            $fixturesEtudiants->setCodePostal($faker->numberBetween($min = 11111, $max = 99999));

            $fixturesEtudiants->setVille($faker->city);

            $fixturesEtudiants->setTelephone($faker->regexify('0[6,7][0-9]{8}'));

            $fixturesEtudiants->setEmail($faker->email);

            $fixturesEtudiants->setNationalite($nationalite[$faker->numberBetween($min = 0, $max = 2)]);

            $fixturesEtudiants->setLieuNaiss($faker->city);

            $fixturesEtudiants->setNumDepartementNaiss($faker->numberBetween($min = 11111, $max = 99999));

            $fixturesEtudiants->setNumSecu($faker->regexify('[0-9]{13}'));
            
            $fixturesEtudiants->setRegimeSocial($regime[rand(0,1)]);

            $fixturesEtudiants->setDernierDiplome($faker->email);

            $fixturesEtudiants->setHandicape($faker->email);
            
            $fixturesEtudiants->setContratApprentissage($faker->email);



            $manager->persist($fixturesEtudiants);
        }

        $manager->flush();
    }
}