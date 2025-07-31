<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VainkeurList
 *
 * @ORM\Table(name="vainkeur_list")
 * @ORM\Entity
 */
class VainkeurList
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
     * @ORM\Column(name="uuid_user", type="string", length=50, nullable=false)
     */
    private $uuidUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_register_vkrz", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateRegisterVkrz = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_vkrz", type="string", length=50, nullable=true)
     */
    private $ipVkrz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang_vkrz", type="string", length=50, nullable=true)
     */
    private $langVkrz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pays_vkrz", type="string", length=15, nullable=true)
     */
    private $paysVkrz;

    /**
     * @var int
     *
     * @ORM\Column(name="level_vkrz", type="integer", nullable=false)
     */
    private $levelVkrz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_votes_vkrz", type="integer", nullable=true)
     */
    private $nbVotesVkrz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_tops_vkrz", type="integer", nullable=true)
     */
    private $nbTopsVkrz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_jugements_vkrz", type="integer", nullable=true)
     */
    private $nbJugementsVkrz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="xp_vkrz", type="integer", nullable=true)
     */
    private $xpVkrz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="money_vkrz", type="integer", nullable=true)
     */
    private $moneyVkrz;

    /**
     * @var int|null
     *
     * @ORM\Column(name="money_createur_vkrz", type="integer", nullable=true)
     */
    private $moneyCreateurVkrz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="money_parrainage_vkrz", type="integer", nullable=true)
     */
    private $moneyParrainageVkrz = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="money_trophy_vkrz", type="integer", nullable=false)
     */
    private $moneyTrophyVkrz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="money_duplication_vkrz", type="integer", nullable=true)
     */
    private $moneyDuplicationVkrz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="money_recompense_vkrz", type="integer", nullable=true)
     */
    private $moneyRecompenseVkrz = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="money_archive_vkrz", type="integer", nullable=false)
     */
    private $moneyArchiveVkrz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="depense_vkrz", type="integer", nullable=true)
     */
    private $depenseVkrz = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="money_dispo_vkrz", type="integer", nullable=true)
     */
    private $moneyDispoVkrz;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_toplist_genere", type="integer", nullable=true)
     */
    private $nbToplistGenere = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_votes_genere", type="integer", nullable=true)
     */
    private $nbVotesGenere = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_top_cree", type="integer", nullable=true)
     */
    private $nbTopCree = '0';


}
