<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class AboutController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('pages/about.html.twig');
    }
}
