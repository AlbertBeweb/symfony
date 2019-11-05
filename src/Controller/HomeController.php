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
            'current_menu' => 'home'
        ]);
    }
}
