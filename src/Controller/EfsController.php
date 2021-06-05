<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EfsController extends AbstractController
{
    #[Route('/with-efs', name: 'with_efs')]
    #[Route('/no-efs', name: 'no_efs')]
    public function efs()
    {
        return new Response('Hello !');
    }
}