<?php

namespace App\Entity;

use App\Repository\MotRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: MotRepository::class)]
#[ApiResource()]
class Mot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $fr = null;

    #[ORM\Column(length: 80)]
    private ?string $en = null;

    #[ORM\OneToMany(mappedBy: 'mot', targetEntity: MotPartie::class)]
    private Collection $motParties;

    public function __construct()
    {
        $this->motParties = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFr(): ?string
    {
        return $this->fr;
    }

    public function setFr(string $fr): self
    {
        $this->fr = $fr;

        return $this;
    }

    public function getEn(): ?string
    {
        return $this->en;
    }

    public function setEn(string $en): self
    {
        $this->en = $en;

        return $this;
    }

    /**
     * @return Collection<int, MotPartie>
     */
    public function getMotParties(): Collection
    {
        return $this->motParties;
    }

    public function addMotParty(MotPartie $motParty): self
    {
        if (!$this->motParties->contains($motParty)) {
            $this->motParties->add($motParty);
            $motParty->setMot($this);
        }

        return $this;
    }

    public function removeMotParty(MotPartie $motParty): self
    {
        if ($this->motParties->removeElement($motParty)) {
            // set the owning side to null (unless already changed)
            if ($motParty->getMot() === $this) {
                $motParty->setMot(null);
            }
        }

        return $this;
    }
}
