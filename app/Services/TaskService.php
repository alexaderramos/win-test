<?php

namespace App\Services;

use App\Models\Task;

class TaskService
{



    public function getAll()
    {
        return Task::all();
    }


    public function create(array $data)
    {
        return Task::create($data);
    }

    public function findOne(int $id)
    {
        return Task::firstOrFail($id);
    }


    public function delete($id): void
    {
        $task = $this->findOne($id);
        $task->delete();
    }


    public function update($id, $data): Task
    {
        $task = $this->findOne($id);
        $task->update($data);
        return $task;
    }
}
