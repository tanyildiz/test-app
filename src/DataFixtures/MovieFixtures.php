<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Great Gatsby');
        $movie->setDescription('The Great Gatsby');
        $movie->setReleaseYear('2010');
        $movie->setImagePath('https://picsum.photos/300/300');
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_4'));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers');
        $movie2->setDescription('Avengers');
        $movie2->setReleaseYear('2010');
        $movie2->setImagePath('https://picsum.photos/300/300');
        $movie2->addActor($this->getReference('actor_2'));
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_1'));
        $manager->persist($movie2);

        $manager->flush();

        $this->addReference('movie', $movie);
        $this->addReference('movie2', $movie2);
    }
}
