<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('list', compact('tasks'));
    }

    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $task = new Task();
        $requestAll = $request->all();
        $task->title = $requestAll['title'];
        $task->content = $requestAll['content'];
        $task->due_date = $requestAll['due_date'];
        if(isset($requestAll['image'])){
            $image = $requestAll['image'];
            $path = $image->store('images','public');
            $task->image = $path;
        }
        $task->save();
        $message = "Tạo Task $request->title thành công!";
        \Illuminate\Support\Facades\Session::flash('create-success', $message);
        return redirect()->route('tasks.index', compact('message'));
    }

    public function getById($id)
    {
        return Task::findOrFail($id);
    }

    public function delete($id)
    {
        $task = $this->getById($id);
        return view('delete',compact('task'));
    }

    public function destroy($id)
    {
        $task = $this->getById($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
