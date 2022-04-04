<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
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
    private $numSIRET;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeNAF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codeIDCC;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseDExecutionContrat;

    /**
     * @ORM\Column(type="integer")
     */
    private $codePostal;

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
    private $typeEmployeur;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreSalaries;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumSIRET(): ?int
    {
        return $this->numSIRET;
    }

    public function setNumSIRET(int $numSIRET): self
    {
        $this->numSIRET = $numSIRET;

        return $this;
    }

    public function getCodeNAF(): ?string
    {
        return $this->codeNAF;
    }

    public function setCodeNAF(string $codeNAF): self
    {
        $this->codeNAF = $codeNAF;

        return $this;
    }

    public function getCodeIDCC(): ?string
    {
        return $this->codeIDCC;
    }

    public function setCodeIDCC(string $codeIDCC): self
    {
        $this->codeIDCC = $codeIDCC;

        return $this;
    }

    public function getAdresseDExecutionContrat(): ?string
    {
        return $this->adresseDExecutionContrat;
    }

    public function setAdresseDExecutionContrat(string $adresseDExecutionContrat): self
    {
        $this->adresseDExecutionContrat = $adresseDExecutionContrat;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): self
    {
        $this->codePostal = $codePostal;

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

    public function getTypeEmployeur(): ?string
    {
        return $this->typeEmployeur;
    }

    public function setTypeEmployeur(string $typeEmployeur): self
    {
        $this->typeEmployeur = $typeEmployeur;

        return $this;
    }

    public function getNombreSalaries(): ?int
    {
        return $this->nombreSalaries;
    }

    public function setNombreSalaries(int $nombreSalaries): self
    {
        $this->nombreSalaries = $nombreSalaries;

        return $this;
    }
}
