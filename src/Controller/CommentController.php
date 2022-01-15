<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;

class CommentController extends AbstractController {

    /**
     * @Route("/comments/{id<\d+>}/vote/{direction<up|down>}" , methods="POST")
     */
    public function commnetVote($id, $direction, LoggerInterface $logger) {
        if ($direction === 'up') {           
            $currentVoteCount = rand(5, 100);
            $logger->info('Voting up');
        } else {
            $currentVoteCount = rand(0, 5);
            $logger->info('Voting down');
        }
        
        return $this->json(['votes' => $currentVoteCount ]);
        //return new JsonResponse(['votes' => $currentVoteCount ]);
    }

}
