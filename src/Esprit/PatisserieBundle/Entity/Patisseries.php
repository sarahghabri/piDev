<?php

namespace Esprit\PatisserieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;
/**
 * Patisseries
 *
 * @ORM\Table(name="patisseries", indexes={@ORM\Index(name="responsable_patisserie", columns={"responsable_patisserie"})})
 * @ORM\Entity
 */
class Patisseries 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_patisserie", type="string", length=30, nullable=false)
     */
    private $nomPatisserie;

    /**
     * @var string
     *
     * @ORM\Column(name="region_patisserie", type="string", length=30, nullable=false)
     */
    private $regionPatisserie;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_patisserie", type="string", length=25, nullable=false)
     */
    private $adressePatisserie;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite_patisserie", type="string", length=30, nullable=false)
     */
    private $specialitePatisserie;

    /**
     * @var string
     *
     * @ORM\Column(name="email_patisserie", type="string", length=60, nullable=false)
     */
    private $emailPatisserie;

    /**
     * @var string
     *
     * @ORM\Column(name="logo_patisserie", type="blob", nullable=false)
     */
    private $logoPatisserie;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsable_patisserie", referencedColumnName="id_utilisateur")
     * })
     */
    private $responsablePatisserie;
    
    function getId() {
        return $this->id;
    }

    function getNomPatisserie() {
        return $this->nomPatisserie;
    }

    function getRegionPatisserie() {
        return $this->regionPatisserie;
    }

    function getAdressePatisserie() {
        return $this->adressePatisserie;
    }

    function getSpecialitePatisserie() {
        return $this->specialitePatisserie;
    }

    function getEmailPatisserie() {
        return $this->emailPatisserie;
    }

    function getLogoPatisserie() {
        return $this->logoPatisserie;
    }

    function getResponsablePatisserie() {
        return $this->responsablePatisserie;
    }

    public function __toString() {
        
        return $this->getNomPatisserie();
    }


}
