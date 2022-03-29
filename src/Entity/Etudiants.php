<?php

namespace App\Entity;

use App\Repository\EtudiantsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantsRepository::class)
 */
class Etudiants
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numeroEtudiant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateNaiss;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $regimeInscription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroEtudiant(): ?int
    {
        return $this->numeroEtudiant;
    }

    public function setNumeroEtudiant(int $numeroEtudiant): self
    {
        $this->numeroEtudiant = $numeroEtudiant;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaiss(): ?string
    {
        return $this->dateNaiss;
    }

    public function setDateNaiss(string $dateNaiss): self
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    public function getRegimeInscription(): ?string
    {
        return $this->regimeInscription;
    }

    public function setRegimeInscription(string $regimeInscription): self
    {
        $this->regimeInscription = $regimeInscription;

        return $this;
    }
}
