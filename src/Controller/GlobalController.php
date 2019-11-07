<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GlobalController extends AbstractController{

    /**
     * @Route("/", name="home")
     */
    public function home(){

        return $this->render('global/home.html.twig');

    }
    
}
