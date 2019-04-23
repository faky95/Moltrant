<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InscriptionEnablerFormType;
use App\Entity\Service;
use App\Entity\Utilisateur;
use App\Entity\InscriptionEnabler;
use App\Form\ServiceFormType;
use Symfony\Component\HttpFoundation\JsonResponse;


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
    public function listCoach(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $data=$request->request->all();
        $user = $em->getRepository(Utilisateur::class)->findAll();
        foreach($user as $key=>$img){
            $img->setPhoto(base64_encode(stream_get_contents($img->getPhoto())));
        }
        $listCoach = $em->getRepository(Utilisateur::class)->allCoach();
        if(isset($data['rechercher']) && !empty($data['search']))
        {
            $listCoach = $em->getRepository(Utilisateur::class)->findCoach($data['search']);
        }
        if(isset($data['rechercher']) && empty($data['search']))
        {
            $listCoach = $em->getRepository(Utilisateur::class)->allCoach();
        }
        // else
        // {
        //     echo 'aucun données';
        // }
        return $this->render('service/listCoach.html.twig',[
            'list'=>$listCoach
        ]);
    }

    /**
     * @Route("/enabler",name="enabler")
     */
    public function listEnabler(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $data=$request->request->all();
        $user = $em->getRepository(Utilisateur::class)->findAll();
        foreach($user as $key=>$img){
            $img->setPhoto(base64_encode(stream_get_contents($img->getPhoto())));
        }
        $listEnabler = $em->getRepository(Utilisateur::class)->allEnabler();
        if(isset($data['rechercher']) && !empty($data['search']))
        {
            $listEnabler = $em->getRepository(Utilisateur::class)->findEnabler($data['search']);
        }
        if(isset($data['rechercher']) && empty($data['search']))
        {
            $listEnabler = $em->getRepository(Utilisateur::class)->allEnabler();
        }
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

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscriptionEnabler(Request $request)
    {
        
        $em=$this->getDoctrine()->getManager();
        $inscription = new InscriptionEnabler();
        $enabler = $this->getUser()->getId();
        //$specialite= new Specialite()
        $user = $em->getRepository(Utilisateur::class)->findAll();
        foreach($user as $key=>$img){
            $img->setPhoto(base64_encode(stream_get_contents($img->getPhoto())));
        }
        $form = $this->createForm(InscriptionEnablerFormType::class,$inscription);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {  
            //exit('ok');
            $inscription->setUtilisateur($enabler);
            $inscription->setDateInscription(new \DateTime('now'));
            $em->persist($inscription);
            $em->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('service/inscription.html.twig',['form'=>$form->createView()]);
    }


    /**
     * @Route("/supprimer",name="remove")
     */
    public function deleteService(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $id =$request->get('id');
        $service=$em->getRepository(Service::class)->find($id);
        $em->remove($service);
        $em->flush();
        return new JsonResponse([
            'message'=>null,
            'error'=>false,
            'response'=>200
        ]);

    }

       /**
     * @Route("/editer",name="edite")
     */
    public function editService(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $id= $request->get('id');
        $nomService=$request->get('nomService');
        $description=$request->get('description');
        $entity = $em->getRepository(Service::class)->find($id);
        if (!$entity && empty($id)) {
    		$entity = new Service();
        } else {
            return new JsonResponse([
                'message'=> 'id introuvable',
                'error'=>false,
                'response'=> 300
            ]);
        }
        $entity->setNomService($nomService);
        $entity->setDescription($description);
        $em->persist($entity);
        $em->flush();
        //$editForm = $this->createForm(ServiceFormType::class,$entity);
       
        return new JsonResponse([
            'message'=>null,
            'error'=>false,
            'response'=>200
        ]);
       

    }




}
