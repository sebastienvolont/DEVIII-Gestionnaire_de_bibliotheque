<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Livres;

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
     * @Route("/addLivre", name="addLivre")
     */
    public function addLivre(): Response
    {
        return $this->render('virtueltheque/addLivre.html.twig', [
            
        ]);
    }

    /**
     * @Route("/livre/new",name="livre_create")
     */

    public function create(){

        $mylivre = new Livres();

        $form = $this->createFormBuilder($mylivre)
                    ->add('titre',TextType::class,[ 
                        'attr'=> [
                            'placeholder'=>"Titre du livre"
                            ]
                        ])
                    ->add('synopsis',TextareaType::class,[ 
                        'attr'=> [
                            'placeholder'=>"Synopsis du Livre"
                            ]
                        ])
                    ->add('enregistrer',SubmitType::class,[
                        'label' => 'Enregistrer'
                    ])
                    ->getForm();

        return $this->render('virtueltheque/create.html.twig',[
            'formLivre' => $form->createView()
        ]);
    }
}