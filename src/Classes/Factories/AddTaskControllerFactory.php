<?php

namespace Portal\Factories;

use Psr\Container\ContainerInterface;

class AddTaskControllerFactory {

    public function __invoke(ContainerInterface $container)
    {
        $listModel = $container->get('ListModel');
        return new \Portal\Controllers\AddTaskController($listModel);

    }

}