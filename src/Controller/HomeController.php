<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('pages/home.html.twig', [
            //Permet d'avoir le link de la navbar en active
            'current_menu' => 'home',
            //Variable pour le titre et l'onglet
            'title' => 'Home',
            //Titre de l'application
            'appName' => 'StarterKit Symfony 4'
        ]);
    }
}
