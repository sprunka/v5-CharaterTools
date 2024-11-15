<?php

declare(strict_types=1);

namespace V5Tools\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class WizardController
{
    public function __construct()
    {
        // Any services or dependencies can be injected here in the future.
    }

    public function home(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $response->getBody()->write("<h1>Welcome to Vampire: The Masquerade Character Tools</h1>");
        return $response;
    }

    public function startWizard(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $response->getBody()->write("<h2>Character Creation Wizard Starting...</h2>");
        return $response;
    }
}
