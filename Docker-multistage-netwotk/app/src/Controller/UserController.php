<?php

namespace App\Controller;

use App\Document\Users;
use App\Form\UserType;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\MongoDBException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route("/eduar", name: "addUser", methods: ["GET"])]
    public function addUser(): JsonResponse
    {
        return new JsonResponse(['mensaje' => 'Ruta get'], 200);

    }

}