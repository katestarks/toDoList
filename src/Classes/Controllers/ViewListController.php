<?php

namespace Portal\Controllers;

use Portal\Models\ListModel;
use Slim\Views\PhpRenderer;

class ViewListController {

    public $renderer;
    public $listModel;

    public function __construct(PhpRenderer $renderer, ListModel $listModel)
    {
        $this->renderer = $renderer;
        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args)
    {
        $args['tasks'] = $this->listModel->viewList();
        $this->renderer->($response, $request, $args);
    }
}