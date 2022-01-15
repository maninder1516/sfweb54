<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController {

    /**
     * 
     * @Route("/")
     */
    public function homepage() {
        return new Response('Hello Symfony 5');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug) {
        return new Response(sprintf(
            'Future page to show my questions "%s"!',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }

}
