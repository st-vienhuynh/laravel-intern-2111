<?php

namespace App\Repositories;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface
{
    public function getAllTasks()
    {
        return Task::all();
    }

    public function getTaskById($taskId)
    {
        return Task::findOrFail($taskId);
    }

    public function deleteTask($taskId)
    {
        return Task::destroy($taskId);
    }

    public function createTask(array $taskCreate)
    {
        return Task::create($taskCreate);
    }

    public function updateTask($taskId, array $taskUpdate)
    {
        $task = Task::find($taskId);
        return $task->update($taskUpdate);
    }
}
