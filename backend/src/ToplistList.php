<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ToplistList
 *
 * @ORM\Table(name="toplist_list")
 * @ORM\Entity
 */
class ToplistList
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
     * @ORM\Column(name="id_wp", type="integer", nullable=true)
     */
    private $idWp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_vainkeur", type="integer", nullable=true)
     */
    private $idVainkeur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid_user", type="string", length=50, nullable=false)
     */
    private $uuidUser;

    /**
     * @var int
     *
     * @ORM\Column(name="id_top_rank", type="integer", nullable=false)
     */
    private $idTopRank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=true)
     */
    private $catId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rank", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateRank = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ranking", type="text", length=0, nullable=true)
     */
    private $ranking;

    /**
     * @var int
     *
     * @ORM\Column(name="id_resume_rank", type="integer", nullable=false)
     */
    private $idResumeRank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type_rank", type="string", length=30, nullable=true)
     */
    private $typeRank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="triche_rank", type="string", length=5, nullable=true)
     */
    private $tricheRank;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_rank", type="datetime", nullable=true)
     */
    private $dateFinishRank;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut_rank", type="string", length=30, nullable=true)
     */
    private $statutRank;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_votes", type="integer", nullable=true)
     */
    private $nbVotes = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="timelineMain", type="integer", nullable=false, options={"default"="1"})
     */
    private $timelinemain = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listWR", type="text", length=0, nullable=true)
     */
    private $listwr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="listLR", type="text", length=0, nullable=true)
     */
    private $listlr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="banner", type="string", length=255, nullable=true)
     */
    private $banner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UTM", type="string", length=30, nullable=true)
     */
    private $utm;


}
