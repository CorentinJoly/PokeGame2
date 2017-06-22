<?php

namespace AppBundle\Controller;

/**
 * Created by PhpStorm.
 * User: Corentin
 * Date: 22/06/2017
 * Time: 16:30
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="connexion ")
     */
    public function loginAction(AuthenticationUtils $authUtils)
    {
        // get the login error if there is one
        $error = $authUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('default/connexion.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }
}