<?php

namespace App\Entity;

use App\Repository\RéservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RéservationRepository::class)]
class Réservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_réservation = null;

    #[ORM\ManyToOne(inversedBy: 'Réservation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Place $place = null;

    #[ORM\OneToOne(inversedBy: 'réservation', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Paiement $Paiement = null;

    #[ORM\OneToOne(mappedBy: 'Réservation', cascade: ['persist', 'remove'])]
    private ?EntréeSortie $entréeSortie = null;

    #[ORM\ManyToOne(inversedBy: 'Réservation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Client $client = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRéservation(): ?\DateTimeInterface
    {
        return $this->date_réservation;
    }

    public function setDateRéservation(\DateTimeInterface $date_réservation): self
    {
        $this->date_réservation = $date_réservation;

        return $this;
    }

    public function getPlace(): ?Place
    {
        return $this->place;
    }

    public function setPlace(?Place $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getPaiement(): ?Paiement
    {
        return $this->Paiement;
    }

    public function setPaiement(Paiement $Paiement): self
    {
        $this->Paiement = $Paiement;

        return $this;
    }

    public function getEntréeSortie(): ?EntréeSortie
    {
        return $this->entréeSortie;
    }

    public function setEntréeSortie(EntréeSortie $entréeSortie): self
    {
        // set the owning side of the relation if necessary
        if ($entréeSortie->getRéservation() !== $this) {
            $entréeSortie->setRéservation($this);
        }

        $this->entréeSortie = $entréeSortie;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}
