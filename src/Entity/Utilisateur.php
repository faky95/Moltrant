<?php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class Utilisateur extends BaseUser
{
    const ROLE_SUPER_ADMIN                      = 'ROLE_SUPER_ADMIN';
    const ROLE_ADMIN                            = 'ROLE_ADMIN';
    const ROLE_COACH                            = 'ROLE_COACH';
    const ROLE_MEMBER                           = 'ROLE_MEMBER';
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $prenom;

    /**
     * @ORM\Column(type="boolean")
     */
    private $sexe;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $matricule;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomEntreprise;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $coach;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isAdmin;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $localite;

    /**
     * @ORM\Column(type="integer")
     */
    private $employes;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $chiffreAffaire;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateAdhesion;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SecteurActivite", inversedBy="utilisateurs")
     */
    private $secteur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Etude", inversedBy="utilisateurs")
     */
    private $etude;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $anneActivite;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $photo;

   

    /**
     * (non-PHPdoc)
     * @see \FOS\UserBundle\Model\User::hasRole()
     */
    public function hasRole($role) {
    	if(strtoupper($role)==self::ROLE_SUPER_ADMIN) {
    		return parent::hasRole(self::ROLE_SUPER_ADMIN);
    	} elseif(strtoupper($role)==self::ROLE_ADMIN) {
    		return $this->isAdmin;
    	} elseif(strtoupper($role)==self::ROLE_COACH) {
    		return $this->coach;
    	}  else {
    		
    	}
    	return false;
    }
     /**
     * @param array $roles
     * @return boolean
     */
    public function hasRoles($roles) {
        foreach($roles as $role) {
            if($this->hasRole($role)) {
                return true;
            }
        }
        return false;
    }

    public function __construct()
    {
        parent::__construct();
        
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(): ?bool
    {
        return $this->sexe;
    }

    public function setSexe(bool $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    public function setNomEntreprise(string $nomEntreprise): self
    {
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    public function getCoach(): ?bool
    {
        return $this->coach;
    }

    public function setCoach(?bool $coach): self
    {
        $this->coach = $coach;
         if($coach==1){
            $this->addRole('ROLE_COACH');
        }

        return $this;
    }

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(?bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;
        if($isAdmin==1){
            $this->addRole('ROLE_ADMIN');
        }

        return $this;
    }

    public function getLocalite(): ?string
    {
        return $this->localite;
    }

    public function setLocalite(string $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getEmployes(): ?int
    {
        return $this->employes;
    }

    public function setEmployes(int $employes): self
    {
        $this->employes = $employes;

        return $this;
    }

    public function getChiffreAffaire(): ?string
    {
        return $this->chiffreAffaire;
    }

    public function setChiffreAffaire(string $chiffreAffaire): self
    {
        $this->chiffreAffaire = $chiffreAffaire;

        return $this;
    }

    public function getDateAdhesion(): ?\DateTimeInterface
    {
        return $this->dateAdhesion;
    }

    public function setDateAdhesion(\DateTimeInterface $dateAdhesion): self
    {
        $this->dateAdhesion = $dateAdhesion;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getSecteur(): ?SecteurActivite
    {
        return $this->secteur;
    }

    public function setSecteur(?SecteurActivite $secteur): self
    {
        $this->secteur = $secteur;

        return $this;
    }

    public function getEtude(): ?Etude
    {
        return $this->etude;
    }

    public function setEtude(?Etude $etude): self
    {
        $this->etude = $etude;

        return $this;
    }

    public function getAnneActivite(): ?string
    {
        return $this->anneActivite;
    }

    public function setAnneActivite(?string $anneActivite): self
    {
        $this->anneActivite = $anneActivite;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

}