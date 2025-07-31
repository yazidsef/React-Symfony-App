<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TirageList
 *
 * @ORM\Table(name="tirage_list")
 * @ORM\Entity
 */
class TirageList
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
     * @var int
     *
     * @ORM\Column(name="id_top", type="integer", nullable=false)
     */
    private $idTop;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid_vainkeur", type="string", length=255, nullable=false)
     */
    private $uuidVainkeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero_colis", type="string", length=100, nullable=true)
     */
    private $numeroColis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=true)
     */
    private $comments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="shipping_date", type="date", nullable=true)
     */
    private $shippingDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_envoye", type="boolean", nullable=false, options={"default"="1"})
     */
    private $emailEnvoye = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="game", type="text", length=65535, nullable=true)
     */
    private $game;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_new", type="integer", nullable=true)
     */
    private $isNew = '0';


}
