<?php

declare(strict_types=1);

namespace V5Tools\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PregenController
{
    public function __construct()
    {
        // Dependencies can be injected as needed.
    }

    public function generatePregen(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $response->getBody()->write("<h2>Generating Random Pregen Character...</h2>");
        return $response;
    }
}
