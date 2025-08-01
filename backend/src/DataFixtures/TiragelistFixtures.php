<?php

namespace App\DataFixtures;

use App\Entity\Tiragelist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class TiragelistFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker =  Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $tiragelist = new Tiragelist();
            $tiragelist->setIdTop($faker->numberBetween(1, 100));
            $tiragelist->setUuidVainkeur($faker->uuid);
            $tiragelist->setType($faker->randomElement(['email', 'phone']));
            $tiragelist->setNumeroColis($faker->randomNumber(6, true));
            $tiragelist->setComments($faker->sentence(10));
            $tiragelist->setDate($faker->dateTimeBetween('-1 year', 'now'));
            $tiragelist->setStatus($faker->randomElement(['pending', 'sent', 'failed']));
            $tiragelist->setIsNew($faker->numberBetween(0, 1));
        }

        $manager->flush();
    }
}
