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
     * @ORM\ManyToMany(targetEntity="App\Entity\InscriptionEnabler", mappedBy="stadeDeveloppement")
     */
    private $inscriptionEnablers;

 

   

    public function __construct()
    {
        $this->inscriptionEnablers = new ArrayCollection();
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
            $inscriptionEnabler->addStadeDeveloppement($this);
        }

        return $this;
    }

    public function removeInscriptionEnabler(InscriptionEnabler $inscriptionEnabler): self
    {
        if ($this->inscriptionEnablers->contains($inscriptionEnabler)) {
            $this->inscriptionEnablers->removeElement($inscriptionEnabler);
            $inscriptionEnabler->removeStadeDeveloppement($this);
        }

        return $this;
    }

 

}
