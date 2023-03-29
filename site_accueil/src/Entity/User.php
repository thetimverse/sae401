<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource()]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;

    #[ORM\Column(length: 50)]
    private ?string $username = null;

    #[ORM\ManyToOne]
    private ?Avatars $avatar = null;

    #[ORM\OneToMany(mappedBy: 'joueur1', targetEntity: Partie::class)]
    private Collection $partiesJ1;

    #[ORM\OneToMany(mappedBy: 'joueur2', targetEntity: Partie::class)]
    private Collection $partiesJ2;

    #[ORM\OneToMany(mappedBy: 'tour', targetEntity: Partie::class)]
    private Collection $partiesTour;

    public function __construct()
    {
        $this->partiesJ1 = new ArrayCollection();
        $this->partiesJ2 = new ArrayCollection();
        $this->partiesTour = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        if (empty($roles)) {
            $roles[] = 'ROLE_USER';
        }

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return Collection<int, Partie>
     */
    public function getParties(): array
    {
        return array_merge($this->getPartiesJ1()->toArray(), $this->getPartiesJ2()->toArray());
    }



    public function getAvatar(): ?Avatars
    {
        return $this->avatar;
    }

    public function setAvatar(?Avatars $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function isIsVerified(): ?bool
    {
        return $this->isVerified;
    }

    /**
     * @return Collection<int, Partie>
     */
    public function getPartiesJ1(): Collection
    {
        return $this->partiesJ1;
    }

    public function addPartiesJ1(Partie $partiesJ1): self
    {
        if (!$this->partiesJ1->contains($partiesJ1)) {
            $this->partiesJ1->add($partiesJ1);
            $partiesJ1->setJoueur1($this);
        }

        return $this;
    }

    public function removePartiesJ1(Partie $partiesJ1): self
    {
        if ($this->partiesJ1->removeElement($partiesJ1)) {
            // set the owning side to null (unless already changed)
            if ($partiesJ1->getJoueur1() === $this) {
                $partiesJ1->setJoueur1(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Partie>
     */
    public function getPartiesJ2(): Collection
    {
        return $this->partiesJ2;
    }

    public function addPartiesJ2(Partie $partiesJ2): self
    {
        if (!$this->partiesJ2->contains($partiesJ2)) {
            $this->partiesJ2->add($partiesJ2);
            $partiesJ2->setJoueur2($this);
        }

        return $this;
    }

    public function removePartiesJ2(Partie $partiesJ2): self
    {
        if ($this->partiesJ2->removeElement($partiesJ2)) {
            // set the owning side to null (unless already changed)
            if ($partiesJ2->getJoueur2() === $this) {
                $partiesJ2->setJoueur2(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Partie>
     */
    public function getPartiesTour(): Collection
    {
        return $this->partiesTour;
    }

    public function addPartiesTour(Partie $partiesTour): self
    {
        if (!$this->partiesTour->contains($partiesTour)) {
            $this->partiesTour->add($partiesTour);
            $partiesTour->setTour($this);
        }

        return $this;
    }

    public function removePartiesTour(Partie $partiesTour): self
    {
        if ($this->partiesTour->removeElement($partiesTour)) {
            // set the owning side to null (unless already changed)
            if ($partiesTour->getTour() === $this) {
                $partiesTour->setTour(null);
            }
        }

        return $this;
    }


}
