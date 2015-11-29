<?php

namespace Esprit\PatisserieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=25, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin_utilisateur", type="integer", nullable=false)
     */
    private $cinUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_utilisateur", type="string", length=100, nullable=false)
     */
    private $nomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_utilisateur", type="string", length=20, nullable=false)
     */
    private $prenomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=100, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=20, nullable=false)
     */
    private $motDePasse;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_utilisateur", type="string", length=40, nullable=false)
     */
    private $adresseUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20, nullable=false)
     */
    private $telephone;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="valide", type="integer", nullable=false)
     */
    private $valide = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="num_carte_bancaire", type="string", length=30, nullable=true)
     */
    private $numCarteBancaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscri", type="date", nullable=true)
     */
    private $dateInscri;


}
