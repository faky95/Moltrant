<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HeureRepository")
 */
class Heure
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombreHeure;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\InscriptionEnabler", mappedBy="heure")
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

    public function getNombreHeure(): ?string
    {
        return $this->nombreHeure;
    }

    public function setNombreHeure(string $nombreHeure): self
    {
        $this->nombreHeure = $nombreHeure;

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
            $inscriptionEnabler->setHeure($this);
        }

        return $this;
    }

    public function removeInscriptionEnabler(InscriptionEnabler $inscriptionEnabler): self
    {
        if ($this->inscriptionEnablers->contains($inscriptionEnabler)) {
            $this->inscriptionEnablers->removeElement($inscriptionEnabler);
            // set the owning side to null (unless already changed)
            if ($inscriptionEnabler->getHeure() === $this) {
                $inscriptionEnabler->setHeure(null);
            }
        }

        return $this;
    }
}
