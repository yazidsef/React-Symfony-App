<?php

namespace App\Entity;

use App\Repository\CommandesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandesRepository::class)]
class Commandes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?int $id_produit = null;

    #[ORM\Column]
    private ?int $id_vainkeurz = null;

    #[ORM\Column]
    private ?int $price = null;

    #[ORM\Column]
    private ?int $status = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $uuidVainkeur = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $stackingNumber = null;

    #[ORM\Column(length: 50)]
    private ?string $game = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $comment = null;

    #[ORM\Column(length: 5, nullable: true)]
    private ?string $emailSent = null;

    #[ORM\Column(nullable: true)]
    private ?int $isNew = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }


    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getUuidVainkeur(): ?string
    {
        return $this->uuidVainkeur;
    }

    public function setUuidVainkeur(?string $uuidVainkeur): static
    {
        $this->uuidVainkeur = $uuidVainkeur;

        return $this;
    }

    public function getStackingNumber(): ?string
    {
        return $this->stackingNumber;
    }

    public function setStackingNumber(?string $stackingNumber): static
    {
        $this->stackingNumber = $stackingNumber;

        return $this;
    }

    public function getGame(): ?string
    {
        return $this->game;
    }

    public function setGame(string $game): static
    {
        $this->game = $game;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): static
    {
        $this->comment = $comment;

        return $this;
    }

    public function getEmailSent(): ?string
    {
        return $this->emailSent;
    }

    public function setEmailSent(?string $emailSent): static
    {
        $this->emailSent = $emailSent;

        return $this;
    }

    public function getIsNew(): ?int
    {
        return $this->isNew;
    }

    public function setIsNew(?int $isNew): static
    {
        $this->isNew = $isNew;

        return $this;
    }
}
