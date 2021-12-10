<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('is_admin');
    }

    public function index(Request $request)
    {
        if ($request->search) {
            $tasks = Task::where('task', 'like', "%$request->search%")
                ->paginate(3);

            return view('task.index', [
                'data' => $tasks
            ]);
        }

        $tasks = Task::paginate(3);
        return view('task.index', [
            'data' => $tasks
        ]);
    }
    public function create()
    {
        return view('task.create');
    }
    public function store(Request $request)
    {
        $task = Task::create([
            'task' => $request->task,
            'user' => $request->user
        ]);

        return redirect('/task');
    }

    public function show($id)
    {
        // $task = Task::find($id);
        $task = Task::findOrFail($id);
        return $task;
    }

    public function edit($id)
    {
        $data = Task::findOrFail($id);
        return view('task.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'task' => $request->task
        ]);

        return redirect('/task');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/task');
    }
}