<?php

namespace App\Entity;

use App\Repository\ParkingRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParkingRepository::class)]
class Parking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    private ?string $adresse = null;

    #[ORM\Column]
    private ?int $capacité = null;

    #[ORM\Column(length: 30)]
    private ?string $emplacement_geo = null;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCapacité(): ?int
    {
        return $this->capacité;
    }

    public function setCapacité(int $capacité): self
    {
        $this->capacité = $capacité;

        return $this;
    }

    public function getEmplacementGeo(): ?string
    {
        return $this->emplacement_geo;
    }

    public function setEmplacementGeo(string $emplacement_geo): self
    {
        $this->emplacement_geo = $emplacement_geo;

        return $this;
    }
}
