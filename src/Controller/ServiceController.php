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

    /**
     * @Route("/coach",name="coach")
     */
    public function listCoach()
    {
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository(Utilisateur::class)->findAll();
        foreach($user as $key=>$img){
            $img->setPhoto(base64_encode(stream_get_contents($img->getPhoto())));
        }
        $listCoach = $em->getRepository(Utilisateur::class)->allCoach();
        return $this->render('service/listCoach.html.twig',[
            'list'=>$listCoach
        ]);
    }

    /**
     * @Route("/enabler",name="enabler")
     */
    public function listEnabler()
    {
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository(Utilisateur::class)->findAll();
        foreach($user as $key=>$img){
            $img->setPhoto(base64_encode(stream_get_contents($img->getPhoto())));
        }
        $listEnabler = $em->getRepository(Utilisateur::class)->allEnabler();
        return $this->render('service/enabler.html.twig',[
            'list'=>$listEnabler
        ]);
    }

    /**
     * @Route("/detail/{id}", name="detail")
     */
    public function detail($id)
    {
        $em = $this->getDoctrine()->getManager();
        $service = $em->getRepository(Service::class)->find($id);
        $user = $em->getRepository(Utilisateur::class)->findAll();
        foreach($user as $key=>$img){
            $img->setPhoto(base64_encode(stream_get_contents($img->getPhoto())));
        }
    	if(!$service) {
    		$this->addFlash('error', "Impossible de voir les détails, cet service n'est pas reconnu");
    		return $this->redirect($this->generateUrl('list'));
    	}
        return $this->render('service/detail.html.twig',[
            'service'=>$service
        ]);
    }




}
