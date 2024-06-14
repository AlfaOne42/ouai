<?php

namespace App\Entity;

use App\Repository\AFVeilleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AFVeilleRepository::class)]
class AFVeille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $acquisition = null;

    #[ORM\Column]
    private ?bool $veillecontinue = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAcquisition(): ?string
    {
        return $this->acquisition;
    }

    public function setAcquisition(string $acquisition): static
    {
        $this->acquisition = $acquisition;

        return $this;
    }

    public function isVeillecontinue(): ?bool
    {
        return $this->veillecontinue;
    }

    public function setVeillecontinue(bool $veillecontinue): static
    {
        $this->veillecontinue = $veillecontinue;

        return $this;
    }
}
