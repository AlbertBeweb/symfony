<?php
namespace App\Controller;

use App\Entity\About;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends AbstractController
{
    public function index(): Response
    {
        $about = new About();
            $about->setTitle('Salut')
                  ->setDescription('Test pour voir si ça fonctionne')
                  ->setSubtitle('coucou')
                  ->setsignature('Ta gueule');
        $em = $this->getDoctrine()->getManager();
        $em->persist($about);
        $em->flush();
        return $this->render('pages/about.html.twig', [
            'current_menu' => 'about'
        ]);
    }
}
