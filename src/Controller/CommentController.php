<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class CommentController extends AbstractController {

    /**
     * @Route("/comments/{id}/vote/{direction}")
     */
    public function commnetVote($id, $direction) {
        if ($direction === 'up') {
            $currentVoteCount = rand(5, 100);
        } else {
            $currentVoteCount = rand(0, 5);
        }
        
        return $this->json(['votes' => $currentVoteCount ]);
        //return new JsonResponse(['votes' => $currentVoteCount ]);
    }

}
