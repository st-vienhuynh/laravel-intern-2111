<?php

namespace App\Interfaces;

interface TaskRepositoryInterface
{
    public function getAllTasks();
    public function getTaskById($taskid);
    public function deleteTask($taskId);
    public function createTask(array $taskCreate);
    public function updateTask($taskId, array $taskUpdate);
}
