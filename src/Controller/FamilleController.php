<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FamilleController extends AbstractController
{

   private $repository;

   public function __construct(FamilleRepository $repository)
   {
      $this->repository = $repository;
   }

    /**
     * @Route("/familles", name="familles")
     */
    public function index(): Response
    {
       $familles = $this->repository->findAll();

        return $this->render('famille/familles.html.twig', [
           'familles' => $familles
        ]);
    }

      /**
     * @Route("/famille/{id}", name="famille_show")
     */
    public function show(Famille $famille): Response
    {
       $animaux = $famille->getAnimaux();

        return $this->render('famille/famille.html.twig', [
           'animaux' => $animaux,
           'famille' => $famille
        ]);
    }
}
