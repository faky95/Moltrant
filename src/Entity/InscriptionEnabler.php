<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InscriptionEnablerRepository")
 */
class InscriptionEnabler
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
    private $fonctionActuelle;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $experienceProfessionnelle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stadeDeveloppement;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Heure", inversedBy="inscriptionEnablers")
     */
    private $heure;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur", inversedBy="inscriptionEnablers")
     */
    private $utilisateur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Specialite", inversedBy="enabler")
     */
    private $specialite;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EnablerSpecialite", mappedBy="inscriptionEnabler")
     */
    private $enablerSpecialite;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EnablerSecteur", mappedBy="inscriptionEnabler")
     */
    private $enablerSecteur;

    public function __construct()
    {
        $this->enablerSpecialite = new ArrayCollection();
        $this->enablerSecteur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFonctionActuelle(): ?string
    {
        return $this->fonctionActuelle;
    }

    public function setFonctionActuelle(?string $fonctionActuelle): self
    {
        $this->fonctionActuelle = $fonctionActuelle;

        return $this;
    }

    public function getExperienceProfessionnelle(): ?string
    {
        return $this->experienceProfessionnelle;
    }

    public function setExperienceProfessionnelle(?string $experienceProfessionnelle): self
    {
        $this->experienceProfessionnelle = $experienceProfessionnelle;

        return $this;
    }

    public function getStadeDeveloppement(): ?string
    {
        return $this->stadeDeveloppement;
    }

    public function setStadeDeveloppement(string $stadeDeveloppement): self
    {
        $this->stadeDeveloppement = $stadeDeveloppement;

        return $this;
    }

    public function getHeure(): ?Heure
    {
        return $this->heure;
    }

    public function setHeure(?Heure $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
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

    /**
     * @return Collection|EnablerSpecialite[]
     */
    public function getEnablerSpecialite(): Collection
    {
        return $this->enablerSpecialite;
    }

    public function addEnablerSpecialite(EnablerSpecialite $enablerSpecialite): self
    {
        if (!$this->enablerSpecialite->contains($enablerSpecialite)) {
            $this->enablerSpecialite[] = $enablerSpecialite;
            $enablerSpecialite->setInscriptionEnabler($this);
        }

        return $this;
    }

    public function removeEnablerSpecialite(EnablerSpecialite $enablerSpecialite): self
    {
        if ($this->enablerSpecialite->contains($enablerSpecialite)) {
            $this->enablerSpecialite->removeElement($enablerSpecialite);
            // set the owning side to null (unless already changed)
            if ($enablerSpecialite->getInscriptionEnabler() === $this) {
                $enablerSpecialite->setInscriptionEnabler(null);
            }
        }

        return $this;
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
            $enablerSecteur->setInscriptionEnabler($this);
        }

        return $this;
    }

    public function removeEnablerSecteur(EnablerSecteur $enablerSecteur): self
    {
        if ($this->enablerSecteur->contains($enablerSecteur)) {
            $this->enablerSecteur->removeElement($enablerSecteur);
            // set the owning side to null (unless already changed)
            if ($enablerSecteur->getInscriptionEnabler() === $this) {
                $enablerSecteur->setInscriptionEnabler(null);
            }
        }

        return $this;
    }
}
