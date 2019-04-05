<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Service;

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
        return $this->render('service/list.html.twig',['services'=>$services]);
    }
}
