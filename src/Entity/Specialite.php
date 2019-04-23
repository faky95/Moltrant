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
     * @ORM\ManyToMany(targetEntity="App\Entity\InscriptionEnabler", mappedBy="specialite")
     */
    private $inscriptionEnablers;



    public function __construct()
    {
        $this->expertise = new ArrayCollection();
        $this->inscriptionEnablers = new ArrayCollection();
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
        if(is_null($this->nomSpecialite)) {
            return 'NULL';
        }
        return $this->nomSpecialite;
    }

    /**
     * @return Collection|InscriptionEnabler[]
     */
    public function getInscriptionEnablers(): Collection
    {
        return $this->inscriptionEnablers;
    }

    public function addInscriptionEnabler(InscriptionEnabler $inscriptionEnabler): self
    {
        if (!$this->inscriptionEnablers->contains($inscriptionEnabler)) {
            $this->inscriptionEnablers[] = $inscriptionEnabler;
            $inscriptionEnabler->addSpecialite($this);
        }

        return $this;
    }

    public function removeInscriptionEnabler(InscriptionEnabler $inscriptionEnabler): self
    {
        if ($this->inscriptionEnablers->contains($inscriptionEnabler)) {
            $this->inscriptionEnablers->removeElement($inscriptionEnabler);
            $inscriptionEnabler->removeSpecialite($this);
        }

        return $this;
    }




   

  



}
