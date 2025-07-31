<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DevineList
 *
 * @ORM\Table(name="devine_list")
 * @ORM\Entity
 */
class DevineList
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
     * @ORM\Column(name="uuid_devine_e", type="string", length=255, nullable=true)
     */
    private $uuidDevineE;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uuid_devine_d", type="string", length=255, nullable=true)
     */
    private $uuidDevineD;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_toplist_devine", type="integer", nullable=true)
     */
    private $idToplistDevine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_duel", type="integer", nullable=true)
     */
    private $nbDuel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="score_devine", type="integer", nullable=true)
     */
    private $scoreDevine;

    /**
     * @var int
     *
     * @ORM\Column(name="done_devine", type="integer", nullable=false)
     */
    private $doneDevine = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_devine", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateDevine = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_new", type="integer", nullable=true)
     */
    private $isNew = '0';


}
