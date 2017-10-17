<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\autor;

class blogListController extends Controller
{
    public function blogListAction()
    {
        $autors=$this->getDoctrine()
        ->getRepository(autor::class)
        ->findAllOrderedByName(10);
        return $this->render('AppBundle:blogList:blog_list.html.twig', array(
            "autors"=>$autors
        ));
    }

}
