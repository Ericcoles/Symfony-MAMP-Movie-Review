<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/spa/movies', name: 'movies', requirements:['reactRoute'=>"^(?!api).+"], 
    defaults:["reactRoute"=>null])]
    public function index(): Response
    {
        return $this->render('spa/movies.html.twig');
    }
}
