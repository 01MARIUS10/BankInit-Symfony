<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController{
    #[Route('/','list.index',methods:['GET'])]
    public function index() : Response{
        return $this->render('list.html.twig');
    }
}   