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
     * @ORM\Column(type="text", nullable=true)
     */
    private $precisions;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateInscription;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Specialite", inversedBy="inscriptionEnablers")
     */
    private $specialite;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\SecteurActivite", inversedBy="inscriptionEnablers")
     */
    private $secteur;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\StadeDeveloppement", inversedBy="inscriptionEnablers")
     */
    private $stadeDeveloppement;



    public function __construct()
    {
        $this->specialite = new ArrayCollection();
        $this->secteur = new ArrayCollection();
        $this->stadeDeveloppement = new ArrayCollection();
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
     * @return Collection|Specialite[]
     */
    public function getSpecialite(): Collection
    {
        return $this->specialite;
    }

    public function addSpecialite(Specialite $specialite): self
    {
        if (!$this->specialite->contains($specialite)) {
            $this->specialite[] = $specialite;
        }

        return $this;
    }

    public function removeSpecialite(Specialite $specialite): self
    {
        if ($this->specialite->contains($specialite)) {
            $this->specialite->removeElement($specialite);
        }

        return $this;
    }

    /**
     * @return Collection|SecteurActivite[]
     */
    public function getSecteur(): Collection
    {
        return $this->secteur;
    }

    public function addSecteur(SecteurActivite $secteur): self
    {
        if (!$this->secteur->contains($secteur)) {
            $this->secteur[] = $secteur;
        }

        return $this;
    }

    public function removeSecteur(SecteurActivite $secteur): self
    {
        if ($this->secteur->contains($secteur)) {
            $this->secteur->removeElement($secteur);
        }

        return $this;
    }

    /**
     * @return Collection|StadeDeveloppement[]
     */
    public function getStadeDeveloppement(): Collection
    {
        return $this->stadeDeveloppement;
    }

    public function addStadeDeveloppement(StadeDeveloppement $stadeDeveloppement): self
    {
        if (!$this->stadeDeveloppement->contains($stadeDeveloppement)) {
            $this->stadeDeveloppement[] = $stadeDeveloppement;
        }

        return $this;
    }

    public function removeStadeDeveloppement(StadeDeveloppement $stadeDeveloppement): self
    {
        if ($this->stadeDeveloppement->contains($stadeDeveloppement)) {
            $this->stadeDeveloppement->removeElement($stadeDeveloppement);
        }

        return $this;
    }


  



 


    
    
 
  
}
