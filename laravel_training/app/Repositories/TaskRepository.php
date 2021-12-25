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
        Task::destroy($taskId);
    }

    public function createTask(array $taskCreate)
    {
        return Task::create($taskCreate);
    }

    public function updateTask($taskId, array $taskUpdate)
    {
        return Task::find($taskId)->update($taskUpdate);
    }

    public function getFulfilledTasks()
    {
        return Task::where('is_fulfilled', true);
    }
}
