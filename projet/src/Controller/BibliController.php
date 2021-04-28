<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BibliController extends AbstractController
{
    /**
     * @Route("bibli", name="bibli")
     */
    public function bibli(): Response
    {
        return $this->render('bibli/bibliotheque.html.twig');
    }
}
