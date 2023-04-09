<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    private ?string $prénom = null;

    #[ORM\Column(length: 100)]
    private ?string $genre = null;

    #[ORM\Column(length: 100)]
    private ?string $email = null;

    #[ORM\Column(length: 100)]
    private ?string $mdp = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $GSM = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $adresse = null;

    #[ORM\Column(length: 100)]
    private ?string $type_vehicule = null;

    #[ORM\OneToMany(mappedBy: 'client', targetEntity: Réservation::class, orphanRemoval: true)]
    private Collection $Réservation;

    public function __construct()
    {
        $this->Réservation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrénom(): ?string
    {
        return $this->prénom;
    }

    public function setPrénom(string $prénom): self
    {
        $this->prénom = $prénom;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

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

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getGSM(): ?string
    {
        return $this->GSM;
    }

    public function setGSM(?string $GSM): self
    {
        $this->GSM = $GSM;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTypeVehicule(): ?string
    {
        return $this->type_vehicule;
    }

    public function setTypeVehicule(string $type_vehicule): self
    {
        $this->type_vehicule = $type_vehicule;

        return $this;
    }

    /**
     * @return Collection<int, Réservation>
     */
    public function getRéservation(): Collection
    {
        return $this->Réservation;
    }

    public function addRServation(Réservation $rServation): self
    {
        if (!$this->Réservation->contains($rServation)) {
            $this->Réservation->add($rServation);
            $rServation->setClient($this);
        }

        return $this;
    }

    public function removeRServation(Réservation $rServation): self
    {
        if ($this->Réservation->removeElement($rServation)) {
            // set the owning side to null (unless already changed)
            if ($rServation->getClient() === $this) {
                $rServation->setClient(null);
            }
        }

        return $this;
    }
}
