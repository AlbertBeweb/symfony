<?php
namespace App\Controller;

use App\Entity\About;
use App\Repository\AboutRepository;
use Doctrine\Common\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Object_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends AbstractController
{
    /**
     * @var AboutRepository
     */
    private $repository;
    /**
     * @var ObjectManager
     */
    private $em;

    public function __construct(AboutRepository $repository, ObjectManager $em)
    {
        $this->repository = $repository;
    }
    public function index(): Response
    {
        /* création de la requête pour vérifié
        les entrées en base de donnée */

        /* 
        $about = new About();
            $about->setTitle('Salut')
                  ->setDescription('Test pour voir si ça fonctionne')
                  ->setSubtitle('coucou')
                  ->setSignature('Ta gueule')
                  ->setAboutHeading('titre de la page')
                  ->setMtAbout('Les MT')
                  ->setMkAbout('Les Mk')
                  ->setMdAbout('Les Md');
        $em = $this->getDoctrine()->getManager();
        $em->persist($about);
        $em->flush();  
        */

        $about = $this->repository->findAll();
        return $this->render('pages/about.html.twig', [
            //Permet d'avoir le link de la navbar en active
            'current_menu' => 'about',
            //Variable pour le titre et l'onglet
            'title' => 'About',
            //Titre de l'application
            'appName' => 'StarterKit Symfony 4',
            
            'about' => $about,
        ]);
    }
}
