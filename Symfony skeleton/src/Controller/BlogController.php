<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Livres;

class BlogController extends AbstractController
{
    /**
     * @Route("/acceuil", name="acceuil")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Livres::class);

        $livres= $repo->findAll("Le Petit Prince");
        return $this->render('virtueltheque/index.html.twig', [
            'controller_name' => 'BlogController',
            'livres' => $livres
        ]);
    }


    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('virtueltheque/home.html.twig', [
            'title'=>"Bienvenue sur mon site les bros",
            'age' => 30,
        ]);
    }

     /**
     * @Route("/afficherLivre/{id}", name="afficheLivre")
     */
    public function afficherLivre($id): Response
    {
        $repo = $this->getDoctrine()->getRepository(Livres::class);

        $livres= $repo->find($id);
        return $this->render('virtueltheque/afficherlivre.html.twig', [
            "livre" => $livres
        ]);
    }

     /**
     * @Route("/addLivre", name="addLivre")
     */
    public function addLivre(): Response
    {
        return $this->render('virtueltheque/addLivre.html.twig', [
            
        ]);
    }
}
