<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function profil()
    {
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository(Utilisateur::class)->findAll();
        foreach($user as $key=>$img){
            $img->setPhoto(base64_encode(stream_get_contents($img->getPhoto())));
        }
        return $this->render('profile/profile.html.twig');
    }
}
