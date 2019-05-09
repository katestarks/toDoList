<?php

namespace Portal\Factories;

use Psr\Container\ContainerInterface;
use Portal\Models\ListModel;

class ListModelFactory {

    public function __invoke(ContainerInterface $container)
    {
        $dbConnection = $container->get('dbConnection');
        return new ListModel($dbConnection);
    }
}