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
     * @ORM\ManyToOne(targetEntity="App\Entity\Heure", inversedBy="inscriptionEnablers")
     */
    private $heure;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Utilisateur", inversedBy="inscriptionEnablers")
     */
    private $utilisateur;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EnablerSpecialite", mappedBy="inscriptionEnabler")
     */
    private $enablerSpecialite;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EnablerSecteur", mappedBy="inscriptionEnabler")
     */
    private $enablerSecteur;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\StadeEnabler", mappedBy="inscriptionEnabler")
     */
    private $stadeEnabler;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $precisions;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateInscription;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $tmp_specialite;

     /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $tmp_secteurActivite;

    public function __construct()
    {
        $this->enablerSpecialite = new ArrayCollection();
        $this->enablerSecteur = new ArrayCollection();
        $this->stadeEnabler = new ArrayCollection();
        $this->tmp_specialite  = new ArrayCollection();
        $this->tmp_secteurActivite  = new ArrayCollection();
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
            $stadeEnabler->setInscriptionEnabler($this);
        }

        return $this;
    }

    public function removeStadeEnabler(StadeEnabler $stadeEnabler): self
    {
        if ($this->stadeEnabler->contains($stadeEnabler)) {
            $this->stadeEnabler->removeElement($stadeEnabler);
            // set the owning side to null (unless already changed)
            if ($stadeEnabler->getInscriptionEnabler() === $this) {
                $stadeEnabler->setInscriptionEnabler(null);
            }
        }

        return $this;
    }

    public function getPrecisions(): ?string
    {
        return $this->precisions;
    }

    public function setPrecisions(?string $precisions): self
    {
        $this->precisions = $precisions;

        return $this;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTimeInterface $dateInscription): self
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

   /**
     * Get tmp_specialite
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTmpSpecialite() {
    	$this->tmp_specialite= new ArrayCollection();
    	return $this->tmp_specialite;
    }
    
    /**
     * @param Specialite $tmp_specialite
     * @return \App\Entity\InscriptionEnabler
     */
    public function addTmpSpecialite($tmp_specialite) {
    	$this->tmp_specialite->add($tmp_specialite);
    	return $this;
    }

       /**
     * Get tmp_secteurActivite
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTmpSecteurActivite() {
    	$this->tmp_secteurActivite= new ArrayCollection();
    	return $this->tmp_secteurActivite;
    }
    
    /**
     * @param SecteurActivite $tmp_secteurActivite
     * @return \App\Entity\InscriptionEnabler
     */
    public function addTmpSecteurActivite($tmp_secteurActivite) {
    	$this->tmp_secteurActivite->add($tmp_secteurActivite);
    	return $this;
    }
  
}
