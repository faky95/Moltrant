<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnablerSpecialiteRepository")
 */
class EnablerSpecialite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Specialite", inversedBy="specialiteEnabler")
     */
    private $specialite;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\InscriptionEnabler", inversedBy="enablerSpecialite")
     */
    private $inscriptionEnabler;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpecialite(): ?Specialite
    {
        return $this->specialite;
    }

    public function setSpecialite(?Specialite $specialite): self
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getInscriptionEnabler(): ?InscriptionEnabler
    {
        return $this->inscriptionEnabler;
    }

    public function setInscriptionEnabler(?InscriptionEnabler $inscriptionEnabler): self
    {
        $this->inscriptionEnabler = $inscriptionEnabler;

        return $this;
    }
}
