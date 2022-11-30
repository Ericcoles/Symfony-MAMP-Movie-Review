<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RaddishController extends AbstractController
{
    #[Route('/raddish', name: 'raddish')]
    // public function index(): JsonResponse
    public function index(): Response
    {
        $usernames = ["Chris", "Steve", "Stan", "Roger", "Klaus"];
        return $this->render('index.html.twig', array(
            'usernames' => $usernames
        ));
    }
}


