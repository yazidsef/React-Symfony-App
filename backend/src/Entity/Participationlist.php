<?php

namespace App\Entity;

use App\Repository\ParticipationlistRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipationlistRepository::class)]
class Participationlist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $uuidVainkeur = null;

    #[ORM\Column(length: 55)]
    private ?string $emailP = null;

    #[ORM\Column(nullable: true)]
    private ?int $phoneP = null;

    #[ORM\Column]
    private ?int $chanceP = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $triggerChance = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEmailP(): ?string
    {
        return $this->emailP;
    }

    public function setEmailP(string $emailP): static
    {
        $this->emailP = $emailP;

        return $this;
    }

    public function getPhoneP(): ?int
    {
        return $this->phoneP;
    }

    public function setPhoneP(?int $phoneP): static
    {
        $this->phoneP = $phoneP;

        return $this;
    }

    public function getChanceP(): ?int
    {
        return $this->chanceP;
    }

    public function setChanceP(int $chanceP): static
    {
        $this->chanceP = $chanceP;

        return $this;
    }

    public function getTriggerChance(): ?string
    {
        return $this->triggerChance;
    }

    public function setTriggerChance(?string $triggerChance): static
    {
        $this->triggerChance = $triggerChance;

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
}
