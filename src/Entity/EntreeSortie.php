<?php

namespace App\Entity;

use App\Repository\EntreeSortieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntreeSortieRepository::class)]
class EntreeSortie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_entree = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_sortie = null;

    #[ORM\OneToOne(inversedBy: 'entreeSortie', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Paiement $Paiement = null;

    #[ORM\OneToOne(inversedBy: 'entreeSortie', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Reservation $Reservation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEntree(): ?\DateTimeInterface
    {
        return $this->date_entree;
    }

    public function setDateEntree(\DateTimeInterface $date_entree): self
    {
        $this->date_entree = $date_entree;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->date_sortie;
    }

    public function setDateSortie(\DateTimeInterface $date_sortie): self
    {
        $this->date_sortie = $date_sortie;

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

    public function getReservation(): ?Reservation
    {
        return $this->Reservation;
    }

    public function setReservation(Reservation $Reservation): self
    {
        $this->Reservation = $Reservation;

        return $this;
    }
}
