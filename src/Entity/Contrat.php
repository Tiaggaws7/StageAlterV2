<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContratRepository::class)
 */
class Contrat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeContrat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateFin;

    /**
     * @ORM\Column(type="integer")
     */
    private $DureeHebdomadaire;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dangerOuRisques;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $mission;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeContrat(): ?string
    {
        return $this->typeContrat;
    }

    public function setTypeContrat(string $typeContrat): self
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    public function getDateDebut(): ?string
    {
        return $this->dateDebut;
    }

    public function setDateDebut(string $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    public function setDateFin(string $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getDureeHebdomadaire(): ?int
    {
        return $this->DureeHebdomadaire;
    }

    public function setDureeHebdomadaire(int $DureeHebdomadaire): self
    {
        $this->DureeHebdomadaire = $DureeHebdomadaire;

        return $this;
    }

    public function getDangerOuRisques(): ?bool
    {
        return $this->dangerOuRisques;
    }

    public function setDangerOuRisques(bool $dangerOuRisques): self
    {
        $this->dangerOuRisques = $dangerOuRisques;

        return $this;
    }

    public function getMission(): ?string
    {
        return $this->mission;
    }

    public function setMission(string $mission): self
    {
        $this->mission = $mission;

        return $this;
    }
}
