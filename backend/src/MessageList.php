<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MessageList
 *
 * @ORM\Table(name="message_list")
 * @ORM\Entity
 */
class MessageList
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
     * @var string|null
     *
     * @ORM\Column(name="uuid_message", type="string", length=50, nullable=true)
     */
    private $uuidMessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_message", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateMessage = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid_receiver", type="string", length=50, nullable=false)
     */
    private $uuidReceiver;


}
