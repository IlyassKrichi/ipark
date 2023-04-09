<?php

namespace App\Entity;

use App\Repository\ParkingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParkingRepository::class)]
class Parking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    private ?string $adresse = null;

    #[ORM\Column]
    private ?int $capacité = null;

    #[ORM\Column(length: 100)]
    private ?string $emplacement_geo = null;

    #[ORM\ManyToMany(targetEntity: TypePrix::class, inversedBy: 'parkings')]
    private Collection $TypePrix;

    #[ORM\OneToMany(mappedBy: 'parking', targetEntity: Place::class, orphanRemoval: true)]
    private Collection $Place;

    public function __construct()
    {
        $this->TypePrix = new ArrayCollection();
        $this->Place = new ArrayCollection();
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

    /**
     * @return Collection<int, TypePrix>
     */
    public function getTypePrix(): Collection
    {
        return $this->TypePrix;
    }

    public function addTypePrix(TypePrix $typePrix): self
    {
        if (!$this->TypePrix->contains($typePrix)) {
            $this->TypePrix->add($typePrix);
        }

        return $this;
    }

    public function removeTypePrix(TypePrix $typePrix): self
    {
        $this->TypePrix->removeElement($typePrix);

        return $this;
    }

    /**
     * @return Collection<int, Place>
     */
    public function getPlace(): Collection
    {
        return $this->Place;
    }

    public function addPlace(Place $place): self
    {
        if (!$this->Place->contains($place)) {
            $this->Place->add($place);
            $place->setParking($this);
        }

        return $this;
    }

    public function removePlace(Place $place): self
    {
        if ($this->Place->removeElement($place)) {
            // set the owning side to null (unless already changed)
            if ($place->getParking() === $this) {
                $place->setParking(null);
            }
        }

        return $this;
    }
}
