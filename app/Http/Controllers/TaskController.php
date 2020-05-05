<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Task;

class TaskController extends Controller
{
   
    public function list()
    {
        $tasks = Task::where("user_id", Auth::user()->id)->get();
        return view('tasks.index', ["tasks"=>$tasks]);
    }

    public function show($test)
    {
        return view('tasks.task');
    }

    public function create(Request $request)
    {
        return view('tasks.create_task');
    }
    public function save(Request $request)
    { 
        $task = new Task();
        $task->user_id = Auth::user()->id;
        $task->name = $request->name;
        $task->save();
        return redirect('/tasks')->with('status', 'Task saved');
    }
}
