<?php

namespace App\Entity;

use App\Repository\TiragelistRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TiragelistRepository::class)]
class Tiragelist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $id_top = null;

    #[ORM\Column(length: 255)]
    private ?string $uuid_vainkeur = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 100)]
    private ?string $numeroColis = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $comments = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $status = null;

    #[ORM\Column]
    private ?bool $isNew = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTop(): ?string
    {
        return $this->id_top;
    }

    public function setIdTop(string $id_top): static
    {
        $this->id_top = $id_top;

        return $this;
    }

    public function getUuidVainkeur(): ?string
    {
        return $this->uuid_vainkeur;
    }

    public function setUuidVainkeur(string $uuid_vainkeur): static
    {
        $this->uuid_vainkeur = $uuid_vainkeur;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getNumeroColis(): ?string
    {
        return $this->numeroColis;
    }

    public function setNumeroColis(string $numeroColis): static
    {
        $this->numeroColis = $numeroColis;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): static
    {
        $this->comments = $comments;

        return $this;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function isIsNew(): ?bool
    {
        return $this->isNew;
    }

    public function setIsNew(bool $isNew): static
    {
        $this->isNew = $isNew;

        return $this;
    }
}
