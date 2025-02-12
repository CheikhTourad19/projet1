<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends AbstractController
{
    #[Route("/", methods: ['GET'])]

    public function index(): Response
    {
        $school = "Esprim";
        return new Response("bonjour mes etudiants");
        //return $this->render('home.html.twig', ['school' => $school]);
    }
}