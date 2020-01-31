<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController{
    /**
     * @Route("/api", name="app_lucky_number")
     */
    public function number()
    {


        return new Response(
            '<html><body>Lucky number: </body></html>'
        );
    }
}