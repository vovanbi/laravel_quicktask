<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\RequestTask;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }
    public function getTask()
    {
        return view('task.form');
    }
    public function postTask(RequestTask $request)
    {
        $this->insertOrUpdate($request);
        return redirect()->route('home')->with('success', 'Add task success !');
    }
    public function editTask($id)
    {
        $task = Task::find($id);
        return view('task.form', compact('task'));
    }
    public function updateTask(RequestTask $request, $id)
    {
       $this->insertOrUpdate($request, $id);
       return redirect()->route('home')->with('success', 'Update task success !');
    }
    public function insertOrUpdate($request, $id='')
    {
        $task = new Task();
        if($id) $task= Task::find($id);
        $task->name = $request->name;
        $task->save();
    }
    public function action($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('home')->with('danger', 'Delete task success !');
    }

}