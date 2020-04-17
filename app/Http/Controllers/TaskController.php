<?php

namespace App\Http\Controllers;

use App\Task;
use Gate;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;


class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public  function getAllTasks(){
        $tasks = Task::all();
        return view('task.index',compact('tasks'));
    }

 public function AddTask(Request $request){
    $this->validate($request,[
        'newTask'=>'required|min:4|regex:/(\w.+\s).+/'
    ]);
    $task = new Task();
    $task->body = $request->input('newTask');
    $task->user_id = auth()->user()->id;
    $task->save();
    return redirect()->route('get_home')->with('success', 'Suceesfully Created');
 }

 public  function deleteTask($id){
    $task =Task::find($id);

    $task->delete();

    return redirect()->route('get_home')->with('success','Task Deleted');
 }

public function getEditTask($id){
    $task = Task::find($id);
    return view('task.edit',['task'=>$task,'id'=>$id]);
}

 public function postEditTask(Request $request){

$this->validate($request,[
    'editTask'=>'required|min:4|regex:/(\w.+\s).+/'
]);
$task1 = Task::find($request->input('id'));
     if(Gate::denies('auth-only',$task1)){
         return redirect()->back()->with([
             'error' => 'Unauthorized action'
         ]);
     }
    $task1->body =$request->input('editTask');
    $task1->save();

    return redirect()->route('get_home')->with('success', 'Task updated');

    }
}


