<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\AdvEntity;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/**
 * @Route("/api/adv", name="api_adv_")
 */
class AdvController extends AbstractController{
    /**
     * @Route("/create", name="create", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {

        $name = $request->request->get('name');
        $price = $request->request->get('price');
        $em = $entityManager = $this->getDoctrine()->getManager();
        $advEntity = new AdvEntity();
        $advEntity->setName($name);
        $advEntity->setPrice($price);
        $em->persist($advEntity);
        $em->flush();

        $response = ["success"=> true];

        return new Response(
            json_encode($response)
        );
    }
}