<?php

namespace App\Controller;

use App\Repository\GroupeRepository;
use App\Repository\MembreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
        ]);
    }

    /**
     * @Route("/groupe", name="home_groupe", methods={"GET"})
     */
    public function groupe(GroupeRepository $groupeRepository): Response
    {
        return $this->render('home/groupe.html.twig', [
            'groupes' => $groupeRepository->findAll()
        ]);
    }

    /**
     * @Route("/membre", name="home_membre", methods={"GET"})
     */
    public function membre(MembreRepository $membreRepository): Response
    {
        return $this->render('home/membre.html.twig', [
            'membres' => $membreRepository->findAll()
        ]);
    }


}
