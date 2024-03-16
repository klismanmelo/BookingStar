<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Database;

class HomeController
{
    public function home(Request $request, Response $response, $args)
    {
        // Exemplo de uso da classe Database
        $hotels = Database::getAll('hotels');
        $reservation = Database::getById('reservations', $reservationId);

        $response->getBody()->write("Hello, Slim!");
        return $response;
    }
}