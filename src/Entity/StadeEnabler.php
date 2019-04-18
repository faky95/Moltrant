<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StadeEnablerRepository")
 */
class StadeEnabler
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\InscriptionEnabler", inversedBy="stadeEnabler")
     */
    private $inscriptionEnabler;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\StadeDeveloppement", inversedBy="stadeEnabler")
     */
    private $stadeDeveloppement;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getStadeDeveloppement(): ?StadeDeveloppement
    {
        return $this->stadeDeveloppement;
    }

    public function setStadeDeveloppement(?StadeDeveloppement $stadeDeveloppement): self
    {
        $this->stadeDeveloppement = $stadeDeveloppement;

        return $this;
    }
}
