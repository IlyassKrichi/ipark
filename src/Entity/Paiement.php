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
    private ?float $montant_payé = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_paiement = null;

    #[ORM\Column(length: 100)]
    private ?string $mode_paiement = null;

    #[ORM\OneToOne(mappedBy: 'Paiement', cascade: ['persist', 'remove'])]
    private ?Réservation $réservation = null;

    #[ORM\OneToOne(mappedBy: 'Paiement', cascade: ['persist', 'remove'])]
    private ?EntréeSortie $entréeSortie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontantPayé(): ?float
    {
        return $this->montant_payé;
    }

    public function setMontantPayé(float $montant_payé): self
    {
        $this->montant_payé = $montant_payé;

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

    public function getRéservation(): ?Réservation
    {
        return $this->réservation;
    }

    public function setRéservation(Réservation $réservation): self
    {
        // set the owning side of the relation if necessary
        if ($réservation->getPaiement() !== $this) {
            $réservation->setPaiement($this);
        }

        $this->réservation = $réservation;

        return $this;
    }

    public function getEntréeSortie(): ?EntréeSortie
    {
        return $this->entréeSortie;
    }

    public function setEntréeSortie(EntréeSortie $entréeSortie): self
    {
        // set the owning side of the relation if necessary
        if ($entréeSortie->getPaiement() !== $this) {
            $entréeSortie->setPaiement($this);
        }

        $this->entréeSortie = $entréeSortie;

        return $this;
    }
}
