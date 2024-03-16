<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return response([
            'tasks' => $tasks
        ], 200);
    }

    public function create(Request $request) {
        $task = Task::create([
            'content' => $request->content,
            'category' => $request->category,
            'notes' => $request->notes
        ]);

        return response([
            'task' => $task
        ], 200);
    }

    public function update(Request $request) {
        $id = $request->id;
        $task = Task::find($id);

        $task->update([
            'content' => $request->content,
            'category' => $request->category,
            'notes' => $request->notes
        ]);

        return response([
            'task' => $task
        ], 200);
    }

    public function delete(Request $request) {
        $id = $request->id;
        $task = Task::find($id);
        $task->delete();

        return response([
            'task' => $task
        ], 200);
    }
}
