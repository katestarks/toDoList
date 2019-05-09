<?php

namespace Portal\Models;

class ListModel {

    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function viewList() {
        $query = $this->db->prepare("SELECT `tasks` FROM `taskList` WHERE `completed` = 0");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addTask($task) {
        $query = $this->db->prepare("INSERT INTO `taskList` (`tasks`) VALUES (:task)");
        $query->bindParam(':task', $task);
        return $query->execute();
    }
}