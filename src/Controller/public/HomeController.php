<?php

namespace App\Controller\public;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {


    #[Route('/homepage', name: 'homepage')]
    public function homepage() {

        return $this->render('public/home/homepage.html.twig', []);
    }

}