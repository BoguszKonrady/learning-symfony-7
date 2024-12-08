<?php

namespace App\DataFixtures;

use App\Entity\Articles;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article= new Articles();
        $article->setTitle('First Title');
        $article->setContent('This is the first article content');
        $manager->persist($article);

        $article= new Articles();
        $article->setTitle('Second Title');
        $article->setContent('This is the second article content This is the second article content This is the second article content This is the second article content This is the second article content This is the second article content This is the second article content This is the second article content');
        $manager->persist($article);

        $manager->flush();
    }

}
