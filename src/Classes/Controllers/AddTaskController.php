<?php

namespace Portal\Controllers;

use Portal\Models\ListModel;
use Slim\Views\PhpRenderer;

class AddTaskController {

    public $listModel;
    public $renderer;

    public function __construct(PhpRenderer $renderer, ListModel $listModel) {
        $this->listModel = $listModel;
        $this->renderer = $renderer;
    }

    public function ___invoke($request, $response, $args) {

    }

}