<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    } 

/** 
 * @return  Response 
 * @Route("/Affiche", name="Affiche")
 * 
 * 
 * 
 */
    public function Affiche(){

        return new Response( content:"Bonjour à tous");
    }

 /** 
  * @param $name
  *@return Response
  *Route("/AfficheN/{name}, name="AfficheN")
  */



    public function AfficheName($name){
return $this->render (view :'student/affiche.html.twig',['n'=> $name ]);

    }
}
