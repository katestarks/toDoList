<?php

namespace Portal\Models;

class ListModel {

    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function viewList() {
        $query = $this->db->prepare("SELECT `id`,`tasks` FROM `taskList` WHERE `completed` = 0");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addTask($task) {
        $query = $this->db->prepare("INSERT INTO `taskList` (`tasks`) VALUES (:task)");
        $query->bindParam(':task', $task);
        return $query->execute();
    }

    public function addCompletedFlag($id) {
        $query = $this->db->prepare("UPDATE `taskList` SET `completed` = 1 WHERE `id` = :id");
        $query->bindParam(':id', $id);
        return $query->execute();
    }

    public function getRandomTask($tasks) {
        $randKey = array_rand($tasks, 1);
        return $randomTask = $tasks[$randKey];
    }
}