<?php

namespace App\Entity;

use App\Entity\Enum\RoleEnum;
use App\Entity\Enum\UserTypeEnum;
use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User extends BaseEntity implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Column(type: "string")]
    #[Groups(['basic'])]
    private string $name;

    #[ORM\Column(type: "string")]
    #[Groups(["basic"])]
    private string $surname;

    #[ORM\Column(type: "string")]
    #[Groups(["basic"])]
    private string $username;

    #[ORM\Column(type: "string")]
    #[Groups(["basic"])]
    private string $email;

    #[ORM\Column(type: "string")]
    private string $password;

    #[ORM\Column(type: "integer", enumType: RoleEnum::class)]
    #[Groups(["basic"])]
    private RoleEnum $role;

    #[ORM\Column(type: "integer", enumType: UserTypeEnum::class)]
    #[Groups(["basic"])]
    private UserTypeEnum $userType;

    #[ORM\Column(type: "blob", nullable: true)]
    #[Groups(["extend"])]
    private $profileImage;

    #[ORM\Column(length: 50)]
    private ?string $uuidUser = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateRegisterUser = null;

    #[ORM\Column(length: 90)]
    private ?string $emailuser = null;

    #[ORM\Column(length: 50)]
    private ?string $paysUser = null;

    #[ORM\Column(length: 255)]
    private ?string $avatarUser = null;

    #[ORM\Column(length: 255)]
    private ?string $pseudoUser = null;

    #[ORM\Column(length: 255)]
    private ?string $pseudoSlugUser = null;

    #[ORM\Column]
    private ?int $roleUser = null;

    #[ORM\Column(length: 255)]
    private ?string $codeParrainUser = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $parrainedBy = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $instagramUser = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $twitchUser = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $youtubeUser = null;

    #[ORM\Column(length: 255)]
    private ?string $tiktokuser = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descriptionUser = null;

    #[ORM\Column]
    private ?bool $isNew = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $snapchatUser = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;

    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?RoleEnum
    {
        return $this->role;
    }

    public function setRole(RoleEnum $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getUserType(): ?UserTypeEnum
    {
        return $this->userType;
    }

    public function setUserType(UserTypeEnum $userType): self
    {
        $this->userType = $userType;

        return $this;
    }

    public function getProfileImage()
    {
        if (is_resource($this->profileImage) && !is_string($this->profileImage)) {
            return stream_get_contents($this->profileImage);
        }
        return $this->profileImage;
    }

    public function setProfileImage(string $profileImage): self
    {
        $this->profileImage = $profileImage;

        return $this;
    }

    public function getRoles(): array
    {
        return [];
    }

    public function getUserIdentifier(): string
    {
        return $this->getUsername();
    }

    public function eraseCredentials()
    {
    }

    public function __sleep()
    {
        return array('id');
    }

    public function getUuidUser(): ?string
    {
        return $this->uuidUser;
    }

    public function setUuidUser(string $uuidUser): static
    {
        $this->uuidUser = $uuidUser;

        return $this;
    }

    public function getDateRegisterUser(): ?\DateTimeInterface
    {
        return $this->dateRegisterUser;
    }

    public function setDateRegisterUser(\DateTimeInterface $dateRegisterUser): static
    {
        $this->dateRegisterUser = $dateRegisterUser;

        return $this;
    }

    public function getEmailuser(): ?string
    {
        return $this->emailuser;
    }

    public function setEmailuser(string $emailuser): static
    {
        $this->emailuser = $emailuser;

        return $this;
    }

    public function getPaysUser(): ?string
    {
        return $this->paysUser;
    }

    public function setPaysUser(string $paysUser): static
    {
        $this->paysUser = $paysUser;

        return $this;
    }

    public function getAvatarUser(): ?string
    {
        return $this->avatarUser;
    }

    public function setAvatarUser(string $avatarUser): static
    {
        $this->avatarUser = $avatarUser;

        return $this;
    }

    public function getPseudoUser(): ?string
    {
        return $this->pseudoUser;
    }

    public function setPseudoUser(string $pseudoUser): static
    {
        $this->pseudoUser = $pseudoUser;

        return $this;
    }

    public function getPseudoSlugUser(): ?string
    {
        return $this->pseudoSlugUser;
    }

    public function setPseudoSlugUser(string $pseudoSlugUser): static
    {
        $this->pseudoSlugUser = $pseudoSlugUser;

        return $this;
    }

    public function getRoleUser(): ?int
    {
        return $this->roleUser;
    }

    public function setRoleUser(int $roleUser): static
    {
        $this->roleUser = $roleUser;

        return $this;
    }

    public function getCodeParrainUser(): ?string
    {
        return $this->codeParrainUser;
    }

    public function setCodeParrainUser(string $codeParrainUser): static
    {
        $this->codeParrainUser = $codeParrainUser;

        return $this;
    }

    public function getParrainedBy(): ?string
    {
        return $this->parrainedBy;
    }

    public function setParrainedBy(?string $parrainedBy): static
    {
        $this->parrainedBy = $parrainedBy;

        return $this;
    }

    public function getInstagramUser(): ?string
    {
        return $this->instagramUser;
    }

    public function setInstagramUser(?string $instagramUser): static
    {
        $this->instagramUser = $instagramUser;

        return $this;
    }

    public function getTwitchUser(): ?string
    {
        return $this->twitchUser;
    }

    public function setTwitchUser(?string $twitchUser): static
    {
        $this->twitchUser = $twitchUser;

        return $this;
    }

    public function getYoutubeUser(): ?string
    {
        return $this->youtubeUser;
    }

    public function setYoutubeUser(?string $youtubeUser): static
    {
        $this->youtubeUser = $youtubeUser;

        return $this;
    }

    public function getTiktokuser(): ?string
    {
        return $this->tiktokuser;
    }

    public function setTiktokuser(string $tiktokuser): static
    {
        $this->tiktokuser = $tiktokuser;

        return $this;
    }

    public function getDescriptionUser(): ?string
    {
        return $this->descriptionUser;
    }

    public function setDescriptionUser(?string $descriptionUser): static
    {
        $this->descriptionUser = $descriptionUser;

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

    public function getSnapchatUser(): ?string
    {
        return $this->snapchatUser;
    }

    public function setSnapchatUser(?string $snapchatUser): static
    {
        $this->snapchatUser = $snapchatUser;

        return $this;
    }
}