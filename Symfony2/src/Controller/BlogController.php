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
use PDO;
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
     * @Route("/modifLivres", name="modifLivres")
     */
     public function modifLivres(): Response
     {
        $bdd_bibliotheque = new PDO('mysql:host=localhost;dbname=v3_bibli;charset=utf8', 'root', 'root');

		$reponse = $bdd_bibliotheque->query("SELECT * FROM Livres");

        $url = 'https://www.googleapis.com/books/v1/volumes?q=bob';

        if (isset($_GET["leLivre"])) {
            $url = 'https://www.googleapis.com/books/v1/volumes?q=' . $_GET["leLivre"];
        }
        $recup_json = file_get_contents($url);
        $objet_json = json_decode($recup_json, true);

        $tableauLivres = array();

        for($i = 0; $i < 10; $i++) {
            if(isset($objet_json["items"][$i]["volumeInfo"]["title"])) {
            $nom_livre = $objet_json["items"][$i]["volumeInfo"]["title"];

            } else {
                $nom_livre = "Pas de résultat";
            }
            if (isset($objet_json["items"][$i]["volumeInfo"]["description"])) {
                $synopsys_livre = $objet_json["items"][$i]["volumeInfo"]["description"];
            } else {
                $synopsys_livre = "";
            }
            if (isset($objet_json["items"][$i]["volumeInfo"]["publishedDate"])) {
                $anneeParution_livre = $objet_json["items"][$i]["volumeInfo"]["publishedDate"];
            } else {
                $anneeParution_livre = "";
            }
            if (isset($objet_json["items"][$i]["volumeInfo"]["imageLinks"]["thumbnail"])) {
                $img_livre = $objet_json["items"][$i]["volumeInfo"]["imageLinks"]["thumbnail"];
            } else {
                $img_livre = "";
            }
            if (isset($objet_json["items"][$i]["volumeInfo"]["publisher"])) {
                $maisonEdition_livre = $objet_json["items"][$i]["volumeInfo"]["publisher"];
            } else {
                $maisonEdition_livre = "";
            }
            if (isset($objet_json["items"][$i]["volumeInfo"]["categories"][0])) {
                $genreLitteraire_livre = $objet_json["items"][$i]["volumeInfo"]["categories"][0];
            } else {
                $genreLitteraire_livre = "";
            }
            if (isset($objet_json["items"][$i]["volumeInfo"]["authors"][0])) {
                $auteur_livre = $objet_json["items"][$i]["volumeInfo"]["authors"][0];
            } else {
                $auteur_livre = "";
            }

            array_push($tableauLivres, $i);
            $tableauLivres[$i] = array("nom" => $nom_livre,
                                        "desc" => $synopsys_livre,
                                        "date" => $anneeParution_livre,
                                        "img" => $img_livre,
                                        "edi" => $maisonEdition_livre,
                                        "genre" => $genreLitteraire_livre,
                                        "auteur" => $auteur_livre);
        }


        if (isset($_POST["livreChoisi"])) {
            for ($index = 0; $index < 10; $index++)
                if ($_POST["livreChoisi"] == $index) {
                    $requete_insertion =  $bdd_bibliotheque->prepare('INSERT INTO livres (titre, edition, genre, synopsis, couverture, parution, auteur, id_bibliotheque)
                     VALUES (:titre_param, :edition_param, :genre_param, :synopsis_param, :couverture_param, :parution_param, :auteur_param, :idBiblio_param)');

                    $requete_insertion->execute(array(
                        'titre_param' => $tableauLivres[$index - 1]["nom"],
                        'edition_param' => $tableauLivres[$index - 1]["edi"],
                        'genre_param' => $tableauLivres[$index - 1]["genre"],
                        'synopsis_param' => $tableauLivres[$index - 1]["desc"],
                        'couverture_param' => $tableauLivres[$index - 1]["img"],
                        'parution_param' => $tableauLivres[$index - 1]["date"],
                        'auteur_param' => $tableauLivres[$index - 1]["auteur"],
                        'idBiblio_param' => 1
                    ));
                }

    }

         return $this->render('virtueltheque/modifLivre.html.twig', [
            'title' => "Page de modification de livres",
            'nomAuteur' => $auteur_livre,
            'livretab' => $tableauLivres,
            'controller_name' => 'BlogController']);

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
