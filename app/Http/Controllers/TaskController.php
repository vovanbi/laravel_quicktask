<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\RequestTask;
use Throwable;
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }

    public function create()
    {
        return view('task.addtask');
    }
    

    public function store(RequestTask $request)
    {
        $this->insertOrUpdate($request);
        return redirect()->route('home')->with('success', 'Add task success !');
    }

    public function edit($id)
    {
        try
        {
            $task = Task::findOrFail($id);
        }catch (Throwable $e) {
            return redirect()->back()->with('danger', 'Not find id !');
        }

        return view('task.addtask', compact('task'));
    }

    public function update(RequestTask $request, $id)
    {
       $this->insertOrUpdate($request,$id);
       return redirect()->route('home')->with('success', 'Update task success !');
    }

    public function insertOrUpdate($request, $id=null)
    {
        $task = new Task();
        if(is_null( $id ))
        {
            $task->name = $request->name;
            $task->save();
        }else
        {
            try
            {
                $task = Task::findOrFail($id);
                $task->name = $request->name;
                $task->save();
            }catch (Throwable $e) {
                return redirect()->back()->with('danger', 'Not find id , update not success!');
            }
        }
    }
    
    public function destroy($id)
    {
        $task = Task::destroy($id);
        return response()->json([
            'error' => false,
            'task'  => $task,
        ], 200);
    }
}
