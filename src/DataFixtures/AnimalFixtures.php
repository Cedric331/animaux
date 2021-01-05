<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      $animal1 = new Animal();
         $animal1->setName('Chien');
         $animal1->setDescription('Animal domestique');
         $animal1->setImage('/image/chien.png');
         $animal1->setPoids(9);
         $animal1->setDanger(false);
      $manager->persist($animal1);

      $animal2 = new Animal();
         $animal2->setName('Cochon');
         $animal2->setDescription('Animal de ferme');
         $animal2->setImage('/image/cochon.png');
         $animal2->setPoids(12);
         $animal2->setDanger(false);
      $manager->persist($animal2);

      $animal3 = new Animal();
         $animal3->setName('Crocodile');
         $animal3->setDescription('Animal qui vit dans les fleuves');
         $animal3->setImage('/image/croco.png');
         $animal3->setPoids(7);
         $animal3->setDanger(true);
      $manager->persist($animal3);

      $animal4 = new Animal();
         $animal4->setName('Requin');
         $animal4->setDescription('Animal qui vit dans l\'océan');
         $animal4->setImage('/image/requin.png');
         $animal4->setPoids(26);
         $animal4->setDanger(true);
      $manager->persist($animal4);

      $animal5 = new Animal();
         $animal5->setName('Serpent');
         $animal5->setDescription('Animal qui vit un peu partout dans le monde');
         $animal5->setImage('/image/serpent.png');
         $animal5->setPoids(3);
         $animal5->setDanger(true);
      $manager->persist($animal5);

        $manager->flush();
    }
}
