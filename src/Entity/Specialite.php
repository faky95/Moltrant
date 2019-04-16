<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpecialiteRepository")
 */
class Specialite
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
    private $nomSpecialite;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Expertise", mappedBy="specialite")
     */
    private $expertise;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EnablerSpecialite", mappedBy="specialite")
     */
    private $specialiteEnabler;


    public function __construct()
    {
        $this->expertise = new ArrayCollection();
        $this->specialiteEnabler = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSpecialite(): ?string
    {
        return $this->nomSpecialite;
    }

    public function setNomSpecialite(?string $nomSpecialite): self
    {
        $this->nomSpecialite = $nomSpecialite;

        return $this;
    }

    /**
     * @return Collection|Expertise[]
     */
    public function getExpertise(): Collection
    {
        return $this->expertise;
    }

    public function addExpertise(Expertise $expertise): self
    {
        if (!$this->expertise->contains($expertise)) {
            $this->expertise[] = $expertise;
            $expertise->setSpecialite($this);
        }

        return $this;
    }

    public function removeExpertise(Expertise $expertise): self
    {
        if ($this->expertise->contains($expertise)) {
            $this->expertise->removeElement($expertise);
            // set the owning side to null (unless already changed)
            if ($expertise->getSpecialite() === $this) {
                $expertise->setSpecialite(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->nomSpecialite;
    }

    /**
     * @return Collection|EnablerSpecialite[]
     */
    public function getSpecialiteEnabler(): Collection
    {
        return $this->specialiteEnabler;
    }

    public function addSpecialiteEnabler(EnablerSpecialite $specialiteEnabler): self
    {
        if (!$this->specialiteEnabler->contains($specialiteEnabler)) {
            $this->specialiteEnabler[] = $specialiteEnabler;
            $specialiteEnabler->setSpecialite($this);
        }

        return $this;
    }

    public function removeSpecialiteEnabler(EnablerSpecialite $specialiteEnabler): self
    {
        if ($this->specialiteEnabler->contains($specialiteEnabler)) {
            $this->specialiteEnabler->removeElement($specialiteEnabler);
            // set the owning side to null (unless already changed)
            if ($specialiteEnabler->getSpecialite() === $this) {
                $specialiteEnabler->setSpecialite(null);
            }
        }

        return $this;
    }

   

  



}
