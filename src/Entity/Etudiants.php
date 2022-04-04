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

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuNaiss;

    /**
     * @ORM\Column(type="integer")
     */
    private $numDepartementNaiss;

    /**
     * @ORM\Column(type="integer")
     */
    private $numSecu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $regimeSocial;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dernierDiplome;

    /**
     * @ORM\Column(type="boolean")
     */
    private $handicape;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contratApprentissage;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getLieuNaiss(): ?string
    {
        return $this->lieuNaiss;
    }

    public function setLieuNaiss(string $lieuNaiss): self
    {
        $this->lieuNaiss = $lieuNaiss;

        return $this;
    }

    public function getNumDepartementNaiss(): ?int
    {
        return $this->numDepartementNaiss;
    }

    public function setNumDepartementNaiss(int $numDepartementNaiss): self
    {
        $this->numDepartementNaiss = $numDepartementNaiss;

        return $this;
    }

    public function getNumSecu(): ?int
    {
        return $this->numSecu;
    }

    public function setNumSecu(int $numSecu): self
    {
        $this->numSecu = $numSecu;

        return $this;
    }

    public function getRegimeSocial(): ?string
    {
        return $this->regimeSocial;
    }

    public function setRegimeSocial(string $regimeSocial): self
    {
        $this->regimeSocial = $regimeSocial;

        return $this;
    }

    public function getDernierDiplome(): ?string
    {
        return $this->dernierDiplome;
    }

    public function setDernierDiplome(string $dernierDiplome): self
    {
        $this->dernierDiplome = $dernierDiplome;

        return $this;
    }

    public function getHandicape(): ?bool
    {
        return $this->handicape;
    }

    public function setHandicape(bool $handicape): self
    {
        $this->handicape = $handicape;

        return $this;
    }

    public function getContratApprentissage(): ?string
    {
        return $this->contratApprentissage;
    }

    public function setContratApprentissage(?string $contratApprentissage): self
    {
        $this->contratApprentissage = $contratApprentissage;

        return $this;
    }
}
