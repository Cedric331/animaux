<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonneController extends AbstractController
{

   private $repository;

   public function __construct(PersonneRepository $repository)
   {
      $this->repository = $repository;
   }

    /**
     * @Route("/personnes", name="personnes")
     */
    public function index(): Response
    {
       $personnes = $this->repository->findAll();

        return $this->render('personne/index.html.twig', [
           'personnes' => $personnes
        ]);
    }

        /**
     * @Route("/personne/{id}", name="personne")
     */
    public function show(Personne $personne): Response
    {
        return $this->render('personne/show.html.twig', [
           'personne' => $personne
        ]);
    }
}
