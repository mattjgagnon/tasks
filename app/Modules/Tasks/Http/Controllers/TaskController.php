<?php

namespace App\Modules\Tasks\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Tasks\Http\Requests\TaskRequest;
use App\Modules\Tasks\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;

final class TaskController extends Controller
{
    public function index(): Collection
    {
        return Task::all();
    }

    public function show($id)
    {
        return Task::findOrFail($id);
    }

    public function store(TaskRequest $request)
    {
        return Task::create($request->validated());
    }

    public function update(TaskRequest $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->validated());
        return $task;
    }

    public function destroy($id): JsonResponse
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(['message' => 'Task deleted successfully']);
    }
}
