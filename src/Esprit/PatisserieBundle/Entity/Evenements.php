<?php

namespace Esprit\PatisserieBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Evenements
 *
 * @ORM\Table(name="evenements")
 * @ORM\Entity
 */
class Evenements
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_event", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_event", type="string", length=10, nullable=false)
     */
    private $nomEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_event", type="date", nullable=false)
     */
    private $dateEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="local_event", type="string", length=20, nullable=false)
     */
    private $localEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="theme_event", type="string", length=15, nullable=false)
     */
    private $themeEvent;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_responsable", type="integer", nullable=false)
     */
    private $idResponsable;

    function getIdEvent() {
        return $this->idEvent;
    }

    function getNomEvent() {
        return $this->nomEvent;
    }

    function getDateEvent() {
        return $this->dateEvent;
    }

    function getLocalEvent() {
        return $this->localEvent;
    }

    function getThemeEvent() {
        return $this->themeEvent;
    }

    function getIdResponsable() {
        return $this->idResponsable;
    }

    function setIdEvent($idEvent) {
        $this->idEvent = $idEvent;
    }

    function setNomEvent($nomEvent) {
        $this->nomEvent = $nomEvent;
    }

    function setDateEvent(\DateTime $dateEvent) {
        $this->dateEvent = $dateEvent;
    }

    function setLocalEvent($localEvent) {
        $this->localEvent = $localEvent;
    }

    function setThemeEvent($themeEvent) {
        $this->themeEvent = $themeEvent;
    }

    function setIdResponsable($idResponsable) {
        $this->idResponsable = $idResponsable;
    }


}
