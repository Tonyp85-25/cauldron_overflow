<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/",name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = ["It's alive!",
            "I don't know",
            "uhhh"
        ];
        return $this->render('question/show.html.twig',[
            "question"=>ucwords(str_replace('-',' ',$slug)).'?',
            "answers"=>$answers
            ]);
        // return new Response('My question: '.$slug);
    }
}