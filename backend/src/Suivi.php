<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suivi
 *
 * @ORM\Table(name="suivi")
 * @ORM\Entity
 */
class Suivi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pseudo_user", type="string", length=255, nullable=true)
     */
    private $pseudoUser;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=255, nullable=false)
     */
    private $uuid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="toplist", type="string", length=255, nullable=true)
     */
    private $toplist;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_devine", type="integer", nullable=true)
     */
    private $idDevine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referent", type="string", length=255, nullable=true)
     */
    private $referent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut", type="string", length=50, nullable=true)
     */
    private $statut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact", type="string", length=255, nullable=true)
     */
    private $contact;


}
