<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Livres;
use App\Entity\Bibliotheque;
class BlogController extends AbstractController
{
    /**
     * @Route("/", name="home")
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
     * @Route("/information", name="information")
     */
    public function myInfo(): Response
    {
        return $this->render('virtueltheque/information.html.twig', [
            'title'=>"Page d'information",
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
     * @Route("/addLivre/new",name="addLivre")
     */

    public function create(Request $request, ObjectManager $manager){

       
        $mylivre = new Livres();
        $form = $this->createFormBuilder($mylivre)
                    ->add('titre')
                    ->add('synopsis')
                    ->add('edition')
                    ->add('genre')
                    ->add('couverture')
                    ->getForm();

        $form->handleRequest($request);
        \dump($mylivre);
        
        
        return $this->render('virtueltheque/addLivre.html.twig',[
            'formLivre' => $form->createView()
        ]);
    }
}
