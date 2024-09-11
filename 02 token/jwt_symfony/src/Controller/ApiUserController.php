<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route("/api")]
class ApiUserController extends AbstractController
{
    /**
     * Returns all users.
     * See config/packages/security.yaml for access control.
     */
    #[Route('/users', name: 'app_api_users', methods: ["GET"])]
    public function users(EntityManagerInterface $entityManagerInterface): Response
    {
        $userRepository = $entityManagerInterface->getRepository(User::class);
        $users = $userRepository->findAll();

        return $this->json($users, 200);
    }

    /**
     * Returns specific user.
     * See config/packages/security.yaml for access control.
     */
    #[Route('/users/profile/{id}', name: 'app_api_users_profile', methods: ["GET"])]
    public function profile(string $id, EntityManagerInterface $entityManagerInterface): Response
    {
        $userRepository = $entityManagerInterface->getRepository(User::class);
        $user = $userRepository->find($id);

        if ($user) {
            return $this->json($user, 200);
        }

        return $this->json(["error" => "Unknown user."]);
    }
}
