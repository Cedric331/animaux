<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Dispose;
use App\Entity\Famille;
use App\Entity\Personne;
use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

      $personne1 = new Personne();
         $personne1->setNom('John');
      $manager->persist($personne1);

      $personne2 = new Personne();
         $personne2->setNom('Franck');
      $manager->persist($personne2);

      $personne3 = new Personne();
         $personne3->setNom('Emilie');
      $manager->persist($personne3);


      $continent1 = new Continent();
         $continent1->setLibelle('Europe');
      $manager->persist($continent1);

      $continent2 = new Continent();
         $continent2->setLibelle('Asie');
      $manager->persist($continent2);

      $continent3 = new Continent();
         $continent3->setLibelle('Amérique');
      $manager->persist($continent3);

      $continent4 = new Continent();
         $continent4->setLibelle('Océanie');
      $manager->persist($continent4);

      $continent5 = new Continent();
         $continent5->setLibelle('Afrique');
      $manager->persist($continent5);

      $famille1 = new Famille();
         $famille1->setLibelle('Mammifère');
         $famille1->setDescription('Animaux de la famille mammifère');
      $manager->persist($famille1);

      $famille2 = new Famille();
         $famille2->setLibelle('Reptiles');
         $famille2->setDescription('Animaux de la famille des reptiles');
      $manager->persist($famille2);

      $famille3 = new Famille();
         $famille3->setLibelle('Poisson');
         $famille3->setDescription('Animaux de la famille des poissons');
      $manager->persist($famille3);


      $animal1 = new Animal();
         $animal1->setName('Chien');
         $animal1->setDescription('Animal domestique');
         $animal1->setImage('/image/chien.png');
         $animal1->setPoids(9);
         $animal1->setDanger(false);
         $animal1->setFamille($famille1);
         $animal1->addContinent($continent1);
         $animal1->addContinent($continent2);
         $animal1->addContinent($continent3);
         $animal1->addContinent($continent4);
         $animal1->addContinent($continent5);
      $manager->persist($animal1);

      $animal2 = new Animal();
         $animal2->setName('Cochon');
         $animal2->setDescription('Animal de ferme');
         $animal2->setImage('/image/cochon.png');
         $animal2->setPoids(12);
         $animal2->setDanger(false);
         $animal2->setFamille($famille1);
         $animal2->addContinent($continent1);
         $animal2->addContinent($continent5);
      $manager->persist($animal2);

      $animal3 = new Animal();
         $animal3->setName('Crocodile');
         $animal3->setDescription('Animal qui vit dans les fleuves');
         $animal3->setImage('/image/croco.png');
         $animal3->setPoids(7);
         $animal3->setDanger(true);
         $animal3->setFamille($famille2);
         $animal3->addContinent($continent2);
         $animal3->addContinent($continent5);
      $manager->persist($animal3);

      $animal4 = new Animal();
         $animal4->setName('Requin');
         $animal4->setDescription('Animal qui vit dans l\'océan');
         $animal4->setImage('/image/requin.png');
         $animal4->setPoids(26);
         $animal4->setDanger(true);
         $animal4->setFamille($famille3);
         $animal4->addContinent($continent2);
         $animal4->addContinent($continent3);
         $animal4->addContinent($continent4);
         $animal4->addContinent($continent5);
      $manager->persist($animal4);

      $animal5 = new Animal();
         $animal5->setName('Serpent');
         $animal5->setDescription('Animal qui vit un peu partout dans le monde');
         $animal5->setImage('/image/serpent.png');
         $animal5->setPoids(3);
         $animal5->setDanger(true);
         $animal5->setFamille($famille2);
         $animal5->addContinent($continent1);
         $animal5->addContinent($continent2);
         $animal5->addContinent($continent3);
         $animal5->addContinent($continent4);
         $animal5->addContinent($continent5);
      $manager->persist($animal5);

      $dispose1 = new Dispose();
         $dispose1->setPersonne($personne1);
         $dispose1->setAnimal($animal2);
         $dispose1->setNombre(2);
      $manager->persist($dispose1);

      $dispose2 = new Dispose();
         $dispose2->setPersonne($personne1);
         $dispose2->setAnimal($animal1);
         $dispose2->setNombre(1);
      $manager->persist($dispose2);

      $dispose3 = new Dispose();
         $dispose3->setPersonne($personne1);
         $dispose3->setAnimal($animal4);
         $dispose3->setNombre(3);
      $manager->persist($dispose3);

      $dispose4 = new Dispose();
         $dispose4->setPersonne($personne2);
         $dispose4->setAnimal($animal5);
         $dispose4->setNombre(2);
      $manager->persist($dispose4);

      $dispose5 = new Dispose();
         $dispose5->setPersonne($personne2);
         $dispose5->setAnimal($animal1);
         $dispose5->setNombre(4);
      $manager->persist($dispose5);

      $dispose6 = new Dispose();
         $dispose6->setPersonne($personne3);
         $dispose6->setAnimal($animal3);
         $dispose6->setNombre(8);
      $manager->persist($dispose6);

        $manager->flush();
    }
}
