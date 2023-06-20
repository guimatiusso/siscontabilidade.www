<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("user-create", name="app_user_create")
     * @return Response
     */
    public function create(EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $user->setEmail('rottamatiusso@gmail.com');
        $user->setName('Guilherme Matiusso');

        $entityManager->persist($user);
        $entityManager->flush();

        return new Response('Usuário salvo com sucesso');
    }

    /**
     * @Route("user-show/{id}", name="app_show_users")
     * @return Response
     */
    public function show(EntityManagerInterface $entityManager, int $id): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) throw $this->createNotFoundException('Não foi encontrado nenhum usuário');

        return new Response("Encontrado usuário com id {$user->getId()} e nome {$user->getName()}");
    }
}