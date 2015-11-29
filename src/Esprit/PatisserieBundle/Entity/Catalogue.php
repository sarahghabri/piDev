<?php

namespace Esprit\PatisserieBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use DateTime as DateTime;
//use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Catalogue
 *
 * @ORM\Table(name="catalogue")
 * @ORM\Entity
 */
class Catalogue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_catalogue", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatalogue;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_catalogue", type="string", length=40, nullable=false)
     */
    private $titreCatalogue;

    /**
     * @var DateTime2
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    function getIdCatalogue() {
        return $this->idCatalogue;
    }

    function getTitreCatalogue() {
        return $this->titreCatalogue;
    }

    function getDate() {
        return $this->date;
    }

    function setIdCatalogue($idCatalogue) {
        $this->idCatalogue = $idCatalogue;
    }

    function setTitreCatalogue($titreCatalogue) {
        $this->titreCatalogue = $titreCatalogue;
    }

    function setDate(DateTime $date) {
        $this->date = $date;
    }


}
