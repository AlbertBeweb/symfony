<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('pages/contact.html.twig', [
            //Permet d'avoir le link de la navbar en active
            'current_menu' => 'contact',
            //Variable pour le titre et l'onglet
            'title' => 'Contact',
            //Titre de l'application
            'appName' => 'StarterKit Symfony 4'
        ]);
    }
}
