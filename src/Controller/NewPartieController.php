<?php

namespace App\Controller;

use App\Entity\MotPartie;
use App\Entity\Partie;
use App\Repository\MotPartieRepository;
use App\Repository\MotRepository;
use App\Repository\PartieRepository;
use App\Repository\UserRepository;
use DateTime;
use DateTimeZone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewPartieController extends AbstractController
{
    #[Route('/new', name: 'app_new_partie')]
    public function index(
        Request             $request,
        EntityManagerInterface $entityManagerInterface,
        MotPartieRepository $motPartieRepository,
        PartieRepository    $partieRepository,
        MotRepository       $motRepository,
        UserRepository      $userRepository
    ): Response
    {
        $user = $this->getUser();
        if(!$user) {
            return $this->redirectToRoute('app_login');
        }

        $partie = new Partie();

        //récupération de 25 mots aléatoires
        $mots = $motRepository->findAll();
        $tMots = [];
        $partie->setJoueur1($this->getUser()); //mettre $this->getUser()

        //récupération du J2 depuis le formulaire
        $joueur2 = $userRepository->find(5);
        $partie->setJoueur2($joueur2);
        $partie->setTour($this->getUser());//mettre $this->getUser()
        $partie->setEtat('en cours');
        $partie->setResultat(false);
        $partie->setDateDebut(new DateTime('now', new DateTimeZone('Europe/Paris')));

        $partieRepository->save($partie, true);
        foreach ($mots as $mot) {
            $tMots[$mot->getId()] = $mot;
        }

        $tCartes = [];
        $tCartes[0][1] = 'Noir';
        $tCartes[0][2] = 'Bleu';

        $tCartes[1][1] = 'Noir';
        $tCartes[1][2] = 'Noir';

        $tCartes[2][1] = 'Noir';
        $tCartes[2][2] = 'Neutre';

        $tCartes[3][1] = 'Bleu';
        $tCartes[3][2] = 'Noir';

        $tCartes[4][1] = 'Neutre';
        $tCartes[4][2] = 'Noir';

        $tCartes[5][1] = 'Bleu';
        $tCartes[5][2] = 'Bleu';

        $tCartes[6][1] = 'Bleu';
        $tCartes[6][2] = 'Bleu';

        $tCartes[7][1] = 'Bleu';
        $tCartes[7][2] = 'Bleu';

        for ($i = 8; $i < 15; $i++) {
            $tCartes[$i][1] = 'Neutre';
            $tCartes[$i][2] = 'Neutre';
        }

        for ($i = 15; $i < 20; $i++) {
            $tCartes[$i][1] = 'Bleu';
            $tCartes[$i][2] = 'Neutre';
        }

        for ($i = 20; $i < 25; $i++) {
            $tCartes[$i][1] = 'Neutre';
            $tCartes[$i][2] = 'Bleu';
        }
        shuffle($tCartes);
        shuffle($tMots); //mélange du tableau

        for ($i = 0; $i < 25; $i++) {
            $mp = new MotPartie();
            $mp->setPartie($partie);
            $mp->setMot(array_pop($tMots));
            $mp->setCouleurJ1($tCartes[$i][1]);
            $mp->setCouleurJ2($tCartes[$i][2]);
            $mp->setJetonJ1(false);
            $mp->setJetonJ2(false);
            $mp->setPosition($i);
            $mp->setTrouve(false);
            $motPartieRepository->save($mp, true);
        }

        $entityManagerInterface->persist($partie);
        $entityManagerInterface->flush();

        return $this->render('new_partie/index.html.twig', [
            'controller_name' => 'NewPartieController',
        ]);
    }
}
