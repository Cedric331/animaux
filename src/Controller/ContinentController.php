<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContinentController extends AbstractController
{

   private $repository;

   public function __construct(ContinentRepository $repository)
   {
      $this->repository = $repository;
   }

    /**
     * @Route("/continents", name="continents")
     */
    public function index(): Response
    {
       $continents =  $this->repository->findAll();

        return $this->render('continent/continents.html.twig', [
           'continents' => $continents
        ]);
    }

        /**
     * @Route("/continent/{id}", name="continent")
     */
    public function show(Continent $continent): Response
    {
       $animaux = $continent->getAnimaux();

        return $this->render('continent/continent.html.twig', [
           'continent' => $continent,
           'animaux' => $animaux
        ]);
    }
}
