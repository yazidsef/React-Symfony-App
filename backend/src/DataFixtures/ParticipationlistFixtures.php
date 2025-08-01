<?php

namespace App\DataFixtures;

use App\Entity\Participationlist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ParticipationlistFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $participationlist = new Participationlist();
            $participationlist->setEmailP($faker->email);
            $participationlist->setPhoneP($faker->phoneNumber);
            $participationlist->setChanceP($faker->numberBetween(0, 100));
            $participationlist->setTriggerChance($faker->randomElement(['yes', 'no', null]));
            $participationlist->setDate($faker->dateTimeBetween('-1 year', 'now'));
        }
        $manager->flush();
    }
}
