<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recherche
 *
 * @ORM\Table(name="recherche")
 * @ORM\Entity
 */
class Recherche
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_recherche", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecherche;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uuid_user", type="string", length=33, nullable=true)
     */
    private $uuidUser;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_cle", type="string", length=255, nullable=false)
     */
    private $motCle;

    /**
     * @var string
     *
     * @ORM\Column(name="type_resultat", type="string", length=50, nullable=false)
     */
    private $typeResultat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_resultat", type="integer", nullable=true)
     */
    private $nbResultat = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_recherche", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateRecherche = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="suggestions", type="text", length=65535, nullable=true)
     */
    private $suggestions;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_new", type="integer", nullable=true)
     */
    private $isNew = '0';


}
