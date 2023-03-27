<?php

namespace App\Entity;

use App\Repository\MotPartieRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: MotPartieRepository::class)]
#[ApiResource()]
class MotPartie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'motParties')]
    private ?Mot $mot = null;

    #[ORM\Column]
    private ?int $position = null;

    #[ORM\Column(length: 10)]
    private ?string $couleurJ1 = null;

    #[ORM\Column(length: 10)]
    private ?string $couleurJ2 = null;

    #[ORM\Column]
    private ?bool $jetonJ1 = null;

    #[ORM\Column]
    private ?bool $jetonJ2 = null;

    #[ORM\Column]
    private ?bool $trouve = null;

    #[ORM\ManyToOne(inversedBy: 'motParties')]
    private ?Partie $partie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMot(): ?Mot
    {
        return $this->mot;
    }

    public function setMot(?Mot $mot): self
    {
        $this->mot = $mot;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getCouleurJ1(): ?string
    {
        return $this->couleurJ1;
    }

    public function setCouleurJ1(string $couleurJ1): self
    {
        $this->couleurJ1 = $couleurJ1;

        return $this;
    }

    public function getCouleurJ2(): ?string
    {
        return $this->couleurJ2;
    }

    public function setCouleurJ2(string $couleurJ2): self
    {
        $this->couleurJ2 = $couleurJ2;

        return $this;
    }

    public function isJetonJ1(): ?bool
    {
        return $this->jetonJ1;
    }

    public function setJetonJ1(bool $jetonJ1): self
    {
        $this->jetonJ1 = $jetonJ1;

        return $this;
    }

    public function isJetonJ2(): ?bool
    {
        return $this->jetonJ2;
    }

    public function setJetonJ2(bool $jetonJ2): self
    {
        $this->jetonJ2 = $jetonJ2;

        return $this;
    }

    public function isTrouve(): ?bool
    {
        return $this->trouve;
    }

    public function setTrouve(bool $trouve): self
    {
        $this->trouve = $trouve;

        return $this;
    }

    public function getPartie(): ?Partie
    {
        return $this->partie;
    }

    public function setPartie(?Partie $partie): self
    {
        $this->partie = $partie;

        return $this;
    }
}
