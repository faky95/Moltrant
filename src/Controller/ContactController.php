<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository(Utilisateur::class)->findAll();
        foreach($user as $key=>$img){
            $img->setPhoto(base64_encode(stream_get_contents($img->getPhoto())));
        }
        return $this->render('contact/contact.html.twig');
    }

    /**
     * @Route("/send", name="sendEmail")
     */
    public function send()
    {
        $user=$this->getUser()->getEmail();
        extract($_POST);
		if(isset($send) && !empty($subject) && !empty($message))
		{
			$message =( new \Swift_Message($subject))
			->setFrom($user)
			//->setFrom($user)
			->setTo('fakyndao95@gmail.com')
			//->setCc(array("fatoukine.ndao@orange-sonatel.com","madiagne.sylla@orange-sonatel.com"))
			->setBody($message);
			 $this->get('mailer')->send($message);
			// $this->addFlash('success', "Le mail a été envoyé!!");

		}
		// else{
		// 	$this->addFlash('warning', "Le mail n'a pas été envoyé!!");
		// }
		
		
		return $this->redirect($this->generateUrl('home'));

    }
}
