<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JugementList
 *
 * @ORM\Table(name="jugement_list")
 * @ORM\Entity
 */
class JugementList
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
     * @ORM\Column(name="id_toplist_juge", type="integer", nullable=true)
     */
    private $idToplistJuge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uuid_juge", type="string", length=50, nullable=true)
     */
    private $uuidJuge;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_jugement", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateJugement = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="jugement", type="text", length=16777215, nullable=true)
     */
    private $jugement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="responseto", type="integer", nullable=true)
     */
    private $responseto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_new", type="integer", nullable=true)
     */
    private $isNew = '0';


}
