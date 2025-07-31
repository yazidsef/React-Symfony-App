<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecompenseList
 *
 * @ORM\Table(name="recompense_list")
 * @ORM\Entity
 */
class RecompenseList
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="keurz", type="integer", nullable=false)
     */
    private $keurz;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid_vainkeur", type="string", length=255, nullable=false)
     */
    private $uuidVainkeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';


}
