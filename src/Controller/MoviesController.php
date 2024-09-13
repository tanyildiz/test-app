<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    #[Route('/', name: 'app_movies')]
    public function index(): Response
    {
        $movies = ["Avengers: Endgame", "Inception", "Loki", "Black Widow"];

        return $this->render('movies/index.html.twig', [
            'movies' => $movies,
            'controller_name' => 'MoviesController',
        ]);
    }
}
