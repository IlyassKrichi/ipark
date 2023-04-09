<?php

namespace App\Entity;

use App\Repository\TypePrixRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypePrixRepository::class)]
class TypePrix
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $type = null;

    #[ORM\Column]
    private ?float $tarif = null;

    #[ORM\ManyToMany(targetEntity: Parking::class, mappedBy: 'TypePrix')]
    private Collection $parkings;

    public function __construct()
    {
        $this->parkings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * @return Collection<int, Parking>
     */
    public function getParkings(): Collection
    {
        return $this->parkings;
    }

    public function addParking(Parking $parking): self
    {
        if (!$this->parkings->contains($parking)) {
            $this->parkings->add($parking);
            $parking->addTypePrix($this);
        }

        return $this;
    }

    public function removeParking(Parking $parking): self
    {
        if ($this->parkings->removeElement($parking)) {
            $parking->removeTypePrix($this);
        }

        return $this;
    }
}
