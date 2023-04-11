<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_reservation = null;

    #[ORM\ManyToOne(inversedBy: 'Reservation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Place $place = null;

    #[ORM\OneToOne(inversedBy: 'reservation', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Paiement $Paiement = null;

    #[ORM\OneToOne(mappedBy: 'Reservation', cascade: ['persist', 'remove'])]
    private ?EntreeSortie $entreeSortie = null;

    #[ORM\Column(length: 100)]
    private ?string $type_vehicule = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->date_reservation;
    }

    public function setDateReservation(\DateTimeInterface $date_reservation): self
    {
        $this->date_reservation = $date_reservation;

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

    public function getEntreeSortie(): ?EntreeSortie
    {
        return $this->entreeSortie;
    }

    public function setEntreeSortie(EntreeSortie $entreeSortie): self
    {
        // set the owning side of the relation if necessary
        if ($entreeSortie->getReservation() !== $this) {
            $entreeSortie->setReservation($this);
        }

        $this->entreeSortie = $entreeSortie;

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
}
