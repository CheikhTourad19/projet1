<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ServiceController extends AbstractController
{
    #[Route('/service{name}')]
    public function showService($name): Response
    {
        return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
            'name' => $name,
        ]);
    }
    #[Route('/returnToIndex')]
    public function goToIndex()
    {

        return $this->redirect('/');

    }

}
