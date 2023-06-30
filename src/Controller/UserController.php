<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class UserController extends AbstractController
{
    /**
     * @Route("user-create", name="app_user_create")
     * @return Response
     */
    public function create(ValidatorInterface $validator): Response
    {
        $user = new User();
        $user->setEmail(null);
        $user->setName('Guilherme Matiusso');

        $form = $this->createForm(UserType::class, $user);

        $errors = $validator->validate($user);
        if (count($errors) > 0) {
            return new Response((string) $errors, 400);
        }

//        $entityManager->persist($user);
//        $entityManager->flush();

        return new Response('Usuário salvo com sucesso');
    }

    /**
     * @Route("user-show/{id}", name="app_show_users")
     * @return Response
     */
    public function showByPk(User $user): Response
    {
        if (!$user) throw $this->createNotFoundException('Não foi encontrado nenhum usuário');

        var_dump("Encontrado usuário com id {$user->getId()} e nome {$user->getName()}");

        $user->setName("Josivan");
        var_dump("Encontrado usuário com id {$user->getId()} e nome {$user->getName()}");

        return new Response("Encontrado usuário com id {$user->getId()} e nome {$user->getName()}");
    }
}