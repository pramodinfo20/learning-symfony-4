<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */


    public function homepage(Environment $twigEnvironment)
    {
        /*
        // fun example to use the service directly
        $html= $twigEnvironment->render('question/homepage.html.twig');

        return new Response($html); */
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */


    public function show($slug)
    {

        $answers = [
            'First think of the layout',
            'Then download the template using bootstrap',
            'Then think of th contents needs to be added'    
        ];

        dump($slug, $this);

        return $this->render('question/show.html.twig', [
            'question'=> ucwords(str_replace('-',' ',$slug)),
            'answers'=> $answers, 
            ]); 

    }
}