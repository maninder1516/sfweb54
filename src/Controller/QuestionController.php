<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;

class QuestionController extends AbstractController {

    /**
     * 
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnv) {
        // Using the Twig services directly 
        /*
        $html = $twigEnv->render('question/homepage.html.twig');
        
        return new Response($html);
         * 
         */
        
        return $this->render('question/homepage.html.twig');
        //return new Response('Hello Symfony 5');
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug) {

        $answers = [
            'Make sure your cat is sitting purrrfectly still 🤣',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];

        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);

//        return new Response(sprintf(
//            'Future page to show my questions "%s"!',
//            ucwords(str_replace('-', ' ', $slug))
//        ));
    }

}
