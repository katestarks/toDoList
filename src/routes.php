<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'ViewListController');
    $app->post('/addTask', 'AddTaskController');
    $app->post('/completedFlag', 'CompleteTaskController');
};
