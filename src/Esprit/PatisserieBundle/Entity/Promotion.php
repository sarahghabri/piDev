<?php

namespace Esprit\PatisserieBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity
 */
class Promotion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_promo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPromo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb_promo", type="date", nullable=false)
     */
    private $dateDebPromo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_promo", type="date", nullable=false)
     */
    private $dateFinPromo;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_promo", type="string", length=100, nullable=false)
     */
    private $nomPromo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_patisserie", type="integer", nullable=false)
     */
    private $idPatisserie;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_responsable", type="integer", nullable=false)
     */
    private $idResponsable;

    function getIdPromo() {
        return $this->idPromo;
    }

    function getDateDebPromo() {
        return $this->dateDebPromo;
    }

    function getDateFinPromo() {
        return $this->dateFinPromo;
    }

    function getNomPromo() {
        return $this->nomPromo;
    }

    function getIdPatisserie() {
        return $this->idPatisserie;
    }

    function getIdResponsable() {
        return $this->idResponsable;
    }

    function setIdPromo($idPromo) {
        $this->idPromo = $idPromo;
    }

    function setDateDebPromo(\DateTime $dateDebPromo) {
        $this->dateDebPromo = $dateDebPromo;
    }

    function setDateFinPromo(\DateTime $dateFinPromo) {
        $this->dateFinPromo = $dateFinPromo;
    }

    function setNomPromo($nomPromo) {
        $this->nomPromo = $nomPromo;
    }

    function setIdPatisserie($idPatisserie) {
        $this->idPatisserie = $idPatisserie;
    }

    function setIdResponsable($idResponsable) {
        $this->idResponsable = $idResponsable;
    }


}
