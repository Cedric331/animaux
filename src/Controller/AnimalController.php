<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AnimalController extends AbstractController
{
   private $repository;

   public function __construct(AnimalRepository $repository)
   {
      $this->repository = $repository;
   }

    /**
     * @Route("/", name="animaux")
     */
    public function index(): Response
    {
      $animaux = $this->repository->findAll();
      
      return $this->render('animal/index.html.twig', [
           'animaux' => $animaux
        ]);
    }


      /**
     * @Route("/animal/{id}", name="animaux_show")
     */
    public function show(Animal $animal): Response
    {      
      return $this->render('animal/show.html.twig', [
           'animal' => $animal
        ]);
    }
}
