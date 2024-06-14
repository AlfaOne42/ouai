<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
class Formation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomEtablissement = null;

    #[ORM\Column(length: 255)]
    private ?string $villeEtablissement = null;

    #[ORM\Column]
    private ?bool $distanciel = null;

    #[ORM\Column(length: 255)]
    private ?string $dateD = null;

    #[ORM\Column(length: 255)]
    private ?string $dateF = null;

    #[ORM\Column(length: 255)]
    private ?string $nomformation = null;

    #[ORM\Column(length: 255)]
    private ?string $specialite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEtablissement(): ?string
    {
        return $this->nomEtablissement;
    }

    public function setNomEtablissement(string $nomEtablissement): static
    {
        $this->nomEtablissement = $nomEtablissement;

        return $this;
    }

    public function getVilleEtablissement(): ?string
    {
        return $this->villeEtablissement;
    }

    public function setVilleEtablissement(string $villeEtablissement): static
    {
        $this->villeEtablissement = $villeEtablissement;

        return $this;
    }

    public function isDistanciel(): ?bool
    {
        return $this->distanciel;
    }

    public function setDistanciel(bool $distanciel): static
    {
        $this->distanciel = $distanciel;

        return $this;
    }

    public function getDateD(): ?string
    {
        return $this->dateD;
    }

    public function setDateD(string $dateD): static
    {
        $this->dateD = $dateD;

        return $this;
    }

    public function getDateF(): ?string
    {
        return $this->dateF;
    }

    public function setDateF(string $dateF): static
    {
        $this->dateF = $dateF;

        return $this;
    }

    public function getNomformation(): ?string
    {
        return $this->nomformation;
    }

    public function setNomformation(string $nomformation): static
    {
        $this->nomformation = $nomformation;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): static
    {
        $this->specialite = $specialite;

        return $this;
    }
}
