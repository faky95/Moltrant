<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SecteurActiviteRepository")
 */
class SecteurActivite
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
    private $nomSecteur;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Utilisateur", mappedBy="secteur")
     */
    private $utilisateurs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EnablerSecteur", mappedBy="secteurActivite")
     */
    private $enablerSecteur;

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
        $this->enablerSecteur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSecteur(): ?string
    {
        return $this->nomSecteur;
    }

    public function setNomSecteur(string $nomSecteur): self
    {
        $this->nomSecteur = $nomSecteur;

        return $this;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateur $utilisateur): self
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs[] = $utilisateur;
            $utilisateur->setSecteur($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        if ($this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs->removeElement($utilisateur);
            // set the owning side to null (unless already changed)
            if ($utilisateur->getSecteur() === $this) {
                $utilisateur->setSecteur(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->nomSecteur;
    }

    /**
     * @return Collection|EnablerSecteur[]
     */
    public function getEnablerSecteur(): Collection
    {
        return $this->enablerSecteur;
    }

    public function addEnablerSecteur(EnablerSecteur $enablerSecteur): self
    {
        if (!$this->enablerSecteur->contains($enablerSecteur)) {
            $this->enablerSecteur[] = $enablerSecteur;
            $enablerSecteur->setSecteurActivite($this);
        }

        return $this;
    }

    public function removeEnablerSecteur(EnablerSecteur $enablerSecteur): self
    {
        if ($this->enablerSecteur->contains($enablerSecteur)) {
            $this->enablerSecteur->removeElement($enablerSecteur);
            // set the owning side to null (unless already changed)
            if ($enablerSecteur->getSecteurActivite() === $this) {
                $enablerSecteur->setSecteurActivite(null);
            }
        }

        return $this;
    }
}
