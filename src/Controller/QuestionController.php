<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */


    public function homepage()
    {
        return new Response('we have a very good controller');
    }

    /**
     * @Route("/questions/{slug}")
     */


    public function show($slug)
    {

        $answers = [
            'First think of the layout',
            'Then download the template using bootstrap',
            'Then think of th contents needs to be added'    
        ];

        return $this->render('question/show.html.twig', [
            'question'=> ucwords(str_replace('-',' ',$slug)),
            'answers'=> $answers, 
            ]); 

    }
}