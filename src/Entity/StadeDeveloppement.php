<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StadeDeveloppementRepository")
 */
class StadeDeveloppement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $stade;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\StadeEnabler", mappedBy="stadeDeveloppement")
     */
    private $stadeEnabler;

    public function __construct()
    {
        $this->stadeEnabler = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStade(): ?string
    {
        return $this->stade;
    }

    public function setStade(?string $stade): self
    {
        $this->stade = $stade;

        return $this;
    }

    /**
     * @return Collection|StadeEnabler[]
     */
    public function getStadeEnabler(): Collection
    {
        return $this->stadeEnabler;
    }

    public function addStadeEnabler(StadeEnabler $stadeEnabler): self
    {
        if (!$this->stadeEnabler->contains($stadeEnabler)) {
            $this->stadeEnabler[] = $stadeEnabler;
            $stadeEnabler->setStadeDeveloppement($this);
        }

        return $this;
    }

    public function removeStadeEnabler(StadeEnabler $stadeEnabler): self
    {
        if ($this->stadeEnabler->contains($stadeEnabler)) {
            $this->stadeEnabler->removeElement($stadeEnabler);
            // set the owning side to null (unless already changed)
            if ($stadeEnabler->getStadeDeveloppement() === $this) {
                $stadeEnabler->setStadeDeveloppement(null);
            }
        }

        return $this;
    }
}
