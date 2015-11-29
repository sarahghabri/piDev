<?php

namespace Esprit\PatisserieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Livreur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_livreur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivreur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_livreur", type="string", length=30, nullable=false)
     */
    private $nomLivreur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_livreur", type="string", length=30, nullable=false)
     */
    private $prenomLivreur;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_telephone_livreur", type="integer", nullable=false)
     */
    private $numTelephoneLivreur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_livreur", type="string", length=60, nullable=false)
     */
    private $adresseLivreur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_livreur", type="string", length=60, nullable=false)
     */
    private $emailLivreur;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_livreur", type="string", length=30, nullable=false)
     */
    private $etatLivreur;

    /**
     * @var \Patisseries
     *
     * @ORM\ManyToOne(targetEntity="Patisseries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Patisserie_id", referencedColumnName="id")
     * })
     */
    private $patisserie;
   
    public function setNomLivreur($nomLivreur) {
        $this->nomLivreur = $nomLivreur;
    }

    public function setPrenomLivreur($prenomLivreur) {
        $this->prenomLivreur = $prenomLivreur;
    }

    public function setNumTelephoneLivreur($numTelephoneLivreur) {
        $this->numTelephoneLivreur = $numTelephoneLivreur;
    }

    public function setAdresseLivreur($adresseLivreur) {
        $this->adresseLivreur = $adresseLivreur;
    }

    public function setEmailLivreur($emailLivreur) {
        $this->emailLivreur = $emailLivreur;
    }

    public function setEtatLivreur($etatLivreur) {
        $this->etatLivreur = $etatLivreur;
    }

    public function setPatisserie(Patisseries $patisserie) {
        $this->patisserie = $patisserie;
    }

        
    public function getIdLivreur() {
        return $this->idLivreur;
    }

    public function getNomLivreur() {
        return $this->nomLivreur;
    }

    public function getPrenomLivreur() {
        return $this->prenomLivreur;
    }

    public function getNumTelephoneLivreur() {
        return $this->numTelephoneLivreur;
    }

    public function getAdresseLivreur() {
        return $this->adresseLivreur;
    }

    public function getEmailLivreur() {
        return $this->emailLivreur;
    }

    public function getEtatLivreur() {
        return $this->etatLivreur;
    }

    public function getPatisserie() {
        return $this->patisserie;
    }



    


}
