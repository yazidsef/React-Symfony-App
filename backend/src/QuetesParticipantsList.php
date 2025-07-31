<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuetesParticipantsList
 *
 * @ORM\Table(name="quetes_participants_list", indexes={@ORM\Index(name="quete_id", columns={"quete_id"})})
 * @ORM\Entity
 */
class QuetesParticipantsList
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
     * @var string|null
     *
     * @ORM\Column(name="uuid_user", type="string", length=255, nullable=true)
     */
    private $uuidUser;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="valid", type="boolean", nullable=true)
     */
    private $valid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=true)
     */
    private $comment;

    /**
     * @var int|null
     *
     * @ORM\Column(name="keurz", type="integer", nullable=true)
     */
    private $keurz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="img", type="text", length=65535, nullable=true)
     */
    private $img;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var \Quetes
     *
     * @ORM\ManyToOne(targetEntity="Quetes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="quete_id", referencedColumnName="id")
     * })
     */
    private $quete;


}
