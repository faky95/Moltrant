<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Form\RegistrationFormType;
use App\Entity\Utilisateur;
use App\Entity\Image;


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
        $user = $em->getRepository(Utilisateur::class)->findAll();
        foreach($user as $key=>$img){
            $img->setPhoto(base64_encode(stream_get_contents($img->getPhoto())));
        }
        return $this->render('home/home.html.twig',array(
            'entities'=>$images,
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
        $form = $this->createForm(RegistrationFormType::class, $user);            
        //handle the submit with post
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $user->setPhoto(file_get_contents($user->getPhoto()));
            $user->setMatricule(strtoupper($user->getPrenom()).''.strtoupper($user->getNom()).''.$user->getId());
            $user->setEnabled(1);
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute("fos_user_security_login");
        }
       
        return $this->render('home/register.html.twig',array(
            'form' => $form->createView(),
        ));
    }

    /**
	 * @Route("/mail", name="mail")
	 */
	public function indexAction(\Swift_Mailer $mailer)
	{
		$message = (new \Swift_Message('Hello Email'))
		->setFrom('info.senegal@enablis.org')
        ->setTo('dialloquinz@gmail.com')
        ->setCc('fakyndao95@gmail.com')
        ->setBody('ok faky test');
		 $mailer->send($message);
		return $this->render('home/mail.html.twig');
    }
}
