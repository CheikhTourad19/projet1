<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuthorController extends AbstractController
{
    #[Route('/author', name: 'app_author')]
    public function index(): Response
    {
        return $this->render('author/index.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }

    #[Route('/showauther{name}', name: 'app_author_show')]
    public function showAuthor($name)
    {
        return $this->render('author/show.html.twig', ['name' => $name]);

    }

    #[Route('/listauthor', name: 'list_author')]
    public function listAuthors(): Response{
        $authors= array(
            array('id'=>1,'picture' => '/images/victor.jpeg','username'=> 'Victor Hugo' ,'email'=> 'victor.hugo@gmail.com',
            'nb_books'=>100),
            array('id' => 2, 'picture' => '/images/shakespare.webp','username' => ' William Shakespeare', 'email' =>
                ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
            array('id' => 3, 'picture' => '/images/taha-houssein.jpeg','username' => 'Taha Hussein', 'email' =>
                'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        return $this->render('author/list.html.twig',['authors'=>$authors]);
    }

    #[Route('/author_id={id}', name: 'app_author_detail')]
    public function authorDetails ($id)
    {   $authors= array(
        array('id'=>1,'picture' => '/images/victor.jpeg','username'=> 'Victor Hugo' ,'email'=> 'victor.hugo@gmail.com',
            'nb_books'=>100),
        array('id' => 2, 'picture' => '/images/shakespare.webp','username' => ' William Shakespeare', 'email' =>
            ' william.shakespeare@gmail.com', 'nb_books' => 200 ),
        array('id' => 3, 'picture' => '/images/taha-houssein.jpeg','username' => 'Taha Hussein', 'email' =>
            'taha.hussein@gmail.com', 'nb_books' => 300),
        );
        foreach ($authors as $author) {
            if ($author['id'] == $id) {
                return $this->render('author/showAuthor.html.twig',['author'=>$author]);
            }
        }

    }
}
