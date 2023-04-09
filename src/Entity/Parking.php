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

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\Column(length: 100)]
    private ?string $emplacement_geo = null;

    #[ORM\OneToMany(mappedBy: 'parking', targetEntity: Place::class, orphanRemoval: true)]
    private Collection $Place;

    #[ORM\ManyToMany(targetEntity: TypePrix::class, inversedBy: 'parkings')]
    private Collection $TypePrix;

    public function __construct()
    {
        $this->Place = new ArrayCollection();
        $this->TypePrix = new ArrayCollection();
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

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

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
}
