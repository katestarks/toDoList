<?php

namespace Portal\Controllers;

use Portal\Models\ListModel;
use Slim\Views\PhpRenderer;

class RandomTaskController {

    public $renderer;
    public $listModel;

    public function __construct(PhpRenderer $renderer, ListModel $listModel)
    {
        $this->renderer = $renderer;
        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args)
    {
        // TODO: Implement __invoke() method.
    }
}