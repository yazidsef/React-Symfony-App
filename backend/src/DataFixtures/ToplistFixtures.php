<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Toplist;
use Faker\Factory;

class ToplistFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $toplist = new Toplist();
            $toplist->setIdTopRank($faker->numberBetween(1, 100));
            $toplist->setDateRank($faker->dateTimeBetween('-1 year', 'now'));
            $toplist->setRanking($faker->word);
            $toplist->setIdResumeRank($faker->numberBetween(1, 100));
            $toplist->setNbVotes($faker->numberBetween(1, 100));
            $toplist->setTimelineMain($faker->numberBetween(1, 100));
            $toplist->setBanner($faker->imageUrl());
        }

        $manager->flush();
    }
}
