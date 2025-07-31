<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TwitchGamesList
 *
 * @ORM\Table(name="twitch_games_list")
 * @ORM\Entity
 */
class TwitchGamesList
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
     * @ORM\Column(name="id_top", type="integer", nullable=true)
     */
    private $idTop;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_toplist", type="integer", nullable=true)
     */
    private $idToplist;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uuid_user", type="string", length=36, nullable=true)
     */
    private $uuidUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stream_channel", type="string", length=255, nullable=true)
     */
    private $streamChannel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_participants", type="integer", nullable=true)
     */
    private $numberParticipants;

    /**
     * @var int|null
     *
     * @ORM\Column(name="game_mode", type="integer", nullable=true)
     */
    private $gameMode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participants", type="text", length=0, nullable=true)
     */
    private $participants;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rest_participants", type="text", length=0, nullable=true)
     */
    private $restParticipants;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra_field_for_points_game", type="text", length=0, nullable=true)
     */
    private $extraFieldForPointsGame;

    /**
     * @var string|null
     *
     * @ORM\Column(name="winner", type="string", length=255, nullable=true)
     */
    private $winner;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gift", type="string", length=255, nullable=true)
     */
    private $gift;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut_gift", type="string", length=255, nullable=true)
     */
    private $statutGift;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_live", type="boolean", nullable=true)
     */
    private $isLive;


}
