<?php

namespace App\Controller;

use App\Repository\PartieRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    #[Route('/compte', name: 'app_compte')]
    public function index(UserRepository $userRepository, PartieRepository $partieRepository): Response
    {
        $user = $this->getUser();

        if ($user==null) {
            return $this->redirectToRoute('app_login', []);
        }
        $parties=$user->getParties();
        $avatar=$user->getAvatar();

        return $this->render('compte/index.html.twig', [
            'user' => $user,
//            'parties' => $partieRepository->findBy(['joueur1' => $user]),
        ]);
    }
}

