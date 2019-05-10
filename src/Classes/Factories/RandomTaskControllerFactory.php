<?php

namespace Portal\Factories;

use Psr\Container\ContainerInterface;

class RandomTaskControllerFactory {

    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $listModel = $container->get('ListModel');
        return new \Portal\Controllers\RandomTaskController($renderer, $listModel);
    }
}