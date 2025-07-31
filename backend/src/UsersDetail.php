<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersDetail
 *
 * @ORM\Table(name="users_detail", indexes={@ORM\Index(name="fk_users_detail_user_list", columns={"uuid_user"})})
 * @ORM\Entity
 */
class UsersDetail
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
     * @ORM\Column(name="uuid_user", type="string", length=50, nullable=true)
     */
    private $uuidUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=100, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postal_code", type="string", length=20, nullable=true)
     */
    private $postalCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=100, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_number", type="string", length=20, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="best_categories", type="text", length=65535, nullable=true)
     */
    private $bestCategories;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=20, nullable=true)
     */
    private $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stream", type="string", length=20, nullable=true)
     */
    private $stream;

    /**
     * @var float|null
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    /**
     * @var float|null
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=200, nullable=true)
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complement_adresse", type="string", length=255, nullable=true)
     */
    private $complementAdresse;


}
