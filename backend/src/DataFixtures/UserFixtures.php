<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Enum\RoleEnum;
use App\Entity\Enum\UserTypeEnum;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $user->setName($faker->firstName);
            $user->setSurname($faker->lastName);
            $user->setUuidUser($faker->uuid);
            $user->setDateRegisterUser($faker->dateTimeBetween('-2 years', 'now'));
            $user->setEmailuser($faker->email);
            $user->setPaysUser($faker->country);
            $user->setAvatarUser($faker->imageUrl());
            $user->setTiktokuser($faker->userName);
            $user->setRoleUser($faker->numberBetween(1, 3));
            $user->setCodeParrainUser($faker->lexify('PAR??????'));
            $user->setUsername($faker->userName);
            $user->setEmail($faker->email);
            $user->setPassword($faker->password);
            $user->setIsNew($faker->numberBetween(0, 1));
            $user->setRole($faker->randomElement([RoleEnum::ROLE_USER, RoleEnum::ROLE_ADMIN]));
            $user->setUserType($faker->randomElement([UserTypeEnum::INDIVIDUAL, UserTypeEnum::COMPANY]));
            $user->setProfileImage($faker->imageUrl());
            $user->setPseudoUser($faker->userName);
            $user->setPseudoSlugUser($faker->slug);
            $manager->persist($user);
        }

        $manager->flush();
    }
}
