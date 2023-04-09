<?php

namespace App\Entity;

use App\Repository\PlaceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlaceRepository::class)]
class Place
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $type = null;

    #[ORM\Column(length: 100)]
    private ?string $couverture = null;

    #[ORM\ManyToOne(inversedBy: 'Place')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Parking $parking = null;

    #[ORM\OneToMany(mappedBy: 'place', targetEntity: Réservation::class, orphanRemoval: true)]
    private Collection $Réservation;

    public function __construct()
    {
        $this->Réservation = new ArrayCollection();
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

    public function getCouverture(): ?string
    {
        return $this->couverture;
    }

    public function setCouverture(string $couverture): self
    {
        $this->couverture = $couverture;

        return $this;
    }

    public function getParking(): ?Parking
    {
        return $this->parking;
    }

    public function setParking(?Parking $parking): self
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * @return Collection<int, Réservation>
     */
    public function getRéservation(): Collection
    {
        return $this->Réservation;
    }

    public function addRServation(Réservation $rServation): self
    {
        if (!$this->Réservation->contains($rServation)) {
            $this->Réservation->add($rServation);
            $rServation->setPlace($this);
        }

        return $this;
    }

    public function removeRServation(Réservation $rServation): self
    {
        if ($this->Réservation->removeElement($rServation)) {
            // set the owning side to null (unless already changed)
            if ($rServation->getPlace() === $this) {
                $rServation->setPlace(null);
            }
        }

        return $this;
    }
}
