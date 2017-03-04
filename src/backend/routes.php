<?php

/** @var backend\Core\App $app */
$app->get('/', 'backend\Controllers\DamnController::actionIndex');

$app->get('/api/v0.1/user', 'backend\Controllers\API\UserController::actionGet');
$app->get('/api/v0.1/user/{id}', 'backend\Controllers\API\UserController::actionGet');