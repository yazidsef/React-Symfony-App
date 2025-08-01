<?php

namespace App\DataFixtures;

use App\Entity\Commandes;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class CommandesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = Factory::create();

        for ($i = 0; $i < 550; $i++) {
            $commande = new Commandes();
            $commande->setDate($faker->dateTimeBetween('-1 year', 'now'));
            $commande->setIdProduit($faker->numberBetween(1, 100));
            $commande->setUuidVainkeur($faker->numberBetween(1, 100));
            $commande->setPrice($faker->numberBetween(100, 10000));
            $commande->setStatus($faker->numberBetween(0, 3));
            $commande->setUuidVainkeur($faker->uuid);
            $commande->setStackingNumber($faker->randomNumber(6, true));
            $commande->setGame($faker->word);
            $commande->setComment($faker->sentence(10));
            $commande->setEmailSent($faker->randomElement(['yes', 'no', null]));
            $commande->setIsNew($faker->numberBetween(0, 1));

            $manager->persist($commande);
        }

        $manager->flush();
    }
}
