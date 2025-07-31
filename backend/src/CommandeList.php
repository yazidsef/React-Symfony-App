<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeList
 *
 * @ORM\Table(name="commande_list")
 * @ORM\Entity
 */
class CommandeList
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
     * @var int|null
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=true)
     */
    private $idProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_vainkeur", type="integer", nullable=true)
     */
    private $idVainkeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uuid_vainkeur", type="string", length=50, nullable=true)
     */
    private $uuidVainkeur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false, options={"default"="1"})
     */
    private $status = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tracking_number", type="text", length=65535, nullable=true)
     */
    private $trackingNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="shipping_date", type="date", nullable=true)
     */
    private $shippingDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="game", type="text", length=65535, nullable=true)
     */
    private $game;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_de_lot", type="text", length=65535, nullable=true)
     */
    private $typeDeLot;

    /**
     * @var bool
     *
     * @ORM\Column(name="email_envoye", type="boolean", nullable=false, options={"default"="1"})
     */
    private $emailEnvoye = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_new", type="integer", nullable=true)
     */
    private $isNew = '0';


}
