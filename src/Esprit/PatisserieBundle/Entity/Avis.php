<?php

namespace Esprit\PatisserieBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Avis
{
     /**
     *
     * @ORM\GeneratedValue 
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string",length=255)
     */
    private $avis;


}
