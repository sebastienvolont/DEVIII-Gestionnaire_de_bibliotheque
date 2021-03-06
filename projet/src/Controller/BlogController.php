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



    //Route qui conduit vers la page qui permet de trier la bibliothèque a l'avenir page principale
    /**
     * @Route("/", name="MaBibliotheque")
     */
    public function maBibliotheque(): Response
    {
        return $this->render('virtueltheque/mabibliotheque.html.twig', [
            'title'=>"Ma bibliothèque",
        ]);
    }

    //Route qui conduit a la page d'information du site 
    /**
     * @Route("/information", name="information")
     */
    public function myInfo(): Response
    {

        return $this->render('virtueltheque/information.html.twig', [
            'title'=>"Page d'information",
        ]);
    }

    //Route qui conduit à la page de modification de la bibliothèque
    /**
     * @Route("/modifBibli", name="modifBibli")
     */
    public function modifBibli(): Response
    {

        return $this->render('virtueltheque/modifBibli.html.twig', [
            'title' => "Page de modification de la Bibliothèque",
            'controller_name' => 'BlogController']);

    }

    //Route vers la page de recherche de livre hors Bibliothèque

    /**
     * @Route("/rechercherLivre", name="rechercherLivre")
     */
    public function rechercherLivre(): Response
    {

        $bdd_bibliotheque = new PDO('mysql:host=localhost;dbname=bibliothequevirtuelle;charset=utf8', 'root', '');

        $reponse = $bdd_bibliotheque->query("SELECT * FROM Livres");


        if (isset($_GET["leLivre"]) && $_GET["leLivre"] != "") {
            $livre_recherche = $_GET["leLivre"];
            $livre_recherche = str_replace(" ", "", $livre_recherche);
            $url = 'https://www.googleapis.com/books/v1/volumes?q=' . $livre_recherche;
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
                
                if ($nom_livre != "Pas de résultat") {
                array_push($tableauLivres, $i);
                $tableauLivres[$i] = array("nom" => $nom_livre,
                    "desc" => $synopsys_livre,
                    "date" => $anneeParution_livre,
                    "img" => $img_livre,
                    "edi" => $maisonEdition_livre,
                    "genre" => $genreLitteraire_livre,
                    "auteur" => $auteur_livre);
                }
            }
        } else {
            $auteur_livre = "";
            $tableauLivres="";
            
        }



        if (isset($_POST["livreChoisi"])) {
            for ($index = 0; $index < 10; $index++)
                if ($_POST["livreChoisi"] == $index) {
                    $requete_insertion =  $bdd_bibliotheque->prepare('INSERT INTO livres (titre, edition, genre, synopsis, couverture, parution, auteur, statut, id_bibliotheque)
                     VALUES (:titre_param, :edition_param, :genre_param, :synopsis_param, :couverture_param, :parution_param, :auteur_param, :statut_param, :idBiblio_param)');

                    $requete_insertion->execute(array(
                        'titre_param' => $tableauLivres[$index - 1]["nom"],
                        'edition_param' => $tableauLivres[$index - 1]["edi"],
                        'genre_param' => $tableauLivres[$index - 1]["genre"],
                        'synopsis_param' => $tableauLivres[$index - 1]["desc"],
                        'couverture_param' => $tableauLivres[$index - 1]["img"],
                        'parution_param' => $tableauLivres[$index - 1]["date"],
                        'auteur_param' => $tableauLivres[$index - 1]["auteur"],
                        'statut_param' => "Non lu",
                        'idBiblio_param' => 1
                    ));
                }

        }

        return $this->render('virtueltheque/rechercherLivre.html.twig', [
            'title' => "Page de modification de livres",
            'nomAuteur' => $auteur_livre,
            'livretab' => $tableauLivres,
            'controller_name' => 'BlogController']);
    }

    //Route vers la page d'un livre en particulier
    /**
     * @Route("/afficherLivre/{id}", name="afficheLivre")
     */
    public function afficherLivre($id): Response
    {
        $repo = $this->getDoctrine()->getRepository(Livres::class);

        $livres= $repo->find($id);
        return $this->render('virtueltheque/afficherLivre.html.twig', [
            "livre" => $livres
        ]);
    }

    //Route vers la page de modification d'un livre en particulier
    /**
     * @Route("/modifLivres/{id}", name="modifLivres")
     */
    public function modifLivres($id): Response
    {
        $repo = $this->getDoctrine()->getRepository(Livres::class);

        $livres= $repo->find($id);
        return $this->render('virtueltheque/modifLivre.html.twig', [
            "livre" => $livres
        ]);
    }

}
