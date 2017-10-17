<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\autor;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Auxiliary\currentTime;

class registrationController extends Controller
{
    public function registrationAction(Request $request)
    {
        
        $autor=new autor();
        
        $form=$this->createFormBuilder($autor)
        ->add("name")
        ->add("password")
        ->add("email")
        ->add("register",SubmitType::class)
        ->getForm();
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
        {   
            $autor=$form->getData();
            $datatime=new currentTime();
            $currentTime=$datatime->currentTime();
            $autor->setLastLogDate($currentTime);
            $password=$autor->getPassword();
            $setAutor=$this->getDoctrine()->getManager();
            $setAutor->persist($autor);
            $setAutor->flush();
            //$this->redirectToRoute('route_name');
        }
        
        return $this->render('AppBundle:registration:registration.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
