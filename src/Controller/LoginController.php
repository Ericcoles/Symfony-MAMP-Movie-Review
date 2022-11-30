<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/spa/login', name: 'login', requirements:['reactRoute'=>"^(?!api).+"], 
    defaults:["reactRoute"=>null])]
    public function index(): Response
    {
        return $this->render('spa/login.html.twig');
    }
}
