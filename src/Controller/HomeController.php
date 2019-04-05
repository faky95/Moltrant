<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Form\RegistrationFormType;
use App\Entity\Utilisateur;
use App\Entity\Image;
use App\Entity\Photo;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="login")
     */
    public function login()
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('home');
        }
        return $this->render('login/login.html.twig');
    }

    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        $em=$this->getDoctrine()->getManager();
        $images=$em->getRepository(Image::class)->findAll();
        foreach($images as $key=>$img){
            $img->setImage(base64_encode(stream_get_contents($img->getImage())));
        }
        return $this->render('home/home.html.twig',array(
            'entities'=>$images
        ));
    }

      /**
      * Require ROLE_ADMIN for only this controller method.
      * @IsGranted("ROLE_ADMIN")
     * @Route("/register", name="register")
     */
    public function register(Request $request)
    { 
       
        $em = $this->getDoctrine()->getManager();
        //Build a form
        $user = new Utilisateur();
        $photo = new Photo();
        $user->setPhoto($photo->setAvatar(file_get_contents($photo->getAvatar())));
        $form = $this->createForm(RegistrationFormType::class, $user);            
        //handle the submit with post
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $user->setEnabled(1);
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute("fos_user_security_login");
        }
        $userId=$user->getId();
        $photo->setAvatar(file_get_contents($photo->getAvatar()));
        $photo->setUtilisateur($userId);

        return $this->render('home/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
