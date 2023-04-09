<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaiementRepository::class)]
class Paiement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $montant_paye = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_paiement = null;

    #[ORM\Column(length: 100)]
    private ?string $mode_paiement = null;

    #[ORM\OneToOne(mappedBy: 'Paiement', cascade: ['persist', 'remove'])]
    private ?Reservation $reservation = null;

    #[ORM\OneToOne(mappedBy: 'Paiement', cascade: ['persist', 'remove'])]
    private ?EntreeSortie $entreeSortie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontantPaye(): ?float
    {
        return $this->montant_paye;
    }

    public function setMontantPaye(float $montant_paye): self
    {
        $this->montant_paye = $montant_paye;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->date_paiement;
    }

    public function setDatePaiement(\DateTimeInterface $date_paiement): self
    {
        $this->date_paiement = $date_paiement;

        return $this;
    }

    public function getModePaiement(): ?string
    {
        return $this->mode_paiement;
    }

    public function setModePaiement(string $mode_paiement): self
    {
        $this->mode_paiement = $mode_paiement;

        return $this;
    }

    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function setReservation(Reservation $reservation): self
    {
        // set the owning side of the relation if necessary
        if ($reservation->getPaiement() !== $this) {
            $reservation->setPaiement($this);
        }

        $this->reservation = $reservation;

        return $this;
    }

    public function getEntreeSortie(): ?EntreeSortie
    {
        return $this->entreeSortie;
    }

    public function setEntreeSortie(EntreeSortie $entreeSortie): self
    {
        // set the owning side of the relation if necessary
        if ($entreeSortie->getPaiement() !== $this) {
            $entreeSortie->setPaiement($this);
        }

        $this->entreeSortie = $entreeSortie;

        return $this;
    }
}
