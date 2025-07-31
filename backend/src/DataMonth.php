<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataMonth
 *
 * @ORM\Table(name="data_month", uniqueConstraints={@ORM\UniqueConstraint(name="start", columns={"start"})})
 * @ORM\Entity
 */
class DataMonth
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
     * @ORM\Column(name="start", type="date", nullable=false)
     */
    private $start;

    /**
     * @var int|null
     *
     * @ORM\Column(name="toplist", type="integer", nullable=true)
     */
    private $toplist = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="votes", type="integer", nullable=true)
     */
    private $votes = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="participations", type="integer", nullable=true)
     */
    private $participations = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="inscriptions", type="integer", nullable=true)
     */
    private $inscriptions = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="utilisateur", type="integer", nullable=true)
     */
    private $utilisateur = '0';


}
