<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class AMGPController
{
#[Route('/api/amgp', name: 'api_amgp')]
public function index(): Response
{
return new Response('Symfony de Armando Marelius García Paulsen Responde a la llamada de
React');
}
}