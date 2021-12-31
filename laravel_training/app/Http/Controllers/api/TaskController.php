<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\TaskResource;
use App\Interfaces\TaskRepositoryInterface;

class TaskController extends Controller
{
    private $taskRepository;


    public function __construct(taskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getListTasks()
    {
        $tasks = TaskResource::collection($this->taskRepository->getAllTasks());
        return $tasks;
    }
}
