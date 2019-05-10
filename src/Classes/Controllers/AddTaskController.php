<?php

namespace Portal\Controllers;

use Portal\Models\ListModel;

class AddTaskController {

    public $listModel;

    public function __construct(ListModel $listModel) {
        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args) {
        $userData = $request->getParsedBody();
        $addTask = $userData['addTask'];
        $this->listModel->addTask($addTask);
        return $response->withRedirect('/');
    }
}