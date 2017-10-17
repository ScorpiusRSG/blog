<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\post;

class postListByAutorController extends Controller
{
    public function listAction($id)
    {   
        $posts=$this->getDoctrine()
        ->getRepository(post::class)
        ->findAllOrderedByID($id , 10);
        if (!$posts)
            echo "This person havent posts";
        return $this->render('AppBundle:postListByAutor:list.html.twig', array(
            "posts"=>$posts
        ));
    }

}
