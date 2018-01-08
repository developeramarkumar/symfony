<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
class AuthController extends Controller
{
    public function loginAction()
    {
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        return new JsonResponse($users);

    }

    public function registerAction(Request $request,UserPasswordEncoderInterface $passwordEncoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        $user->setName('Amar');
        $user->setCnp('Amar');
        $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
        $user->setPassword($password);

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($user);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();
        return new JsonResponse($user);
    }

}
