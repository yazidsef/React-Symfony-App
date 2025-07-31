<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserList
 *
 * @ORM\Table(name="user_list", indexes={@ORM\Index(name="uuid_user", columns={"uuid_user"})})
 * @ORM\Entity
 */
class UserList
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
     * @ORM\Column(name="id_vainkeur", type="integer", nullable=true)
     */
    private $idVainkeur;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid_user", type="string", length=50, nullable=false)
     */
    private $uuidUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="token_firebase_user", type="string", length=255, nullable=true)
     */
    private $tokenFirebaseUser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_register_user", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateRegisterUser = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_user", type="string", length=254, nullable=true)
     */
    private $emailUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pays_user", type="string", length=15, nullable=true)
     */
    private $paysUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="avatar_user", type="string", length=255, nullable=true)
     */
    private $avatarUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pseudo_user", type="string", length=255, nullable=true)
     */
    private $pseudoUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pseudo_slug_user", type="string", length=255, nullable=true)
     */
    private $pseudoSlugUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role_user", type="string", length=50, nullable=true, options={"default"="1"})
     */
    private $roleUser = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_parrain_user", type="string", length=100, nullable=true)
     */
    private $codeParrainUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parrained_by", type="string", length=100, nullable=true)
     */
    private $parrainedBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instagram_user", type="string", length=255, nullable=true)
     */
    private $instagramUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="twitch_user", type="string", length=255, nullable=true)
     */
    private $twitchUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="youtube_user", type="string", length=255, nullable=true)
     */
    private $youtubeUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="twitter_user", type="string", length=255, nullable=true)
     */
    private $twitterUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tiktok_user", type="string", length=255, nullable=true)
     */
    private $tiktokUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="snapchat_user", type="string", length=255, nullable=true)
     */
    private $snapchatUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kick_user", type="string", length=255, nullable=true)
     */
    private $kickUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cover_user", type="string", length=255, nullable=true)
     */
    private $coverUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_user", type="text", length=16777215, nullable=true)
     */
    private $descriptionUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="provider_user", type="string", length=50, nullable=true)
     */
    private $providerUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_new", type="integer", nullable=true)
     */
    private $isNew = '0';


}
