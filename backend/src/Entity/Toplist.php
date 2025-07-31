<?php

namespace App\Entity;

use App\Repository\ToplistRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ToplistRepository::class)]
class Toplist
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $idvainkeur = null;

    #[ORM\Column(nullable: true)]
    private ?int $idUser = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $uuid_user = null;

    #[ORM\Column]
    private ?int $idTopRank = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateRank = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $ranking = null;

    #[ORM\Column(nullable: true)]
    private ?int $idResumeRank = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbVotes = null;

    #[ORM\Column]
    private ?int $timelineMain = null;

    #[ORM\Column(length: 60, nullable: true)]
    private ?string $banner = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdvainkeur(): ?int
    {
        return $this->idvainkeur;
    }

    public function setIdvainkeur(?int $idvainkeur): static
    {
        $this->idvainkeur = $idvainkeur;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getUuidUser(): ?string
    {
        return $this->uuid_user;
    }

    public function setUuidUser(?string $uuid_user): static
    {
        $this->uuid_user = $uuid_user;

        return $this;
    }

    public function getIdTopRank(): ?int
    {
        return $this->idTopRank;
    }

    public function setIdTopRank(int $idTopRank): static
    {
        $this->idTopRank = $idTopRank;

        return $this;
    }

    public function getDateRank(): ?\DateTimeInterface
    {
        return $this->dateRank;
    }

    public function setDateRank(\DateTimeInterface $dateRank): static
    {
        $this->dateRank = $dateRank;

        return $this;
    }

    public function getRanking(): ?string
    {
        return $this->ranking;
    }

    public function setRanking(?string $ranking): static
    {
        $this->ranking = $ranking;

        return $this;
    }

    public function getIdResumeRank(): ?int
    {
        return $this->idResumeRank;
    }

    public function setIdResumeRank(?int $idResumeRank): static
    {
        $this->idResumeRank = $idResumeRank;

        return $this;
    }

    public function getNbVotes(): ?int
    {
        return $this->nbVotes;
    }

    public function setNbVotes(?int $nbVotes): static
    {
        $this->nbVotes = $nbVotes;

        return $this;
    }

    public function getTimelineMain(): ?int
    {
        return $this->timelineMain;
    }

    public function setTimelineMain(int $timelineMain): static
    {
        $this->timelineMain = $timelineMain;

        return $this;
    }

    public function getBanner(): ?string
    {
        return $this->banner;
    }

    public function setBanner(?string $banner): static
    {
        $this->banner = $banner;

        return $this;
    }
}
