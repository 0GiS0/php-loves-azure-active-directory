<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PrivateController extends AbstractController
{
    /**
     * @Route("/private", name="private")
     */
    public function index()
    {
        return $this->render('private/index.html.twig', [
            'controller_name' => 'PrivateController',
        ]);
    }
}
