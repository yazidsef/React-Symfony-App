<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipationList
 *
 * @ORM\Table(name="participation_list")
 * @ORM\Entity
 */
class ParticipationList
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
     * @ORM\Column(name="id_top_p", type="integer", nullable=false)
     */
    private $idTopP;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid_vainkeur", type="string", length=50, nullable=false)
     */
    private $uuidVainkeur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_p", type="string", length=100, nullable=false)
     */
    private $emailP;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_p", type="string", length=100, nullable=true)
     */
    private $phoneP;

    /**
     * @var int
     *
     * @ORM\Column(name="chance_p", type="integer", nullable=false, options={"default"="1"})
     */
    private $chanceP = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="trigger_chance", type="text", length=0, nullable=true)
     */
    private $triggerChance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';


}
