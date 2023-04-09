<?php

namespace App\Entity;

use App\Repository\EntréeSortieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntréeSortieRepository::class)]
class EntréeSortie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_entrée = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_sortie = null;

    #[ORM\OneToOne(inversedBy: 'entréeSortie', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Réservation $Réservation = null;

    #[ORM\OneToOne(inversedBy: 'entréeSortie', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Paiement $Paiement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEntrée(): ?\DateTimeInterface
    {
        return $this->date_entrée;
    }

    public function setDateEntrée(\DateTimeInterface $date_entrée): self
    {
        $this->date_entrée = $date_entrée;

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

    public function getRéservation(): ?Réservation
    {
        return $this->Réservation;
    }

    public function setRéservation(Réservation $Réservation): self
    {
        $this->Réservation = $Réservation;

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
}
