<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PagesController extends AbstractController
{
    #[Route('/pages', name: 'app_pages')]
    public function index():Response
    {
        return $this->render("index.html.twig",[
            "controller_name"=>"PagesController",
        ]);
    }
    #[Route('/aboutme', name: 'aboutme')]
    public function ind(): Response
        {
            return $this->render("aboutme.html.twig", [
            "controller_name" => "PagesController",
            ]);
        }


    #[Route('/connexion', name: 'connexion')]
    public function connexion(): Response
        {
            return $this->render("connexion.html.twig", [
            "controller_name" => "PagesController",
            ]);
        }

        #[Route('/inscription', name: 'inscription')]
        public function inscription(): Response
            {
                return $this->render("inscription.html.twig", [
                "controller_name" => "PagesController",
                ]);
            }    

    
    
}
