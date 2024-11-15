<?php

declare(strict_types=1);

use Slim\App;
use V5Tools\Controllers\WizardController;
use V5Tools\Controllers\PregenController;

return function (App $app) {
    $app->get('/', [WizardController::class, 'home']);
    $app->get('/wizard', [WizardController::class, 'startWizard']);
    $app->get('/pregen', [PregenController::class, 'generatePregen']);
};
