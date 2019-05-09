<?php

namespace Portal\Controllers;

use Portal\Models\ListModel;

class CompleteTaskController {

    public $listModel;

    public function __construct(ListModel $listModel) {
        $this->listModel = $listModel;
    }

    public function __invoke($request, $response, $args) {
        $userData = $request->getParsedBody();
        $taskId = $userData['id'];
        $this->listModel->addCompletedFlag($taskId);
        return $response->withRedirect('/');
    }

}