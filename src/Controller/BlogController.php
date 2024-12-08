<?php

declare(strict_types= 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
  #[Route('/main-page', name:"main-page")]
  public function mainPage(): Response
  {
    return new Response("To jest strona główna");
  }
}