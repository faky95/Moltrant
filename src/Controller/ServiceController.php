<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Service;
use App\Entity\Utilisateur;

 /**
* @Route("/service")
*/
class ServiceController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function list()
    {
        $em=$this->getDoctrine()->getManager();
        $services=$em->getRepository(Service::class)->findAll();
        $user = $em->getRepository(Utilisateur::class)->findAll();
        foreach($user as $key=>$img){
            $img->setPhoto(base64_encode(stream_get_contents($img->getPhoto())));
        }
        return $this->render('service/list.html.twig',['services'=>$services]);
    }
}
