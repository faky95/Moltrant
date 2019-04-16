<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnablerSecteurRepository")
 */
class EnablerSecteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SecteurActivite", inversedBy="enablerSecteur")
     */
    private $secteurActivite;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\InscriptionEnabler", inversedBy="enablerSecteur")
     */
    private $inscriptionEnabler;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSecteurActivite(): ?SecteurActivite
    {
        return $this->secteurActivite;
    }

    public function setSecteurActivite(?SecteurActivite $secteurActivite): self
    {
        $this->secteurActivite = $secteurActivite;

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
